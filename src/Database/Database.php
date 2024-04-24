<?php
namespace App\Database;
use PDO;
use PDOException;
use Exception;

class Database {
    use DatabaseTrait;
    protected string $hostname;
    protected string $dbname;
    protected string $dbpass;
    protected string $username;
    protected ?PDO $connection;

    public function __construct() {
        $this->hostname = '127.0.0.1';
        $this->dbname = 'pdfparser';
        $this->username = 'root';
        $this->dbpass = 'root';
        $this->connection = null;
    }

    public function connect() {
        $databases = 'mysql:host=' . $this->hostname . ';dbname=' . $this->dbname;
        if ( extension_loaded('pdo') ) {
            try {
                $this->connection = new PDO($databases, $this->username, $this->dbpass);
                // Set PDO error mode to exception
                $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                return "Connected to the database successfully!" . PHP_EOL;
            } catch (PDOException $e) {
                return "Connection failed: " . $e->getMessage();
            }
        } else {
            throw new Exception( 'You need PDO and MySql extensions installed.', 401);
        }
        
    }

    public function createDatabaseAndTable() {
        try {
            $this->connection->exec("CREATE DATABASE IF NOT EXISTS pdfparser");
            $this->connection->exec("USE pdfparser");
            $this->connection->exec("CREATE TABLE IF NOT EXISTS pdfs (
                id INT AUTO_INCREMENT PRIMARY KEY,
                title VARCHAR(255) NOT NULL,
                description TEXT
            )");
            return "Database and table created successfully!" . PHP_EOL;
        } catch (PDOException $e) {
            return "Failed to create database and table: " . $e->getMessage();
        }
    }

    public function insertPdf($title, $description) {
        try {
            $statement = $this->connection->prepare("INSERT INTO pdfs (id, title, description) VALUES (NULL, :title, :description)");
            $statement->bindParam(':title', $title);
            $statement->bindParam(':description', $description);
            $statement->execute();
            return "PDF inserted successfully!" . PHP_EOL;
        } catch (PDOException $e) {
            return "Failed to insert PDF: " . $e->getMessage();
        }
    }

    public function generateStoredProcedureGetAllPdfs() {
        try {
            $statement = $this->connection->prepare("CREATE PROCEDURE GetAllPdfs()
            BEGIN
                SELECT * FROM pdfs;
            END");
            $statement->execute();
            return "Stored procedure created successfully!" . PHP_EOL;
        } catch (PDOException $e) {
            return "Failed to create stored procedure: " . $e->getMessage();
        }
    }
    
    public function getAllPdfs() {
        try {
            $statement = $this->connection->prepare("CALL GetAllPdfs()");
            $statement->execute();
            return $statement->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            return "Failed to get all PDFs: " . $e->getMessage();
        }
    }

    public function generateTransaction() {
        try {
            $this->connection->beginTransaction();

            // Insert a PDF
            $title = "Sample PDF generated by transaction";
            $description = "This is a sample PDF generated by transaction";
            $this->insertPdf($title, $description);

            // Delete the PDF
            $pdfId = $this->connection->lastInsertId();
            $statement = $this->connection->prepare("DELETE FROM pdfs WHERE id = :id");
            $statement->bindParam(':id', $pdfId);
            $statement->execute();

            $this->connection->commit();
            return "Transaction completed successfully!" . PHP_EOL;
        } catch (PDOException $e) {
            $this->connection->rollBack();
            return "Transaction failed: " . $e->getMessage();
        }
    }

    public function disconnect() {
        $this->connection = null;
    }

    public function getDbName() {
        return $this->dbname;
    }
}


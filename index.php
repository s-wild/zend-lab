<?php
require_once __DIR__ . '/vendor/autoload.php';
use App\PdfParser\PdfDetails;
use App\Database\Database;
use App\Database\DatabaseMessages;

/*
* Lab: Prepared Statements
*/ 
// Please go into Database class and put in the correct credentials for your database.
$database = new Database();
$db = $database->connect();
$table = $database->createDatabaseAndTable();
$example = $database->insertPdf('Example PDF', 'Here are the contents of the PDF');
$storedprocedure = $database->generateStoredProcedureGetAllPdfs();
var_dump($storedprocedure);
$allpdfs = $database->getAllPdfs();
var_dump($allpdfs);
$transactionpdfs = $database->generateTransaction();
var_dump($transactionpdfs);
/*
* Lab: Stored Procedure
*/ 

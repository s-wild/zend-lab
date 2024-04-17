<?php
namespace App\Database;
class Database {
    protected string $hostname;
    protected string $dbname;
    protected string $dbpass;
    public function __construct() {
        $this->hostname = 'hostname example';
        $this->dbname = 'some db' ;
        $this->dbpass = 'some db pass';
    }
    public function getDbName() {
        return $this->hostname;
    }
}
<?php

namespace App\PdfParser;

use App\Database\Database;

class PdfParser {
    private $database;
    protected $pdf;
    public function __construct() {
        $this->database = new Database();
    }

    public function createParser(): array
    {
        $this->pdf['name'] = 'Here is the name';
        $this->pdf['contents'] = 'Here is the contents';
        return $this->pdf;
    }
}

$pdfParse = new PdfParser();
var_dump($pdfParse->createParser());

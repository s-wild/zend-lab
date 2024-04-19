<?php

namespace App\PdfParser;

use App\Database\Database;

class PdfParser {
    protected string $pdfTitle = "";
    protected string $pdfContents = "";
    public function __construct() {
        $this->database = new Database();
    }
    protected function getPdfContents() {}


    
    // @TODO Build more PDF functions
    // protected function setPdfContents() {}
    // protected function setPdfTitle() {}
    // protected function getPdfTitle() {}
}

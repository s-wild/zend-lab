<?php

namespace App\PdfParser;
use App\PdfParser\PdfParser;

class SetPdfContents extends PdfParser {
    protected array $details;
    public function SetPdfContents() {
        $this->contents = 'Some PDF contents';
        return $this->contents;
    }
}

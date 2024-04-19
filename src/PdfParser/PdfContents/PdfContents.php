<?php

namespace App\PdfParser;

abstract class PdfContents {
    public $name;
    public $filesize;
    abstract public function setName($name);
    abstract public function setContents($contents);
}   

/*


public function getPdfContents() {
        $this->pdfContents = 'here are some contents';
        return $this->pdfContents;
    }

    */
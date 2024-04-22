<?php

namespace App\PdfParser;

abstract class PdfContents {
    public $name;
    public $filesize;
    abstract public function setName($name);
    abstract public function setContents($contents);
    public function init(array $args) {
		// do something
	}
    public function __construct(array $args = [])
    {
		$this->init($args);
	}
}   

/*


public function getPdfContents() {
        $this->pdfContents = 'here are some contents';
        return $this->pdfContents;
    }

    */

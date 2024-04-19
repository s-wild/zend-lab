<?php 
namespace App\PdfParser;

use App\PdfParser\PdfContents;

class SetContents extends PdfContents {
    public $name;
    public $contents;
    public function init($name, $contents) {
        $this->name = $name;
        $this->contents = $contents;
    }
    public function setName($name) {
        return "test.pdf";
    }
    public function setContents($contents) {
        return "Here is some contents";
    }
}
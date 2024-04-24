<?php 
namespace App\PdfParser;

interface PdfDetailsInterface
{
    public function setPdfAuthor(string $author);
    public function setFileName(string $filename);
    public function setPageCount(int $pagecount);
    public function setPageText(string $pagetext);
    public function getPdfAuthor() : string;
}
class PdfDetails implements PdfDetailsInterface {
    public $author = '';
    public $filename = '';
    public $pagecount = 0;
    public $pagetext = '';

    public function setPdfAuthor(string $author) {
        $this->author = $author;
    }
    public function setFileName(string $filename) {
        $this->filename = $filename;
    }
    public function setPageCount(int $pagecount) {
        $this->pagecount = $pagecount;
    }
    public function setPageText(string $pagetext) {
        $this->pagetext = $pagetext;
    }
    public function getPdfAuthor() : string {
        return $this->author;
    }
}

<?php 
namespace App\PdfParser;
use App\PdfParser\PdfDetails;

class GetPdfDetails extends PdfDetails
{
    public static function getAuthor(){
        echo $this->author;
    }
}
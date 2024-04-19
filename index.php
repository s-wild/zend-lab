<?php
require_once __DIR__ . '/vendor/autoload.php';

use App\PdfParser\SetPdfDetails;
use App\PdfParser\SetContents;
use App\PdfParser\SerializeExample;



// $setPdfContents = new setPdfContents();

/*
* Lab: Create an Extensible Super Class with abstract methods
*/
$setPdfContents = new SetContents();
var_dump($setPdfContents->setName('test'));
echo "<br><br>";
var_dump($setPdfContents->setContents('1MB'));
echo "<br><br>";

/*
* Lab: Magic tags
*/
// toString Example
$setPdfDetails = new SetPdfDetails('1MB', 'UTF-8');
echo $setPdfDetails . '<br><br>'; // outputs: "1MB UTF-8"

// Serialize example
$instance = new SerializeExample('test');
echo serialize($instance); 




// if(class_exists('GetPdfContents')){
    
// } else {
//     echo 'Class not found';
// }


// Create a new PdfParser object and use it
// $database = new Database();
// $user->createParser();

// $pdfParse = new PdfParser();
// var_dump($pdfParse->createParser());


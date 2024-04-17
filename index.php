<?php
require_once __DIR__ . '/vendor/autoload.php';
use App\PdfParser\PdfParser;

// Create a new PdfParser object and use it
$user = new PdfParser();
$user->createParser();
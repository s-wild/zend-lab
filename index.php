<?php
require_once __DIR__ . '/vendor/autoload.php';
use App\PdfParser\checkIfValidEmail;
/*
* Lab: Email regular expression
*/ 

$regularExpression = new checkIfValidEmail();
// Regular expression to validate email addresses.
$validEmail = $regularExpression->checkEmailRegularExpression('Test.test@t-est.com');
var_dump($validEmail);

$invalidEmail = $regularExpression->checkEmailRegularExpression('blahblah');
var_dump($invalidEmail);

// Found a filter function in PHP that can be used to sanitize email addresses and check.
$checkIfValidEmailFilter = $regularExpression->checkIfValidEmailFilter('test@test.com');
var_dump($checkIfValidEmailFilter);


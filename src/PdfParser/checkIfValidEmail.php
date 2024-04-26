<?php 

namespace App\PdfParser;
use Exception;

Class CheckIfValidEmail {
    protected string $email = '';
    public function checkEmailRegularExpression(string $email){
        $pattern = '/^[\w+\.]+@[\w-]+\.[\w-]{2,}$/';
        return preg_match($pattern, $email) ? 'This is a valid email address' : 'This is not a valid email address.';
    }
    public function checkIfValidEmailFilter(string $email) {
        if(!empty($email)) {
            $email = filter_var($email, FILTER_SANITIZE_EMAIL);
            return filter_var($email, FILTER_VALIDATE_EMAIL) ? 'This is a valid email address' : 'This is not a valid email address.';
        } else {
            throw new Exception('Email address is empty.');
        }
        $pattern = '/^[\w-]+$/';
    }
}
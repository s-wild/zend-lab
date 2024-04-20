<?php 

namespace App\PdfParser;

class SerializeExample {
    public function __construct(private $somevalue){}
    public function __serialize(): array {
    // Return array of serialized values
        return ["numbers" => ['1', '2', '3']];
    }
}

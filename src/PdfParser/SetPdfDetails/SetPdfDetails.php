<?php

namespace App\PdfParser;

class SetPdfDetails {
    public function __construct(
        protected string $fileSize,
        protected string $encodedType
    ) {}
    public function __toString(): string {
        return $this->fileSize . ' ' . $this->encodedType;
    }
}

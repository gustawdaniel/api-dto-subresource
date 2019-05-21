<?php
// src/Dto/BookInput.php

namespace App\Dto;

final class BookInput {
    public $isbn;

    /*
     * Setter is required to generate documentation of example model
     */
    public function setIsbn(string $isbn) { $this->isbn = $isbn; }
}
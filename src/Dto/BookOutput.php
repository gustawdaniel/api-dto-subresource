<?php
// src/Dto/BookOutput.php

namespace App\Dto;

final class BookOutput {
    public $name;

    /*
     * Getter is required to generate documentation of example model
     */
    public function getName() : string { return $this->name; }
}
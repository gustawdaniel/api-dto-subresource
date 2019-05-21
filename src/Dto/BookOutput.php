<?php
// src/Dto/BookOutput.php

namespace App\Dto;

use App\Model\Attribute;

final class BookOutput {
    public $name;
    public $object;
    public $bool;

    /*
     * Getter is required to generate documentation of example model
     */
    public function getName() : string { return $this->name; }

    public function getObject(): Attribute { return $this->object; }

    public function getBool(): bool { return (bool) rand(0,1);}
}
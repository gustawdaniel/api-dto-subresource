<?php
// api/src/Entity/Book.php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiProperty;
use ApiPlatform\Core\Annotation\ApiResource;
use App\Dto\BookInput;
use App\Dto\BookOutput;

/**
 * @ApiResource(
 *   input=BookInput::class,
 *   output=BookOutput::class
 * )
 */
final class Book
{
    /**
     * At least one property should be identifier
     * @ApiProperty(identifier=true)
     */
    public $name;
    public $isbn;
}

// command to test
//
// echo '{"isbn": "ABC"}' | http POST localhost:8000/api/books.json
//
// result
//
// {
//    "name": "CBA"
// }
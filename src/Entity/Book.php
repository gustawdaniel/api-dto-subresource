<?php
// api/src/Entity/Book.php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiProperty;
use ApiPlatform\Core\Annotation\ApiResource;
use App\Dto\BookInput;
use App\Dto\BookOutput;
use App\Model\Attribute;

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

    /**
     * @var Attribute
     */
    public $object;

    public function __construct()
    {
        $this->object = new Attribute();
    }
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
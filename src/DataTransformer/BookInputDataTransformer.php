<?php
// src/DataTransformer/BookInputDataTransformer.php

namespace App\DataTransformer;

use ApiPlatform\Core\DataTransformer\DataTransformerInterface;
use App\Dto\BookInput;
use App\Entity\Book;

final class BookInputDataTransformer implements DataTransformerInterface
{
    /**
     * Convert BookInput into Book
     *
     * @param BookInput $data
     * @param string $to
     * @param array $context
     * @return Book
     */
    public function transform($data, string $to, array $context = []): Book
    {
        if($data instanceof BookInput) {
            $book = new Book();
            $book->isbn = $data->isbn;
            $book->name = strrev($data->isbn); // there can be called service that calculate lacking fields, `strrev` is used for example
            return $book;
        }
    }

    /**
     * BookInput -> Book
     *
     * @param array $data
     * @param string $to
     * @param array $context
     * @return bool
     */
    public function supportsTransformation($data, string $to, array $context = []): bool
    {
        return !($data instanceof Book) // prevent executing many times
            && $context["input"]["class"] === BookInput::class
            && $to === Book::class;
    }
}
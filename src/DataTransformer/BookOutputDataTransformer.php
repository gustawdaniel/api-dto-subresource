<?php
// src/DataTransformer/BookOutputDataTransformer.php

namespace App\DataTransformer;

use ApiPlatform\Core\DataTransformer\DataTransformerInterface;
use App\Dto\BookOutput;
use App\Entity\Book;

final class BookOutputDataTransformer implements DataTransformerInterface
{
    /**
     * Convert Book into BookOutput
     *
     * @param Book $data
     * @param string $to
     * @param array $context
     * @return BookOutput
     */
    public function transform($data, string $to, array $context = []): BookOutput
    {
        if($data instanceof Book) {
            $output = new BookOutput();
            $output->name = $data->name;
            return $output;
        }
    }

    /**
     * Book -> BookOutput
     *
     * @param $data
     * @param string $to
     * @param array $context
     * @return bool
     */
    public function supportsTransformation($data, string $to, array $context = []): bool
    {
        return $data instanceof Book
            && $to === BookOutput::class;
    }
}

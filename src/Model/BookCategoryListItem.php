<?php

namespace App\Model;

class BookCategoryListItem
{
    /**
     * @param int $id
     * @param string $title
     * @param string $slug
     */
    public function __construct(
        private readonly int $id,
        private readonly string $title,
        private readonly string $slug
    )
    {
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * @return string
     */
    public function getSlug(): string
    {
        return $this->slug;
    }

}
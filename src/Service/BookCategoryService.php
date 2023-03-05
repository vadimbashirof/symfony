<?php

namespace App\Service;

use App\Entity\BookCategory;
use App\Model\BookCategoryListItem;
use App\Model\BookCategoryListResponse;
use App\Repository\BookCategoryRepository;
use Doctrine\Common\Collections\Criteria;

class BookCategoryService
{
    public function __construct(
        private readonly BookCategoryRepository $bookCategoryRepository
    ) {
    }

    public function getCategories(): BookCategoryListResponse
    {
        $categories = $this->bookCategoryRepository
            ->findBy([], ['title' => Criteria::ASC]);

        $items = array_map(
            fn (BookCategory $bookCategory) => new BookCategoryListItem(
                id: $bookCategory->getId(),
                title: $bookCategory->getTitle(),
                slug: $bookCategory->getSlug()
            ),
            $categories
        );

        return new BookCategoryListResponse($items);
    }
}

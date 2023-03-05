<?php

namespace App\Controller;

use App\Service\BookCategoryService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class BookCategoryController extends AbstractController
{
    public function __construct(
        private readonly BookCategoryService $bookCategoryService
    )
    {
    }

    #[Route('/api/v1/book-categories')]
    public function categories(): Response
    {
        return $this->json($this->bookCategoryService->getCategories());
    }
}
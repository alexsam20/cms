<?php

namespace App\Frontend\Controller;

use App\Repository\PagesRepository;

class PagesController extends AbstractController
{

    public function __construct(PagesRepository $pagesRepository) {
        parent::__construct($pagesRepository);
    }

    public function showPage($pageKey): void
    {
        $page = $this->pagesRepository->fetchBySlug($pageKey);

        if ($page === null) {
            $this->error404();
            return;
        }

        $this->render('pages/showPage', [
            'page' => $page
        ]);
    }
}
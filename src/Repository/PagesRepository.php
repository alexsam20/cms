<?php

namespace App\Repository;

use App\Model\PageModel;
use PDO;

class PagesRepository
{
    public function __construct(private PDO $pdo) {}

    public function fetchBySlug(string $slug): ?PageModel {
        $stmt = $this->pdo->prepare('SELECT * FROM `pages` WHERE `slug` = :slug');
        $stmt->bindValue(':slug', $slug);
        $stmt->execute();
        $stmt->setFetchMode(PDO::FETCH_CLASS, PageModel::class);
        $entry = $stmt->fetch();

        if (!empty($entry)) {
            return $entry;
        }

        return null;

        /*var_dump($stmt->fetchAll(PDO::FETCH_CLASS, PageModel::class));*/
    }
}
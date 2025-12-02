<?php

namespace App\Admin\Controller;

class PagesAdminController extends AbstractAdminController
{
    public function index() {
//        var_dump("PagesAdminController::index()");
//         $this->error404();
        $this->render('pages/index', []);
    }
}
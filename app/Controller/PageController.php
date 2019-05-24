<?php

namespace App\Controller;

use App\Controlleur;

class PageController extends Controlleur
{
    public function __construct()
    {

    }

    public function home() {
        $this->render("account/login");
    }
}
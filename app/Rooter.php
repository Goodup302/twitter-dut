<?php

namespace App;

use App\Controller\PageController;

class Rooter
{
    const DEFAULT_PAGE = "home";

    private $pageName;

    public function __construct()
    {
        $this->getPageName();
    }

    public function getPageName()
    {
        if (!empty($_GET['p'])) {
            $this->pageName = $_GET['p'];
        } else {
            $this->pageName = self::DEFAULT_PAGE;
        }
        return $this->pageName;
    }

    public function showPage()
    {
        switch ($this->pageName) {
            case 'home':
                (new PageController())->home(); break;
        }
    }
}
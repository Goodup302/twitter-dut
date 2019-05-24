<?php

namespace App;

class Controlleur
{
    const VIEWS_FOLDER = ROOT . "/view/";

    public function render(string $view)
    {
        $file = self::VIEWS_FOLDER . "$view.php";
        ob_start();
            require $file;
            file_get_contents($file);
        $content = ob_get_clean();
        require self::VIEWS_FOLDER."template.php";
    }
}
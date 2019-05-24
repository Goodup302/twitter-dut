<?php
require_once '../app/App.php';
App::init();

$rooter = new \App\Rooter();
$rooter->showPage();
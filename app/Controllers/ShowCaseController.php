<?php
namespace App\Controllers;

class ShowCaseController
{
    public function show()
    {
        include_once __DIR__ . "/../../views/pages/showcase.php";
    }
}
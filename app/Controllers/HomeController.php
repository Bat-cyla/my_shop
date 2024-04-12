<?php
namespace App\Controllers;
use App\Models\UserModel;
class HomeController
{
    public function index()
    {
        include_once __DIR__ . '/../../views/pages/home.php';

    }

}
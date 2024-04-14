<?php

namespace App\Controllers;

use Smarty\Smarty;

class Controller
{
    protected $templateEngine;
    public function __construct()
    {
        $this->templateEngine = new Smarty();
    }
}
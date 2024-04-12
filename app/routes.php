<?php
use App\Controllers\HomeController;
use App\Controllers\ShowCaseController;
use App\Controllers\LoginController;
use App\Controllers\PageTitleController;

return[
    '/'=>[HomeController::class,"index"],
    '/showcase'=>[ShowCaseController::class,"show"],
    '/login'=>[LoginController::class,"login"],
    '/login/input'=>[LoginController::class,"input"],
    '/pageTitle'=>[PageTitleController::class,"index"],
];
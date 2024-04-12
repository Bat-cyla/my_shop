<?php

namespace App\Controllers;
use App\Models\UserModel;
use Smarty\Smarty;

class PageTitleController
{
public function index(){
    $smarty= new Smarty();
    $smarty->setTemplateDir('/../../smarty/templates/');
    $smarty->setCompileDir('/../../smarty/templates_c/');
    $smarty->setCacheDir('/smarty/cache/');
    $smarty->setConfigDir('/smarty/configs/');
    $smarty->assign('pageTitle','Home');
    $smarty->display(template: 'template.tpl',cache_id: '',compile_id: 'compile.log');
}
}
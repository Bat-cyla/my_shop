<?php

namespace App\Models;

class UserModel extends MainModel
{
    public function getUser($login): array
    {
    $model = new mainModel();
    return $model->query("SELECT * FROM users WHERE login = '$login'");
    }
}
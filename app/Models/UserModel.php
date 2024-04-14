<?php

namespace App\Models;

class UserModel extends MainModel
{
    public function getUsers(){
    $model = new mainModel();
    return $model->query('SELECT * FROM users');
    }
}
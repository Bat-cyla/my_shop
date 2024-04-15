<?php

namespace App\Models;

class UserModel extends MainModel
{
    public function getUser($login): array
    {
    return $this->query("SELECT * FROM users WHERE login = '$login' OR email='$login'");
    }
}
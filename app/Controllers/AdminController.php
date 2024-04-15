<?php

namespace App\Controllers;
use App\Models\UserModel;
class AdminController extends Controller
{
    public function login()
    {

        if(isset($_SESSION['flash'])) {
            echo $_SESSION['flash'];
            unset($_SESSION['flash']);
        }
        $this->templateEngine->display('login.tpl');
    }
    public function input()
    {
        $userLog = $_POST['log'];
        $userPass = $_POST['pass'];
        $userModel = new UserModel();
        $userArr = $userModel->getUser($userLog);
        if(empty($userArr)){
            header('location: /admin');
            $_SESSION['auth']=false;
            $_SESSION['flash'] = 'Неверный логин или пароль';
            die();
        }
        $user=$userArr[0];
        if ($userPass == $user['password']) {
            switch ($user['status_id']) {
                case 1:
                    $_SESSION['status'] = 1;
                    $_SESSION['auth'] = true;
                    header('location: /products');
                    die;
                case 2:
                    $_SESSION['status'] = 2;
                    $_SESSION['auth'] = true;
                    header('location: /store');
                    die;
                }
            }
    }
        public function logout()
        {
            session_destroy();
            header('location: /');
            die;
        }

}
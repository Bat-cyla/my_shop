<?php
namespace App\Controllers;
use App\Models\UserModel;
use Smarty\Smarty;
class LoginController
{
    public function login()
    {

        if(isset($_SESSION['flash'])) {
            echo $_SESSION['flash'];
            unset($_SESSION['flash']);
        }
        include_once __DIR__ . '/../../views/pages/login.php';

    }
    public function input(){
        $model=new UserModel();
        $userArr=$model->query('SELECT * FROM users');
        $users=$userArr[0];
        $userLog=$_POST['log'];
        $userPass=$_POST['pass'];
        if($userLog==$users['login'] OR $userLog==$users['email'] AND $userPass==$users['password']){
            header('location: /showcase');
            die();
        }else {
            header('location: /login');
            $_SESSION['flash']='Неверный логин или пароль';
            die();
        }
    }
}
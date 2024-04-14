<?php
namespace App\Controllers;
use App\Models\UserModel;

class LoginController extends Controller
{
    public function login()
    {

        if(isset($_SESSION['flash'])) {
            echo $_SESSION['flash'];
            unset($_SESSION['flash']);
        }
        $this->templateEngine->display('login.tpl');

    }
    public function input(){
        $userModel = new UserModel();
        $userArr=$userModel->getUsers();
        $users=$userArr[0];
        $userLog=$_POST['log'];
        $userPass=$_POST['pass'];
        if($userLog==$users['login'] OR $userLog==$users['email']) {
                if($userPass==$users['password']){
                    $is_auth=true;
                    $this->templateEngine->assign('is_auth',$is_auth);
                    header('location: /products');
                }
        } else {
            header('location: /login');
            $_SESSION['flash']='Неверный логин или пароль';
            die();
        }
    }
}
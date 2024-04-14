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
        $userLog=$_POST['log'];
        $userPass=$_POST['pass'];
        $userModel = new UserModel();
        $userArr=$userModel->getUser($userLog);
        $user=$userArr[0];


        if($userLog==$user['login'] OR $userLog==$user['email']) {
                if($userPass==$user['password']){

                    switch($user['status_id']){
                        case 1:
                            $_SESSION['status']=1;
                            header('location: /products');
                            die;
                        case 2:
                            $_SESSION['status']=2;
                            header('location: /store');
                            die;
                    }

                }
        } else {
            header('location: /login');
            $_SESSION['flash']='Неверный логин или пароль';
            die();
        }
    }
}
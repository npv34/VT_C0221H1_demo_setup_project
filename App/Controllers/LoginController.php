<?php

namespace App\Controller;

session_start();
use App\Model\Auth;


class LoginController
{
    protected $authModel;

    public function __construct()
    {
        $auth = new Auth();
        $this->authModel = $auth;
    }

    function login($request)
    {
        $email = $request['email'];
        $password = $request['password'];

        $result = $this->authModel->checkUser($email, $password);
        if ($result) {
            $_SESSION['userLogin'] = $result;
            var_dump($_SESSION['userLogin']);
            header('Location: dash-board.php');
        }

    }
}
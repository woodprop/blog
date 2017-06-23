<?php

class C_user extends C_base {


    public $userType;

    public function __construct()
    {
        $m_user = M_user::GetInstance();
        if (isset($_POST['login'])) {
//            $this->userName = $_POST['login'];

            if ($m_user->LogIn($_POST['login'], $_POST['password'])){
                $this->userName = $_POST['login'];
                $_SESSION['userName'] = $this->userName;

            }


        }
        else{

            if (!isset($_SESSION['userName'])) {
                $this->userName = null;
            }
            else{
                $this->userName = $_SESSION['userName'];
            }
        }

        if (isset($_POST['logout'])){
            session_destroy();
            $this->userName = null;
            header('Location: index.php');
        }


        $this->userType = null;

    }






    public function Login(){

    if ($this->userName == null){
        ob_start();

        include_once 'views/v_login.php';
        return ob_get_clean();
    }
    else{
        ob_start();
        include_once 'views/v_user.php';
        return ob_get_clean();
    }
}


}
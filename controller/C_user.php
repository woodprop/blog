<?php

class C_user extends C_base {
    public $userName;
    public $userType;

    public function __construct()
    {
        $this->userName = null;
        $this->userType = null;
    }

    public function Login(){
        if ($this->userName == null){
            ob_start();
            include_once 'views/v_login.php';
            return ob_get_clean();
        }
    }


}
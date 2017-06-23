<?php

class M_user
{
    public static $instance;

    public $userName;

    public static function GetInstance()
    {
        if (self::$instance == null) {
            self::$instance = new M_user();
        }
        return self::$instance;
    }


    public function LogIn($login, $password){
        $db = M_mysql::GetInstance();
        $sql = "SELECT * FROM `user` WHERE userName = '" . $login . "'";
        $result = $db->Query($sql);
        $user = $result->fetch_array(MYSQLI_ASSOC);


        if ($user['password'] == $password){
            $this->userName = $login;
            $_SESSION['userType'] = $user['acc_type_id']; //Установка соответствующего уровня прав
            return true;
        }
        else{
            return false;
        }
    }


}
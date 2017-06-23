<?php

class M_user
{
    public static $instance;


    public static function GetInstance()
    {
        if (self::$instance == null) {
            self::$instance = new C_user();
        }
        return self::$instance;
    }


}
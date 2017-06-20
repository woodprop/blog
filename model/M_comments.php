<?php

class M_comments{

    public $content;

    public function Comments_get_all(){
        //TODO
        $this->content = array('userName' => 'Тестовый юзер', 'userComment' => 'Тестовый комментарий');
        return $this->content;
    }

    public function Comments_add(){
        //TODO
    }

}
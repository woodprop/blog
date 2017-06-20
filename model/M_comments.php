<?php

class M_comments{

    public $comments_list;

    public function Comments_get_all(){
        //TODO

        $db = M_mysql::GetInstance();
        $this->comments_list = $db->Article_get_comments($_GET['id']);
        return $this->comments_list;
    }

    public function Comments_add(){
        //TODO
    }

}
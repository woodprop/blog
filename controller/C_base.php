<?php

abstract class C_base extends C_controller{
    protected $title;
    protected $content;
    protected $comments;
    protected $userName;

    function __construct()
    {
        $this->title = 'Уютненький бложеГ ';
        $uuu = new C_user();
        $this->user = $uuu->Login();
    }

    public function render(){
        $vars = array('title' => $this->title, 'user' => $this->user, 'content' => $this->content, 'comments' => $this->comments);
        $page = $this->Template('views/v_main.php', $vars);
        echo $page;
    }

}
<?php

abstract class C_base extends C_controller{
    protected $title;
    protected $content;
    protected $comments;

    function __construct()
    {
        $this->title = 'Уютненький бложеГ ';
    }

    public function render(){
        $vars = array('title' => $this->title, 'content' => $this->content, 'comments' => $this->comments);
        $page = $this->Template('views/v_main.php', $vars);
        echo $page;
    }

}
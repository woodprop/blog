<?php

abstract class C_base extends C_controller{
    protected $title;
    protected $content;

    function __construct()
    {
        $this->title = 'Уютненький бложеГ ';
    }

    public function render(){
        $vars = array('title' => $this->title, 'content' => $this->content);
        $page = $this->Template('views/v_main.php', $vars);
        echo $page;
    }

}
<?php
class C_comments extends C_base {


    public function Action_show(){
        //TODO
        $ccc = new M_comments();
        $vars = $ccc->Comments_get_all();

        $this->content = $this->Template('views/v_comments.php', $vars);
        return $this->content;

    }

    public function Action_add(){
        //TODO
    }

}
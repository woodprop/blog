<?php

abstract class C_controller{

    protected abstract function render();

    public function Request($action){
        $this->$action();
        $this->render();
    }

    protected function IsGet(){
        return $_SERVER['REQUEST_METHOD'] == 'GET';
        }

    protected function IsPost(){
        return $_SERVER['REQUEST_METHOD'] == 'POST';
    }


    //---------------- Шаблонизатор ------------------------------------------------------------------------------------

    protected function Template($fileName, $vars = array()){
        foreach ($vars as $key => $value){
            $$key = $value;
        }
        ob_start();
        include $fileName;
        return ob_get_clean();
    }

    //------------------------------------------------------------------------------------------------------------------





}
<?php

class M_mysql{

    public static $instance;
    private function __construct()
    {
    }


    public static function GetInstance(){
        if (self::$instance == null){
            self::$instance = new M_mysql();
        }
        return self::$instance;
    }


//------- МЕТОД ПОДКЛЮЧЕНИЯ К БД -----------------------------------------------------------------------------------
    public function db_connect(){
        $database = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
        if (mysqli_connect_errno()) {
            echo "Ошибка подключения к БД";
        }
        else {
            $database->set_charset('utf8');
//        echo "OK";
            return $database;
        }
    }
//--------------------------------------------------------------------------------------------------------------------

//------- МЕТОД ДОБАВЛЕНИЯ СТАТЬИ    ----------------------------------------------------------------------------
    public function Article_add($author, $caption, $text){
    $db = $this->db_connect();
    $query = "INSERT INTO " . TABLE_NAME . " (author, caption, text) VALUES ('" . $author . "','" . $caption . "','" . $text . "')";
    $db->query($query);
    $db->close();
    return true;
}

//--------------------------------------------------------------------------------------------------------------------

//------- МЕТОД ПОЛУЧЕНИЯ СПИСКА СТАТЕЙ ----------------------------------------------------------------------------
    public function Article_get_list(){
    $db = $this->db_connect();
    $query = "SELECT * FROM " . TABLE_NAME . " ORDER by id DESC";
    $result = $db->query($query);
    $array = [];

    while($row = $result->fetch_array(MYSQLI_ASSOC)){
        $array[] = $row;
    }
    $db->close();

    return $array;
}

//------- МЕТОД ПОЛУЧЕНИЯ СТАТЬИ ПО ID  ----------------------------------------------------------------------------
    public function Article_get_by_id($id){
        $db = $this->db_connect();
        $query = "SELECT * FROM " . TABLE_NAME . " WHERE id = " . $id;
        $result = $db->query($query);

        $array = $result->fetch_array(MYSQLI_ASSOC);
        $db->close();

//    var_dump($array);

        return $array;
    }

//--------------------------------------------------------------------------------------------------------------------

//------- МЕТОД РЕДАКТИРОВАНИЯ СТАТЬИ    ----------------------------------------------------------------------------
    public function article_edit($id, $author, $caption, $text){
        $db = $this->db_connect();
        $query = "UPDATE " . TABLE_NAME . " SET author = '" . $author . "', caption = '" . $caption . "', text = '" . $text . "'
        WHERE id = " . $id;
        $db->query($query);
        $db->close();

    return true;
}

//--------------------------------------------------------------------------------------------------------------------

//------- МЕТОД УДАЛЕНИЯ СТАТЬИ    ----------------------------------------------------------------------------
function Article_delete($id){
    $db = $this->db_connect();
    $query = "DELETE FROM " . TABLE_NAME . " WHERE id = " . $id;
    $db->query($query);
    $db->close();
}

//--------------------------------------------------------------------------------------------------------------------

}


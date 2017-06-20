<?php

class C_page extends C_base
{


    public function Action_index()
    {
        $this->title .= ' | Список статей';

        $base = M_mysql::GetInstance();
        $article_list = $base->Article_get_list();

        $this->content = $this->Template('views/v_index.php', $article_list);
        return $this->content;

    }

    public function Action_show(){
        $base = M_mysql::GetInstance();
        $article = $base->Article_get_by_id($_GET['id']);
        $this->title .= ' | ' . $article['caption'];
        $this->content = $this->Template('views/v_article.php', $article);

        if ($this->IsPost()){
            $base->Article_comment_add($_GET['id'], $_POST['comment_author'], $_POST['comment_text']);
        }
        $ccc = new C_comments();
        $this->comments = $ccc->Action_show();

//        return $this->content;
    }

    public function Action_edit()
    {
        $id = $_GET['id'];
        if ($this->IsPost()){
            $base = M_mysql::GetInstance();
        if ($base->article_edit($id, $_POST['author'], $_POST['caption'], $_POST['text'])){
            header('Location: index.php?a=editor');
            die();
        }
        }

        $base = M_mysql::GetInstance();
        $article = $base->Article_get_by_id($id);
        $this->title .= ' | Редактирование статьи';
        $this->content = $this->Template('views/v_edit.php', $article);
        return $this->content;
    }

    public function Action_new(){
        $this->title .= ' | Новая статья';

        if ($this->IsPost()){
            $db = M_mysql::GetInstance();
            if ($db->Article_add($_POST['author'], $_POST['caption'], $_POST['text'])){
                header('Location: index.php?a=editor');
                die();
            }
        }


        $this->content = $this->Template('views/v_edit.php', array('caption' => '', 'author' => '', 'text' => ''));
        return $this->content;
    }

    public function Action_delete(){
        $base = M_mysql::GetInstance();
        $base->Article_delete($_GET['id']);
        $base->Comment_delete($_GET['id']);
        header('Location: index.php?a=editor');
    }


    public function Action_editor()
    {
        $this->title .= ' | Список статей';

        $base = M_mysql::GetInstance();
        $article_list = $base->Article_get_list();

        $this->content = $this->Template('views/v_editor.php', $article_list);
        return $this->content;
    }
}
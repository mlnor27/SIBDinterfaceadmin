<?php

Class article extends Controller
{

    var $models = array('MArticle');
    var $layout;

    function index()
    {
        $this->loadTable();
        $d['article'] = $this->MArticle->find();
        $this->set($d);
        $this->render('table');
    }

    function delete($id)
    {
        $this->loadTable();
        $this->MArticle->del($id);
        header('Location:' . WEBROOT . 'article');
    }
}

?>
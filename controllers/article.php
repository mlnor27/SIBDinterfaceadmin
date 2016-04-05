<?php

Class article extends Controller
{

    var $models = array('MArticle');
    var $layout;

    function index()
    {
        $this->loadTable();
        $d['article'] = $this->MArticle->find();
        $d['columnsarticle'] = $this->MArticle->selectColumnsName('article');
        $this->set($d);
        $this->render('table');
    }

    function delete($id)
    {
        $this->loadTable();
        $this->MArticle->del($id);
        header('Location:' . WEBROOT . 'article');
    }

    function add(){
        if (count($_POST)>0) {
            $this->loadTable();
            $this->MArticle->save($_POST);
            header('Location:' . WEBROOT . 'horses');
        }else{
            header('Location:' . WEBROOT . 'horses');
        }
    }
}

?>
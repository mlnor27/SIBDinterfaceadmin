<?php

Class articlenews extends Controller
{

    var $models = array('MArticleNews');
    var $layout;

    function index()
    {
        $this->loadTable();
        $d['articlenews'] = $this->MArticleNews->find();
        $d['columnsarticlenews'] = $this->MArticleNews->selectColumnsName('articlenews');

        $this->set($d);
        $this->render('table');
    }

    function delete($id)
    {
        $this->loadTable();
        $this->MArticleNews->del($id);
        header('Location:' . WEBROOT . 'articlenews');
    }

    function add(){
        if (count($_POST)>0) {
            $this->loadTable();
            $this->MArticleNews->save($_POST);
            header('Location:' . WEBROOT . 'horses');
        }else{
            header('Location:' . WEBROOT . 'horses');
        }
    }
}

?>
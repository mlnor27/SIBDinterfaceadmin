<?php

Class articlenews extends Controller
{

    var $models = array('MArticleNews');
    var $layout;

    function index()
    {
        $this->loadTable();
        $d['articlenews'] = $this->MArticleNews->find();
        $this->set($d);
        $this->render('table');
    }

    function delete($id)
    {
        $this->loadTable();
        $this->MArticleNews->del($id);
        header('Location:' . WEBROOT . 'articlenews');
    }
}

?>
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

    function view($id)
    {
        return;
    }
}

?>
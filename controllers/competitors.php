<?php

Class competitors extends Controller
{

    var $models = array('MCompetitors');

    var $layout;

    function index()
    {
        $this->loadTable();
        $d['competitors'] = $this->MCompetitors->find();
        $this->set($d);
        $this->render('table');
    }

    function delete($id)
    {
        $this->loadTable();
        $this->MCompetitors->del($id);
        header('Location:' . WEBROOT . 'competitors');
    }
}

?>
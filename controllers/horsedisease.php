é<?php

Class horsedisease extends Controller
{

    var $models = array('MHorseDisease');
    var $layout;

    function index()
    {
        $this->loadTable();
        $d['horsedisease'] = $this->MHorseAction->find();
        $this->set($d);
        $this->render('table');
    }

    function delete($id)
    {
        $this->loadTable();
        $this->MHorseAction->del($id);
        header('Location:' . WEBROOT . 'horsedisease');
    }
}

?>
<?php

Class horseplayer extends Controller
{

    var $models = array('MHorsePlayer');
    var $layout;

    function index()
    {
        $this->loadTable();
        $d['horseplayer'] = $this->MHorsePlayer->find();
        $this->set($d);
        $this->render('table');
    }

    function delete($id)
    {
        $this->loadTable();
        $this->MHorsePlayer->del($id);
        header('Location:' . WEBROOT . 'horseplayer');
    }
}

?>
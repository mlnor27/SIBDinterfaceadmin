<?php

Class horseparasite extends Controller
{

    var $models = array('MHorseParasite');
    var $layout;

    function index()
    {
        $this->loadTable();
        $d['horseparasite'] = $this->MHorseParasite->find();
        $this->set($d);
        $this->render('table');
    }

    function delete($id)
    {
        $this->loadTable();
        $this->MHorseParasite->del($id);
        header('Location:' . WEBROOT . 'horseparasite');
    }
}

?>
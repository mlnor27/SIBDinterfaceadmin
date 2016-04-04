<?php

Class player extends Controller
{

    var $models = array('MPlayer');
    var $layout;

    function index()
    {
        $this->loadTable();
        $d['player'] = $this->MPlayer->find();
        $this->set($d);
        $this->render('table');
    }

    function delete($id)
    {
        $this->loadTable();
        $this->MPlayer->del($id);
        header('Location:' . WEBROOT . 'player');
    }
}

?>
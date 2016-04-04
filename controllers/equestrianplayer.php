<?php

Class equestrianplayer extends Controller
{

    var $models = array('MEquestrianPlayer');
    var $layout;

    function index()
    {
        $this->loadTable();
        $d['equestrianplayer'] = $this->MEquestrianPlayer->find();
        $this->set($d);
        $this->render('table');
    }

    function delete($id)
    {
        $this->loadTable();
        $this->MEquestrianPlayer->del($id);
        header('Location:' . WEBROOT . 'equestrianplayer');
    }
}

?>
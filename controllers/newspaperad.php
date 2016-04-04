<?php

Class newspaperad extends Controller
{

    var $models = array('MNewspaperAd');
    var $layout;

    function index()
    {
        $this->loadTable();
        $d['newspaperad'] = $this->MNewspaperAd->find();
        $this->set($d);
        $this->render('table');
    }

    function delete($id)
    {
        $this->loadTable();
        $this->MNewspaperAd->del($id);
        header('Location:' . WEBROOT . 'newspaperad');
    }
}

?>
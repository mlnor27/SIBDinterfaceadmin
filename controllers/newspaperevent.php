<?php

Class newspaperevent extends Controller
{

    var $models = array('MNewspaperEvents');
    var $layout;

    function index()
    {
        $this->loadTable();
        $d['newspaperevent'] = $this->MNewspaperEvents->find();
        $this->set($d);
        $this->render('table');
    }

    function delete($id)
    {
        $this->loadTable();
        $this->MNewspaperEvents->del($id);
        header('Location:' . WEBROOT . 'newspaperevent');
    }
}

?>
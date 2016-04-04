<?php

Class competition extends Controller
{
    var $models = array('MCompetition');
    var $layout;

    function index()
    {
        $this->loadTable();
        $d['competition'] = $this->MCompetition->find();
        $this->set($d);
        $this->render('table');
    }

    function delete($id)
    {
        $this->loadTable();
        $this->MCompetition->del($id);
        header('Location:' . WEBROOT . 'competition');
    }
}

?>
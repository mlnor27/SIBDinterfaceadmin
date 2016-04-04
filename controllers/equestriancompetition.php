<?php

Class equestriancompetition extends Controller
{

    var $models = array('MEquestrianCompetition');
    var $layout;

    function index()
    {
        $this->loadTable();
        $d['equestriancompetition'] = $this->MEquestrianCompetition->find();
        $this->set($d);
        $this->render('table');
    }

    function delete($id)
    {
        $this->loadTable();
        $this->MEquestrianCompetition->del($id);
        header('Location:' . WEBROOT . 'equestriancompetition');
    }
}

?>
<?php

Class competition extends Controller
{
    var $models = array('MCompetition');

    function index()
    {
        $this->layout = 'index';
        $d['competition'] = $this->MCompetition->find();
        $this->set($d);
        $this->render('index');

        $this->layout = 'index';
        $d['del'] = $this->MCompetition->del();
        $this->set($d);
        $this->render('index');

        $this->layout = 'index';
        $d['insert'] = $this->MCompetition->save();
        $this->set($d);
        $this->render('index');

    }

    function view($id)
    {
        return;
    }
}

?>
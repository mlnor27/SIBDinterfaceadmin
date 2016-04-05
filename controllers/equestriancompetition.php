<?php

Class equestriancompetition extends Controller
{

    var $models = array('MEquestrianCompetition');
    var $layout;

    function index()
    {
        $this->loadTable();
        $d['equestriancompetition'] = $this->MEquestrianCompetition->find();
        $d['columnsequestriancompetition'] = $this->MEquestrianCompetition->selectColumnsName('equestriancompetition');

        $this->set($d);
        $this->render('table');
    }

    function delete($id)
    {
        $this->loadTable();
        $this->MEquestrianCompetition->del($id);
        header('Location:' . WEBROOT . 'equestriancompetition');
    }

    function add(){
        if (count($_POST)>0) {
            $this->loadTable();
            $this->MEquestrianCompetition->save($_POST);
            header('Location:' . WEBROOT . 'horses');
        }else{
            header('Location:' . WEBROOT . 'horses');
        }
    }
}

?>
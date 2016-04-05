<?php

Class competition extends Controller
{
    var $models = array('MCompetition');
    var $layout;

    function index()
    {
        $this->loadTable();
        $d['competition'] = $this->MCompetition->find();
        $d['columnscompetition'] = $this->MCompetition->selectColumnsName('competition');
        $this->set($d);
        $this->render('table');
    }

    function delete($id)
    {
        $this->loadTable();
        $this->MCompetition->del($id);
        header('Location:' . WEBROOT . 'competition');
    }

    function add(){
        if (count($_POST)>0) {
            $this->loadTable();
            $this->MCompetition->save($_POST);
            header('Location:' . WEBROOT . 'horses');
        }else{
            header('Location:' . WEBROOT . 'horses');
        }
    }
}

?>
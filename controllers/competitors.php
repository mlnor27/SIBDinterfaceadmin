<?php

Class competitors extends Controller
{

    var $models = array('MCompetitors');

    var $layout;

    function index()
    {
        $this->loadTable();
        $d['competitors'] = $this->MCompetitors->find();
        $d['columnscompetitors'] = $this->MCompetitors->selectColumnsName('competitors');

        $this->set($d);
        $this->render('table');
    }

    function delete($id)
    {
        $this->loadTable();
        $this->MCompetitors->del($id);
        header('Location:' . WEBROOT . 'competitors');
    }

    function add(){
        if (count($_POST)>0) {
            $this->loadTable();
            $this->MCompetitors->save($_POST);
            header('Location:' . WEBROOT . 'horses');
        }else{
            header('Location:' . WEBROOT . 'horses');
        }
    }
}

?>
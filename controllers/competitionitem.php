<?php

Class competitionitem extends Controller
{

    var $models = array('MCompetitionItem');

    var $layout;

    function index()
    {
        $this->loadTable();
        $d['competitionitem'] = $this->MCompetitionItem->find();
        $d['columnscompetitionitem'] = $this->MCompetitionItem->selectColumnsName('competitionitem');

        $this->set($d);
        $this->render('table');
    }

    function delete($id)
    {
        $this->loadTable();
        $this->MCompetitionItem->del($id);
        header('Location:' . WEBROOT . 'competitionitem');
    }

    function add(){
        if (count($_POST)>0) {
            $this->loadTable();
            $this->MCompetitionItem->save($_POST);
            header('Location:' . WEBROOT . 'horses');
        }else{
            header('Location:' . WEBROOT . 'horses');
        }
    }
}

?>
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
        $d['privhorses'] = $this->MCompetitionItem->selectTablePriv();
        $this->set($d);
        $this->render('table');
    }

    function update($id) {

        $this->loadTable();
        $d['competitionitem'] = $this->MCompetitionItem->find(array(
            'conditions' => 'competitionitem_id='.$id
        ));
        $d['columnscompetitionitem'] = $this->MCompetitionItem->selectColumnsName('competitionitem');
        $this->set($d);
        $this->render('update');
    }

    function delete($id)
    {
        if (count($_POST)>0){
            $this->MCompetitionItem->del(array_shift(array_keys($_POST)));
            header('Location:' . WEBROOT . 'competitionitem');

        }else{
            $this->MCompetitionItem->del($id);
            header('Location:' . WEBROOT . 'competitionitem');

        }
    }

    function add(){
        if (count($_POST)>0) {
            $this->loadTable();
            $this->MCompetitionItem->save($_POST);
            header('Location:' . WEBROOT . 'competitionitem');
        }else{
            header('Location:' . WEBROOT . 'competitionitem');
        }
    }

    function updateObject(){
        if (count($_POST)>0) {
            $this->loadTable();
            $this->MCompetitionItem->save($_POST);
            header('Location:' . WEBROOT . 'competitionitem');
        }else{
            header('Location:' . WEBROOT);
        }
    }

}

?>
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
        $d['privhorses'] = $this->MCompetition->selectTablePriv();
        $this->set($d);
        $this->render('table');
    }

    function update($id) {

        $this->loadTable();
        $d['competition'] = $this->MCompetition->find(array(
            'conditions' => 'competition_id='.$id
        ));
        $d['columnscompetition'] = $this->MCompetition->selectColumnsName('competition');
        $this->set($d);
        $this->render('update');
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
            header('Location:' . WEBROOT . 'competition');
        }else{
            header('Location:' . WEBROOT . 'competition');
        }
    }

    function updateObject(){
        if (count($_POST)>0) {
            $this->loadTable();
            $this->MCompetition->save($_POST);
            header('Location:' . WEBROOT . 'competition');
        }else{
            header('Location:' . WEBROOT);
        }
    }

}

?>
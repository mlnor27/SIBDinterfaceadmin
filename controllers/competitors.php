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
        $d['privhorses'] = $this->MCompetitors->selectTablePriv();
        $this->set($d);
        $this->render('table');
    }

    function update($id) {

        $this->loadTable();
        $d['competitors'] = $this->MCompetitors->find(array(
            'conditions' => 'competitors_id='.$id
        ));
        $d['columnscompetitors'] = $this->MCompetitors->selectColumnsName('competitors');
        $this->set($d);
        $this->render('update');
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
            header('Location:' . WEBROOT . 'competitors');
        }else{
            header('Location:' . WEBROOT . 'competitors');
        }
    }

    function updateObject(){
        if (count($_POST)>0) {
            $this->loadTable();
            $this->MCompetitors->save($_POST);
            header('Location:' . WEBROOT . 'competitors');
        }else{
            header('Location:' . WEBROOT);
        }
    }

}

?>
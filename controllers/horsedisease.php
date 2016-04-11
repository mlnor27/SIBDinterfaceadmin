<?php

Class horsedisease extends Controller
{

    var $models = array('MHorseDisease');
    var $layout;

    function index()
    {
        $this->loadTable();
        $d['horsedisease'] = $this->MHorseDisease->find();
        $d['columnshorsedisease'] = $this->MHorseDisease->selectColumnsName('horsedisease');
        $d['privhorses'] = $this->MHorseDisease->selectTablePriv();
        $this->set($d);
        $this->render('table');
    }

    function update($id) {

        $this->loadTable();
        $d['horsedisease'] = $this->MHorseDisease->find(array(
            'conditions' => 'horsedisease_id='.$id
        ));
        $d['columnshorsedisease'] = $this->MHorseDisease->selectColumnsName('horsedisease');
        $this->set($d);
        $this->render('update');
    }

    function delete($id)
    {
        $this->loadTable();
        if (count($_POST)>0){
            $this->MHorseDisease->del(array_shift(array_keys($_POST)));
            header('Location:' . WEBROOT . 'horsedisease');

        }else{
            $this->MHorseDisease->del($id);
            header('Location:' . WEBROOT . 'horsedisease');

        }
    }

    function add(){
        if (count($_POST)>0) {
            $this->loadTable();
            $this->MHorseDisease->save($_POST);
            header('Location:' . WEBROOT . 'horsedisease');
        }else{
            header('Location:' . WEBROOT . 'horsedisease');
        }
    }

    function updateObject(){
        if (count($_POST)>0) {
            $this->loadTable();
            $this->MHorseDisease->save($_POST);
            header('Location:' . WEBROOT . 'horsedisease');
        }else{
            header('Location:' . WEBROOT);
        }
    }

}

?>
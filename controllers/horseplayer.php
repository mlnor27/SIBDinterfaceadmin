<?php

Class horseplayer extends Controller
{

    var $models = array('MHorsePlayer');
    var $layout;

    function index()
    {
        $this->loadTable();
        $d['horseplayer'] = $this->MHorsePlayer->find();
        $d['columnshorseplayer'] = $this->MHorsePlayer->selectColumnsName('horseplayer');
        $d['privhorses'] = $this->MHorsePlayer->selectTablePriv();
        $this->set($d);
        $this->render('table');
    }

    function update($id) {

        $this->loadTable();
        $d['horseplayer'] = $this->MHorsePlayer->find(array(
            'conditions' => 'horseplayer_id='.$id
        ));
        $d['columnshorseplayer'] = $this->MHorsePlayer->selectColumnsName('horseplayer');
        $this->set($d);
        $this->render('update');
    }

    function delete($id)
    {
        $this->loadTable();
        if (count($_POST)>0){
            $this->MHorsePlayer->del(array_shift(array_keys($_POST)));
            header('Location:' . WEBROOT . 'horseplayer');
        }else{
            $this->MHorsePlayer->del($id);
            header('Location:' . WEBROOT . 'horseplayer');
        }


    }

    function add(){
        if (count($_POST)>0) {
            $this->loadTable();
            $this->MHorsePlayer->save($_POST);
            header('Location:' . WEBROOT . 'horseplayer');
        }else{
            header('Location:' . WEBROOT . 'horseplayer');
        }
    }

    function updateObject(){
        if (count($_POST)>0) {
            $this->loadTable();
            $this->MHorsePlayer->save($_POST);
            header('Location:' . WEBROOT . 'horseplayer');
        }else{
            header('Location:' . WEBROOT);
        }
    }

}

?>
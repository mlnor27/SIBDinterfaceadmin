<?php

Class horseparasite extends Controller
{

    var $models = array('MHorseParasite');
    var $layout;

    function index()
    {
        $this->loadTable();
        $d['horseparasite'] = $this->MHorseParasite->find();
        $d['columnshorseparasite'] = $this->MHorseParasite->selectColumnsName('horseparasite');
        $d['privhorses'] = $this->MHorseParasite->selectTablePriv();
        $this->set($d);
        $this->render('table');
    }

    function update($id) {

        $this->loadTable();
        $d['horseparasite'] = $this->MHorseParasite->find(array(
            'conditions' => 'horseparasite_id='.$id
        ));
        $d['columnshorseparasite'] = $this->MHorseParasite->selectColumnsName('horseparasite');
        $this->set($d);
        $this->render('update');
    }

    function delete($id)
    {
        $this->loadTable();
        $this->MHorseParasite->del($id);
        header('Location:' . WEBROOT . 'horseparasite');
    }

    function add(){
        if (count($_POST)>0) {
            $this->loadTable();
            $this->MHorseParasite->save($_POST);
            header('Location:' . WEBROOT . 'horseparasite');
        }else{
            header('Location:' . WEBROOT . 'horseparasite');
        }
    }

    function updateObject(){
        if (count($_POST)>0) {
            $this->loadTable();
            $this->MHorseParasite->save($_POST);
            header('Location:' . WEBROOT . 'horseparasite');
        }else{
            header('Location:' . WEBROOT);
        }
    }

}

?>
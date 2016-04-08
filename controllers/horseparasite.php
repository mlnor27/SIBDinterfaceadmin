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

        $this->set($d);
        $this->render('table');
    }

    function delete($id)
    {
        $this->loadTable();

        if (count($_POST)>0){
            $this->MHorseParasite->del(array_shift(array_keys($_POST)));
            header('Location:' . WEBROOT . 'horseparasite');

        }else{
            $this->MHorseParasite->del($id);
            header('Location:' . WEBROOT . 'horseparasite');

        }

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
}

?>
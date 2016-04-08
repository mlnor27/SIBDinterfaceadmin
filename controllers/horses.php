<?php

Class horses extends Controller {

    var $models = array('MHorse');
    var $layout;

    function index() {

        $this->loadTable();
        $d['horses'] = $this->MHorse->find();
        $d['columnshorses'] = $this->MHorse->selectColumnsName('horses');
        $this->set($d);
        $this->render('table');
    }

    function view($id) {
        $this->layout = '';
        $d['horse'] = $this->MHorse->find(array(
            'conditions' => 'horses_id='.$id
        ));
        $d['horse'] = $d['horse'][0];
        $this->set($d);
        $this->render('view');
    }

    function delete($id)
    {
        $this->loadTable();
        if (count($_POST)>0){
            $this->MHorse->del(array_shift(array_keys($_POST)));
            header('Location:' . WEBROOT . 'horses');

        }else{
            $this->MHorse->del($id);
            header('Location:' . WEBROOT . 'horses');
        }

    }

    function add(){
        if (count($_POST)>0) {
            $this->loadTable();
            $this->MHorse->save($_POST);
            header('Location:' . WEBROOT . 'horses');
        }else{
            header('Location:' . WEBROOT . 'horses');
        }
    }

}
<?php

Class horses extends Controller {

    var $models = array('MHorse');
    var $layout;

    function index() {

        $this->loadTable();
        $d['horses'] = $this->MHorse->find();
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
        $this->MHorse->del($id);
        header('Location:' . WEBROOT . 'horses');
    }

}
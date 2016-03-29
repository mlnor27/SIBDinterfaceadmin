<?php

Class home extends Controller {

    var $models = array('User');
    var $layout;

    function index() {
        $this->loadModel('user');
        $d['table'] = $this->user->selectTab();
        $this->set($d);
        $this->render('index');

    }

    function view($id) {

        $d['horse'] = $this->Horse->find(array(
            'conditions' => 'horse_id='.$id
        ));
        $d['horse'] = $d['horse'][0];
        $this->set($d);
        $this->render('view');


    }

}
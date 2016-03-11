<?php

Class index extends Controller {

    var $models = array('User');


    function index() {
        $this->loadModel('user');
        $this->layout = 'index';
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
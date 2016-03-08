<?php

Class index extends Controller {

    var $models = array('Horse');
    var $layout = 'index';

    function index() {

//        $d['horse'] = $this->Horse->find();
//        $this->set($d);
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
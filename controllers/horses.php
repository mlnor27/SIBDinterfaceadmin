<?php

Class horses extends Controller {

/*    public function setLayout($layout)
    {
        $this->layout = $layout;
    }*/
    //var $layout = 'index';
    var $models = array('Horse');

    function index() {

        $this->layout = 'index';
        $d['horse'] = $this->Horse->find();
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
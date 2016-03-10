<?php

Class horses extends Controller {

/*    public function setLayout($layout)
    {
        $this->layout = $layout;
    }*/
    //var $layout = 'index';
    var $models = array('MHorse');

    function index() {

        $this->loadModel('user');
        $this->layout = 'index';
        $d['table'] = $this->user->selectTab();
        //var_dump($d['table']);
        $this->set($d);
        $this->render('index');

        $this->layout = 'index';
        $d['horse'] = $this->MHorse->find();
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
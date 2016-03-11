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
        $d['horse'] = $this->MHorse->find();
        $this->set($d);
        $this->render('index');
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

}
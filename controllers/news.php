<?php

Class news extends Controller
{

    var $models = array('MNews');
    var $layout;
    function index()
    {
        $this->loadTable();
        $d['news'] = $this->MNews->find();
        $d['columnsnews'] = $this->MNews->selectColumnsName('news');
        $d['privhorses'] = $this->MNews->selectTablePriv();
        $this->set($d);
        $this->render('table');
    }

    function update($id) {

        $this->loadTable();
        $d['news'] = $this->MNews->find(array(
            'conditions' => 'news_id='.$id
        ));
        $d['columnsnews'] = $this->MNews->selectColumnsName('news');
        $this->set($d);
        $this->render('update');
    }

    function delete($id)
    {
        $this->loadTable();

        if (count($_POST)>0){
            $this->MNews->del(array_shift(array_keys($_POST)));
            header('Location:' . WEBROOT . 'news');
        }else{
            $this->MNews->del($id);
            header('Location:' . WEBROOT . 'news');
        }

    }

    function add(){
        if (count($_POST)>0) {
            $this->loadTable();
            $this->MNews->save($_POST);
            header('Location:' . WEBROOT . 'news');
        }else{
            header('Location:' . WEBROOT . 'news');
        }
    }

    function updateObject(){
        if (count($_POST)>0) {
            $this->loadTable();
            $this->MNews->save($_POST);
            header('Location:' . WEBROOT . 'news');
        }else{
            header('Location:' . WEBROOT);
        }
    }

}

?>
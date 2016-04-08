<?php

Class newspaper extends Controller
{

    var $models = array('MNewspaper');
    var $layout;

    function index()
    {
        $this->loadTable();
        $d['newspaper'] = $this->MNewspaper->find();
        $d['columnsnewspaper'] = $this->MNewspaper->selectColumnsName('newspaper');

        $this->set($d);
        $this->render('table');
    }

    function delete($id)
    {
        $this->loadTable();

        if (count($_POST)>0){
            $this->MNewspaper->del(array_shift(array_keys($_POST)));
            header('Location:' . WEBROOT . 'newspaper');
        }else{
            $this->MNewspaper->del($id);
            header('Location:' . WEBROOT . 'newspaper');
        }

    }

    function add(){
        if (count($_POST)>0) {
            $this->loadTable();
            $this->MNewspaper->save($_POST);
            header('Location:' . WEBROOT . 'newspaper');
        }else{
            header('Location:' . WEBROOT . 'newspaper');
        }
    }
}

?>
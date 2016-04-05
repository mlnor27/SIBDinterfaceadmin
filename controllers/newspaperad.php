<?php

Class newspaperad extends Controller
{

    var $models = array('MNewspaperAd');
    var $layout;

    function index()
    {
        $this->loadTable();
        $d['newspaperad'] = $this->MNewspaperAd->find();
        $d['columnsnewspaperad'] = $this->MNewspaperAd->selectColumnsName('newspaperad');

        $this->set($d);
        $this->render('table');
    }

    function delete($id)
    {
        $this->loadTable();
        $this->MNewspaperAd->del($id);
        header('Location:' . WEBROOT . 'newspaperad');
    }

    function add(){
        if (count($_POST)>0) {
            $this->loadTable();
            $this->MNewspaperAd->save($_POST);
            header('Location:' . WEBROOT . 'horses');
        }else{
            header('Location:' . WEBROOT . 'horses');
        }
    }
}

?>
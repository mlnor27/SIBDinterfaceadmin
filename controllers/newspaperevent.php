<?php

Class newspaperevent extends Controller
{

    var $models = array('MNewspaperEvents');
    var $layout;

    function index()
    {
        $this->loadTable();
        $d['newspaperevent'] = $this->MNewspaperEvents->find();
        $d['columnsnewspaperevent'] = $this->MNewspaperEvents->selectColumnsName('newspaperevent');

        $this->set($d);
        $this->render('table');
    }

    function delete($id)
    {
        $this->loadTable();

        if (count($_POST)>0){
            $this->MNewspaperEvents->del(array_shift(array_keys($_POST)));
            header('Location:' . WEBROOT . 'newspaperevent');
        }else{
            $this->MNewspaperEvents->del($id);
            header('Location:' . WEBROOT . 'newspaperevent');
        }

    }

    function add(){
        if (count($_POST)>0) {
            $this->loadTable();
            $this->MNewspaperEvents->save($_POST);
            header('Location:' . WEBROOT . 'newspaperevent');
        }else{
            header('Location:' . WEBROOT . 'newspaperevent');
        }
    }
}

?>
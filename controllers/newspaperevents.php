<?php

Class newspaperevents extends Controller
{

    var $models = array('MNewspaperEvents');
    var $layout;

    function index()
    {
        $this->loadTable();
        $d['newspaperevents'] = $this->MNewspaperEvents->find();
        $d['columnsnewspaperevents'] = $this->MNewspaperEvents->selectColumnsName('newspaperevents');
        $d['privhorses'] = $this->MNewspaperEvents->selectTablePriv();
        $this->set($d);
        $this->render('table');
    }

    function update($id) {

        $this->loadTable();
        $d['newspaperevents'] = $this->MNewspaperEvents->find(array(
            'conditions' => 'newspaperevents_id='.$id
        ));
        $d['columnsnewspaperevents'] = $this->MNewspaperEvents->selectColumnsName('newspaperevents');
        $this->set($d);
        $this->render('update');
    }

    function delete($id)
    {
        $this->loadTable();
        $this->MNewspaperEvents->del($id);
        header('Location:' . WEBROOT . 'newspaperevents');
    }

    function add(){
        if (count($_POST)>0) {
            $this->loadTable();
            $this->MNewspaperEvents->save($_POST);
            header('Location:' . WEBROOT . 'newspaperevents');
        }else{
            header('Location:' . WEBROOT . 'newspaperevents');
        }
    }

    function updateObject(){
        if (count($_POST)>0) {
            $this->loadTable();
            $this->MNewspaperEvents->save($_POST);
            header('Location:' . WEBROOT . 'newspaperevents');
        }else{
            header('Location:' . WEBROOT);
        }
    }

}

?>
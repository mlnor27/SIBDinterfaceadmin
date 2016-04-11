<?php

Class equestrianplayer extends Controller
{

    var $models = array('MEquestrianPlayer');
    var $layout;

    function index()
    {
        $this->loadTable();
        $d['equestrianplayer'] = $this->MEquestrianPlayer->find();
        $d['columnsequestrianplayer'] = $this->MEquestrianPlayer->selectColumnsName('equestrianplayer');
        $d['privhorses'] = $this->MEquestrianPlayer->selectTablePriv();
        $this->set($d);
        $this->render('table');
    }

    function update($id) {

        $this->loadTable();
        $d['equestrianplayer'] = $this->MEquestrianPlayer->find(array(
            'conditions' => 'equestrianplayer_id='.$id
        ));
        $d['columnsequestrianplayer'] = $this->MEquestrianPlayer->selectColumnsName('equestrianplayer');
        $this->set($d);
        $this->render('update');
    }

    function delete($id)
    {
        $this->loadTable();
        $this->MEquestrianPlayer->del($id);
        header('Location:' . WEBROOT . 'equestrianplayer');
    }

    function add(){
        if (count($_POST)>0) {
            $this->loadTable();
            $this->MEquestriabPlayer->save($_POST);
            header('Location:' . WEBROOT . 'equestrianplayer');
        }else{
            header('Location:' . WEBROOT . 'equestrianplayer');
        }
    }

    function updateObject(){
        if (count($_POST)>0) {
            $this->loadTable();
            $this->MEquestriabPlayer->save($_POST);
            header('Location:' . WEBROOT . 'equestrianplayer');
        }else{
            header('Location:' . WEBROOT);
        }
    }

}

?>
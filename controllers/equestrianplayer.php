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

        $this->set($d);
        $this->render('table');
    }

    function delete($id)
    {
        $this->loadTable();
        if (count($_POST)>0){
            $this->MEquestrianPlayer->del(array_shift(array_keys($_POST)));
            header('Location:' . WEBROOT . 'equestrianplayer');

        }else{
            $this->MEquestrianPlayer->del($id);
            header('Location:' . WEBROOT . 'equestrianplayer');

        }
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
}

?>
<?php

Class player extends Controller
{

    var $models = array('MPlayer');
    var $layout;

    function index()
    {
        $this->loadTable();
        $d['player'] = $this->MPlayer->find();
        $d['columnsplayer'] = $this->MPlayer->selectColumnsName('player');

        $this->set($d);
        $this->render('table');
    }

    function delete($id)
    {
        $this->loadTable();

        if (count($_POST)>0){
            $this->MPlayer->del(array_shift(array_keys($_POST)));
            header('Location:' . WEBROOT . 'player');
        }else{
            $this->MPlayer->del($id);
            header('Location:' . WEBROOT . 'player');
        }

    }

    function add(){
        if (count($_POST)>0) {
            $this->loadTable();
            $this->MPlayer->save($_POST);
            header('Location:' . WEBROOT . 'player');
        }else{
            header('Location:' . WEBROOT . 'player');
        }
    }
}

?>
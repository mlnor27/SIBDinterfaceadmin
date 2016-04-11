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
        $d['privhorses'] = $this->MPlayer->selectTablePriv();
        $this->set($d);
        $this->render('table');
    }

    function update($id) {

        $this->loadTable();
        $d['player'] = $this->MPlayer->find(array(
            'conditions' => 'player_id='.$id
        ));
        $d['columnsplayer'] = $this->MPlayer->selectColumnsName('player');
        $this->set($d);
        $this->render('update');
    }

    function delete($id)
    {
        $this->loadTable();
        $this->MPlayer->del($id);
        header('Location:' . WEBROOT . 'player');
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

    function updateObject(){
        if (count($_POST)>0) {
            $this->loadTable();
            $this->MPlayer->save($_POST);
            header('Location:' . WEBROOT . 'player');
        }else{
            header('Location:' . WEBROOT);
        }
    }

}

?>
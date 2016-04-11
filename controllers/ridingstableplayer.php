<?php

Class ridingstableplayer extends Controller
{

    var $models = array('MRidingStablePlayer');
    var $layout;

    function index()
    {
        $this->loadTable();
        $d['ridingstableplayer'] = $this->MRidingStablePlayer->find();
        $d['columnsridingstableplayer'] = $this->MRidingStablePlayer->selectColumnsName('ridingstableplayer');
        $d['privhorses'] = $this->MRidingStablePlayer->selectTablePriv();
        $this->set($d);
        $this->render('table');
    }

    function update($id) {

        $this->loadTable();
        $d['ridingstableplayer'] = $this->MRidingStablePlayer->find(array(
            'conditions' => 'ridingstableplayer_id='.$id
        ));
        $d['columnsridingstableplayer'] = $this->MRidingStablePlayer->selectColumnsName('ridingstableplayer');
        $this->set($d);
        $this->render('update');
    }

    function delete($id)
    {
        $this->loadTable();
        $this->MRidingStablePlayer->del($id);
        header('Location:' . WEBROOT . 'ridingstableplayer');
    }

    function add(){
        if (count($_POST)>0) {
            $this->loadTable();
            $this->MRidingStablePlayer->save($_POST);
            header('Location:' . WEBROOT . 'ridingstableplayer');
        }else{
            header('Location:' . WEBROOT . 'ridingstableplayer');
        }
    }

    function updateObject(){
        if (count($_POST)>0) {
            $this->loadTable();
            $this->MRidingStablePlayer->save($_POST);
            header('Location:' . WEBROOT . 'ridingstableplayer');
        }else{
            header('Location:' . WEBROOT);
        }
    }

}

?>
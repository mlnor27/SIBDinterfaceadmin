<?php

Class ridingstableplayer extends Controller
{

    var $models = array('MRidingStablePlayer');
    var $layout;

    function index()
    {
        $this->loadTable();
        $d['ridingstableplayer'] = $this->MRidingStablePlayer->find();
        $this->set($d);
        $this->render('table');
    }

    function delete($id)
    {
        $this->loadTable();
        $this->MRidingStablePlayer->del($id);
        header('Location:' . WEBROOT . 'ridingstableplayer');
    }
}

?>
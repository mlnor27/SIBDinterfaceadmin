<?php

Class home extends Controller {

    var $models = array('MHorse');
    var $layout;

    function index() {

        $d['counthorses'] = $this->MHorse->selectCountHorse();

        /*        $d['countplayer'] = $this->MPlayer->selectCountPlayer();
                $d['countequipement'] = $this->MEquipement->selectCountEquipement();
                $d['countitem'] = $this->MItem->selectCountItem();*/
        $this->set($d);
        $this->loadTable();
        $this->render('index');

    }

    function view() {

    }

}
<?php

Class competitors extends Controller
{

    var $models = array('MCompetitors');

    var $layout;

    function index()
    {
        $this->loadTable();
        $d['competitors'] = $this->MCompetitors->find();
        $d['columnscompetitors'] = $this->MCompetitors->selectColumnsName('competitors');

        $this->set($d);
        $this->render('table');
    }

    function delete($id)
    {
        $this->loadTable();
        if (count($_POST)>0){
            $this->MCompetitors->del(array_shift(array_keys($_POST)));
            header('Location:' . WEBROOT . 'competitors');

        }else{
            $this->MCompetitors->del($id);
            header('Location:' . WEBROOT . 'competitors');

        }
    }

    function add(){
        if (count($_POST)>0) {
            $this->loadTable();
            $this->MCompetitors->save($_POST);
            header('Location:' . WEBROOT . 'competitors');
        }else{
            header('Location:' . WEBROOT . 'competitors');
        }
    }
}

?>
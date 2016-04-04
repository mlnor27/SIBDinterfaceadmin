<?php

Class competitionitem extends Controller
{

    var $models = array('MCompetitionItem');

    var $layout;

    function index()
    {
        $this->loadTable();
        $d['competitionitem'] = $this->MCompetitionItem->find();
        $this->set($d);
        $this->render('table');
    }

    function delete($id)
    {
        $this->loadTable();
        $this->MCompetitionItem->del($id);
        header('Location:' . WEBROOT . 'competitionitem');
    }
}

?>
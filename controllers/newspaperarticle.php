<?php

Class newspaperarticle extends Controller
{

    var $models = array('MNewspaperArticle');
    var $layout;

    function index()
    {
        $this->loadTable();
        $d['newspaperarticle'] = $this->MNewspaperArticle->find();
        $this->set($d);
        $this->render('table');
    }

    function delete($id)
    {
        $this->loadTable();
        $this->MNewspaperArticle->del($id);
        header('Location:' . WEBROOT . 'newspaperarticle');
    }
}

?>
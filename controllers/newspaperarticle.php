<?php

Class newspaperarticle extends Controller
{

    var $models = array('MNewspaperArticle');
    var $layout;

    function index()
    {
        $this->loadTable();
        $d['newspaperarticle'] = $this->MNewspaperArticle->find();
        $d['columnsnewspaperarticle'] = $this->MNewspaperArticle->selectColumnsName('newspaperarticle');

        $this->set($d);
        $this->render('table');
    }

    function delete($id)
    {
        $this->loadTable();

        if (count($_POST)>0){
            $this->MNewspaperArticle->del(array_shift(array_keys($_POST)));
            header('Location:' . WEBROOT . 'newspaperarticle');
        }else{
            $this->MNewspaperArticle->del($id);
            header('Location:' . WEBROOT . 'newspaperarticle');
        }

    }

    function add(){
        if (count($_POST)>0) {
            $this->loadTable();
            $this->MNewspaperArticle->save($_POST);
            header('Location:' . WEBROOT . 'newspaperarticle');
        }else{
            header('Location:' . WEBROOT . 'newspaperarticle');
        }
    }
}

?>
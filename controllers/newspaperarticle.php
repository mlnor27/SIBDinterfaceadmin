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
        $d['privhorses'] = $this->MNewspaperArticle->selectTablePriv();
        $this->set($d);
        $this->render('table');
    }

    function update($id) {

        $this->loadTable();
        $d['newspaperarticle'] = $this->MNewspaperArticle->find(array(
            'conditions' => 'newspaperarticle_id='.$id
        ));
        $d['columnsnewspaperarticle'] = $this->MNewspaperArticle->selectColumnsName('newspaperarticle');
        $this->set($d);
        $this->render('update');
    }


    function delete($id)
    {
        $this->loadTable();
        $this->MNewspaperArticle->del($id);
        header('Location:' . WEBROOT . 'newspaperarticle');
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

    function updateObject(){
        if (count($_POST)>0) {
            $this->loadTable();
            $this->MNewspaperArticle->save($_POST);
            header('Location:' . WEBROOT . 'newspaperarticle');
        }else{
            header('Location:' . WEBROOT);
        }
    }

}

?>
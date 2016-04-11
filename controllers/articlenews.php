<?php

Class articlenews extends Controller
{

    var $models = array('MArticleNews');
    var $layout;

    function index()
    {
        $this->loadTable();
        $d['articlenews'] = $this->MArticleNews->find();
        $d['columnsarticlenews'] = $this->MArticleNews->selectColumnsName('articlenews');
        $d['privhorses'] = $this->MArticleNews->selectTablePriv();
        $this->set($d);
        $this->render('table');
    }

    function update($id) {

        $this->loadTable();
        $d['articlenews'] = $this->MArticleNews->find(array(
            'conditions' => 'articlenews_id='.$id
        ));
        $d['columnsarticlenews'] = $this->MArticleNews->selectColumnsName('articlenews');
        $this->set($d);
        $this->render('update');
    }

    function delete($id)
    {
        $this->loadTable();
        $this->MArticleNews->del($id);
        header('Location:' . WEBROOT . 'articlenews');
    }

    function add(){
        if (count($_POST)>0) {
            $this->loadTable();
            $this->MArticleNews->save($_POST);
            header('Location:' . WEBROOT . 'articlenews');
        }else{
            header('Location:' . WEBROOT . 'articlenews');
        }
    }

    function updateObject(){
        if (count($_POST)>0) {
            $this->loadTable();
            $this->MArticleNews->save($_POST);
            header('Location:' . WEBROOT . 'articlenews');
        }else{
            header('Location:' . WEBROOT);
        }
    }

}

?>
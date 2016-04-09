<?php

Class error extends Controller
{

    var $layout;

    function index()
    {
        $this->render('error404');
    }


}

?>
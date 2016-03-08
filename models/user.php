<?php


Class user extends Model {

    var $table = 'user';


    function connection($d){
        var_dump($d);
        $db = new PDO('mysql:host=localhost;dbname=mysql', "root", "mysql");
        $req=$db->query("SELECT * FROM user WHERE User = '".$d['log']."' AND Password = Password('".$d['pwd']."')");
        $res = $req->fetch();
        if ($res){
            $_SESSION['co'] = true;
            //return true;
        }else{
            $_SESSION['co'] = false;
            //return false;
        }
    }

}

?>
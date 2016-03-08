<?php


Class user extends Model {

    var $table = 'user';


    function connection($d){
        var_dump($d);
        $db = new PDO('mysql:host=localhost;dbname=mysql', "root", "");
        $req=$db->query("SELECT * FROM user WHERE User = '".$d['log']."' AND Password = Password('".$d['pwd']."')");
        $res = $req->fetch();
        if ($res){
            return true;
        }else{
            return false;
        }
    }

}

?>
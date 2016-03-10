<?php


Class user extends Model {

    var $table = 'user';


    function connection($d){
        var_dump($d);
        $db = new PDO('mysql:host=localhost;dbname=mysql', "root", "");
        $req=$db->query("SELECT * FROM user WHERE User = '".$d['log']."' AND Password = Password('".$d['pwd']."')");
        $res = $req->fetch();
        if ($res){
            $_SESSION['name'] = $res['User'];
            return true;
        }else{
            return false;
        }
    }

    function selectTab(){
        $db = new PDO('mysql:host=localhost;dbname=mysql', "root", "");
        $req=$db->query("SELECT Table_name FROM tables_priv WHERE User = '".$_SESSION['name']."'");
        return $req->fetchAll();

    }

}

?>
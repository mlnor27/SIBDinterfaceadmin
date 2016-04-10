<?php


Class user extends Model {

    var $table = 'user';


    function connection($d){
        $db = new PDO('mysql:host=localhost;dbname=mysql', "root", "");
        $req=$db->query("SELECT * FROM user WHERE User = '".$d['log']."' AND Password = Password('".$d['pwd']."')");
        $res = $req->fetch();
        if ($res){

            $req2 = $db->query("SELECT * FROM tables_priv WHERE User = '".$d['log']."'");
            $res2 = $req2->fetch();
            if ($res2){
                $_SESSION['name'] = $res['User'];
                $_SESSION['mdp'] = $d['pwd'];
                return true;
            }else{

                header('Location: http://'.$_SERVER['SERVER_NAME'].'/phpmyadmin');
                exit;
            }


        }else{
            return false;
        }
    }

    function selectTab(){
        $db = new PDO('mysql:host=localhost;dbname=mysql', 'root', '');
        $req=$db->query("SELECT Table_name FROM tables_priv WHERE User = '".$_SESSION['name']."'");
        return $req->fetchAll();

    }

}

?>
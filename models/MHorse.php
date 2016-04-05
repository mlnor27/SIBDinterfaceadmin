<?php

require_once(ROOT."models/db.php");

Class MHorse extends Model {

    var $table = 'Horses';

    function getHorses($data=array()){
        $conditions = "1=1";
        $fields = "*";
        $limit = "";
        $order = $this->table."_id DESC";
        extract($data);
        if (isset($data['limit'])) { $limit = "LIMIT ".$data['limit']; }
        $sql = "SELECT $fields
                FROM ".$this->table." h
                JOIN infrastructures i ON i.infrastructures_id = h.infrastructures_id
                JOIN race r ON h.race_id = r.race_id
                WHERE $conditions
                ORDER BY $order $limit";
        $db = connect();
        $req = $db->query($sql) or die($db->errorInfo()."<br /> => ".$sql);
        $results = $req->fetchAll(PDO::FETCH_CLASS);
        $d = array();
        foreach ($results as $r){
            $d[] = $r;
        }
        return $d;
    }
}

?>
<?php

include(ROOT.'models/db.php');
class Model {

    public $table;
    public $id;

    public function read($fields=null) {
        if ($fields==null) {
            $db = connect();
            $request = $db->query("SELECT $fields FROM ".$this->table." WHERE".$this->table."_id = ".$this->id);
            $results = $request->fetch();
            foreach($results as $key => $result) {
                $this->$key = $result;
            }
        }
    }

    public function find($data=array()){
        $conditions = "1=1";
        $fields = "*";
        $limit = "";
        $order = $this->table."_id DESC";
        extract($data);
        if (isset($data['limit'])) { $limit = "LIMIT ".$data['limit']; }
        $sql = "SELECT $fields FROM ".$this->table." WHERE $conditions ORDER BY $order $limit";
        $db = connect();
        $req = $db->query($sql) or die($db->errorInfo()."<br /> => ".$sql);
        $results = $req->fetchAll();
        $d = array();
        foreach ($results as $r){
            $d[] = $r;
        }
        return $d;
    }
}

?>
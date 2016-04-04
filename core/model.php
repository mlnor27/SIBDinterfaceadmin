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
        $results = $req->fetchAll(PDO::FETCH_CLASS);
        $d = array();
        foreach ($results as $r){
            $d[] = $r;
        }
        return $d;
    }


    public function save($data){
        if (isset($data[$this->table."_id"]) && !empty($data[$this->table."_id"])) {
            $sql = "UPDATE " . $this->table . " SET ";
            foreach ($data as $k => $v) {

                if ($k != "id") {

                    if (is_int($v)){
                        $sql .= "$k=$v,";
                    }else{
                        $sql .= "$k='$v',";
                    }
                }
            }
            $sql = substr($sql,0,-1);
            $sql .= "WHERE " . $this->table . "_id=" . $data[$this->table . "_id"];
        }
        else{
            $sql = "INSERT INTO ".$this->table."(";
            unset($data[$this->table . "_id"]);
            foreach ($data as $k => $v){
                $sql .= "$k,";
            }
            $sql = substr($sql, 0,-1);
            $sql .=") VALUES (";
            foreach ($data as $v){

                if (is_int($v)){
                    $sql .= "$v,";
                }else{
                    $sql .= "'$v',";
                }
            }
            $sql = substr($sql, 0,-1);
            $sql .= ")";
        }
        $db = connect();
        $req = $db->query($sql) or die($db->errorInfo()."<br /> => ".$sql);

        if (!isset($data[$this->table."_id"])){
            $this->id = $db->lastInsertId();
        }
        else{
            $this->id = $data[$this->table."_id"];
        }

    }

    public function del($id=null)
    {
        if($id==null)
        {
            $id = $this->id;
        }
        $sql= "DELETE FROM ".$this->table." WHERE " .strtolower($this->table)."_id = ".$id;
        $db = connect();
        $req = $db->query($sql) or die ($db->errorInfo()."<br /> => ".$sql);
    }


}

?>
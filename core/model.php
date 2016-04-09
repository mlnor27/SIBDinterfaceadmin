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
        if (isset($data[strtolower($this->table)."_id"]) && !empty($data[strtolower($this->table)."_id"])) {
            $sql = "UPDATE " . strtolower($this->table) . " SET ";
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
            $sql .= " WHERE " . strtolower($this->table) . "_id=" . $data[strtolower($this->table) . "_id"];
        }
        else{
            $sql = "INSERT INTO ".strtolower($this->table)." (";
            unset($data[strtolower($this->table) . "_id"]);
            foreach ($data as $k => $v){
                $sql .= "$k,";
            }
            $sql = substr($sql, 0,-1);
            $sql .=") VALUES (";
            foreach ($data as $v){

                if (is_numeric($v)){
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
       // $req = $db->query($sql) or die (header('Location: '));


        if (!isset($data[$this->table."_id"])){
            $this->id = $db->lastInsertId();
        }
        else{
            $this->id = $data[$this->table."_id"];
        }

    }

    public function del($id=null)
    {
        if ($id == null) {
            $id = $this->id;
        }

        $sql = "DELETE FROM " . $this->table . " WHERE " . strtolower($this->table) . "_id IN (". $id.")";
        $db = connect();
        $req = $db->query($sql) or die ($db->errorInfo() . "<br /> => " . $sql);
        //$req = $db->query($sql) or die ("<script>alert('".$db->errorInfo()."');</script>");


    }

    public function selectColumnsName($table)
    {
        $sql= "SELECT DISTINCT COLUMN_NAME FROM INFORMATION_SCHEMA.COLUMNS WHERE TABLE_NAME='" . $this->table . "'";
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
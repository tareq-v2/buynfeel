<?php

class database{
    public $serverName = "localhost";
    public $userName = "root";
    public $password = "";
    public $dbName = "buynfeel";
    public $link;
    public $error;
    public $sms;

    public function __construct(){
        $this->db_connect();
    }
    private function db_connect(){
        $this->link = new mysqli($this->serverName, $this->userName, $this->password, $this->dbName) or die("Connection failed !!");
        if($this->link){
            $this->sms = "Connected!";
        }
    }
    function insert($sql){
        $query = $this->link->query($sql);
        if($query){
            $this->sms = "Data inserted!";
        }
        else{
            $this->sms = "Data not inserted!";
        }
    }
    public function __destruct(){
        $this->link->close();
    }
}
?>
<?php
require 'Db.php';
class Admin extends DB{
    private $login_db;

    public function __construct()
    {
        parent::__construct();
        $this->login_db=$this->DB;
    }

    public function addGroup($grp){
        $sql=$this->login_db->prepare("INSERT INTO type_group (group_name) VALUES (?)");
        if($sql->execute([$grp])){
            header('location:groups.php');
        }
        else{
            echo "fff";
        }

    }

    public function getGroup(){
        $sql=$this->login_db->prepare("SELECT * FROM type_group");
        $sql->execute();
        return $sql;
    }

    public function addProc($name,$price,$id_gro){
        $sql=$this->login_db->prepare("INSERT INTO Producer(name_prod,price,group_id) VALUES (?,?,?)");
        if($sql->execute([$name,$price,$id_gro])){
        header('location:prouds.php');
        }
        else{

        }
    }

    public function getProc(){
        $sql=$this->login_db->prepare("SELECT * FROM Producer");
        $sql->execute();
        return $sql;
    }

    public function billes(){
        $sql_bill=$this->login_db->prepare("SELECT * FROM bill ");
        $sql_bill->execute();
        return $sql_bill;
    }

    public function getProcBill($id){
        $sql=$this->login_db->prepare("SELECT * FROM item LEFT JOIN Producer ON item.id_pro=Producer.id WHERE item.bill_id=?");
        $sql->execute([$id]);
        return $sql;
    }
}
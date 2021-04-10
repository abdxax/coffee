<?php
require 'Db.php';
class Vist extends DB{
    private $login_db;

    public function __construct()
    {
        parent::__construct();
        $this->login_db=$this->DB;
    }



    public function getGroup(){
        $sql=$this->login_db->prepare("SELECT * FROM type_group");
        $sql->execute();
        return $sql;
    }



    public function getProc($id){
        $sql=$this->login_db->prepare("SELECT * FROM Producer WHERE group_id=?");
        $sql->execute([$id]);
        return $sql;
    }

    public function addNewBill($name,$phone,$dris){
        $sql_bill=$this->login_db->prepare("INSERT INTO bill (name,phone) VALUES (?,?)");
        if($sql_bill->execute([$name,$phone])){
           $last_id=$this->login_db->lastInsertId();
           for ($i=0;$i<count($dris);$i++){
               $sql_item=$this->login_db->prepare("INSERT INTO item(bill_id,id_pro)VALUES (?,?)");
               if($sql_item->execute([$last_id,$dris[$i]])){
                   echo $dris[$i];
               }
           }
        }

    }
}
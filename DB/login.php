<?php
require 'Db.php';
class Login extends DB{
    private $login_db;

    public function __construct()
    {
        parent::__construct();
        $this->login_db=$this->DB;
    }

    public function login($user,$pass){
        $sql=$this->login_db->prepare("SELECT * FROM user WHERE user_name=? AND password=?");
        $sql->execute([$user,$pass]);
        if($sql->rowCount()==1){
            $_SESSION['user']=$user;
            header('location:admin/index.php');
        }
        else{
            echo "error";
        }
    }
}
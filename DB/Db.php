<?php
class DB {
    protected $DB;

    public function __construct()
    {
        $this->DB=new PDO("mysql:host=192.168.64.3;dbname=coffe","coffe","123456");
    }
}

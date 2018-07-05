<?php

class Connection
{
    private $link;


    public function __construct()
    {
    
       $this->connect();  

    }


    private function connect()
    {
       
      $config = [

        'db_server' = 'localhost',
        'db_name'   = 'test',
        'username'  = 'root',
        'password'  = '',
        'charset'   = 'utf8'
          

      ]

      $dsn = 'mysql:host='.$congif['$db_server'].';dbname='.$congif['$db_name'].';charset='.$congif['$charset'].'';

      $this->link = new PDO ($dsn,config ['$username'],congig ['$password']);

      return $this;
         
    }


    private function execute($sql)
    {

      $sth=$this->link->prepare($sql);

      return $sth->execute();

    }

    private function query($sql)
    {

      $sth=$this->link->prepare($sql);

      $sth->execute();

      $result=$sth->fetchAll(PDO::FETCH_ASSOC);

      if ($result===false){
        return [];
      }


      return $result;
    }


    $db=new Connection();

    $db->execute("INSERT INTO `user` SET `username`='denis', `password`='2222222'");
}



?>
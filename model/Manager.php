<?php

class Manager{

     function dbConnect(){
          try {
               $bdd=new PDO('mysql:host='';dbname='';charset=utf8','','');
               $bdd->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
               return $bdd;
          } catch (PDOException $e) {
               die('Errer:').$e->getMessage();
               
          }

     }
}

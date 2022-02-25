<?php
class LivreManager extends Manager{
     public function getsLivre(){
          $bdd=$this->dbConnect();
          $res=$bdd->query("SELECT * FROM LIVRE");
          return $res;
     }
     public function addLivre($designation,$titre,$auteur,$date_edition){
          $bdd=$this->dbConnect();
          $sql="INSERT INTO LIVRE(designation,titre,auteur,date_edition) VALUES(?,?,?,?)";
          $restat=$bdd->prepare($sql);
          $isposted=$restat->execute(array($designation,$titre,$auteur,$date_edition));

          return $isposted;
     }
}
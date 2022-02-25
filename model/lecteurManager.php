
<?php
require('Manager.php');

class LecteurManager extends Manager{

     public function getsLecteur(){
          $bdd=$this->dbConnect();
          $res=$bdd->query("SELECT * FROM LECTEUR");
          return $res;
     }
     public function postLecteur($nom,$prenom){
          $bdd=$this->dbConnect();
          $sql="INSERT INTO LECTEUR(nom,prenom) VALUES(?,?)";
          $restat=$bdd->prepare($sql);
          $isposted=$restat->execute(array($nom,$prenom));

          return $isposted;
     }
}
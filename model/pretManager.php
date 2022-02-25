<?php
class PretManager extends Manager{
     public function getsPret(){
          $bdd=$this->dbConnect();
          $res=$bdd->query("SELECT * FROM PRET");
          return $res;  
     }
     public function addPret($id_lecteur,$id_livre,$date_pret,$date_retour){
          $bdd=$this->dbConnect();
          $sql="INSERT INTO PRET(id_lecteur,id_livre,date_pret,date_retour) values(?,?,?,?)";
          $restat=$bdd->prepare($sql);
          $isposted=$restat->execute(array($id_lecteur,$id_livre,$date_pret,$date_retour));

          return $isposted;
     }
}
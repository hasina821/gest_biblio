<?php
class PretManager extends Manager{
     public function getsPret(){
          $bdd=$this->dbConnect();
          $res=$bdd->query("SELECT * FROM PRET");
          return $res;  
     }
     public function addPret($id_lecteur,$id_livre,$date_retour){
          $bdd=$this->dbConnect();
          $sql="INSERT INTO PRET(id_lecteur,id_livre,date_retour) values(?,?,?)";
          $restat=$bdd->prepare($sql);
          $isposted=$restat->execute(array($id_lecteur,$id_livre,$date_retour));

          return $isposted;
     }
     public function getPret($id){
          $db = $this->dbConnect();
          $req = $db->prepare('SELECT  * FROM PRET WHERE id = ?');
          $req->execute(array($id));
          $pret = $req->fetch();
  
          return $pret;
     }
     public function updatePret($id_lecteur,$id_livre,$date_pret,$date_retour,$id){
          $bdd=$this->dbConnect();
          $sql="UPDATE PRET SET id_lecteur=?,id_livre=?,date_pret=?,date_retour=? WHERE id=?";
          $restat=$bdd->prepare($sql);
          $isupdated=$restat->execute(array($id_lecteur,$id_livre,$date_pret,$date_retour,$id));

          return $isupdated;
     }
     public function deletePret($id){
          $bdd=$this->dbConnect();
          $sql="DELETE FROM PRET WHERE id=?";
          $restat=$bdd->prepare($sql);
          $isdeleted=$restat->execute(array($id));

          return $isdeleted;

     }
}
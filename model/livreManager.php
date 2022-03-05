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
     public function getLivre($id){
          $db = $this->dbConnect();
          $req = $db->prepare('SELECT  *FROM LIVRE WHERE id = ?');
          $req->execute(array($id));
          $livre = $req->fetch();
  
          return $livre;
     }
     public function updateLivre($designation,$titre,$auteur,$date_edition,$id){
          $bdd=$this->dbConnect();
          $sql="UPDATE  LIVRE SET designation=?,titre=?,auteur=?,date_edition=? WHERE id=?";
          $restat=$bdd->prepare($sql);
          $isupdated=$restat->execute(array($designation,$titre,$auteur,$date_edition,$id));

          return $isupdated;
     }
     public function deleteLivre($id){
          $bdd=$this->dbConnect();
          $sql="DELETE FROM LIVRE WHERE id=?";
          $restat=$bdd->prepare($sql);
          $isdeleted=$restat->execute(array($id));

          return $isdeleted;

     }
     public function updateNbfois($nb,$dispo,$id){
          $bdd=$this->dbConnect();
          $sql="UPDATE  LIVRE SET nbfoisprete=?,disponibilite=? WHERE id=?";
          $restat=$bdd->prepare($sql);
          $isupdated=$restat->execute(array($nb,$dispo,$id));

          return $isupdated;

     }
}
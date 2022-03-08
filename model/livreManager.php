<?php
class LivreManager extends Manager{
     public function getsLivre(){
          $bdd=$this->dbConnect();
          $res=$bdd->query("SELECT * FROM LIVRE");
          return $res;
     }
     public function addLivre($numlivre,$designation,$titre,$auteur,$date_edition){
          $bdd=$this->dbConnect();
          $sql="INSERT INTO LIVRE(numlivre,designation,titre,auteur,date_edition) VALUES(?,?,?,?,?)";
          $restat=$bdd->prepare($sql);
          $isposted=$restat->execute(array($numlivre,$designation,$titre,$auteur,$date_edition));

          return $isposted;
     }
     public function getLivre($numlivre){
          $db = $this->dbConnect();
          $req = $db->prepare('SELECT  *FROM LIVRE WHERE numlivre = ?');
          $req->execute(array($numlivre));
          $livre = $req->fetch();
  
          return $livre;
     }
     public function updateLivre($numlivre,$designation,$titre,$auteur,$date_edition,$id){
          $bdd=$this->dbConnect();
          $sql="UPDATE  LIVRE SET 
          numlivre=?,designation=?,titre=?,auteur=?,date_edition=? WHERE id=?";
          $restat=$bdd->prepare($sql);
          $isupdated=$restat->execute(array($numlivre,$designation,$titre,$auteur,$date_edition,$id));

          return $isupdated;
     }
     public function retourlivre($disponibilite,$numlivre){
          $bdd=$this->dbConnect();
          $sql="UPDATE  LIVRE SET 
          disponibilite=? WHERE numlivre=?";
          $restat=$bdd->prepare($sql);
          $isupdated=$restat->execute(array($disponibilite,$numlivre));

          return $isupdated;
     }
     public function deleteLivre($id){
          $bdd=$this->dbConnect();
          $sql="DELETE FROM LIVRE WHERE id=?";
          $restat=$bdd->prepare($sql);
          $isdeleted=$restat->execute(array($id));

          return $isdeleted;

     }
     public function updateNbfois($nb,$dispo,$numlivre){
          $bdd=$this->dbConnect();
          $sql="UPDATE  LIVRE SET nbfoisprete=?,disponibilite=? WHERE numlivre=?";
          $restat=$bdd->prepare($sql);
          $isupdated=$restat->execute(array($nb,$dispo,$numlivre));

          return $isupdated;

     }
     public function getLivreByauteur($auteur){
          $db = $this->dbConnect();
          $req = $db->prepare('SELECT  * FROM LIVRE WHERE auteur = ?');
          $req->execute(array($auteur));
  
          return $req;
     }
     public function getLivreBytitle($titre){
          $db = $this->dbConnect();
          $req = $db->prepare('SELECT  * FROM LIVRE WHERE titre = ?');
          $req->execute(array($titre));
          
          return $req;
     }
}
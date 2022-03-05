
<?php
require_once('Manager.php');

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
     public function getLecteur($id){
          $db = $this->dbConnect();
          $req = $db->prepare('SELECT  * FROM LECTEUR WHERE id = ?');
          $req->execute(array($id));
          $lect = $req->fetch();
  
          return $lect;
     }
     public function updateLecteur($nom,$prenom,$id){
          $bdd=$this->dbConnect();
          $sql="UPDATE  LECTEUR SET nom=?,prenom=? WHERE id=?";
          $restat=$bdd->prepare($sql);
          $isupdated=$restat->execute(array($nom,$prenom,$id));

          return $isupdated;

     }
     public function deleteLecteur($id){
          $bdd=$this->dbConnect();
          $sql="DELETE FROM  LECTEUR WHERE id=?";
          $restat=$bdd->prepare($sql);
          $isdeleted=$restat->execute(array($id));

          return $isdeleted;

     }
     public function getListpret($id){
          $db = $this->dbConnect();
          $req = $db->prepare('SELECT nom,prenom,designation,auteur,date_edition,date_pret FROM `LECTEUR` INNER JOIN `PRET` ON `LECTEUR`.id=`PRET`.id_lecteur INNER JOIN `LIVRE` ON `LIVRE`.id=`PRET`.id_livre WHERE `LECTEUR`.id=?');
          $req->execute(array($id));
          $listpret = $req->fetchAll();
  
          return $listpret;

     }
}
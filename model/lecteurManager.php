
<?php
require_once('Manager.php');

class LecteurManager extends Manager{

     public function getsLecteur(){
          $bdd=$this->dbConnect();
          $res=$bdd->query("SELECT * FROM LECTEUR");
          return $res;
     }
     public function postLecteur($numlect,$nom,$prenom){
          $bdd=$this->dbConnect();
          $sql="INSERT INTO LECTEUR(numlect,nom,prenom) VALUES(?,?,?)";
          $restat=$bdd->prepare($sql);
          $isposted=$restat->execute(array($numlect,$nom,$prenom));

          return $isposted;
     }
     public function getLecteur($numlect){
          $db = $this->dbConnect();
          $req = $db->prepare('SELECT  * FROM LECTEUR WHERE numlect = ?');
          $req->execute(array($numlect));
          $lect = $req->fetch();
  
          return $lect;
     }
     public function updateLecteur($numlect,$nom,$prenom,$id){
          $bdd=$this->dbConnect();
          $sql="UPDATE  LECTEUR SET numlect=?, nom=?,prenom=? WHERE id=?";
          $restat=$bdd->prepare($sql);
          $isupdated=$restat->execute(array($numlect,$nom,$prenom,$id));

          return $isupdated;

     }
     public function deleteLecteur($id){
          $bdd=$this->dbConnect();
          $sql="DELETE FROM  LECTEUR WHERE id=?";
          $restat=$bdd->prepare($sql);
          $isdeleted=$restat->execute(array($id));

          return $isdeleted;

     }
     public function getListpret($numlect){
          $db = $this->dbConnect();
          $req = $db->prepare('SELECT `LECTEUR`.numlect,nom,prenom,designation,auteur,date_edition,date_pret FROM `LECTEUR` INNER JOIN `PRET` ON `LECTEUR`.numlect=`PRET`.numlecteur INNER JOIN `LIVRE` ON `LIVRE`.numlivre=`PRET`.numlivre WHERE `LECTEUR`.numlect=?');
          $req->execute(array($numlect));
          $listpret = $req->fetchAll();
  
          return $listpret;

     }
}
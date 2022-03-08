<?php
class PretManager extends Manager{
     public function getsPret(){
          $bdd=$this->dbConnect();
          $res=$bdd->query("SELECT id,numlecteur,numlivre,date_pret,date_retour,retour,DATEDIFF(CURDATE(),date_retour) as deadline FROM PRET WHERE retour=1 ");
          return $res;  
     }
     public function addPret($numlecteur,$numlivre,$date_retour){
          $bdd=$this->dbConnect();
          $sql="INSERT INTO PRET(numlecteur,numlivre,date_retour) values(?,?,?)";
          $restat=$bdd->prepare($sql);
          $isposted=$restat->execute(array($numlecteur,$numlivre,$date_retour));

          return $isposted;
     }
     public function getPret($id){
          $db = $this->dbConnect();
          $req = $db->prepare('SELECT  * FROM PRET WHERE id = ?');
          $req->execute(array($id));
          $pret = $req->fetch();
  
          return $pret;
     }
     public function updatePret($numlecteur,$numlivre,$date_pret,$date_retour,$id){
          $bdd=$this->dbConnect();
          $sql="UPDATE PRET SET numlecteur=?,numlivre=?,date_pret=?,date_retour=? WHERE id=?";
          $restat=$bdd->prepare($sql);
          $isupdated=$restat->execute(array($numlecteur,$numlivre,$date_pret,$date_retour,$id));

          return $isupdated;
     }
     public function retour($retour,$id){
          $bdd=$this->dbConnect();
          $sql="UPDATE PRET SET retour=? WHERE id=?";
          $restat=$bdd->prepare($sql);
          $isupdated=$restat->execute(array($retour,$id));

          return $isupdated;
     }
     public function deletePret($id){
          $bdd=$this->dbConnect();
          $sql="DELETE FROM PRET WHERE id=?";
          $restat=$bdd->prepare($sql);
          $isdeleted=$restat->execute(array($id));

          return $isdeleted;

     }
     public function getlecteurpret($numlecteur){
          $db = $this->dbConnect();
          $req = $db->prepare('SELECT  * FROM PRET WHERE numlecteur = ? AND date_pret=CURDATE()');
          $req->execute(array($numlecteur));
          $pret = $req->fetchAll();
  
          return $pret;
     }
}
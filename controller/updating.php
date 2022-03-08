<?php
require_once('model/lecteurManager.php');
require_once('model/livreManager.php');
require_once('model/pretManager.php');


/*------------------------------------------livre------------------------*/
function getlivreinfo($numlivre){
     $livre=new LivreManager();
     $liv=$livre->getLivre($numlivre);
     require('view/livreupdatefield.php');
}
function updateLivre($numlivre,$designation,$titre,$auteur,$date_edition,$id){
     $livre=new LivreManager();
     $isupdated=$livre->updateLivre($numlivre,$designation,$titre,$auteur,$date_edition,$id);

     if(!$isupdated){
          throw new Exception("Error while updating");
          
     }else{
          Header('Location:index.php?action=view/livres');
     }
}


/*------------------------------------lecteur---------------------------------- */
function getLecteurinfo($numlect){
     $lecteur=new LecteurManager();
     $lect=$lecteur->getLecteur($numlect);

     require('view/lecteurupdatefield.php');

}
function updateLecteur($numlect,$nom,$prenom,$id){
     $lecteur=new LecteurManager();
     $isupdated=$lecteur->updateLecteur($numlect,$nom,$prenom,$id);
     if(!$isupdated){
          throw new Exception("Error while updating lecteur");
          
     }else{
          Header('Location:index.php?action=view/lecteurs');
     }
}

/*-----------------------------------------------pret-------------------------------------------*/

function getPretinfo($id){
     $pret=new PretManager();
     $pre=$pret->getPret($id);

     require('view/pretupdatefield.php');
}
function updatePret($numlecteur,$numlivre,$date_pret,$date_retour,$id){
     $pret=new PretManager();
     $isupdated=$pret->updatePret($numlecteur,$numlivre,$date_pret,$date_retour,$id);

     if(!$isupdated){
          throw new Exception("Error while updating pret");
          
     }else{
          Header('Location:index.php?action=view/prets');
     }
}
function Retour($numlivre,$id){
     $pret=new PretManager();
     $livre=new LivreManager();
     $dispo=1;
     $isupdatedlivre=$livre->retourlivre($dispo,$numlivre);
     $ret=0;
     $isupdated=$pret->retour($ret,$id);

     if(!$isupdated && !$isupdatedlivre){
          throw new Exception("Error while updating pret");
          
     }else{
          Header('Location:index.php?action=view/prets');
     }
}
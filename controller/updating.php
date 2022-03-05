<?php
require_once('model/lecteurManager.php');
require_once('model/livreManager.php');
require_once('model/pretManager.php');


/*------------------------------------------livre------------------------*/
function getlivreinfo($id){
     $livre=new LivreManager();
     $liv=$livre->getLivre($id);
     require('view/livreupdatefield.php');
}
function updateLivre($designation,$titre,$auteur,$date_edition,$id){
     $livre=new LivreManager();
     $isupdated=$livre->updateLivre($designation,$titre,$auteur,$date_edition,$id);

     if(!$isupdated){
          throw new Exception("Error while updating");
          
     }else{
          Header('Location:index.php?action=view/livres');
     }
}


/*------------------------------------lecteur---------------------------------- */
function getLecteurinfo($id){
     $lecteur=new LecteurManager();
     $lect=$lecteur->getLecteur($id);

     require('view/lecteurupdatefield.php');

}
function updateLecteur($nom,$prenom,$id){
     $lecteur=new LecteurManager();
     $isupdated=$lecteur->updateLecteur($nom,$prenom,$id);
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
function updatePret($id_lecteur,$id_livre,$date_pret,$date_retour,$id){
     $pret=new PretManager();
     $isupdated=$pret->updatePret($id_lecteur,$id_livre,$date_pret,$date_retour,$id);

     if(!$isupdated){
          throw new Exception("Error while updating pret");
          
     }else{
          Header('Location:index.php?action=view/prets');
     }
}
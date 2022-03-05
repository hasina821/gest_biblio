<?php
require_once('model/lecteurManager.php');
require_once('model/livreManager.php');
require_once('model/pretManager.php');


/*-------------------lecteur----------------------------------- */

function addLecteur($nom,$prenom){
     $lecteur=new LecteurManager();
     $isposted=$lecteur->postLecteur($nom,$prenom);
     if($isposted===false){
          throw new Exception("Errer while posting lecteur");
     }else{
          header('Location:index.php?action=view/lecteurs');
     }
}
function addlecteurfield(){
     require('view/addlecteur.php');
}

/*---------------------------------------------livre--------------------------------------------------- */
function addLivre($designation,$titre,$auteur,$date_edition){
     $livre=new LivreManager();
     $isposted=$livre->addLivre($designation,$titre,$auteur,$date_edition);
     if($isposted===false){
          throw new Exception("Errer while posting livre");
     }else{
          Header('Location:index.php?action=view/livres');
     }
}
function addlivrefield(){
     require('view/addlivre.php');
}

/*-----------------------------------------------pret--------------------------------------------------------*/
function addPret($id_lecteur,$id_livre,$date_retour){
     $pret=new PretManager();
     $livre=new LivreManager();
     $lecteur=new LecteurManager();

     $lect=$lecteur->getLecteur($id_lecteur);
     if(empty($lect)){
          throw new Exception("Ce lecteur n'est pas adherant");
     }
     $liv=$livre->getLivre($id_livre);
     $dis=0;
     if($liv['nbfoisprete']===NULL){
          $nb=0;
          $isupdated=$livre->updateNbfois($nb,$dis,$id_livre);
     }else{
          $nb=$liv['nbfoisprete']+1;
          $isupdated=$livre->updateNbfois($nb,$dis,$id_livre);
     }

     if($liv['disponibilite']==0){
          throw new Exception("Le livre n'est pas disponible");
          
     }else{
          $isposted=$pret->addPret($id_lecteur,$id_livre,$date_retour);
     }

     if(!$isposted AND !$isupdated){
          throw new Exception("Errer while posting pret");
     }else{
          Header('Location:index.php?action=view/prets');
     }
}
function addpretfield(){
     $livre=new LivreManager();
     $listlivre=$livre->getsLivre();
     $lecteur=new LecteurManager();
     $listlecteur=$lecteur->getsLecteur();
     
     require('view/addpret.php');
}



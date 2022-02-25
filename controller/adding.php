<?php
require('model/lecteurManager.php');
require('model/pretManager.php');
require('model/livreManager.php');


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
function addvoyageurfield(){
     header('Location:view/addlecteur.php');
}

/*---------------------------------------------livre--------------------------------------------------- */
function addLivre($designation,$titre,$auteur,$date_edition){
     $livre=new LivreManager();
     $isposted=$livre->addLivre($designation,$titre,$auteur,$date_edition);
     if($isposted===false){
          throw new Exception("Errer while posting livre");
     }else{
          header('Location:index.php?action=view/livres');
     }
}
function addlivrefield(){
     header('Location:view/addlivre.php');
}

/*-----------------------------------------------pret--------------------------------------------------------*/
function addPret($id_lecteur,$id_livre,$date_pret,$date_retour){
     $pret=new PretManager();
     $isposted=$pret->addPret($id_lecteur,$id_livre,$date_pret,$date_retour);
     if($isposted===false){
          throw new Exception("Errer while posting pret");
     }else{
          header('Location:index.php?action=view/prets');
     }
}
function addpretfield(){
     $livre=new LivreManager();
     $listlivre=$livre->getsLivre();
     $lecteur=new LecteurManager();
     $listlecteur=$lecteur->getsLecteur();
     
     header('Location:view/addpret.php');
}



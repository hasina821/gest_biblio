<?php
require_once('model/lecteurManager.php');
require_once('model/livreManager.php');
require_once('model/pretManager.php');


/*-------------------lecteur----------------------------------- */

function addLecteur($numlect,$nom,$prenom){
     $lecteur=new LecteurManager();
     $isexist=$lecteur->getLecteur($numlect);
     if(empty($isexist)){
          $isposted=$lecteur->postLecteur($numlect,$nom,$prenom);
          if($isposted===false){
               throw new Exception("Errer while posting lecteur");
          }else{
               header('Location:index.php?action=view/lecteurs');
          }
     }else{
          throw new Exception("Le lecteur avec ce numero existe déjà");
          
     }
}
function addlecteurfield(){
     require('view/addlecteur.php');
}

/*---------------------------------------------livre--------------------------------------------------- */
function addLivre($numlivre,$designation,$titre,$auteur,$date_edition){
     $livre=new LivreManager();
     $isexist=$livre->getLivre($numlivre);
     if(empty($isexist)){
          $isposted=$livre->addLivre($numlivre,$designation,$titre,$auteur,$date_edition);
          if($isposted===false){
               throw new Exception("Errer while posting livre");
          }else{
               Header('Location:index.php?action=view/livres');
          }
     }else{
          throw new Exception("Le livre evec ce numero existe déjà");
          
     }
     
}
function addlivrefield(){
     require('view/addlivre.php');
}

/*-----------------------------------------------pret--------------------------------------------------------*/
function addPret($numlecteur,$numlivre,$date_retour){
     $pret=new PretManager();
     $livre=new LivreManager();
     $lecteur=new LecteurManager();
     $listpret=$pret->getlecteurpret($numlecteur);

     $lect=$lecteur->getLecteur($numlecteur);
     if(empty($lect)){
          throw new Exception("Ce lecteur n'est pas adherant");
     }elseif(count($listpret)>=3){
          throw new Exception("Le lecteur a dejà preté 3 livre");
     }else{

          $liv=$livre->getLivre($numlivre);
          $dis=0;
          if(empty($liv) || $liv['disponibilite']==0){
               throw new Exception("Le livre n'est pas disponible");
               
          }else{
               $isposted=$pret->addPret($numlecteur,$numlivre,$date_retour);
               if(!empty($liv)){
                    $nb=$liv['nbfoisprete']+1;
                    $isupdated=$livre->updateNbfois($nb,$dis,$numlivre);
               }
          }
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



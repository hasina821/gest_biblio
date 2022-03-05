<?php
require_once('model/lecteurManager.php');
require_once('model/pretManager.php');
require_once('model/livreManager.php');


/*-------------------------livre------------------------------------------- */
function deleteLivre($id){
     $livre=new LivreManager();
     $isdeleted=$livre->deleteLivre($id);

     if(!$isdeleted){
          throw new Exception("Error while deleting");
          
     }else{
          Header('Location:index.php?action=view/livres');
     }
}

/*---------------------------lecteur---------------------------------------------*/

function deleteLecteur($id){
     $lecteur=new LecteurManager();
     $isdeleted=$lecteur->deleteLecteur($id);

     if(!$isdeleted){
          throw new Exception("Error while deleting");
          
     }else{
          Header('Location:index.php?action=view/lecteurs'); 
     }
     
}
/*-----------------------pret--------------------------------------------------*/

function deletePret($id){
     $pret=new PretManager();
     $isdeleted=$pret->deletePret($id);
     if(!$isdeleted){
          throw new Exception("Error while deleting pret");
          
     }else{
          Header('Location:index.php?action=view/prets');
     }
}


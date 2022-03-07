<?php
require_once('model/lecteurManager.php');
require_once('model/livreManager.php');
require_once('model/pretManager.php');
/*------------------------------lecteur----------------------------------------------------------------------*/
function listLecteur(){
     $lecteurs=new LecteurManager();
     $list=$lecteurs->getsLecteur();

     require('view/lecteurview.php');
}

/*--------------------------------livre---------------------------------------------------------------------*/


function listLivre(){
     $livres=new LivreManager();
     $list=$livres->getsLivre();

     require('view/livreview.php');
}

/*----------------------------------prets-------------------------------------------------------------------- */

function listPret(){
     $prets=new PretManager();
     $list=$prets->getsPret();

     require('view/pretview.php');
}
function situationLivre(){
     $livre=new LivreManager();
     $list=$livre->getsLivre();
     require('view/situationlivre.php');
}

/*----------------------------------listepret------------------------------------------- */

function listePret($id){
     $lecteur=new LecteurManager();
     $lect=$lecteur->getLecteur($id);

     $list=$lecteur->getListpret($id);
     require('view/listpretview.php');
}
function genPdf($id){
     $lecteur=new LecteurManager();
     $lect=$lecteur->getLecteur($id);

     $list=$lecteur->getListpret($id);
     require('view/genpdf.php');
}


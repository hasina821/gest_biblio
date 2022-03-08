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
function getlivreByauteur($auteur){
     $livre=new LivreManager();
     $list=$livre->getLivreByauteur($auteur);
     require('view/livreview.php');
}

function getlivreBytitle($titre){
     $livre=new LivreManager();
     $list=$livre->getLivreBytitle($titre);
     require('view/livreview.php');
}

function onlivre($numlivre){
     $livre=new LivreManager();
     $list=$livre->getLivre($numlivre);
     require('view/onlivre.php');
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

function listePret($numlect){
     $lecteur=new LecteurManager();
     $lect=$lecteur->getLecteur($numlect);

     $list=$lecteur->getListpret($numlect);
     require('view/listpretview.php');
}
function genPdf($numlect){
     $lecteur=new LecteurManager();
     $lect=$lecteur->getLecteur($numlect);

     $list=$lecteur->getListpret($numlect);
     require('view/genpdf.php');
}


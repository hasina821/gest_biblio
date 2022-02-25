<?php
require('model/lecteurManager.php');
require('model/livreManager.php');
require('model/pretManager.php');
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
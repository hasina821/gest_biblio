<?php $title = 'LISTE DE LIVRE'; ?>
<?php ob_start(); ?>
    <div class="mx-auto col-10" id="main">
      <section id="header" class="d-flex align-items-center">
        <div class="container d-flex flex-column align-items-center">
            <div class="countdown d-flex justify-content-center  w-50">
                <div class="w-50 sec1">
                <a href="index.php?action=view/livres"><h3>VOIR TOUS  LES LIVRES</h3></a>
                </div>
            </div>
            <div class="card" style="width: 18rem;">
          <img src="https://i.ytimg.com/vi/xUtzieZXLY0/maxresdefault.jpg" class="card-img-top" alt="...">
          <div class="card-body">
          <h5 class="card-title text-dark font-weight-bold"><?= $list['designation']?></h5>
          <h1 class="card-text"></h1>
          </div>
          <?php
               if($list['disponibilite']==0){
                    $dispo='<span class="text-danger">Non</span>';
               }else{
                    $dispo='<span class="text-primary">Oui</span>';  
               }
          ?>
          <ul class="list-group list-group-flush">
          <li class="list-group-item">Titre: <span class="text-primary"><?= $list['titre']?></span></li>
          <li class="list-group-item">Auteur: <span class="text-primary"><?= $list['auteur']?></span></li>
          <li class="list-group-item">Disponibilte: <?=$dispo?></li>
          </ul>
          </div>
        </div>
      </section>
    </div>
<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>
  
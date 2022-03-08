<?php $title = 'LISTE DE PRET'; ?>
<?php ob_start(); ?>
          <div class="col-10  mt-5" id="list_pret">
               <h1 class="text-danger font-weight-bolder">LISTE DE PRET</h1>
               <h4 class="text-dark">Numero lecteur : <?=$lect['nom']?></h4>
               <h4 class="text-dark">Nom lecteur: <?=$lect['prenom']?></h4>
               <table class="table">
                    <caption class="mt-5 text-danger bg-warning">Nombre de livre: <?=count($list)?></caption>
                    <thead class="text-danger">
                      <tr>
                        <th scope="col">DESIGNATION</th>
                        <th scope="col">AUTEUR</th>
                        <th scope="col">DATE_EDITION</th>
                        <th scope="col">DATE_PRET</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                      foreach ($list as $listpret) {
                      echo<<<LISTPRET
                      <tr>
                        <th scope="row">{$listpret['designation']}</th>
                        <td>{$listpret['auteur']}</td>
                        <td>{$listpret['date_edition']}</td>
                        <td>{$listpret['date_pret']}</td>
                      </tr>
                      LISTPRET;
                      }
                      ?>
                    </tbody>
                  </table>
                 <a href="index.php?action=view/genpdf/<?=$lect['numlect']?>"><button type="submit" class="btn btn-success" style="margin-top: 25px;margin-bottom:20px ;float:right;">Generer un pdf</button></a>
          </div>
<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>
  
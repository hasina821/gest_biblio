<?php $title = 'LISTE DE LIVRE'; ?>
<?php ob_start(); ?>
    <div class="mx-auto col-10" id="main">
      <section id="header" class="d-flex align-items-center">
        <div class="container d-flex flex-column align-items-center">
            <div class="countdown d-flex justify-content-center  w-50">
                <div class="w-50 sec1">
                <a href="index.php?action=adding/livre"><h3>Ajouter</h3></a>
                </div>
                <div class="w-50 sec1">
                <a href="index.php?action=view/situation"><h3>Situation</h3></a>
                </div>
            </div>
          <section class="w-100" id="tableau">
            <h2 class="text-dark x text-center bg-primary">LISTE DE LIVRE</h2>
            <form method="post" action="index.php?action=view/livres" >
              <input type="text" name="auteur" placeholder="auteur"/> 
              <input   type="text" name="titre" placeholder="titre"/> 
              <input type="submit" class="btn btn-primary" value="Rechercher"/>
            </form>
            <table class="table table-striped ">
              <thead>
                <tr>
                  <th scope="col">Numero</th>
                  <th scope="col">Titre</th>
                  <th scope="col">Auteur</th>
                  <th scope="col">Date_edition</th>
                  <th scope="col">Disponible</th>
                  <th scope="col">Consulter</th>
                  <th scope="col" class="text-center">Action</th>
                </tr>
              </thead>
              <tbody>
                <?php
                while($livre=$list->fetch()){
                  if($livre['disponibilite']==1) {
                    $status="oui";
                }else{
                      $status="non";
                }
                echo <<<LIVRE
                <tr>
                  <th scope="row">{$livre['numlivre']}</th>
                  <td>{$livre['titre']}</td>
                  <td>{$livre['auteur']}</td>
                  <td>{$livre['date_edition']}</td>
                  <td>{$status}</td>
                  <td><a href="index.php?action=view/livre/{$livre['numlivre']}"><button class="btn btn-success">voir</button></a></td>
                  <td class="text-center">
                   <a href="index.php?action=updating/livre/{$livre['numlivre']}"><i  class="material-icons" style="font-size:36px;color:rgb(13, 111, 141);cursor: pointer;">mode_edit</i></a>
                  <a href="index.php?action=delete/livre/{$livre['id']}"><i class="material-icons" style="font-size:36px;color:red;cursor: pointer;">delete</i></a>
                  </td>
                </tr>
                LIVRE;
                }
                ?>
              </tbody>
            </table>
        </section>
        </div>
      </section>
    </div>
<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>
  
<?php $title="liste_lecteur";?>
<?php ob_start();?>

    <div class="mx-auto col-10" id="main">
      <section id="header" class="d-flex align-items-center">
        <div class="container d-flex flex-column align-items-center">
            <div class="countdown d-flex justify-content-center  w-50">
                <div class="w-50 sec1">
                <a href="index.php?action=adding/lecteur"><h3>Ajouter</h3></a>
                </div>
            </div>
          <section class="w-100" id="tableau">
            <h2 class="text-dark x text-center bg-primary">LISTE DE LECTEUR</h2>
            <form action="">
              <input type="text" placeholder="Numero"> <input placeholder="Nom" type="text"> <label class="text-dark" for=""><button class="btn btn-primary">Rechercher</button></label>
            </form>
            <table class="table table-striped ">
              <thead>
                <tr>
                  <th scope="col">Numero</th>
                  <th scope="col">Nom</th>
                  <th scope="col">Prenom</th>
                  <th scope="col">Consulter</th>
                  <th scope="col" class="text-center">Action</th>
                </tr>
              </thead>
              <tbody>
                <?php
                while($lis=$list->fetch()){
                echo <<<LECTEUR
                <tr>
                  <th scope="row">{$lis['id']}</th>
                  <td>{$lis['nom']}</td>
                  <td>{$lis['prenom']}</td>
                  <td><a href="index.php?action=view/listepret/{$lis['id']}"><button class="btn btn-success">LISTE DE PRET</button></a></td>
                  <td class="text-center">
                   <a href="index.php?action=updating/lecteur/{$lis['id']}"><i class="material-icons" style="font-size:36px;color:rgb(13, 111, 141);cursor: pointer;">mode_edit</i></a> 
                   <a href="index.php?action=delete/lecteur/{$lis['id']}"> <i  class="material-icons" style="font-size:36px;color:red;cursor: pointer;">delete</i>
                  </td></a>
                </tr>
                LECTEUR;
                }
                ?>
              </tbody>
            </table>
        </section>
        </div>
      </section>
    </div>
<?php $content=ob_get_clean();?>
<?php require('template.php');?>
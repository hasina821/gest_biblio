<?php $title="pret";?>
<?php ob_start();?>

    <div class="mx-auto col-10" id="main">
      <section id="header" class="d-flex align-items-center">
        <div class="container d-flex flex-column align-items-center">
            <div class="countdown d-flex justify-content-center  w-50">
                <div class="w-50 sec1">
                <a href="index.php?action=adding/pret"><h3>Ajouter</h3></a>
                </div>
                <div class="w-50 sec1">
                  <h3>Liste de pret</h3>
                </div>
            </div>
          <section class="w-100" id="tableau">
            <h2 class="text-dark x">PRET</h2>
            <form action="">
              <input type="text" placeholder="auteur"> <input placeholder="titre" type="text"> <label class="text-dark" for=""><button class="btn btn-primary">Rechercher</button></label>
            </form>
            <table class="table table-striped ">
              <thead>
                <tr>
                  <th scope="col">Numero</th>
                  <th scope="col">Numero_lecteur</th>
                  <th scope="col">Numero_livre</th>
                  <th scope="col">Date_pret</th>
                  <th scope="col">Date_retour</th>
                  <th scope="col">Consulter</th>
                  <th scope="col" class="text-center">Action</th>
                </tr>
              </thead>
              <tbody>
                <?php
                while($pret=$list->fetch()){
                echo <<<PRET
                <tr>
                  <th scope="row">{$pret['id']}</th>
                  <td>{$pret['id_lecteur']}</td>
                  <td>{$pret['id_livre']}</td>
                  <td>{$pret['date_pret']}</td>
                  <td>{$pret['date_retour']}</td>
                  <td><button class="btn btn-success">Voir</button></td>
                  <td class="text-center">
                   <a href="index.php?action=updating/pret/{$pret['id']}"> <i class="material-icons" style="font-size:36px;color:rgb(13, 111, 141);cursor: pointer;">mode_edit</i></a>
                    
                  <a href="index.php?action=delete/pret/{$pret['id']}"><i class="material-icons" style="font-size:36px;color:red;cursor: pointer;">delete</i></a>
                  </td> 
                </tr>
                PRET;
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
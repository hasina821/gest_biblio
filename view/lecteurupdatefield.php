<?php $title="Ajouter_lecteur";?>
<?php ob_start();?>
          <div class="mx-auto col-10 bg-dark container" id="main" style="opacity: 0.9;">
               <form class="w-25 mx-auto mt-5 " action="index.php?action=update/lecteur/<?=$lect['id'];?>" method="post">
                    <div class="form-group">
                         <label for="Numero_livre">Numéro</label>
                         <input value=<?=$lect['numlect'];?> type="text" name="numlect" class="form-control"  placeholder="Numéro lecteur">
                    </div>
                    <div class="form-group">
                         <label for="nom">Nom:</label>
                         <input value=<?=$lect['nom'];?> type="text"  name="nom" class="form-control" id="nom" placeholder="Nom">
                    </div>
                         <div class="form-group">
                         <label for="prenom">Prenom:</label>
                         <input value=<?=$lect['prenom'];?> type="text"  name="prenom" class="form-control" id="prenom" placeholder="Prenom">
                    </div>
                    <button type="submit"
                    name="submit" class="btn btn-primary" style="margin-top: 25px; margin-bottom:20px ; float:right;">Mettre à jour</button>
               </form>
          </div>
     </div>
<?php $content=ob_get_clean();?>
<?php require('template.php');?>
<?php $title="Ajouter_lecteur";?>
<?php ob_start();?>
          <div class="mx-auto col-10 bg-dark container" id="main" style="opacity: 0.9;">
               <form class="w-25 mx-auto mt-5 " action="index.php?action=posting/lecteur" method="post">
                    <div class="form-group">
                         <label for="Numero_livre">Numéro</label>
                         <input type="text" class="form-control" name="numlect"  placeholder="LECT00." required>
                    </div>
                    <div class="form-group">
                         <label for="nom">Nom:</label>
                         <input type="text"  name="nom" class="form-control" id="nom" placeholder="Nom" required>
                    </div>
                         <div class="form-group">
                         <label for="prenom">Prenom:</label>
                         <input type="text"  name="prenom" class="form-control" id="prenom" placeholder="Prenom" required>
                    </div>
                    <button type="submit"
                    name="submit" class="btn btn-primary" style="margin-top: 25px; margin-bottom:20px ; float:right;">Ajouter</button>
               </form>
          </div>
     </div>
<?php $content=ob_get_clean();?>
<?php require('template.php');?>
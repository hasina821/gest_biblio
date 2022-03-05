<?php $title="AJOUTER_PRET" ?>
<?php ob_start();?>
          <div class="mx-auto col-10 bg-dark container" id="main" style="opacity: 0.9;">
               <form class="w-25 mx-auto mt-5" method="post" action="index.php?action=posting/pret" >
                    <div class="form-group">
                         <label for="Numero lecteur">Numéro lecteur</label>
                         <input name='id_lecteur' type="text" class="form-control"  placeholder="Numéro lecteur">
                    </div>
                    <div class="form-group">
                         <label for="Numero_livre">Numéro livre</label>
                         <input name='id_livre' type="text" class="form-control" placeholder="Numéro livre">
                    </div>
                    <div class="form-group">
                         <label for="DateR">Dates de retour</label>
                         <input name='date_retour' type="text" class="form-control" placeholder="YY-MM-DD">
                    </div>
                    <button type="submit" class="btn btn-primary" style="margin-top: 25px;margin-bottom:20px ;float:right;">Ajouter</button>
               </form>
          </div>
     </div>
<?php $content=ob_get_clean();?>
<?php require('template.php');?>
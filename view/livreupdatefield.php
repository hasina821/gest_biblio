<?php $title='AJOUTER_LIVRE'?>
<?php ob_start();?>
          <div class="mx-auto col-10 bg-dark " id="main" style="opacity: 0.8;">
               <form class="w-25 mx-auto mt-5 " method="post" action="index.php?action=update/livre/<?php echo $liv['id']?>" >
                    <div class="form-group">
                         <label for="nom">Designation:</label>
                         <select value=<?php echo $liv['designation'];?> class="form-select" name="designation" id="design">
                              <option value="Mathe">Mathematique</option>
                              <option value="Pc">Physique</option>
                              <option value="Histo-Geo">Histoire</option>
                              <option value="roman">Roman</option>
                              <option value="Science">Science-Naturelles</option>
                              <option value="Philo">Philosophie</option>
                         </select>
                    </div>
                    <div class="form-group">
                              <label for="titre">Titre:</label>
                              <input type="text" value=<?php echo $liv['numlivre'];?> name="numlivre" class="form-control" id="tittre">
                    </div>
                    <div class="form-group">
                              <label for="titre">Titre:</label>
                              <input type="text" value=<?php echo $liv['titre'];?> name="titre" class="form-control" id="tittre">
                    </div>
                    <div class="form-group">
                         <label for="auteur">Auteur:</label>
                         <input type="text"  value=<?php echo $liv['auteur'];?> name="auteur" class="form-control" id="auteur">
                    </div>
                    <div class="form-group">
                              <label for="auteur">Date_edition:</label>
                              <input type="text" value=<?php echo $liv['date_edition'];?> name="date_edition" class="form-control" id="date_edition" placeholder="YY-MM-DD">
                    </div>
                    <button type="submit" class="btn btn-primary mt-4" name="submit">Mettre à jour</button>
               </form>
               
          </div>
     </div>

<?php $content = ob_get_clean(); ?>
<?php require('template.php'); ?>
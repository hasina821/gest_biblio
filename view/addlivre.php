<?php $title='AJOUTER_LIVRE'?>
<?php ob_start();?>

          <div class="mx-auto col-10 bg-dark " id="main" style="opacity: 0.8;">
               <form class="w-25 mx-auto mt-5 " method="post" action="index.php?action=posting/livre" >
                    <div class="form-group">
                         <label for="nom">Designation:</label>
                         <select class="form-select" name="designation" id="design">
                              <option value="Mathe">Mathematique</option>
                              <option value="Pc">Physique</option>
                              <option value="Histo-Geo">Histoire</option>
                              <option value="roman">Roman</option>
                              <option value="Science">Science-Naturelles</option>
                              <option value="Philo">Philosophie</option>
                         </select>
                    </div>
                    <div class="form-group">
                              <label for="titre">Num_du livre:</label>
                              <input type="text"  name="numlivre" class="form-control" id="tittre" placeholder="L001" required>
                    </div>
                    <div class="form-group">
                              <label for="titre">Titre:</label>
                              <input type="text"  name="titre" class="form-control" id="tittre" required>
                    </div>
                    <div class="form-group">
                         <label for="auteur">Auteur:</label>
                         <input type="text"  name="auteur" class="form-control" id="auteur" required>
                    </div>
                    <div class="form-group">
                              <label for="auteur">Date_edition:</label>
                              <input type="text"  name="date_edition" class="form-control" id="date_edition" placeholder="YY-MM-DD" required>
                    </div>
                    <button type="submit" class="btn btn-primary mt-4" name="submit">Ajouter</button>
               </form>
          </div>
     </div>

<?php $content = ob_get_clean(); ?>
<?php require('template.php'); ?>
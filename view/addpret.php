<!Doctype html>
<html>
     <head>
          <meta charset="utf-8">
          <link rel="stylesheet" href="../assets/css/bootstrap.css">
     </head>
     <body>              
          <div class="container mt-4">
          <h2 class="text-primary">Ajouter un nouveau pret</h2>
          <form method="post" action='index.php?action=postclient'>
               <div class="form-group">
                    <label for="id_l">Nom du lecteur:</label>
                    <select class="form-select" name="id_lecteur" id="id_l">
                         <?php
                         while($lect=$listlecteur->fetch()){
                         echo <<<OPTION
                              <option value="1">{$lect['nom']}</option>;
                              OPTION;
                         }
                         ?>
                    </select>
               </div>
               <div class="form-group">
               <label for="solde">Numero du Livre:</label>
                         <input type="number"  name="id_livre" class="form-control" id="travail">
               </div>
               <div class="form-group">
                         <label for="solde">Date_pret:</label>
                         <input type="number"  name="date_pret" class="form-control" id="travail" placeholder="YY-MM-DD">
               </div>
               <div class="form-group">
                         <label for="datenais">Date_retour:</label>
                         <input type="text"  name="date_retour" class="form-control" id="datenais" placeholder="YY-MM-DD">
               </div>  
               <button type="submit" class="btn btn-primary mt-4" name="submit">Ajouter</button>
          </form> 
          </div>
          
     </body>
</html>
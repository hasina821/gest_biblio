<!Doctype html>
<html>
     <head>
          <meta charset="utf-8">
          <link rel="stylesheet" href="../assets/css/bootstrap.css">
     </head>
     <body>
          <div class="container mt-4">
          <h2 class="text-primary">Ajouter un nouveau livre</h2>
          <form method="post" action='../index.php?action=posting/livre'>
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
                         <label for="titre">Titre:</label>
                         <input type="text"  name="titre" class="form-control" id="tittre">
               </div>
               <div class="form-group">
                         <label for="auteur">Auteur:</label>
                         <input type="text"  name="auteur" class="form-control" id="auteur">
               </div>
               <div class="form-group">
                         <label for="auteur">Date_edition:</label>
                         <input type="text"  name="date_edition" class="form-control" id="date_edition" placeholder="YY-MM-DD">
               </div>
               <button type="submit" class="btn btn-primary mt-4" name="submit">Ajouter</button>
          </form>
          </div>
     </body>
</html>
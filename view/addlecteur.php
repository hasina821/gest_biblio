<!Doctype html>
<html>
     <head>
          <meta charset="utf-8">
          <link rel="stylesheet" href="../assets/css/bootstrap.css">
     </head>
     <body>                
          <div class="container mt-4">
          <h2 class="text-primary">Ajouter un nouveau lecteur</h2>
          <form action="../index.php?action=posting/lecteur" method="post" >
               <div class="form-group">
                    <label for="nom">Nom:</label>
                    <input type="text"  name="nom" class="form-control" id="nom">
               </div>
               <div class="form-group">
                    <label for="prenom">Prenom:</label>
                    <input type="text"  name="prenom" class="form-control" id="prenom">
               </div>
               <button type="submit" class="btn btn-primary mt-4" name="submit">Ajouter</button>
          </form> 
          </div>
     </body>
</html>
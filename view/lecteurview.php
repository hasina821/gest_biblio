<!Doctype>
<html>
     <head>
          <meta charset='utf-8'>
          <link rel='stylesheet' href='assets/css/bootstrap.css'>
     </head>
     <body>
          
          <div class='container mt-4'>
          <a href="index.php?action=adding/voyageur"><button class="btn btn-primary w-25">Ajouter nouveau voyageur</button></a>
          <form action="" style="margin-top:15px">
               <input type="text" placeholder='Nom'><input type="text" placeholder='Prenom' style="margin-left:15px"><button class="btn btn-primary" style="margin-left:15px" for="">Rechercher</button>
          </form>
          <table class="table mt-4">
               <thead class='bg-primary'>
               <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nom</th>
                    <th scope="col">Prenom</th>
                    <th scope="col">Voir Prets</th>
                    <th scope="col">Modifier</th>
                    <th scope="col">Supprimer</th>
               </tr>
               </thead>
               <tbody class='bg-dark text-white'>
               
                    <?php
                    
                         while($post = $list->fetch()) {
                              
                         echo <<<CLIENT
                              <tr>
                              <th scope="row">{$post['id']}</th>
                              <td>{$post['nom']}</td>
                              <td>{$post['prenom']}</td>
                              <td>
                                   <button type="button" class="btn btn-success"><a href="index.php?action=update&id={$post['id']}" class="text-light">Liste pret</a></button>
                              </td>
                              <td>
                                   <button type="button" class="btn btn-warning"><a href="index.php?action=update&id={$post['id']}" class="text-light">Modifier</a></button>
                              </td>
                              <td>
                                   <button type="button" class="btn btn-danger"><a href="index.php?action=delete&id={$post['id']}" class="text-light">Supprimer</a></button>
                              </td>
                              </tr>
                         CLIENT;
                         }
                    
                    ?>
               </tbody>
          </table>
     </body>
</html>
<!Doctype>
<html>
     <head>
          <meta charset='utf-8'>
          <link rel='stylesheet' href='assets/css/bootstrap.css'>
     </head>
     <body>
          
          <div class='container mt-4'>
          <a href="index.php?action=adding/pret"><button class="btn btn-primary w-25">Ajouter un  nouveau Pret</button></a>
          <table class="table mt-4">
               <thead class='bg-primary'>
               <tr>
                    <th scope="col">Num_lecteur</th>
                    <th scope="col">Num_livre</th>
                    <th scope="col">Date_pret</th>
                    <th scope="col">Date_retour</th>
                    <th scope="col">Modifier</th>
                    <th scope="col">Supprimer</th>
                    
               </tr>
               </thead>
               <tbody class='bg-dark text-white'>
               
                    <?php
                         while($pret = $list->fetch()) {
                              
                         echo <<<CLIENT
                              <tr>
                              <td>{$pret['id_lecteur']}</td>
                              <td>{$pret['id_livre']}</td>
                              <td>{$pret['date_pret']}</td>
                              <td>{$pret['date_retour']}</td>
                              <td>
                                   <button type="button" class="btn btn-warning"><a href="index.php?action=update&id={$pret['id']}" class="text-light">Modifier</a></button>
                              </td>
                              <td>
                                   <button type="button" class="btn btn-danger"><a href="index.php?action=delete&id={$pret['id']}" class="text-light">Supprimer</a></button>
                              </td>
                              </tr>
                         CLIENT;
                         }
                    ?>
               </tbody>
          </table>
          </div>
     </body>
</html>
<!Doctype>
<html>
     <head>
          <meta charset='utf-8'>
          <link rel='stylesheet' href='assets/css/bootstrap.css'>
     </head>
     <body>
          
          <div class='container mt-4'>
          <a href="index.php?action=adding/livre"><button class="btn btn-primary w-25">Ajouter un nouveau Livre</button></a>
          <form action="" style="margin-top:15px">
               <input type="text" placeholder='Auteur'><input type="text" placeholder='Titre' style="margin-left:15px"><button class="btn btn-primary" style="margin-left:15px" for="">Rechercher</button>
          </form>
          <table class="table mt-4">
               <thead class='bg-primary'>
               <tr>
                    <th scope="col">ID</th>
                    <th scope="col">titre</th>
                    <th scope="col">autheur</th>
                    <th scope="col">date_edition</th>
                    <th scope="col">Disponible</th>
                    <th scope="col">Situation</th>
                    <th scope="col">Modifier</th>
                    <th scope="col">Supprimer</th>
               </tr>
               </thead>
               <tbody class='bg-dark text-white'>
               
                    <?php
                         while($livre = $list->fetch()) {
                            if($livre['disponibilite']==1) {
                                 $status="oui";
                            }else{
                                 $status="non";
                            }
                         echo <<<CLIENT
                              <tr>
                              <th scope="row">{$livre['id']}</th>
                              <td>{$livre['designation']}</td>
                              <td>{$livre['titre']}</td>
                              <td>{$livre['date_edition']}</td>
                              <td>{$status}</td>
                              <td>
                                   <button type="button" class="btn btn-success"><a href="index.php?action=update&id={$livre['id']}" class="text-light">Voir situation</a></button>
                              </td>
                              <td>
                                   <button type="button" class="btn btn-warning"><a href="index.php?action=update&id={$livre['id']}" class="text-light">Modifier</a></button>
                              </td>
                              <td>
                                   <button type="button" class="btn btn-danger"><a href="index.php?action=delete&id={$livre['id']}" class="text-light">Supprimer</a></button>
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
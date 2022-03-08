<?php $title="situation_livre"?>
<?php ob_start();?>
          <div class="col-10  mt-5" id="list_pret">
               <h1 class="text-danger font-weight-bolder">Situation de livre</h1>
               <table class="table">
                    <thead class="text-danger">
                      <tr>
                        <th scope="col">Numero_livre</th>
                        <th scope="col">DESIGN</th>
                        <th scope="col">AUTEUR</th>
                        <th scope="col">DATE_EDITION</th>
                        <th scope="col">DISPONIBILITE</th>
                        <th scope="col">NB_FOIS PRÊT</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                      while($livre=$list->fetch()){
                       if($livre['nbfoisprete']===null){
                         $fois=0;
                       }else{
                        $fois=$livre['nbfoisprete'];
                       }
                       if($livre['disponibilite']==1) {
                        $status="oui";
                      }else{
                            $status="non";
                      }
                      echo <<<SITUATION
                      <tr>
                        <th scope="row">{$livre['numlivre']}</th>
                        <td>{$livre['designation']}</td>
                        <td>{$livre['auteur']}</td>
                        <td>{$livre['date_edition']}</td>
                        <td>{$status}</td>
                        <td>{$fois}</td>
                      </tr>
                      SITUATION;
                      }
                      ?>
                    </tbody>
                  </table>
          </div>
<?php $content=ob_get_clean();?>
<?php require('template.php');?>

<?php

ini_set('display_errors','on');
header("Access-Control-Allow-Origin: *");                                                                 
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");



try
{
     
    if(!empty($_GET['action']))
    {
        $url = explode("/", filter_var($_GET['action']), FILTER_SANITIZE_URL);
        switch($url[0])
        {
          case 'view':
            require_once("controller/gets.php");
               switch ($url[1]) {
                    case 'lecteurs':
                        listLecteur();
                         break;
                    case 'livres':
                        listLivre();
                        break;
                    case 'prets':
                        listPret();
                        break;
                    case 'situation':
                        situationLivre();
                        break;
                    case 'listepret':
                        listePret($url[2]);
                    break;
                    default:
                        listLecteur();
                         break;
               }
          break;
          case "adding":
               require_once("controller/adding.php");
               switch ($url[1]) {
                    case 'lecteur':
                         addlecteurfield();
                         break;
                    case 'livre':
                        addlivrefield();
                        break;
                    case 'pret':
                        addpretfield();
                        break;
                    default:
                         addvoyageurfield();
                         break;
               }
          break;
          case "updating":
            require_once("controller/updating.php");
            switch ($url[1]) {
                case 'livre':
                    getlivreinfo($url[2]);
                    break;
                case 'lecteur':
                    getLecteurinfo($url[2]);
                    break;
                case 'pret':
                    getPretinfo($url[2]);
                    break;
                default:
                    getupdatelivrefield($url[2]);
                    break;
            }
            break;
          case "posting":
               require_once("controller/adding.php");
               switch ($url[1]) {
                    case 'lecteur':
                         if(!empty($_POST['nom']) AND !empty($_POST['prenom'])){
                            addLecteur($_POST['nom'],$_POST['prenom']);
                         }else{
                              throw new Exception("Il faut bien remplir tous les champs");
                         }
                    break;
                    case 'livre':
                        if(!empty($_POST['designation']) AND !empty($_POST['titre']) AND !empty($_POST['auteur']) AND !empty($_POST['date_edition'])){
                            addLivre($_POST['designation'],$_POST['titre'],$_POST['auteur'],$_POST['date_edition']);
                        }else{
                            throw new Exception("Il faut bien remplir tous les champs");
                        }
                    break;
                    case 'pret':
                        if(!empty($_POST['id_lecteur']) AND !empty($_POST['id_livre']) AND !empty($_POST['date_retour'])){
                            addPret($_POST['id_lecteur'],$_POST['id_livre'],$_POST['date_retour']);
                        }else{
                            throw new Exception("Il faut bien remplir tous les champs");
                        }
                    break;
                    default:
                         
                         break;
               }
            break;
            case "delete":
                require_once('controller/delete.php');
                switch ($url[1]) {
                    case 'livre':
                        deleteLivre($url[2]);
                        break;
                    case 'lecteur':
                        deleteLecteur($url[2]);
                        break;
                    case 'pret':
                        deletePret($url[2]);
                    break;
                    default:
                        # code...
                        break;
                }
            break;

            case "update":
                require_once('controller/updating.php');
                switch ($url[1]) {
                    case 'livre':
                        if(!empty($_POST['designation']) AND !empty($_POST['titre']) AND !empty($_POST['auteur']) AND !empty($_POST['date_edition'])){
                            updateLivre($_POST['designation'],$_POST['titre'],$_POST['auteur'],$_POST['date_edition'],$url[2]);
                        }else{
                            throw new Exception("Il faut bien remplir tous les champs");
                        }
                        break;
                    case 'lecteur':
                        if(!empty($_POST['nom']) AND !empty($_POST['prenom'])){
                            updateLecteur($_POST['nom'],$_POST['prenom'],$url[2]);
                         }else{
                              throw new Exception("Il faut bien remplir tous les champs");
                         }
                    case 'pret':
                        if(!empty($_POST['id_lecteur']) AND !empty($_POST['id_livre']) AND !empty($_POST['date_pret']) AND !empty($_POST['date_retour'])){
                            updatePret($_POST['id_lecteur'],$_POST['id_livre'],$_POST['date_pret'],$_POST['date_retour'],$url[2]);
                        }else{
                            throw new Exception("Il faut bien remplir tous les champs");

                        }
                        break;
                    default:
                        # code...
                        break;
                }
            break;

            case "getters":
                if(!empty($url[1]))
                {
                    if(!empty($url[2]))
                    {
                        /*
                         */
                    }
                    else
                    {
                        throw new Exception("Aucun ID n'a été passé sur l'URL...!", 404);   
                    }
                }
                else
                {
                    throw new Exception("La demande est invalide. Veuillez verifier l'URL...!", 500);
                }
            break;

            default: throw new Exception("La demande n'est pas validée. Veuillez verifier l'URL...!", 500);
        }
    }
    else
    {
        require_once('view/accueil.php');
    }
}
catch(Exception $e)
{
    $errors = array(
        'status' => false,
        'message' => $e -> getMessage(),
        'code' => $e -> getCode()
    );
    header('Content-Type: application/json');
    echo json_encode($errors, JSON_FORCE_OBJECT);
}
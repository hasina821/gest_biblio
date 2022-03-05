<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <?php $title; ?>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

</head>
<body>
     <div id="content" class="row">
          <div class="col ">
               <div class="card" style="width: 100%;">
                    <div class="card-header bg-dark x">
                         BIBLIOTHEQUE 
                    </div>
                    <ul class="list-group list-group-flush bg-warning">
                        <div>
                         <button><li class="list-group-item bg-warning"><h2 class="x">
                         <a href="index.php?action=view/livres"
                         >GESTION DE LIVRE</a></h2></li></button>
                         </div>
                         <div class="countdown">
                         <div>
                         <button><li id="lect" class="list-group-item bg-warning"><h2 class="x"><a href="index.php?action=view/lecteurs">GESTION DE LECTEUR</a></h2></li></button>
                         </div>
                         <div>
                         <button><li class="list-group-item bg-warning"><h2 class="x">
                         <a href="index.php?action=view/prets"
                         >GESTION DE PRET</a></h2></li></button>
                         </div>
                         </div>
                    </ul>
               </div>
          </div>
          <?= $content ?>
     </div>
  <footer id="footer">
    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>Biblio</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        Designed by <a href="#">Hasina R</a>
      </div>
    </div>
  </footer><!-- End #footer -->
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
</body>

</html>
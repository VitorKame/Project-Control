<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>SB Admin 2 - Register</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gray-800">

  <div class="container">

    <div class="card o-hidden border-0 shadow-lg my-5">
      <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row">
          <div class="col-lg-5 d-none d-lg-block bg-gradient-warning"></div>
          <div class="col-lg-7 bg-gray-900">
            <div class="p-5">
              <div class="text-center">
                <h1 class="h4 text-white mb-4">Criar Conta!</h1>
              </div>
                <form class="user" action="insert.php" method="POST">
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                      <input type="text" class="form-control form-control-user" name="user" id="user" placeholder="Nome">
                  </div>
                  <div class="col-sm-6">
                      <input type="password" class="form-control form-control-user" name="pass" id="pass" placeholder="Senha">
                  </div>
                </div>
                <div class="form-group">
                    <input type="email" class="form-control form-control-user" name="email" id="email" placeholder="Email">
                </div>
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                      <?php
                      date_default_timezone_set('America/Sao_Paulo');
                      //$regra = (date_default_timezone_set("America/Sao_Paulo") * date_default_timezone_set("America/Sao_Paulo"));
                      $regra = (date("s") / date("m"));
                      echo'[', $regra, ']<br>';
                      echo'<label><input type="text" class="form-control form-control-user" name="regra" value="" placeholder="Validador"></label>';
                      ?>
                    <!--<input type="text" class="form-control form-control-user" id="exampleInputPassword" placeholder="validador">-->
                  </div>
                  <div class="col-sm-6">
                      <input type="hidden" class="form-control form-control-user" name="gerarchave" placeholder="validador2" value="<?php echo $regra; ?>">
                  </div>
                </div>
                    <button type="submit" class="btn btn-primary btn-user btn-block">
                  Register Account
                </button>
              </form>
              <hr>
              <!--<div class="text-center">
                <a class="small" href="forgot-password.html">Esqueceu a senha?</a>
              </div>-->
              <div class="text-center">
                <a class="small" href="index.html">Já tem uma conta? Login!</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

</body>

</html>

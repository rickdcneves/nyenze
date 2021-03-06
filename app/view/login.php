<!DOCTYPE html>
<html lang="pt-pt">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title><?php echo $this->getTitle();?></title>

  <!-- Custom fonts for this template-->
  <link href="<?php echo DIRVENDOR."fontawesome-free/css/all.min.css"?>" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link  rel="stylesheet" href="<?php echo DIRCSS."sb-admin-2.min.css" ?>">

</head>

<body style="background-color:#fff952">

  <div class="container">

    <!-- Outer Row -->
    <div style="background-image: <?php echo DIRIMG."core-img/logo.png"?>"class="row justify-content-center">

      <div class="col-xl-10 col-lg-12 col-md-9">

        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
                <div class="col-lg-3 d-none d-lg-block"></div>
              <div class="col-lg-6">
                <div class="p-5">
                  <div class="text-center">
                      <h1 class="h4 text-gray-900 mb-4"><img style="width: 100%" src="<?php echo DIRIMG."core-img/logo.png"?>"><p style="color: red"><?php if(isset($_GET['msg'])){echo base64_decode($_GET['msg']); } ?></p></h1>
                  </div>
                    <form class="user" method="post" action="<?php echo DIRPAGE."login/verificar"; ?>">
                    <div class="form-group">
                        <input name="contacto" type="text" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Email ou Telefone">
                    </div>
                    <div class="form-group">
                        <input name="pass" minlength="8" type="password" class="form-control form-control-user" id="exampleInputPassword" placeholder="Palavra-Passe">
                    </div>
                    <div class="form-group">
                      <div class="custom-control custom-checkbox small">
                        <input type="checkbox" class="custom-control-input" id="customCheck">
                        <label class="custom-control-label" for="customCheck">Lembrar de Mim</label>
                      </div>
                    </div>
                        <input type="submit" value="Login" style="  background: #fff952" class="btn  btn-user btn-block">
                      
                    
                    <hr>
                  </form>
             
                  <!--<div class="text-center">
                    <a class="small" href="forgot-password.html">Forgot Password?</a>
                  </div>-->
                  <div class="text-center">
                    <a class="small" href="<?php echo DIRPAGE."conta"?>">Criar conta!</a>
                  </div>
                </div>
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

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
                      <h1 class="h4 text-gray-900 mb-4"><img style="width: 100%" src="<?php echo DIRIMG."core-img/logo.png"?>"></h1>
                  </div>
                  <form class="user">

            <div class="form-group row">
                <div class="col-sm-12 mb-3">
                    <input type="text" class="form-control form-control-user" id="exampleFirstName" name="nome" placeholder="Nome Completo" required>
                </div>
                <div class="col-sm-12 mb-3">
                    <select name="genero" class="form-control form-control-plaintext" id="name">
                        <option value="M">Masculino</option>
                        <option value="F">Feminino</option>

                    </select>
                </div>
                
                <div class="col-sm-12 mb-3 ">
                    <fieldset>
                        <legend>Data de Nascimento:</legend>
                        <input type="date" class="form-control form-control-user" id="exampleFirstName" name="dnasc" required>
                    </fieldset>
                </div>
                
                <div class="col-sm-12 mb-3 ">
                    <select name="genero" class="form-control form-control-plaintext" id="name">
                        <option value="N/Artista">N/Artista</option>
                        <option value="Artista">Artista</option>

                    </select>
                </div>
                      <hr>
                <div class="col-sm-12 mb-3">
                    <input type="email" class="form-control form-control-user" id="exampleInputPassword" name="email" placeholder="E-mail" required="">
                </div>

                <div class="col-sm-6 mb-3">
                    <input type="password" minlength="8" class="form-control form-control-user" id="password" placeholder="Palavra-Passe" name="pass" required>
                </div>
                <div class="col-sm-6">
                    <input type="password" minlength="8" class="form-control form-control-user" id="confirm_password" placeholder="Confirmação da Palavra-Passe" name="passconf" required>
                </div>

                <div class="col-sm-3 mb-3">
                    <input type="text" class="form-control form-control-user" id="exampleInputPassword" value="+244" disabled>
                </div>
                <div class="col-sm-9">
                    <input max="999999999" minlength="9" type="number" class="form-control form-control-user" id="exampleRepeatPassword" placeholder="Número de Telefone" name="numero" required>
                </div>                      
                <div class="col-sm-12 mb-3">
                    <fieldset>
                        <legend>Morada:</legend>
                            
                                <select name="provincia" class="form-control form-control-plaintext" id="name">
                                    <?php
                                        require_once DIRREQ."app/controller/ControllerProvincia.php";
                                        $dados= new \App\Controller\ControllerProvincia();
                                        $data=$dados->allProvincias();
                                        foreach ($data as $row) {

                                            echo "<option value=".$row['id'].">".$row['provincia']."</option>";

                                        }
                                        
                                    ?>
                                </select>
                            </div>
                            <div class="col-sm-12 mb-3">
                                <select name="municipio" class="form-control form-control-plaintext" id="name">
                                    <?php

                                        
                                        require_once DIRREQ."app/controller/ControllerMorada.php";
                                        $dados1= new \App\Controller\ControllerMorada();
                                        $data1=$dados1->allmorada();                                   
                                        foreach ($data1 as $row1) {
                                           echo "<option value=".$row1['id'].">".$row1['municipio']."</option>" ;

                                        }

                                    ?>
                            
                                </select>
                            </div>
                    </fieldset>
                 
                <div class="col-sm-12 mb-3 ">
                  <textarea type="text" name="descricaolocalizacao" class="form-control form-control-user" id="exampleInputEmail" placeholder="Endereço"></textarea>
                </div>
      
            </div>                      

            <a href="index.html" style="  background: #fff952" class="btn  btn-user btn-block">
            Criar Conta
          </a>
          <hr>
        </form>
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

</html>                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                           
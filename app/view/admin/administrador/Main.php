<!-- Begin Page Content -->
<div class="container-fluid">
  <!-- Nested Row within Card Body -->
    <div class="row">
      <div class="col-lg-2 d-none d-lg-block "></div>
      <div class="col-lg-7">
        <div class="p-5">
          <div class="text-center">
            <h1 class="h4 text-gray-900 mb-4">Cadastrar Administrador</h1>
          </div>
            <form class="pure-form" method="post" action="<?php echo DIRPAGE."administrador/cadastrar"?>">
            <div class="form-group row">
                <div class="col-sm-12 mb-3">
                    <input type="text" class="form-control" id="exampleFirstName" name="nome" placeholder="Nome Completo" required>
                </div>
                <div class="col-sm-12 mb-3">
                    <select name="genero" class="form-control" id="name">
                        <option value="M">Masculino</option>
                        <option value="F">Feminino</option>

                    </select>
                </div>
                
                <div class="col-sm-12 mb-3 ">
                    <fieldset>
                        <legend>Data de Nascimento:</legend>
                        <input type="date" class="form-control" id="exampleFirstName" name="dnasc" required>
                    </fieldset>
                </div>
               
                      <hr>
                <div class="col-sm-12 mb-3">
                    <input type="email" class="form-control" id="exampleInputPassword" name="email" placeholder="E-mail" required="">
                </div>

                <div class="col-sm-6 mb-3">
                    <input type="password" minlength="8" class="form-control" id="password" placeholder="Palavra-Passe" name="pass" required>
                </div>
                <div class="col-sm-6">
                    <input type="password" minlength="8" class="form-control" id="confirm_password" placeholder="Confirmação da Palavra-Passe" name="passconf" required>
                </div>

                <div class="col-sm-3 mb-3">
                    <input type="text" class="form-control" id="exampleInputPassword" value="+244" disabled>
                </div>
                <div class="col-sm-9">
                    <input max="999999999" minlength="9" type="number" class="form-control" id="exampleRepeatPassword" placeholder="Número de Telefone" name="numero" required>
                </div>                      
                <div class="col-sm-12 mb-3 ">
                    <fieldset>
                        <legend>Morada:</legend>
                            <div class="col-sm-12 mb-3">
                                <select name="provincia" class="form-control" id="name">
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
                            <div class='col-sm-12'>
                                <select name="municipio" class="form-control" id="name">
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
                </div> 
                <div class="col-sm-12 mb-3 ">
                  <textarea type="text" name="descricaolocalizacao" class="form-control" id="exampleInputEmail" placeholder="Endereço"></textarea>
                </div>
      
            </div>
            
            
                <input type="submit" value="Registar" class="btn btn-primary btn-user btn-block">
          </form>
          <hr>
        </div>
      </div>
    </div>
    </div>

    </div>
    <!-- End of Main Content -->
<script>
var password = document.getElementById("password")
  , confirm_password = document.getElementById("confirm_password");

function validatePassword(){
  if(password.value != confirm_password.value) {
    confirm_password.setCustomValidity("Senhas diferentes!");
  } else {
    confirm_password.setCustomValidity('');
  }
}

password.onchange = validatePassword;
confirm_password.onkeyup = validatePassword;
</script>
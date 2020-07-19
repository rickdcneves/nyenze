<!-- Begin Page Content -->
<div class="container-fluid">
  <!-- Nested Row within Card Body -->
    <div class="row">
      <div class="col-lg-2 d-none d-lg-block "></div>
      <div class="col-lg-7">
        <div class="p-5">
          <div class="text-center">
            <h1 class="h4 text-gray-900 mb-4">Adicionar Categoria</h1>
          </div>
            <form class="pure-form" method="post" action="<?php echo DIRPAGE."categoria/cadastrar"?>">
            <div class="form-group row">
                <div class="col-sm-12 mb-3">
                    <input type="text" class="form-control" id="exampleFirstName" name="nome" placeholder="Digite o Nome da Categoria" required>
                </div>

            </div>
            
            
                <input type="submit" value="Adicionar" class="btn btn-primary btn-user btn-block">
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
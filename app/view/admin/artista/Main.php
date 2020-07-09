<!-- Begin Page Content -->
<div class="container-fluid">
  <!-- Nested Row within Card Body -->
    <div class="row">
      <div class="col-lg-2 d-none d-lg-block "></div>
      <div class="col-lg-7">
        <div class="p-5">
          <div class="text-center">
            <h1 class="h4 text-gray-900 mb-4">Cadastrar Artista</h1>
          </div>
            <form class="user" method="post">
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
                            <input type="date" class="form-control" id="exampleFirstName" nome="dnasc" required>
                    </fieldset>
                </div>
                
                
                <div class="col-sm-3 mb-3">
                    <input type="text" class="form-control" id="exampleInputPassword" value="AO06" disabled>
                </div>
                <div class="col-sm-9">
                    <input max="999999999999999999999" maxlength="21" minlength="21" type="number" class="form-control" id="exampleRepeatPassword" placeholder="IBAM" nome="ibam" required>
                </div>
                <div class="col-sm-12 mb-3 ">
                  <textarea type="text" nome="sobre" class="form-control" id="exampleInputEmail" placeholder="Sobre"></textarea>
                </div>
                      <hr>
                <div class="col-sm-12 mb-3">
                    <input type="email" class="form-control" id="exampleInputPassword" nome="email" placeholder="E-mail" required="">
                </div>

                <div class="col-sm-6 mb-3">
                    <input type="password" class="form-control" id="exampleInputPassword" placeholder="Palavra-Passe" nome="pass" required>
                </div>
                <div class="col-sm-6">
                    <input type="password" class="form-control" id="exampleRepeatPassword" placeholder="Confirmação da Palavra-Passe" nome="passconf" required>
                </div>

                <div class="col-sm-3 mb-3">
                    <input type="text" class="form-control" id="exampleInputPassword" value="+244" disabled>
                </div>
                <div class="col-sm-9">
                    <input max="999999999" maxlength="9" minlength="9" type="number" class="form-control" id="exampleRepeatPassword" placeholder="Número de Telefone" nome="numero" required>
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
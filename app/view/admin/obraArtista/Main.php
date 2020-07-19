<!-- Begin Page Content -->
<div class="container-fluid">



  <!-- Nested Row within Card Body -->
<div class="row">
  <div class="col-lg-2 d-none d-lg-block "></div>
  <div class="col-lg-7">
    <div class="p-5">
      <div class="text-center">
        <h1 class="h4 text-gray-900 mb-4">Publicar Obra</h1>
      </div>
        <form class="user" enctype="multipart/form-data" method="post" action="<?php echo DIRPAGE."obra/registarObraArtista"?>">
          <div class="form-group row">
            <div class="col-sm-12 mb-3">
              <img id="uploadPreview" style="margin-left:35% ;width: 30%; height: 200px;" />
            <input value="Selecione Uma Foto" id="uploadImage" type="file" name="foto"  style="margin-left:35%" onchange="PreviewImage();" />
            </div>
            
        <div class="col-sm-12 mb-3">
            <input type="text" class="form-control" id="exampleFirstName" name="nome" placeholder="Nome" required>
        </div>

        <div class="col-sm-12 mb-3 ">
            <fieldset>
                <legend>Disponivel Para Entregas:</legend>
                    <input type="radio"  name="entrega" value="Disponivel">
                    <label for="male">Disponivel</label><br>
                    <input type="radio"  name="entrega" value="Indisponivel" checked="">
                    <label for="female">Indisponivel</label><br>
            </fieldset>
        </div>          
          
        <div class="col-sm-12 mb-3 ">
            <textarea class="form-control" id="exampleInputEmail" placeholder="Descrição" name="descricao" required></textarea>
        </div>

        <div class="col-sm-12 mb-3">
            <select name="id_categoria" class="form-control" id="name" required>
                <?php
                    require_once DIRREQ."app/controller/ControllerCategoria.php";
                    $dados= new \App\Controller\ControllerCategoria();
                    $data=$dados->todasCategorias();
                    foreach ($data as $row) {

                        echo "<option value=".$row['id'].">".$row['nome']."</option>";

                    }

                ?>
            </select>
        </div> 


        <div class="col-sm-6 mb-3">
            <input type="number" class="form-control" id="exampleInputPassword" name="qtd" min="1" placeholder="Quantidade" required>
        </div>

        <div class="col-sm-6 mb-3">
            <input max="999999999999999999999" min="1" type="number" class="form-control" id="exampleRepeatPassword" placeholder="Preço" name="preco" required>
        </div>  
            

          <div class="col-sm-6 mb-3">
            <input type="number" class="form-control" id="exampleInputPassword" name="altura" min="1" placeholder="Altura" required>
        </div>

        <div class="col-sm-6">
            <input  min="1" type="number" class="form-control" id="exampleRepeatPassword" placeholder="Largura" name="largura" required>
        </div>            
            
</div>  
          
        <input type="submit" value="Publicar" class="btn btn-primary btn-user btn-block">

      </form>
      <hr>
    </div>
  </div>
</div>
</div>

</div>
<!-- End of Main Content -->


<!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800">Lista dos Artistas</h1>

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Lista de Obras</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Foto</th>
                      <th>Titulo</th>
                      <th>Descrição</th>
                      <th>Preço</th>
                      <th>Quantidade Disponivel</th>
                      <th>Altura X Largura</th>
                      <th>Categoria</th>
                      <th>Artista</th>
                      <th>Data Publicação</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>Foto</th>
                      <th>Titulo</th>
                      <th>Descrição</th>
                      <th>Preço</th>
                      <th>Quantidade Disponivel</th>
                      <th>Altura X Largura</th>
                      <th>Categoria</th>
                      <th>Artista</th>
                      <th>Data Publicação</th>
                    </tr>
                  </tfoot>
                  <tbody>
                    
                        <?php
                            require_once DIRREQ."app/controller/ControllerObra.php";
                            $dados= new \App\Controller\ControllerObra();
                            $data=$dados->todasObras();
                            foreach ($data as $row) {
                                echo "<tr><td><img src='".DIRPAGE."public/img/".$row['foto']."' style='margin-left:0% ;width: 100%; height: 200px;'/></td>";
                                echo "<td>".$row['titulo']."</td>";
                                echo "<td>".$row['descricao']."</td>";
                                echo "<td>".$row['preco']."</td>";
                                echo "<td>".$row['qtd']."</td>";
                                echo "<td>".$row['altura']." X ".$row['largura']."</td>";
                                echo "<td>".$row['catname']."</td>";
                                echo "<td>".$row['data_publicacao']."</td>";
                                echo "<td>".$row['usname']."</td></tr>";
                            }
                        ?>
                    
                    
                  </tbody>
                </table>
              </div>
            </div>
          </div>

        </div>
        <!-- /.container-fluid -->

      </div>
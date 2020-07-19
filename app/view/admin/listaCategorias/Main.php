<!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800">Lista de Categorias</h1>

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Categorias</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Nome</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>Nome</th>
                    </tr>
                  </tfoot>
                  <tbody>
                    
                        <?php
                            require_once DIRREQ."app/controller/ControllerCategoria.php";
                            $dados= new \App\Controller\ControllerCategoria();
                            $data=$dados->todasCategorias();
                            foreach ($data as $row) {
                                echo "<tr><td>".$row['nome']."</td></tr>";
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
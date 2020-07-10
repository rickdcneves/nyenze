<!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800">Lista dos Artistas</h1>

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Nome</th>
                      <th>Sobre</th>
                      <th>Genero</th>
                      <th>Data de Nascimento</th>
                      <th>E-mail</th>
                      <th>IBAM</th>
                      <th>Municipio</th>
                      <th>Provincia</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>Nome</th>
                      <th>Sobre</th>
                      <th>Genero</th>
                      <th>Data de Nascimento</th>
                      <th>E-mail</th>
                      <th>IBAM</th>
                      <th>Municipio</th>
                      <th>Provincia</th>
                    </tr>
                  </tfoot>
                  <tbody>
                    <tr>
                        <?php
                            require_once DIRREQ."app/controller/ControllerArtista.php";
                            $dados= new \App\Controller\ControllerArtista();
                            $data=$dados->allArtistas();
                            foreach ($data as $row) {
                                echo "<td>".$row['nome']."</td>";
                                echo "<td>".$row['sobre']."</td>";
                                echo "<td>".$row['genero']."</td>";
                                echo "<td>".$row['dnasc']."</td>";
                                echo "<td>".$row['contacto']."</td>";
                                echo "<td>".$row['ibam']."</td>";
                                echo "<td>".$row['municipio']."</td>";
                                echo "<td>".$row['provincia']."</td>";
                            }
                        ?>
                    </tr>
                    
                  </tbody>
                </table>
              </div>
            </div>
          </div>

        </div>
        <!-- /.container-fluid -->

      </div>
<!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800">Lista e encomendas</h1>

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Encomendas a Realizar</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Nome da Obra</th>
                      <th>Data de Solicitação</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>Nome da Obra</th>
                      <th>Data de Solicitação</th>              
                    </tr>
                  </tfoot>
                  <tbody>
                    
                        <?php
                            use App\Controller\ControllerVenda;
                            $dados= new ControllerVenda();
                            $data=$dados->todasEncomendasArtista($_SESSION['login'][0]['id']);
                            
                            
                            foreach ($data as $row) {
                                echo "<tr><td>".$row['titulo']."</td>";
                                echo "<td>".$row['data_venda']."</td></tr>";
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
<!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800">Lista das Vendas</h1>

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Todas Vendas</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Referência</th>
                      <th>Email Artista</th>
                      <th>Email Cliente</th>
                      <th>Ibam Artista</th>
                      <th>Total</th>
                      <th>Estado</th>
                      <th>Data</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>Referência</th>
                      <th>Email Artista</th>
                      <th>Email Cliente</th>
                      <th>Ibam Artista</th>
                      <th>Total</th>
                      <th>Estado</th>
                      <th>Data</th>                        
                    </tr>
                  </tfoot>
                  <tbody>
                    
                        <?php
                            use App\Controller\ControllerVenda;
                            $dados= new ControllerVenda();
                            $data=$dados->todasVendas();
                            foreach ($data as $row) {
                                echo "<tr><td>".$row['id']."</td>";
                                echo "<td>".$row['emailartista']."</td>";
                                echo "<td>".$dados->emailCliente($row['id_user'])."</td>";
                                echo "<td>".$row['ibam']."</td>";
                                echo "<td>".$row['total']."</td>";
                                echo "<td>".$row['estado']."</td>";
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
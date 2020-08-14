<div class="cart-table-area section-padding-100">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="cart-title mt-50">
                    <h2>Compras Feitas</h2>
                </div>

                <div class="cart-table clearfix">
                    <table class="table table-responsive">
                        <thead>
                            <tr>
                                <th></th>
                                <th>Nome</th>
                                <th>Preço</th>
                                <th>Quantidade</th>
                                <th>Total</th>
                                <th>Estado</th>
                                <th>Data de Compra</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                //session_start();
                                $id_user=$_SESSION['login'][0]['id'];
                            
                                require_once DIRREQ."app/controller/ControllerCompra.php";
                                $dados= new \App\Controller\ControllerCompra();
                                $data=$dados->comprasUser($id_user);
                                foreach ($data as $row):
                            ?>
                            
                            
                            <tr>
                                <td class="cart_product_img">
                                    <img src="<?php echo DIRPAGE."public/img/".$row['foto'];  ?>" alt="Product">
                                </td>
                                <td class="cart_product_desc">
                                    <h5><?php echo $row['titulo'];?></h5>
                                </td>
                                <td class="price">
                                    <span><?php echo $row['preco']+($row['preco']*($row['def']/100))." Kzs";?></span>
                                </td>
                                <td class="qty">
                                    <div class="qty-btn d-flex">
                                        <p>Qtd</p>
                                        <div class="quantity">
                                            
                                            <input type="text" class="qty-text" value="<?php echo $row['qtd'];?>" disabled="true">
                                            
                                        </div>
                                    </div>
                                </td>
                                <td class="price">
                                    <span><?php echo $row['total']." Kzs";?></span>
                                </td>
                                <td class="price">
                                    <span><?php echo $row['estado'];?></span>
                                </td>
                                <td class="price">
                                    <span><?php echo $row['data_venda'];?></span>
                                </td>
                            </tr>
                            <?php endforeach;?>
                            
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </div>
</div>
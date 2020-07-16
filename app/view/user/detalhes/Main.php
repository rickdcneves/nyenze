
    <!-- Product Details Area Start -->
    <div class="single-product-area section-padding-100 clearfix">
        <div class="container-fluid">
            <div class="row">
                <?php
                    $id= base64_decode($_GET['prod']);

                    require_once DIRREQ."app/controller/ControllerDetalhes.php";
                    $dados= new \App\Controller\ControllerDetalhes();
                    $data=$dados->obra($id);
                    foreach ($data as $row):
                ?>
                <div class="col-12 col-lg-7">
                    <div class="single_product_thumb">
                        <div id="product_details_slider" class="carousel slide" data-ride="carousel">

                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <a class="gallery_img" href="<?php echo DIRPAGE."public/img/".$row['foto'];?>">
                                        
                                        <img class="d-block w-100" src="<?php echo DIRPAGE."public/img/".$row['foto'];?>" alt="First slide">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-5">
                    <div class="single_product_desc">
                        <!-- Product Meta Data -->
                        <div class="product-meta-data">
                            <div class="line"></div>
                            <p class="product-price"><?php echo (($row['preco'])+($row['preco']*$row['def'])/100)." Kzs";?></p>
                            <a href="">
                                <h6><?php echo $row['titulo'];?></h6>
                            </a>
                            <!-- Ratings & Review -->
                            <div class="ratings-review mb-15 d-flex align-items-center justify-content-between">
                                <div class="ratings">
                                    <!--<i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>-->
                                </div>
                                <div class="review">
                                    <a href="#"><?php echo "Artista: ". $row['usname'];?></a>
                                </div>
                            </div>
                            <!-- Avaiable -->
                            <p class="avaibility"><i class="fa fa-circle"></i> In Stock</p>
                        </div>

                        <div class="short_overview my-5">
                            <p><?php echo $row['descricao'];?></p>
                        </div>
                        <?php if($row['qtd']>0):?>
                        <!-- Add to Cart Form -->
                        <form class="cart clearfix" method="post">
                            <div class="cart-btn d-flex mb-50">
                                <p>Quantidade</p>
                                <div class="quantity">
                                    <span class="qty-minus" onclick="var effect = document.getElementById('qty'); var qty = effect.value; if( !isNaN( qty ) &amp;&amp; qty &gt; 1 ) effect.value--;return false;"><i class="fa fa-caret-down" aria-hidden="true"></i></span>
                                    <input type="number" class="qty-text" id="qty" step="1" min="1" max="<?php echo $row['qtd']; ?>" name="quantity" value="1">
                                    <span class="qty-plus" onclick="var effect = document.getElementById('qty'); var qty = effect.value; if( !isNaN( qty )) effect.value++;return false;"><i class="fa fa-caret-up" aria-hidden="true"></i></span>
                                </div>
                            </div>
                            <button type="submit" name="addtocart" value="5" class="btn amado-btn">Confirmar Compra</button>
                        </form>
                        <?php else:echo "<p><span style='color: #f00;'>Produto Indisponivel</span></p>"; endif;?>
                    </div>
                </div>
                <?php endforeach;?>
            </div>
        </div>
    </div>
    <!-- Product Details Area End -->

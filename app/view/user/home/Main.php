        <div class="shop_sidebar_area">

            <!-- ##### Single Widget ##### -->
            <div class="widget catagory mb-50">
                <!-- Widget Title -->
                <h6 class="widget-title mb-30">Catagorias</h6>

                <!--  Catagories  -->
                <div class="catagories-menu">
                    <ul>
                        <?php
                            require_once DIRREQ."app/controller/ControllerCategoria.php";
                            $dados= new \App\Controller\ControllerCategoria();
                            $data=$dados->todasCategorias();
                            foreach ($data as $row) {

                                echo "<li><a href=".DIRPAGE."homepage/obracat?cat=".base64_encode($row['id']).">".$row['nome']."</a></li>";

                            }

                        ?>
                    </ul>
                </div>
            </div>

            <!-- ##### Single Widget ##### -->
            <div class="widget brands mb-50">

                <div class="widget-desc">
                    <!-- Single Form Check -->
                    
                </div>
            </div>

            <!-- ##### Single Widget ##### -->
            <div class="widget color mb-50">
                <!-- Widget Title -->

            </div>

            <!-- ##### Single Widget ##### -->
            <div class="widget price mb-50">
                <!-- Widget Title -->
                

                <div class="widget-desc">
                    <div class="slider-range"></div>
                </div>
            </div>
        </div>

        <div class="amado_product_area section-padding-100">
            <div class="container-fluid">


                <div class="row">
                    <?php
                        $categiria= base64_decode($_GET['cat']);
                        
                        require_once DIRREQ."app/controller/ControllerObra.php";
                        $dados= new \App\Controller\ControllerObra();
                        $data=$dados->SelectObras($categiria);
                        foreach ($data as $row):
                    ?>
                    <!-- Single Product Area -->
                    <div class="col-12 col-sm-6 col-md-12 col-xl-6">
                        <div class="single-product-wrapper">
                            <!-- Product Image -->
                            <div class="product-img">
                                <img src="<?php echo DIRPAGE."public/img/".$row['foto'];  ?>" alt="">
                                <!-- Hover Thumb 
                                <img class="hover-img" src="img/product-img/product2.jpg" alt="">-->
                            </div>

                            <!-- Product Description -->
                            <div class="product-description d-flex align-items-center justify-content-between">
                                <!-- Product Meta Data -->
                                <div class="product-meta-data">
                                    <div class="line"></div>
                                    <p class="product-price"><?php echo (($row['preco'])+($row['preco']*$row['def'])/100)." Kzs";?></p>
                                    <a href="<?php echo DIRPAGE."detalhes/obras?prod=".base64_encode($row['id']);?>">
                                        <h6><?php echo $row['titulo'];?></h6>
                                    </a>
                                </div>
                                <!-- Ratings & Cart -->
                                <!--<div class="ratings-cart text-right">
                                    <div class="ratings">
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                    </div>
                                    <div class="cart">
                                        <a href="cart.html" data-toggle="tooltip" data-placement="left" title="Add to Cart"><img src="img/core-img/cart.png" alt=""></a>
                                    </div>
                                </div>-->
                            </div>
                        </div>
                    </div>
                    <?php endforeach;?>
                </div>

                
            </div>
        </div>
    
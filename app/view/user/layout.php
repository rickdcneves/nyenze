<?php
    session_start();
    if(isset($_SESSION['login'])){
        $log=$_SESSION['login'];
        
    }
?>
<!DOCTYPE html>
<html lang="pt-pt">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title  -->
    <title>Nyenze | Shop</title>

    <!-- Favicon 
    <link rel="icon" href="img/core-img/favicon.ico">
 -->
    <!-- Core Style CSS -->

    <link  rel="stylesheet"href="<?php echo DIRCSS."core-style.css" ?>">
    <link  rel="stylesheet"href="<?php echo DIRCSS."style.css" ?>">


</head>

<body>
    <!-- Search Wrapper Area Start -->
    <div class="search-wrapper section-padding-100">
        <div class="search-close">
            <i class="fa fa-close" aria-hidden="true"></i>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="search-content">
                        <form action="#" method="get">
                            <input type="search" name="search" id="search" placeholder="Pesquisar...">
                            
                            <button type="submit"><img src="https://img.icons8.com/pastel-glyph/20/000000/search--v1.png"/></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Search Wrapper Area End -->

    <!-- ##### Main Content Wrapper Start ##### -->
    <div class="main-content-wrapper d-flex clearfix">

        <!-- Mobile Nav (max width 767px)-->
        <div class="mobile-nav">
            <!-- Navbar Brand -->
            <div class="amado-navbar-brand">
                
                <a href="<?php echo DIRPAGE."homepage/obras/";?>"><img src="<?php echo DIRIMG."core-img/logo.png"; ?>" alt=""></a>
            </div>
            <!-- Navbar Toggler -->
            <div class="amado-navbar-toggler">
                <span></span><span></span><span></span>
            </div>
        </div>

        <!-- Header Area Start -->
        <header class="header-area clearfix">
            <!-- Close Icon -->
            <div class="nav-close">
                <i class="fa fa-close" aria-hidden="true"></i>
            </div>
            <!-- Logo -->
            <div class="logo">
                <a href="<?php echo DIRPAGE."homepage/obras/";?>"><img src="<?php echo DIRIMG."core-img/logo.png"; ?>" alt=""></a>
            </div>
            <!-- Amado Nav -->
            <nav class="amado-nav">
                <ul>
                    <?php if(isset($log)):?>
                    <li><a href=""><?php echo $log[0]['nome']?></a></li>
                    <?php endif;?>
                    <li class="active"><a href="">Loja</a></li>
                </ul>
            </nav>
            <hr>    
            <!-- Cart Menu -->
            <div class="cart-fav-search mb-100">
                <a href="#" class="search-nav"><img src="https://img.icons8.com/pastel-glyph/20/000000/search--v1.png"/>Pesquisar</a>
                <?php if(!isset($log)):?>
                    <a href="<?php echo DIRPAGE."login/entrar"?>" class="search-nav"><img src="https://img.icons8.com/pastel-glyph/16/000000/login-rounded-right.png"/> Login</a>
                <?php else:?>
                    <a href="<?php echo DIRPAGE."compras/comprasFeitas"?>" class="search-nav"><img src="https://img.icons8.com/windows/16/000000/full-shopping-basket--v2.png"/> Compras</a>
                    <a href="<?php echo DIRPAGE."login/sair"?>" class="search-nav"><img src="https://img.icons8.com/pastel-glyph/16/000000/login-rounded-right.png"/> Logout</a>
                <?php endif;?>
            </div>
            <!-- Social Button -->
            <div class="social-info d-flex justify-content-between">
                <a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
                <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
            </div>
        </header>
      <?php echo $this->addMainUser();?>
        <!-- MainUser -->
        
</div>
    <!-- ##### Main Content Wrapper End ##### -->


    <!-- ##### Footer Area Start ##### -->
    <footer class="footer_area clearfix">
        <div class="container">
            <div class="row align-items-center">
                <!-- Single Widget Area -->
                <div class="col-12 col-lg-4">
                    <div class="single_widget_area">
                        <!-- Copywrite Text -->
                        <p class="copywrite">
Nyenze &copy;<script>document.write(new Date().getFullYear());</script> Todos Direitos Reservados | Criada pelo  <a href="https://www.linkedin.com/in/rickdcneves/">Ricardo Neves</a>

                    </div>
                </div>
                <!-- Single Widget Area -->
         
            </div>
        </div>
    </footer>
    <!-- ##### Footer Area End ##### -->

    <!-- ##### jQuery (Necessary for All JavaScript Plugins) ##### -->

    <script src="<?php echo DIRJS."jquery/jquery-2.2.4.min.js" ?>"></script>
    <script src="<?php echo DIRJS."popper.min.js" ?>"></script>
    <script src="<?php echo DIRJS."bootstrap.min.js" ?>"></script>
    <script src="<?php echo DIRJS."plugins.js" ?>"></script>
    <script src="<?php echo DIRJS."active.js" ?>"></script>

</body>

</html>
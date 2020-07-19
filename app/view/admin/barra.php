<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

<!-- Sidebar - Brand -->
<a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
  <div class="sidebar-brand-text mx-3">NYENZE</div>
</a>

<!-- Divider -->
<hr class="sidebar-divider my-0">

<!-- Nav Item - Dashboard -->
<li class="nav-item active">
  <a class="nav-link" href="<?php echo DIRPAGE."home/"?>">
    <i class="fas fa-fw fa-tachometer-alt"></i>
    <span>Dashboard</span></a>
</li>

<!-- Divider -->
<hr class="sidebar-divider">

<!-- Heading -->
<div class="sidebar-heading">
  Informações
</div>

<!-- Nav Item - Pages Collapse Menu -->
<li class="nav-item">
  <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
    <i class="fas fa-fw fa-user"></i>
    <span>Artista</span>
  </a>
  <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
    <div class="bg-white py-2 collapse-inner rounded">
      <h6 class="collapse-header">Informações:</h6>
      <a class="collapse-item" href="<?php echo DIRPAGE."artista/add/"?>">Adicionar</a>
      <a class="collapse-item" href="<?php echo DIRPAGE."artista/all/"?>">Listar</a>
      <a class="collapse-item" href="formContactos.php">Adicionar Contactos</a>
    </div>
  </div>
</li>

<!-- Nav Item - Utilities Collapse Menu -->
<li class="nav-item">
  <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseBibliografia" aria-expanded="true" aria-controls="collapseUtilities">
    <i class="fas fa-fw fa-book"></i>
    <span>Obra</span>
  </a>
  <div id="collapseBibliografia" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
    <div class="bg-white py-2 collapse-inner rounded">
      <h6 class="collapse-header">Obras:</h6>
      <a class="collapse-item" href="<?php echo DIRPAGE."obra/add/"?>">Adicionar</a>
      <a class="collapse-item" href="<?php echo DIRPAGE."obra/all/"?>">Listar</a>
      <a class="collapse-item" href="<?php echo DIRPAGE."categoria/add/"?>">Adicionar Categoria</a>
      <a class="collapse-item" href="<?php echo DIRPAGE."categoria/all/"?>">Listar Categorias</a>
    </div>
  </div>
</li>

<!-- Nav Item - Utilities Collapse Menu -->
<li class="nav-item">
  <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
    <i class="fas fa-fw fa-dollar-sign"></i>
    <span>Vendas</span>
  </a>
  <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
    <div class="bg-white py-2 collapse-inner rounded">
      <h6 class="collapse-header">Vendas:</h6>
      <a class="collapse-item" href="formSkills.php">Listar Vendas</a>
       <a class="collapse-item" href="formSkills.php">Vendas Por Confirmar</a>
      <a class="collapse-item" href="utilities-border.html">Lucro</a>
    </div>
  </div>
</li>

<!-- Divider -->
<hr class="sidebar-divider">

<!-- Heading -->
<div class="sidebar-heading">
  Definições
</div>



<!-- Nav Item - Pages Collapse Menu -->
<li class="nav-item">
  <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseEventos" aria-expanded="true" aria-controls="collapsePages">
    <i class="fas fa-fw fa-book-reader"></i>
    <span>Clientes</span>
  </a>
  <div id="collapseEventos" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
    <div class="bg-white py-2 collapse-inner rounded">
      <h6 class="collapse-header">Clientes:</h6>
      <a class="collapse-item" href="formEventos.php">Adicionar</a>
      <a class="collapse-item" href="register.html">Listar</a>
    </div>
  </div>
</li>



<!-- Nav Item - Pages Collapse Menu -->
<li class="nav-item">
  <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
    <i class="fas fa-fw fa-book"></i>
    <span>Administradores</span>
  </a>
  <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
    <div class="bg-white py-2 collapse-inner rounded">
      <h6 class="collapse-header">Administradores:</h6>
      <a class="collapse-item" href="<?php echo DIRPAGE."administrador/add/"?>">Adicionar</a>
      <a class="collapse-item" href="<?php echo DIRPAGE."administrador/all/"?>">Listar</a>
    </div>
  </div>
</li>


<!-- Divider -->
<hr class="sidebar-divider d-none d-md-block">

<!-- Sidebar Toggler (Sidebar) -->
<div class="text-center d-none d-md-inline">
  <button class="rounded-circle border-0" id="sidebarToggle"></button>
</div>

</ul>
<!-- End of Sidebar -->
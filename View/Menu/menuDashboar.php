<meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

   <!-- Custom fonts for this template-->
  <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <!-- Custom styles for this template-->
  <link href="../css/sb-admin.css" rel="stylesheet">
  <link href="../css/sb-img.css" rel="stylesheet">


<nav class="navbar navbar-expand navbar-dark bg-dark static-top">

    <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="../dashboard.php">
      <i class="fas fa-bars"></i>
    </button>

    <!-- Navbar Search -->
    <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
      <div class="input-group">
      
        </div>
      </div>
    </form>

    <ul class="navbar-nav ml-auto ml-md-0">


      <li class="nav-item dropdown no-arrow">
        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-user-circle fa-fw"></i>
        </a>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
          <a class="dropdown-item" href="#">Configurações</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">Sair</a>
        </div>
      </li>
    </ul>


    <!-- Navbar -->

  </nav>
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="sidebar navbar-nav">

      <!---------------------------------- Laboratório  -------------------------------->
      <li class="nav-item dropdown">
        
        <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-fw fa-folder"></i>
          <span>Ger. Laboratório</span>
        </a>
        
        <div class="dropdown-menu" aria-labelledby="pagesDropdown">
         
          <h6 class="dropdown-header">Gerenciar Laboratório:</h6>
          <a class="dropdown-item" href="cadasLab.php?classe=laboratorio&metodo=create">Cadastrar</a>
          <a class="dropdown-item" href="listarLab.php?classe=laboratorio&metodo=index">Listar</a>
          <div class="dropdown-divider"></div>
        </div>

      </li>

      <!---------------------------------- Professor   -------------------------------->

      <li class="nav-item dropdown">
        
        <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-fw fa-folder"></i>
          <span>Ger. Professor</span>
        </a>
        
        <div class="dropdown-menu" aria-labelledby="pagesDropdown">

          <h6 class="dropdown-header">Gerenciar Professor:</h6>
          <a class="dropdown-item" href="cadasProf.php?classe=professor&metodo=create">Cadastrar</a>
          <a class="dropdown-item" href="listarProf.php?classe=professor&metodo=index">Listar</a>
          <div class="dropdown-divider"></div>
        </div>

      </li>

      <!------------------------------------ Reserva   -------------------------------->

      <li class="nav-item dropdown">
        
        <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-fw fa-folder"></i>
          <span>Ger. Reserva</span>
        </a>
        
        <div class="dropdown-menu" aria-labelledby="pagesDropdown">
          <h6 class="dropdown-header">Gerenciar Reservas: </h6>
          <a class="dropdown-item" href="listarRes.php?classe=reserva&metodo=index">Listar</a>
        </div>

      </li>

      <!------------------------------------ CURSO   -------------------------------->

      <li class="nav-item dropdown">
        
        <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-fw fa-folder"></i>
          <span>Ger. Curso</span>
        </a>
        
        <div class="dropdown-menu" aria-labelledby="pagesDropdown">
         
          <h6 class="dropdown-header">Gerenciar Curso:</h6>
          <a class="dropdown-item" href="cadasCurso.php?classe=curso&metodo=create">Cadastrar</a>
          <a class="dropdown-item" href="listarCursos.php?classe=cursos&metodo=index">Listar</a>
          <div class="dropdown-divider"></div>
        </div>

      </li>

      <!------------------------------------ Disciplina -------------------------------->

      <li class="nav-item dropdown">
        
        <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-fw fa-folder"></i>
          <span>Ger. Disciplina</span>
        </a>
        
        <div class="dropdown-menu" aria-labelledby="pagesDropdown">
         
          <h6 class="dropdown-header">Gerenciar Disciplina:</h6>
          <a class="dropdown-item" href="cadasDisc.php?classe=disciplina&metodo=create">Cadastrar</a>
          <a class="dropdown-item" href="listarDisc.php?classe=disciplina&metodo=index">Listar</a>
          <div class="dropdown-divider"></div>
        </div>

      </li>

      
    </ul>

    <div id="content-wrapper">

      <div class="container-fluid">

        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          




     <!-- Bootstrap core JavaScript-->
  <script src="../vendor/jquery/jquery.min.js"></script>
  <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Page level plugin JavaScript-->
  <script src="../vendor/chart.js/Chart.min.js"></script>
  <script src="../vendor/datatables/jquery.dataTables.js"></script>
  <script src="../vendor/datatables/dataTables.bootstrap4.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="../js/sb-admin.min.js"></script>

  <!-- Demo scripts for this page-->
  <script src="../js/demo/datatables-demo.js"></script>
  <script src="../js/demo/chart-area-demo.js"></script>

   <!-- Custom mask input-->
   <script src="../js/demo/mask.js"> </script> 
  <script src="../js/demo/form.js"></script>
  <footer class="sticky-footer">
    <div class="footer ">Copyright © S7 SI 2019 </div> 
  </footer>

     
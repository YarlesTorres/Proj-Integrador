<!DOCTYPE html>
<html lang="PT-BR">
<head>
  <title>Cadastrar Professor</title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

   <!-- Custom fonts for this template-->
  <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <!-- Custom styles for this template-->
  <link href="../css/sb-admin.css" rel="stylesheet">
  <style type="text/css">
    
    .col-md-6{
      margin-top: 3%;
    }
  </style>
</head>
<body class="bg-dark">
  <nav class="navbar navbar-expand navbar-dark bg-dark static-top">
    <a class="navbar-brand mr-1" href="dashboard.php"></a>

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
      <li class="nav-item active">
        <a class="nav-link" href="dashboard.php">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Painel de Controle</span>
        </a>
      </li>
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

      <li class="nav-item dropdown">
        
        <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-fw fa-folder"></i>
          <span>Ger. Reserva</span>
        </a>
        
        <div class="dropdown-menu" aria-labelledby="pagesDropdown">
          <h6 class="dropdown-header">Gerenciar Reservas: </h6>
          <a class="dropdown-item" href="cadasRes.php?classe=reserva&metodo=create">Cadastrar</a>
          <a class="dropdown-item" href="listarRes.php?classe=reserva&metodo=index">Listar</a>
        </div>

      </li>
      
    </ul>

    <div id="content-wrapper">

      <div class="container-fluid">

        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="dashboard.php">Painel de Controle</a>
          </li>
          <li class="breadcrumb-item active">Cadastrar Professor</li>
        </ol>

    <div class="container">
      <div class="card card-register mx-auto mt-5">
        <div class="card-header">Cadastrar Laboratório </div>
        <div class="card-body">
          <form action="../index.php" method="post">
            <div class="form-group">
              <div class="form-row">
              
               <div class="col-md-6">
                <div class="form-label-group">
                  <input  type="text" id="cursoProf" class="form-control" placeholder="Curso do Professor" required="on" autofocus="autofocus" name="cursoProf">
                  <label for="cursoProf">Curso do Professor</label>
                </div>
              </div>

              <div class="col-md-6">
                <div class="form-label-group">
                  <input  type="text" id="loginProf" class="form-control" placeholder="Login do Professor" required="on" autofocus="autofocus" name="loginProf">
                  <label for="loginProf">Login do Professor</label>
                </div>
              </div>


              <div class="col-md-6">
                <div class="form-label-group">
                  <input  type="text" id="senhaProf" class="form-control" placeholder="Senha do Professor" required="on" autofocus="autofocus" name="senhaProf">
                  <label for="senhaProf">Senha do Professor</label>
                </div>
              </div>

              <div class="col-md-6">
                <div class="form-label-group">
                  <input  type="text" id="celProf" class="form-control" placeholder="Senha do Professor" required="on" autofocus="autofocus" name="celProf">
                  <label for="celProf">N° para contato do Professor</label>
                </div>
              </div>



              <div class="col-md-6">
                <div class="form-label-group">
                  <input type="email" class="form-control" id="emailProf" placeholder="Seu email" name="emailProf">
                  <label for="emailProf">Email do Professor</label>
                </div>
              </div>
              </div>
              </div>
</div>


                <input type="hidden" name="metodo" value="store">
                <input type="hidden"  name="classe" value="professor">
                <input type="submit" value="Salvar" class="btn btn-primary">
              </form>


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

</body>
</html>
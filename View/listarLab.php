<?php
  require_once "../Model/labModel.php";
  session_start();
  $lab = $_SESSION['laboratorios'];  
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>ResLab</title>

    <!-- Custom fonts for this template-->
    <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  session_start();
  $lab = $_SESSION['laboratorios'];
  //$lab = array();
?>

<!DOCTYPE html>
<html lang="PT-BR">
  <head>
    <title>Lista de Laboratórios</title>
    <meta charset="UTF-8"/>    

    <!-- Page level plugin CSS-->
    <link href="../vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="../css/sb-admin.css" rel="stylesheet">
  </head>

  <body id="page-top">
    <nav class="navbar navbar-expand navbar-dark bg-dark static-top">

    <a class="navbar-brand mr-1" href="index.html"></a>

    <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
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
          <span>Páginas</span>
        </a>
        
        <div class="dropdown-menu" aria-labelledby="pagesDropdown">
         
          <h6 class="dropdown-header">Gerenciar Laboratório:</h6>
          <a class="dropdown-item" href="cadasLab.php?classe=laboratorio&metodo=create">Cadastrar</a>
          <a class="dropdown-item" href="listarLab.php?classe=laboratorio&metodo=index">Listar</a>
          <div class="dropdown-divider"></div>

          <h6 class="dropdown-header">Gerenciar Professor:</h6>
          <a class="dropdown-item" href="cadasProf.php?classe=professor&metodo=create">Cadastrar</a>
          <a class="dropdown-item" href="listarProf.php?classe=professor&metodo=index">Listar</a>
          <div class="dropdown-divider"></div>


          <h6 class="dropdown-header">Gerenciar Reservas: </h6>
          <a class="dropdown-item" href="cadasRes.php?classe=reserva&metodo=create">Cadastrar</a>
          <a class="dropdown-item" href="listarRes.php?classe=reserva&metodo=index">Listar</a>
        </div>

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
          <span>Ger. Profrofessor</span>
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
            <a href="#">Painel de Controle</a>
          </li>
          <li class="breadcrumb-item active">Listar Laboratórios</li>
        </ol>

    <div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-table"></i>
            Tabela de Dados</div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th>Nome</th>     
                    <th>Código</th>
                    <th>Qtd. computadores</th> 
                    <th>Editar</th>
                    <th>Excluir</th>   
                  </tr>
                </thead>

                <tfoot>
                  <tr>
                    <th>Nome</th>     
                    <th>Código</th>
                    <th>Qtd. computadores</th> 
                    <th>Editar</th>
                    <th>Excluir</th>   
                  </tr>
                </tfoot>
  <body>
    <div class="container">
      <h3>Lista de Laboratórios</h3>
     
      <table border="1" class="table">
        <thead class="thead-dark">
            <tr>
              <th scope="col">Nome</th>     
              <th scope="col">Código</th>
              <th scope="col">Qtd. computadores</th> 
              <th colspan="2">Ação</th>    
            </tr>
        </thead>

       <?php
          foreach($lab as $aux){
            echo "<tr>";
            echo "<td>{$aux->getNomeLab()}</td>";

            echo "<td>{$aux->getCodLab()}</td>";

            echo "<td>{$aux->getQtdComputadores()}</td>";
           
                
            echo '<td><a href="../index.php?classe=laboratorio&metodo=edit&id='.$aux->getIdLab().'">Editar</a></td>';          

            echo '<td><a href="../index.php?classe=laboratorio&metodo=delete&id='.$aux->getIdLab().'">Deletar</a></td>';
            echo "</tr>";
            
          };
        ?>

      </table>

      <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Pronto para partir?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Selecione "Sair" abaixo se você estiver pronto para encerrar sua sessão atual.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
          <a class="btn btn-primary" href="login.html">Sair</a>
        </div>
      </div>
    </div>
  </div>


     <a href="../index.php?classe=laboratorio&metodo=create">Adicionar</a>

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

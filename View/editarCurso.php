<?php
  require_once "../Model/cursoModel.php";
  session_start();
  
  if(!empty( $_SESSION['cursos'])){
     $cursos = $_SESSION['cursos'];
  }
  else{
      header("Location: ../indexCurso.php");
  }

  foreach($cursos as $aux){
    $idCurso = $aux['idCurso'];
    $nomeCurso = $aux['nomeCurso'];
    $siglaCurso = $aux['siglaCurso'];
  } 

?>

<!DOCTYPE html>
<html lang="PT-BR">
<head>
  <title>SisRes - Editar Curso</title>


</head>
<body class="bg-dark">
  <?php
    include "menu/menu.php";
  ?>
          <li class="breadcrumb-item active"> / Editar Laboratório</li>
        </ol>

    <div class="container">
      <div class="card card-register mx-auto mt-5">
        <div class="card-header">Editar Curso</div>
      <div class="card-body">

        <form action="../index.php" method="post">
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
                <div class="form-label-group">
                  <input type="text" id="firstName" class="form-control" placeholder="Nome do Curso" required="on" autofocus="autofocus" name="nomeCurso" value= "<?php echo "$nomeCurso";?>">
                  <label for="firstName">Nome do Curso</label>
                </div>
                </div>
              
              <div class="col-md-6">
                <div class="form-label-group">
                  <input type="text" id="lastName" class="form-control" placeholder="Sigla do Curso" name="siglaCurso" required="on" value="<?php echo "$siglaCurso";?>" >
                  <label for="lastName">Sigla do Curso</label>
                </div>
              </div>
            </div>
          </div>


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

        <input type="hidden" name="id" value="<?php echo "$idCurso";?>">
        <input type="hidden" name="metodo" value="update">
        <input type="hidden"  name="classe" value="curso">

        <button type="submit" class="btn btn-primary">Alterar</button>

    </form>
  </div>

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

<?php
  require_once "../Model/professorModel.class.php";
  session_start();
  if(!empty( $_SESSION['professores'])){
     $prof = $_SESSION['professores'];
  }
  else{
      header("Location: ../indexProf.php");
  }

?>

<!DOCTYPE html>
<html>
  <head>

    <title>SisRes - Lisar Professor</title>

  </head>

  <body id="page-top">
    <?php
    include "menu/menu.php";
  ?>
          <li class="breadcrumb-item active"> / Listar Professores</li>
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
                    <th>Curso</th>
                    <th>Nome</th>
                    <th>Celular</th>
                    <th>Email</th>
                    <th>Editar</th>
                    <th>Excluir</th>   
                  </tr>
                </thead>

                <tfoot>
                  <tr>
                    <th>Curso</th>
                    <th>Nome</th>
                    <th>Celular</th>
                    <th>Email</th> 
                    <th>Editar</th>
                    <th>Excluir</th>
                  </tr>
                </tfoot>

       <?php
          foreach($prof as $aux){
            echo "<tr>";
            echo "<td>{$aux->getCursoProf()}</td>";
            echo "<td>{$aux->getLoginProf()}</td>";
            echo "<td>{$aux->getCelProf()}</td>";
            echo "<td>{$aux->getEmailProf()}</td>";

             echo '<td><a href="../indexProf.php?classe=professor&metodo=edit&id='.$aux->getIdProf().'"> Editar</a></td>';

             echo '<td><a class="delete" delid="'.$aux->getIdProf().'" href="../index.php?classe=professor&metodo=delete&id='.$aux->getIdProf().'"> Excluir </a></td>';
             

            echo '</tr>';
            
          }
        ?>

      </table>


     <a href="../indexProf.php?classe=professor&metodo=create">Adicionar</a>

       

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
      
   <script>
    $(function(){
      $(".delete").on('click', function(e) {
        e.preventDefault();
        var delid = $(this).attr("delid");

        if (confirm('Deseja deletar esse Professor')) {
            window.location.replace("../indexProf.php?classe=professor&metodo=delete&id="+delid);
        }
      });
    });
  </script> 

  </body>

</html>

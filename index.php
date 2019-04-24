<!DOCTYPE html>
<html>
  <head>
      <meta charset="utf-8">
      
      <title>Página de consulta</title>

      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

      <link rel="stylesheet" type="text/css"
      href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
      
      <script type="text/javascript" charset="utf8" 
          src="https://code.jquery.com/jquery-3.3.1.js"></script>
      
      <script type="text/javascript" charset="utf8" 
        src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>

      <script>
          $(document).ready(function() {
              $('#table_id').DataTable();
          } );
      </script>

  </head>
  <body>
    <div class="container">
    <br><br>
    <h2 class="col-md-8 offset-md-3">Aministração de Usuários</h2>     
      <br><br>
      <a href="inclui.php" class="btn btn-primary" role="button" aria-pressed="true">Adicionar Pessoas</a>
      <br><br>

      <table id="table_id" class="table table-striped">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Nome</th>
            <th scope="col">Data de Nascimento</th>
            <th scope="col">Salario</th>
            <th scope="col"></th>
            <th scope="col"></th>
          </tr>
        </thead>
        <tbody>
      <?php

      $dsn = 'mysql:dbname=aulaphp;host=127.0.0.1';
      $user = 'root'; //mysql usuario=root
      $password = '';//sem senha

      try {
      $dbh = new PDO($dsn, $user, $password);
      } catch (PDOException $e) {
      echo 'Connection failed: ' . $e->getMessage();
      }
              $sql = 'SELECT * FROM tecweb';
              foreach ($dbh->query($sql) as $row) {
              echo "<tr>";
              echo "<td>". $row['id'] . "</td>";
              echo "<td>". $row['nome'] . "</td>";
              echo "<td>". date('d/m/Y', strtotime($row['dataNascimento'])) . "</td>";
              echo "<td>" . $row['salario'] . "</td>";
      echo "<td> <a class='btn btn-outline-info btn-sm' role='button' aria-pressed='true' href=editar.php?id=".$row['id'].">Editar</a></td>";
      echo "<td> <a class='btn btn-outline-danger btn-sm' role='button' aria-pressed='true' href=excluir.php?id=".$row['id'].">Excluir</a></td>";
              echo "</tr>";
              }
      ?>
          </tbody>
      </table>
    <div>   
  </body>
</html>

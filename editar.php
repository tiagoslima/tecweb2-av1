<!DOCTYPE html>
<html>
    <head>
        <meta charset=utf8>
        <title>Editar usuários</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>
<body>
<div class="container">
<?php
$id=$_GET['id'];

$dsn = 'mysql:dbname=aulaphp;host=127.0.0.1';
$user = 'root'; //mysql usuario=root
$password = '';//sem senha

try {
$dbh = new PDO($dsn, $user, $password);
} catch (PDOException $e) {
echo 'Connection failed: ' . $e->getMessage();
}

$sql = "SELECT * FROM tecweb where id=$id";

foreach ($dbh->query($sql) as $row) {
echo "<br><br>";
echo "<h2 class='col-md-4'>Editar Usuário</h2><br>";
echo "<form action=salvar_editar.php class='col-md-4'>";
echo "<div class='form-group'>";
echo "<label for='exampleInputEmail1'>Nome</label>";
echo "<input type='text' name='nome' class='form-control' id='exampleInputEmail1' placeholder='Nome' value='".
        $row['nome'] . "'>";
echo "</div>";
echo "<div class='form-group'>";
echo "<label for='exampleInputPassword1'>Data de Nascimento</label>";
echo "<input type='date' name='data' class='form-control' id='exampleInputPassword1' value='".
        $row['dataNascimento'] . "'>";
echo "</div>";
echo "<div class='form-group'>";
echo "<label for='exampleInputPassword1'>Salario</label>";
echo "<input type='number' name='salario' class='form-control' id='exampleInputPassword1' placeholder='Salario' value='".
        $row['salario'] . "'>";
echo "<input type=hidden name=id value=". 
        $row['id'] . " >";
echo "</div>";
echo "<button type='submit' class='btn btn-primary' value='salvar'>Salvar</button>";
echo " <a href='index.php' class='btn btn-secondary' role='button' aria-pressed='true'>Voltar</a>";
echo "</form>";
}
?>
</div>
</body>
</html>
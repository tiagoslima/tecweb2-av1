<!DOCTYPE html>
<html>
    <head>
        <meta charset=utf8>
        <title>Edição de usuários</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>
<body>
<div class="container">
<?php
$nome = $_GET['nome'];
$dataNascimento = $_GET['data'];
$salario = $_GET['salario'];
$id = $_GET['id'];

$dsn = 'mysql:dbname=aulaphp;host=127.0.0.1';
$user = 'root'; //root
$password = '';//senha no mysql = vazio
try {
$dbh = new PDO($dsn, $user, $password);
} catch (PDOException $e) {
echo 'Connection failed: ' . $e->getMessage();
}

$sql=
$count = $dbh->exec("update tecweb set
                nome='$nome',
                dataNascimento='$dataNascimento', 
                salario=$salario
                where id=$id ");

echo "<br><br><p>$count registro foi alterado</p>";

echo "<a href='index.php' class='btn btn-secondary' role='button' aria-pressed='true'>Voltar</a>";
?>
</div>
</body>
</html>



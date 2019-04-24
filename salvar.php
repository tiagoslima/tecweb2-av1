<!DOCTYPE html>
<html>
    <head>
        <meta charset=utf8>
        <title>Inclusão de usuários</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>
<body>
<div class="container">
<?php

$nome = $_GET['nome1'];
$dataNascimento = $_GET['data1'];
$salario = $_GET['salario1'];

$dsn = 'mysql:dbname=aulaphp;host=127.0.0.1';
$user = 'root'; //root
$password = '';//senha no mysql = vazio
try {
$dbh = new PDO($dsn, $user, $password);
} catch (PDOException $e) {
echo 'Connection failed: ' . $e->getMessage();
}
$count = $dbh->exec("insert into tecweb(nome, dataNascimento, salario) 
                values('$nome', '$dataNascimento', '$salario') ");

echo "<br><br><p>$count registro foi incluído</p>";

echo "<a href='index.php' class='btn btn-secondary' role='button' aria-pressed='true'>Voltar</a>";
?>
</div>
</body>
</html>


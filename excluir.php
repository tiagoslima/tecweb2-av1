<!DOCTYPE html>
<html>
    <head>
        <meta charset=utf8>
        <title>Excluir usuários</title>
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
$count = $dbh->exec("delete from tecweb 
                                where id=$id ");

echo "<br><br><p>$count registro foi excluído</p>";

echo "<a href='index.php' class='btn btn-secondary' role='button' aria-pressed='true'>Voltar</a>";
?>
</div>
</body>
</html>
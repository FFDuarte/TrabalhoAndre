<?php
$dsn = 'mysql:dbname=banco;host=127.0.0.1';//mysql
$user = 'root';//root
$password = ''; //senha vazia
try  {
$dbh = new PDO($dsn, $user, $password);
} catch (PDOException $e) {
echo 'Connection failed: ' . $e->getMessage();
}
$id=$_GET['id'];
$count = $dbh->exec("DELETE FROM tabela WHERE id = '$id'");
echo "<p>$count registro foi excluído</p>";
echo "<a href=index.php>Voltar</a></p>";
?>
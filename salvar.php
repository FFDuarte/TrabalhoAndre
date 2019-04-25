<?php
$dsn = 'mysql:dbname=banco;host=127.0.0.1';//mysql
$user = 'root';//root
$password = ''; //senha vazia
try {
$dbh = new PDO($dsn, $user, $password);
} catch (PDOException $e) {
echo 'Connection failed: ' . $e->getMessage();
}
$nome=$_GET['nome'];
$idade=$_GET['idade'];//teste
$salario=$_GET['salario'];
$count = $dbh->exec("insert into tabela(nome, idade,salario) 
            values('$nome', '$idade','$salario') ");
echo "<p>$count registro foi incluído</p>";
echo "<a href=index.php>Voltar</a></p>";
?>
<?php
ini_set ( 'display_errors' , 1 ); 
ini_set ( 'display_startup_errors' , 1 ); 
error_reporting ( E_ALL );  

$dsn = 'mysql:dbname=banco;host=127.0.0.1';
$user = 'root';
$password = '';
try {
$dbh = new PDO($dsn, $user, $password);
} catch (PDOException $e) {
echo 'Connection failed: ' . $e->getMessage();
}

$nome=$_REQUEST['nome'];
$idade=$_REQUEST['idade'];
$id = $_REQUEST['id'];
$salario = $_REQUEST['salario'];

try {
	$sql = "update tabela 
set nome='$nome', 
  idade=CAST('$idade' AS DATE),
  salario=$salario
  where id=$id";
  
$count = $dbh->exec($sql );
echo "<p>$count registro(s) foi atualizado</p>";
echo "<a href=index.php>Voltar</a></p>";
}
catch (Exception $e)
{
	var_dump($e); die;
}
?>

20192404
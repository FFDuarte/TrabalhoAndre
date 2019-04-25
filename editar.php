<?php
$dsn = 'mysql:dbname=banco;host=127.0.0.1';//mysql
$user = 'root';//root
$password = ''; //senha vazia
try  {
$dbh = new PDO($dsn, $user, $password);
} catch (PDOException $e) {
echo 'Connection failed: ' . $e->getMessage();
}
$id = $_GET['id'];
$sql = "SELECT * FROM tabela where id='$id' ";
foreach ($dbh->query($sql) as $row) {
    echo "<h1> Novo Registro</h1>
    <form action=atualizar.php >
	
    <input type=hidden name=id value=$id>
	
    <p>Nome</p>
    <input type=text name=nome value=".$row['nome'].">
	
    <p>Data De Nascimento</p>
    <input type=date name=idade value=".$row['idade'].">
	
	<p>Salario</p>
    <input type=number name=salario value=".$row['salario'].">
    <br><br>
	
    <input type=submit value=Salvar>
    </form>";
    echo "<a href=index.php>Voltar</a></p>";
}
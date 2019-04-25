<?php
$dsn = 'mysql:dbname=banco;host=127.0.0.1';//mysql
$user = 'root';//root
$password = ''; //senha vazia
try {
$dbh = new PDO($dsn, $user, $password);
} catch (PDOException $e) {
echo 'Connection failed: ' . $e->getMessage();
}
$sql = 'SELECT * FROM tabela ';
foreach ($dbh->query($sql) as $row) {
    echo "<tr>";
    echo "<td>".$row['id']."</td>";
    echo "<td>".$row['nome']."</td>";
    echo "<td>".$row['idade']."</td>";
	echo "<td>".$row['salario']."</td>";
    echo "<td><a href=editar.php?id=".$row['id'].">Editar</a></td>";
    echo "<td><a href=excluir.php?id=".$row['id'].">Excluir</a></td>";
    echo "</tr>";
}
?>
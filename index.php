<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    
    <title>Página de consulta</title>
<link rel="stylesheet" type="text/css" href="tabela.css">
<script src=https://code.jquery.com/jquery-3.3.1.js></script>
<script src=https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js></script>
<meta http-equiv="X-UA-Compatible" content="IE-edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="../css/bootstrap.min.css" rel="stylesheet">
<script>
$(document).ready(function() {
    $('#example').DataTable({"language": {
       "decimal":        "",
    "emptyTable":     "Tem nada não,irmão",
    "info":           "Showing _START_ to _END_ of _TOTAL_ entries",
    "infoEmpty":      "Mostrando 0 / 0 / 0 ",
    "infoFiltered":   "(filtered from _MAX_ total entries)",
    "infoPostFix":    "",
    "thousands":      ",",
    "lengthMenu":     "Mostrar _MENU_ Entradas",
    "loadingRecords": "Loading...",
    "processing":     "Processing...",
    "search":         "Procurar:",
    "zeroRecords":    "No matching records found",
    "paginate": {
        "first":      "First",
        "last":       "Last",
        "next":       "Proximo",
        "previous":   "Anterior"
    },
    "aria": {
        "sortAscending":  ": activate to sort column ascending",
        "sortDescending": ": activate to sort column descending"
    }
     }})
} );
</script>

<style >
    body {
background-image: url(music.png);
background-repeat: no-repeat;
background-position: center center;
background-attachment: fixed; 
-webkit-background-size: cover;
-moz-background-size: cover;
-o-background-size: cover; 
background-size: cover; 
}
.botao{
    float:right;
    color:#333 !important;

    border:1px solid #979797;
</style>
</head>

<body>
<br><br>
<a  class="botao" href="novo.php" role="button" id="botao" script{float:right}>Novo Registro</a>
<br><br>

<table id="example" class="display" style="width:100%">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Date de Nascimento</th>
                    <th>Salario</th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>

            <tbody>
     <!--conteudo-->           
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
    <!--fim conteudo-->  
            </tbody>

            <tfoot>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Data de Nascimento</th>
                    <th>Salario</th>
                    <th></th>
                    <th></th>
                </tr>
            </tfoot>
</table>
</body>
</html>
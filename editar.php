   
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Novo Registro</title>
 <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link href="https://fonts.googleapis.com/css?family=Lobster+Two"rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<style >
    body {
background-image: url(http://images.virgula.com.br/2015/05/coachella13c_042.jpg);
background-repeat: no-repeat;
background-position: center center;
background-attachment: fixed; 
-webkit-background-size: cover;
-moz-background-size: cover;
-o-background-size: cover; 
background-size: cover; 
}

 .letra{
        font-family: 'Lobster Two', cursive;
        }

    body{
        background-color:#fafafa;
        font-size: 17px;
        }

    .img{ 
 a{

 }

</style>
</head>
<body>
<center>    

<div class="container" >

    <div class="row" >
        <div class="col-md-4 offset-md-4" style="background-color:white; border: 1px solid #e6e6e6; ">
            <div class="col-md-12"  style="background-image: url()>
                <b><i><font face="sans-seriff" size="6">Novo Registro</font></i></b> 
               
                
                <br><br>

                <form action="atualizar.php" class="form-signin"> 
                      <input type=hidden name=id value=$id>

                        <div id="all" class="form-group">
                            <div class="form-group" >
                                <div class="form-group" >
                                   
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
                                            echo "
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
                                        ?>
                                </div>
                               
                            </div> 
                        </div>
                        
                </form> 
                        </div>
            </div>
        </div>
        <br>
    </div>

<br><br>
<!-- JavaScript (Opcional) -->
<!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</body>
</html>





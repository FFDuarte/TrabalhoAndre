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
background-image: url(https://i.ytimg.com/vi/yIFDGmnHPss/maxresdefault.jpg);
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
        margin
</style>
</head>
<body>
<center>    

<div class="container">

    <div class="row">
        <div class="col-md-4 offset-md-4" style="background-color:white; border: 1px solid #e6e6e6; ">
            <div class="col-md-12" >
                <b><i><font face="sans-seriff" size="6">Novo Registro</font></i></b> 
               
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTISXb6J_5DDyxRvSSjpYYGvRKIQPYiMkyyUbhpVkVNz2EvBDE_" width="318" height="200">
                <br><br>

                <form action=salvar.php class="form-signin">

                        <div id="all" class="form-group">
                            <div class="form-group" >
                                <div class="form-group" id="nome">
                                    
                                    <input type="text" placeholder="Nome de usuário" name="nome" class="form-control" style="background-color:#fafafa;font-size: 12px; color: #999;" >
                                    <br />
                                    <input type="date" placeholder="Data de Nascimento" name="idade" class="form-control"style="background-color:#fafafa; font-size: 12px; color: #999;">
                                    <br />
                                    <input type="number" placeholder="Salario" name="salario" class="form-control"style="background-color:#fafafa; font-size: 12px; color: #999;">
                                </div>
                               
                            </div> 
                        </div>
                         <input type=submit value=Salvar>
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
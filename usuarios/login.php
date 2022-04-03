<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="pt-br">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link href="/assets/css/bootstrap.css" rel="stylesheet">
    <style>
body{
        background-color: #B8F2A7; 
        font-family:ui-sans-serif;
        font-size:20px;
       }
h1{
        text-align:center;

       }
form{
        background-color: #245739;
        position: absolute; 
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        padding: 70px;
        border-radius: 10px;
        color:white;
       }

.input{
        padding:15px;
        border:none;
        outline:none;
       }
.botao{
        border:none;
        padding:15px;
        width:100%;
        border-radius: 10px;
        color: #245739;
        font-weight:bolder;
        text-align:center;

    }
    </style>
</head>

<body>
<form action="../app/usuarios/salvar.php" method="get">
         <h1>Login</h1>
    <div class="input">
        <input type="text" name="email" placeholder="E-mail" class="form-control">
    <br>
        <input type="text" name="senha" placeholder="Senha" class="form-control">
            
        <div class="botao">
               <button type="submit" class="btn btn-success btn-lg">Salvar</button>                   
        </div>  
    </div>      
</form>      
</body>

<?php include('../layout/footer.php'); ?>
</html>
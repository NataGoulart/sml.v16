<div class="tudo">
<?php
 include("conecta.php");
$comando = $pdo->prepare("SELECT * FROM cadastro");
$resultado = $comando->execute();
while( $linhas = $comando->fetch() )
{

    $Usuario =  $linhas["usuario"];
    $Senha =  $linhas["senha1"];
    $City =  $linhas["cidade"];
    $Email =  $linhas["email"];
    
    echo( "Login: $Usuario / Senha: $Senha / Cidade: $City / Email: $Email <br>");

}
?></div>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Smiling</title>

    <style>
    body {
        background-image: url('imagens/ceuadm.png');
        background-size: 2400px;
        background-position: center;
        }

    header{
        display: flex;
        justify-content: space-around;
        padding-top: 1rem;
        align-items: center;
        text-align: center;
        width: 100%;
        top: 0;
        right: 0;
        z-index: 800;
        position: fixed;
        transition: all.35s ease;
        background-color:  rgb(13, 146, 199);
        box-shadow:         30px 20px 70px rgba(0, 0, 0, 0.33);
        padding: 1px 1%;
    }

    .tudo
      {
        width: 50%;
        height: 200px;
        margin-top: 170px;
        margin-left: 400px;
        display: flex;
        flex-direction: row;
        justify-content: center;
        justify-items: center;
        align-content: center;
        align-items: center;  
        font-size:20px;    
      }
    </style>
</head>
<body>
<header>
    </nav>
   <center>
       <a href="pedidos.php"><img src="imagens/logo.png" width="200px"></a>
   </center> 
</header>
</body>
</html>
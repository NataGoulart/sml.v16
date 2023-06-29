<div class="tudo">
<?php
 include("conecta.php");
$comando = $pdo->prepare("SELECT * FROM carrinho");
$resultado = $comando->execute();
while( $linhas = $comando->fetch() )
{

    $produto =  $linhas["Id_produto"];
    $codigo =  $linhas["login"];
    
    echo( "ID pedido: $produto Login: $codigo  <br>");

}
	
?></div>


<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="pedidos2.css">
    <link rel="shortcut icon" href="imagens/icone-da-pagina.png" type="image/x-icon">
    <title>Smiling</title>
   

</head>
<body>
    
    <header>
    </nav>
   <center>
       <a href="pgadm.html"><img src="imagens/smlAGRvaiP.png" width="200px"></a>
   </center> 
   <h2 class=asks>Pedidos Solicitados</h2>

   <style>
        .bita{
      position: absolute;
      margin-top:70px;
      margin-left:200px;
    }
  
    .cozinha{
      position: absolute;
      margin-top:70px;
      margin-left:-10px;
    }
  
    .cacto{
      position: absolute;
      margin-top:70px;
      margin-left:-200px;
    }

    .volante{
      position: absolute;
      margin-top:70px;
      margin-left:-400px;
    }

    .cadas{
        margin-top:80px;
        position: absolute;
        font-size:20px
    }
   </style>
</header>


<div class=cadas><a href="pglogin.php">Informações dos cadastrantes</a></div>

<div class=produtos>
         <div class="volante">
              <img src="imagens/Volante_Fom_Fom-removebg-preview.png" alt="volante" class="product-image">  1   
           </div>
    
  
         <div class="cacto">
            <img src="imagens/Cacto_Dançante-removebg-preview.png" alt="Cacto" class="product-image"> 2
         </div>


         <div class="cozinha">
            <img src="imagens/MINI_COZINHA_INFANTIL_COMPLETA-removebg-preview.png" alt="Minicozinha" class="product-image"> 3
        </div>

        <div class="bita">
          <img src="imagens/Fazendinha_Mundo_Bita-removebg-preview.png" alt=" Mundo Bita" class="product-image"> 4
       </div>
    </div>
</body>
</html> 



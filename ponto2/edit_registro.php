<?php
session_start();
include 'conexao.php';

//$email= $_SESSION['email'];
$registroID = $_GET['GetID'];


//sql para pegar o id da pasta para edição do registro

// temos agora duas consulta uma para pega o GET e o resultado passar como parametro para editar a caixa e mudar em todas

$sqlcp="SELECT REGISTROS.ID,REGISTROS.DATA,REGISTROS.HORA_ENTRADA,REGISTROS.HORA_SAIDA_INTERVALO,
REGISTROS.HORA_RETORNO_INTERVALO,
REGISTROS.HORA_SAIDA FROM REGISTROS 
WHERE ID='$registroID'";

$result=mysqli_query($conn,$sqlcp);


 while($row=mysqli_fetch_assoc($result))
        
 {
   $id=$row['ID'];
   $DATA=$row['DATA'];
   $HORA_ENTRADA=$row['HORA_ENTRADA'];
   $HORA_SAIDA_INTERVALO=$row['HORA_SAIDA_INTERVALO'];
   $HORA_RETORNO_INTERVALO = $row['HORA_RETORNO_INTERVALO'];
   $HORA_SAIDA=$row['HORA_SAIDA'];
   
  
   
}





?>



<!DOCTYPE html>
<html lang="pt-br">


<head>

 <!-- Adicionando JQuery -->


<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sistema DE Ponto</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
    <link rel="stylesheet" href="../css/formesimples.css">
    <link rel="stylesheet" href="css_forms/styles.css">

    <meta charset="UTF-8">

    <script src="js/jquery.min.js"></script>
		<script src="js/jquery.dropotron.min.js"></script>
		<script src="js/jquery.scrollgress.min.js"></script>
		<script src="js/jquery.scrolly.min.js"></script>
		<script src="js/jquery.slidertron.min.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/skel-layers.min.js"></script>
		<script src="js/init.js"></script>
		<noscript>
			<link rel="stylesheet" href="css/skel.css" />
			<link rel="stylesheet" href="css/style.css" />
			<link rel="stylesheet" href="css/style-xlarge.css" />
            
		</noscript>	
	
<!--===============================================================================================-->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>


</head>

<body>



<div id="navbar">
  <a class="active" href="javascript:void(0)">Olá, <?php// echo $_SESSION['email'];?></a>
  <a href="#">Principal</a>
  <a href="../logout.php">Sair</a>


</div>
<br>

 <!-- Inicio do formulario -->

 



<!--inicio do forme que recebe a busca para cadastrar-->




<header class="major">
        <p></p>
				
        <div class="title">
            Editar  Registro de  Ponto 
        </div>
					
				</header>
				<div class="container">
						
					<!-- Content -->
				<section id="content">


<div class="wrapper">

  <form class="form" action="atualiza_registro.php" method="POST" enctype="multipart/form-data">
        

        <div class="form">

        
        <div class="inputfield">
             <label>DATA:</label>

             <INPUT TYPE="hidden" name="id" VALUE="<?php echo $id?>">
             <INPUT TYPE="date"  VALUE="<?php echo $DATA?>" readonly>
            
        </div>
        <div class="inputfield">
             <label>HORA DE ENTRADA:</label>
             <input name="h_entrada" type="text" value="<?php echo $HORA_ENTRADA?>"  />
        </div>
        <div class="inputfield">
             <label>HORA DA SAIDA INTERVALO:</label>
             <input name="h_saida_inter" type="text"  id="cod_d"  value="<?php echo $HORA_SAIDA_INTERVALO ?>"/>
        </div>
       
         <div class="inputfield">
            <label>HORA DO RETORNO DO INTERVALO:</label>
            <input name="h_retorno_inter" type="text" value="<?php echo $HORA_RETORNO_INTERVALO?>" />
           </div>

           <div class="inputfield">
            <label>HORA DA SAIDA:</label>
            <input name="h_saida" type="text" value="<?php echo $HORA_SAIDA?>"  />
           </div>

                            


          

          
          
            <div class="inputfield">   
               <input type="submit" name="enviar" value="Atualizar">
            </div>
       
                       
     </div>
   </form>

</div>

<script>
window.onscroll = function() {myFunction()};

var navbar = document.getElementById("navbar");
var sticky = navbar.offsetTop;

function myFunction() {
  if (window.pageYOffset >= sticky) {
    navbar.classList.add("sticky")
  } else {
    navbar.classList.remove("sticky");
  }
}
</script>


<footer>
</footer>


</body>
</html>
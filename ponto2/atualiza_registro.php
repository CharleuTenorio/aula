<?php
include 'conexao.php';

?>


<!DOCTYPE html>

<head>
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
  <a class="active" href="javascript:void(0)">Olá, <?php echo $_SESSION['email'];?></a>
  <a href="#">Principal</a>
  <a href="#">Sair</a>
</div>

<div class="content">
<?php
 
$ID=mysqli_escape_string($conn,trim($_POST['id']));
// $data_reg =mysqli_escape_string($conn,trim($_POST['data_reg'])) ;
 $h_entrada =mysqli_escape_string($conn,trim($_POST['h_entrada'])) ;
 $h_saida_inter =mysqli_escape_string($conn,trim($_POST['h_saida_inter'])) ;
 $h_retorno_inter =mysqli_escape_string($conn,trim($_POST['h_retorno_inter'])) ;
 $h_saida =mysqli_escape_string($conn,trim($_POST['h_saida'])) ;

 
 $sql="UPDATE REGISTROS SET HORA_ENTRADA='$h_entrada',
              HORA_SAIDA_INTERVALO='$h_saida_inter',
              HORA_RETORNO_INTERVALO='$h_retorno_inter',
              HORA_SAIDA='$h_saida'
              WHERE ID='$ID'" ;
 
  
  
      if(mysqli_query($conn,$sql)){
          echo("Atualizado  com sucesso");
          

          $conn->close();
            
       
        
      }
      else
      {
          echo("Não foi possível Atualizar");
          
      }
   

  

  ?>
</div>

<a href="consultar_ponto.php">Voltar</a><br>


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



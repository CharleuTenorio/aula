<?php
include 'conexao.php';

$registroID = $_GET['GetID'];


//sql para pegar o id da pasta para edição do registro

$sqlcp="DELETE FROM `REGISTROS` WHERE ID='$registroID'";

$result=mysqli_query($conn,$sqlcp);


 while($row=mysqli_fetch_assoc($result))
        
 {
   $id=$row['id'];
   $num_box=$row['num_box'];
   $num_paste=$row['num_paste'];
   

   
}









?>



<!DOCTYPE html>
<html lang="pt-br">


<head>

 <!-- Adicionando JQuery -->


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

<script type> 
function mascara_domicilio(){
  var cod_d =document.getElementById('cod_d')
  if(cod_d.value.length==3 || cod_d.value.length==7){
    cod_d.value +="."

  } else if (cod_d.value.length==11){
    cod_d.value +="."
  }
}

</script>
</head>

<body>



<div id="navbar">
  <a class="active" href="javascript:void(0)">Olá, <?php echo $_SESSION['email'];?></a>
  <a href="adm_familia.php">Principal</a>
  <a href="form_familia.php">Nova Família</a>
  <a href="../logout.php">Sair</a>


</div>
<br>

 <!-- Inicio do formulario -->

 



<!--inicio do forme que recebe a busca para cadastrar-->




<div class="wrapper">

  <form class="form" action="excluir_pasta_familia.php" method="POST" enctype="multipart/form-data">
        <div class="title">
            Excluir Pasta  
        </div>

        <div class="form">

        
        <div class="inputfield">
             <label>Número da Caixa:</label>

             <INPUT TYPE="hidden" name="id" VALUE="<?php echo $id?>">
           
             <input name="n_caixa" type="number"  value="<?php echo $num_box ?>"  readonly/>
        </div>
        <div class="inputfield">
             <label>Número da Pasta:</label>
             <input name="n_pasta" type="number" value="<?php echo $num_paste?>"  readonly />
        </div>
        <div> 
        <label> Atenção! Ao Excluir apasta: <?php echo $num_paste?> </label>
        <label> Você ira apagar todas as famílias dessa pasta! </label>
        </div>
        
           

          

          
          
            <div class="inputfield">   
               <input type="submit" name="enviar" value="Exclir">
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
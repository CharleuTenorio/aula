<?php

include 'conexao.php';

// incio da paginacao


//Receber o número da página
$pagina_atual = filter_input(INPUT_GET,'pagina', FILTER_SANITIZE_NUMBER_INT);		
$pagina = (!empty($pagina_atual)) ? $pagina_atual : 1;

//Setar a quantidade de itens por pagina
$qnt_result_pg = 50;

//calcular o inicio visualização
$inicio = ($qnt_result_pg * $pagina) - $qnt_result_pg;
//$id = $_GET['id'];
//consulta da tabela de registros 
$sqlreg="SELECT REGISTROS.ID,FUNCIONARIO.CODIGO,FUNCIONARIO.NOME,REGISTROS.DATA,REGISTROS.HORA_ENTRADA,
REGISTROS.HORA_SAIDA_INTERVALO, REGISTROS.HORA_RETORNO_INTERVALO,REGISTROS.HORA_SAIDA 
FROM REGISTROS 
INNER JOIN FUNCIONARIO ON FUNCIONARIO.CODIGO=REGISTROS.CODIGO
LIMIT $inicio,$qnt_result_pg";
$resul = mysqli_query($conn,$sqlreg);



?>
<!DOCTYPE html>
<html>
<head>
	<title>Consultar Pontos</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../favicon.ico">

    <!-- Principal CSS do Bootstrap -->
  
    <style>
table {
    border-collapse: collapse;
    width: 100%;
}

th, td {
    text-align: left;
    padding: 8px;
}

tr:nth-child(even){background-color: #f2f2f2}

th {
    background-color: #4d4dff;
    color: white;
}
    
</style>
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

</head>


<body>

<div>

  <div>
	<h2> Consultar Ponto</h2>
	<br>
     
	<table>
    <thead>

<tr>



<td><form method="POST"  action="mostra_registros.php">
 <input type=text name="localiza" whidt="200" placeholder="Busca Nome"></td>
<td><input  type=submit name="busca" value="Consultar" >
</form></td> 

</tr>
</thead>
</table>

  <table id="customers" >
    <tr>
    
       <th> Codigo</th>
       <th> Código</th>
       <th> Nome</th>
       <th> Data</th>
       <th> Hora da Entrada</th>
	     <th> Hora da Saida do Intervalo</th>
	     <th> Hora da Retorno do Intervalo</th>
	     <th> Hora de Saída</th>
       <th>Editar</th>
       <th>Excluir</th>
       
     
    </tr>
    <?php
       while($row=mysqli_fetch_assoc($resul)){
         
        $ID = $row['ID'];
        $CODIGO= $row['CODIGO'];
        $NOME= $row['NOME'];
        $DATA= $row['DATA'];
        $HORA_ENTRADA= $row['HORA_ENTRADA'];
		$HORA_SAIDA_INTERVALO= $row['HORA_SAIDA_INTERVALO'];
		$HORA_RETORNO_INTERVALO= $row['HORA_RETORNO_INTERVALO'];
		$HORA_SAIDA= $row['HORA_SAIDA'];
      
           
       
    ?>
     
     <tr>
     <td><?php echo $ID  ?> </td>
     <td><?php echo $CODIGO ?> </td>
     <td><?php echo $NOME ?> </td>
     <td><?php echo $DATA ?> </td>
     <td><?php echo $HORA_ENTRADA ?> </td>
	   <td><?php echo $HORA_SAIDA_INTERVALO ?> </td>
	   <td><?php echo $HORA_RETORNO_INTERVALO ?> </td>
	   <td><?php echo $HORA_SAIDA ?> </td>
     <td><a href="edit_registro.php?GetID=<?php echo $ID?>"><img src="img/edita.png"></a> </td>
     <td><a href="delete_registro.php?GetID=<?php echo $ID?>"><img src="img/delete.png"></a> </td>          
     </tr>
     <?php
                 }
     ?>

</table>

	<!--codigo paginacao-->
  <?php 
              //Paginção - Somar a quantidade de usuários
              $result_pg = "SELECT COUNT(ID) AS num_result FROM REGISTRO";
              $resultado_pg = mysqli_query($conn, $result_pg);
              $row_pg = mysqli_fetch_assoc($resultado_pg);
              //echo $row_pg['num_result'];
              //Quantidade de pagina 
              $quantidade_pg = ceil($row_pg['num_result'] / $qnt_result_pg);
              
              //Limitar os link antes depois
              $max_links = 2;
              echo "<a href='consultar_ponto.php?pagina=1'>Primeira</a> ";
              
              for($pag_ant = $pagina - $max_links; $pag_ant <= $pagina - 1; $pag_ant++){
                if($pag_ant >= 1){
                  echo "<a href='consultar_ponto.php?pagina=$pag_ant'>$pag_ant</a> ";
                }
              }
                
              echo "$pagina ";
              
              for($pag_dep = $pagina + 1; $pag_dep <= $pagina + $max_links; $pag_dep++){
                if($pag_dep <= $quantidade_pg){
                  echo "<a href='consultar_ponto.php?pagina=$pag_dep'>$pag_dep</a> ";
                }
              }
              
              echo "<a href='consultar_ponto.php?pagina=$quantidade_pg'>Ultima</a>";
?>

	
</div>
</div>
</body>
</html>
<?php

include 'conexao.php';

//$id = $_GET['id'];
//consulta da tabela de registros 
$sqlreg="SELECT funcionario.ID,funcionario.CODIGO,funcionario.NOME,registros.DATA,registros.HORA_ENTRADA, registros.HORA_SAIDA_INTERVALO,registros.HORA_RETORNO_INTERVALO,registros.HORA_SAIDA 
from registros INNER JOIN funcionario ON funcionario.CODIGO=registros.CODIGO";
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

<div >
	<h2> Consultar Ponto</h2>
	<br>
     
	<table>
    <thead>

<tr>



<td><form method="POST"  action="mostra_registro.php">
 <input type=text name="localiza" whidt="200" placeholder="Busca Nome"></td>
<td><input  type=submit name="busca" value="Consultar" >
</form></td> 
<td><input type="submit" value="Adicionar" onclick="javascript: location.href='form_funcionarios.php';" /></td>
</tr>
</thead>
</table>

<table>

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
     <td><a href="edit_funcionarios.php?GetID=<?php echo $Codigo?>">Editar<img src="../img/Edit.png"></a> </td>
               
     </tr>
     <?php
                 }
     ?>

</table>


	<!---->

	
</div>
</div>
</body>
</html>
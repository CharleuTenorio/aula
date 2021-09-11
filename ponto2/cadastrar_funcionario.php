<?php

include '../config/conn.php';

$id = $_GET['id'];

?>
<!DOCTYPE html>
<html>
<head>
	<title>Cadastrar funcionario</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../favicon.ico">

    <!-- Principal CSS do Bootstrap -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    
    <style type="text/css">
	
	#tamanhoContainer{
		width: 1000px;
        margin-right: -100px;
	}


  body{
     
     background: url(html.gif) no-repeat;

}



</style>	

</head>
<body>

<div id="tamanhoContainer" class="container col-md-9" style="margin-top: 30px;">

  <div class="col-md-4">
	<h2>Cadastro</h2>

	<br>

	<form method="post" action="registrar_funcionario.php">
	    
	  <div class="form-group">
	    <label for="exampleFormControlInput1">Nome</label>
	    <input type="text" name="nome" class="form-control" id="exampleFormControlInput1" placeholder="Lucas Castro">
	  </div>
	  
	    <div class="form-group">
	    <label for="exampleFormControlSelect1">Tipo Funcionario</label>
	    <select name="tipo_funcionario" class="form-control" id="exampleFormControlSelect1">
	    	<option value="" selected>- Selecione -</option>
	      <option value="ESTAGIARIO">ESTAGIARIO</option>
	      <option value="CONTRATADO">CONTRATADO</option>

	    </select>
	  </div>
	  
	  <div class="form-group">
	    <label for="exampleFormControlInput1">Equipe /Cargo</label>
	   		  <select name="funcao" class="custom-select my-1 mr-sm-2" id="inlineFormCustomSelectPref">
					 	<option value="null">Selecione</option>
					 	<option value="TI">TI</option>
						<option value="Financeiro">Financeiro</option>
					    <option value="Departamento Pessoal">Departamento Pessoal</option>
					    <option value="Qualidade">Qualidade</option>
					    <option value="Suporte">Suporte</option>
					    <option value="Manager">Manager</option>
					    <option value="Secretário">Secretário</option>
					    <option value="Monitor">Monitor</option>
					    <option value="MILLIONS CLASS">MILLIONS CLASS</option>
					    <option value="SILVER FOX">SILVER FOX</option>
					    <option value="TUBARÕES BRANCOS">TUBARÕES BRANCOS</option>
					    <option value="EAGLES">EAGLES</option>
					    <option value="WHITE LIONS">WHITE LIONS</option>
					    <option value="JOKER">JOKER</option>
				 </select>
				 
		  <div class="form-group">
	    <label for="exampleFormControlSelect1">Empresa</label>
	    <select name="empresa" class="form-control" id="exampleFormControlSelect1">
	    	<option value="" selected>- Selecione -</option>
	      <!-- NOME EMPRESA -->
	      <option value="1">BRTZ</option> <!-- Substitua 'NOME EMPRESA 1' pelo nome de sua empresa -->
	    </select>
	  </div>		 
				 
				 
	  </div>
	  <div class="form-group">
	    <label for="exampleFormControlInput1">CPF</label>
	    <input type="text" name="codigo" class="form-control" id="exampleFormControlInput1" placeholder="CPF">
	  </div>	  	  
	 
	  
	  <div class="form-group">
	    <label for="exampleFormControlSelect1">Turno</label>
	    <select name="turno" class="form-control" id="exampleFormControlSelect1">
	    	<option value="" selected>- Selecione -</option>
	      <option value="M">MATUTINO</option>
	      <option value="V">VESPERTINO</option>
	      <option value="I">INTEGRAL</option>
	    </select>
	  </div>
	  
	  
	  <div class="form-group">
	    <button type="submit" class="btn btn-success my-1">Cadastrar Funcionario</button>
	  </div>
	</form>

 </div>
</div>

</body>
</html>
<?php



?>


<!DOCTYPE HTML>

<html>
	<head>
		<title> </title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<!--[if lte IE 8]><script src="css/ie/html5shiv.js"></script><![endif]-->
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

		<!-- Header -->
			<header id="header" class="skel-layers-fixed">
			<h1>Bem vindo  <span> <?php echo $_SESSION['email'];?></span></h1>	
				<nav id="nav">
					<ul>
                      <li><a href="form_consulta_cidadao.php">Minhas solicitações</a></li> 
                      <li><a href="form_cad_solicitacao.php">Nova Solicitação</a></li>                                                                                                      
                      <li><a href="../logout.php">sair</a></li>
						
					</ul>
				</nav>
			</header>

		<!-- Main -->
        
			<section id="main" class="wrapper style1">
				<header class="major">
                <p><img src="../img/img_logo.png" ></p>
					<h2>Cadastre Suas Solicitações </h2>
					
				</header>
				<div class="container">
						
					<!-- Content -->
				<section id="content">

				<form class="form" action="cad_solicitacao_bk.php" method="POST"  >
    
	

				  <div>
                        <label >Endereço</label>
                        <input type="text" id="fname" name="endereco" required maxlength="300">
                        </div>

                        <div>
                        <label for="country">Número</label>
                        <input type="text" id="lname" name="numero" placeholder="Numero" required maxlength="10">
                        </div>

                        <div class="inputfield">
	                    <label>Bairro</label>
	                   <select name="bairro" id="bairro" >
	                    <?php while($prod = mysqli_fetch_array($queryb)) { ?>
		                <option value="<?php echo $prod['id_bairro'] ?>"><?php echo $prod['bairro'] ?></option>
	                 <?php } ?>
				   
	                   </select>
	              </div> 

						<div>
                        <label for="country">CEP</label>
                        <input type="text" id="lname" name="cep" placeholder="cep"  maxlength="10">
                        </div> 

						
						<div>
                        <label for="country">Complemento</label>
                        <input type="text" id="lname" name="complemento" placeholder="complemento"  maxlength="10">
                        </div> 
	               


	  <div class="inputfield">
	  <label>Problema</label>
	  
	  <select name="demanda" id="select_d">
	  <option>Selecione...</option> 
		 <?php while($prod = mysqli_fetch_array($queryd)) { ?>
		 <option value="<?php echo $prod['id_demanda'] ?>"><?php echo $prod['demanda'] ?></option>
	 <?php } ?>
		  
	  </select>
	  
	  </div> 

		<div class="inputfield">
	  <label>Descrição do Problema</label>
	  <textarea  name="obs" rows="4" cols="60" id="obs"></textarea>
	  
	  </div> 


   
	 
	   
	<div class="inputfield">
		<input type="submit" value="Salvar" class="btn" >
	</div>

   </div>
 </form>    
                              
			     </section>
                </div>
			
		<!-- Footer -->
			<footer id="footer">
			
				
            <span class="copyright">
					&copy; Copyright. All rights reserved. Design by <a href="#">Prefeitura Municipal de Arcoverde</a>
				</span>
			</footer>

	</body>
</html>
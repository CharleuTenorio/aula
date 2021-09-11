
<?php
	

	

date_default_timezone_set('America/Sao_Paulo');

$server = "localhost";
$user = "root";
$pass = "";
$dbname = "ponto";

$conn = mysqli_connect($server, $user, $pass, $dbname);

define('BRTZ', 'SUA EMPRESA 1');
define('EMPRESA2', 'SUA EMPRESA 2');


//CADASTRAR DUAS EMPRESAS PARA GERAR DOIS RELATORIOS


?>
	

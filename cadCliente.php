<!DOCTYPE html>
<html lang="pt-br">
	
<head>
	<meta charset="utf-8">
</head>

<body>
<?php
	echo "<h1>Os dados informados são:<h1>";
	$nome = $_POST["txtNome"];
	$snome = $_POST["txtSnome"];
	$email = $_POST["txtEmail"];
	$dtNasc = $_POST["txtData"];
	$autor = $_POST["txtAutor"];

	if(isset($_POST["checkAdm"]))
	$adm = true;
	else
	$adm = false;
	if(isset($_POST["checkDireito"]))
	$direito = true;
	else
	$direito = false;
	if(isset($_POST["checkLitEstrang"]))
	$litestrang = true;
	else
	$litestrang = false;
	if(isset($_POST["checkLitNac"]))
	$litnac = true;
	else
	$litnac = false;
	if(isset($_POST["checkAutoAjuda"]))
	$autoajuda = true;
	else
	$autoajuda = false;
	if(isset($_POST["checkRomance"]))
	$romance = true;
	else
	$romance = false;
	if(isset($_POST["checkInformatica"]))
	$informatica = true;
	else
	$informatica = false;
	if(isset($_POST["checkMedicina"]))
	$medicina = true;
	else
	$medicina = false;
	if(isset($_POST["checkReligiao"]))
	$religiao = true;
	else
	$religiao = false;
	$senha1 = $_POST["txtSenha1"];
	$senha2 = $_POST["txtSenha2"];

	$camposOK = true;

	if($email == ""){
		echo "Favor informar email <br>";
		$camposOK = false;
	}

	if($senha == " "){
		echo "Favor informar uma senha <br>";
		$camposOK = false;
	}
	


	if($nome == ""){
	echo "Nome incorreto <br>";
	$camposOK = false;
	}
	if($snome == ""){
	echo "Sobrenome incorreto<br>";
	$camposOK = false;
	}
	if($senha1 != $senha2){
	echo "Senha não correspondente";
	$camposOK = false;
	}
 	$dia = substr($dtNasc,0,2);
	$mes = substr($dtNasc,3,2);
	$ano = substr($dtNasc,6,4);
	



		
	if($camposOK){
	echo "<table border='0' cellpadding='5'>";
	echo "<tr><td>NOME:</td><td><b>$nome</b></td></tr>";
	echo "<tr><td>SOBRENOME:</td><td><b>$snome</b></td></tr>";
	echo "<tr><td>EMAIL:</td><td><b>$email</b></td></tr>";
	echo "<tr><td>DATA DE NASCIMENTO:</td><td><b>$dtNasc</b></td></tr>";
	echo "<tr><td>SENHA:</td><td><b>$senha1</b></td></tr>";
	echo "<tr><td>AUTOR FAVORITO:</td><td><b>$autor</b></td></tr>";
	echo "<tr><td>Gêneros Literários:</td><td><b>";
	if($adm)
	echo"Administração <br>";
	if($direito)
	echo"Direito <br>";
	if($litestrang)
	echo"Literatura Estrangeira<br>";
	if($litnac)
	echo"Literatura Nacional <br>";
	if($autoajuda)
	echo"Auto-Ajuda <br>";
	if($romance)
	echo"Romance <br>";
	if($informatica)
	echo"Informática <br>";
	if($medicina)
	echo"Medicina e Saúde<br>";
	if($religiao)
	echo"Religião <br>";
	echo"</b></td></tr></table>";
	
}                                             





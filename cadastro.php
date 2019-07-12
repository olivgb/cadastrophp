<?php include("clase/conexao.php");?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title>FigSistema - Cadastrar</title>
	<link rel="stylesheet" href="css/estilo.css">
</head>
<body>
	<div id="corpoform">
	<h1>Sistema de Cadastro</h1>
     <form method="POST" action="conexao.php">
        <input type="text" name="nome"  placeholder="Nome" maxlength="40">
     	<input type="text" name="usuario" placeholder="Usuario" maxlength="11">
     	<input type="password" name="senha" placeholder="Senha" maxlength="32">
        <input type="password" name="confirmarsenha" placeholder="Confirma Senha" maxlength="32">
     	<input type="perm" name="permissao" placeholder="Permissão" maxlength="1">


     	<center><button name="entrar">Cadastrar Funcionario</button></center>
     </form>
     </div>
</body>
</html>

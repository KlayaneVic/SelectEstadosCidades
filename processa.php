<?php

	//Capturei as informações do formulário
	$nome = $_POST['nome'];
	$telefone = $_POST['telefone'];
    $idade = $_POST['idade'];
    $num_estado = $_POST['estados'];
    $num_cidade = $_POST['cidades'];
	
	//Abrindo conexão com o BD
	include('cabecalho_conexao.php');
    
    $estados = "SELECT nome FROM estados WHERE id=$num_estado";
    $dados_recuperados = mysqli_query($con, $estados);
    if(mysqli_num_rows($dados_recuperados) > 0){
        
        while (($result = mysqli_fetch_assoc($dados_recuperados)) != null) {
            $estado = $result['nome'];
        }
    }

    $cidades = "SELECT nome FROM cidades WHERE id=$num_cidade";
    $dados = mysqli_query($con, $cidades);
    if(mysqli_num_rows($dados) > 0){
        
        while (($resultado = mysqli_fetch_assoc($dados)) != null) {
            $cidade = $resultado['nome'];
        }
    }
    
	$SQL = "INSERT INTO pessoas (nome, telefone, idade, estado, cidade) 
			VALUE ('$nome', $telefone, $idade, '$estado', '$cidade')";
			
	$texto = "$nome inserido(a) com Sucesso<br>";
	
	include('rodape_conexao.php');
?>
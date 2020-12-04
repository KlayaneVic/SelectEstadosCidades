<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
		<script src="js/jquery-3.5.1"></script>
		<script src="js/arquivo_externo.js"></script>
    </head>
    <body>
        <form action="processa.php" method="POST">
			<fieldset>
                <legend>Ensira seus Dados:</legend>
                Nome: <input type="text" name="nome" /><br>
                Telefone: <input type="number" name="telefone" /><br>
                Idade: <input type="number" name="idade" /><br>

                <select id="estados" name="estados">
                    <option value="" selected="selected">Selecione o Estado</option>
                    <?php
                        include("cabecalho_conexao.php");
                        $SQL = "SELECT * FROM estados";
                        $dados_recuperados = mysqli_query($con, $SQL);
                        if(mysqli_num_rows($dados_recuperados) > 0){
                        
                            while (($resultado = mysqli_fetch_assoc($dados_recuperados)) != null) {

                                $estado = $resultado['nome'];
                                $id_estado = $resultado['id'];
                                $uf = $resultado['uf'];
                                echo "<option value='$id_estado'>$uf - $estado</option>";
                            }
                        }else {
                            echo "Nao possui Estados. <br>";
                        }

                        include("rodape_conexao.php");
                    ?>
                </select><br>
                <select id="cidades" name="cidades" style="display: none">
                    <option value="" selected="selected">Ensira sua Cidade</option>
                </select><br>
				
				<input type="submit" value="Cadastrar" />
			</fieldset>
        </form>
    </body>
</html>
    <?php
            include("cabecalho_conexao.php");
            $parametro = $_POST['parametro'];
            $select = 0; 
            if($parametro != ""){
                $cidades = "SELECT * FROM cidades WHERE id_estado=$parametro";
                $dados = mysqli_query($con, $cidades);
                    if(mysqli_num_rows($dados) > 0){
                        
                        $select .= "<select id='cidades' name='cidades'>";
                        $select .= "<option value='' selected='selected'>Ensira sua Cidade</option>";
                        while (($result = mysqli_fetch_assoc($dados)) != null) {
                            $cidade = $result['nome'];
                            $id_cidade = $result['id'];
                            $select .="<option value='$id_cidade'>$cidade</option>";
                        }

                        $select .= "</select>";
                        echo "$select";  
                    }
            }else{
               
            }
    ?>
    
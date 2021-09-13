<?php
    include_once("../BD/connectDB.php");
    $id = $_GET['id'];
    $pegarSql= "SELECT * FROM pessoa WHERE id = '$id'";
    $pegueiSql=mysqli_query($conectar, $pegarSql);
    $pessoaSql=mysqli_fetch_assoc($pegueiSql);
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link href="../css/bootstrap.css" rel="stylesheet" />
	<link href="../css/bootstrap-theme.css" rel="stylesheet" />
    <title>usuário</title>
    <link rel="shortcut icon" href="../imagensDogs/dog.ico" type="image/x-icon" />
</head>
<body>
    <p></p>
    <div class='container'>
        <div id="form_id">
            <h1 class="jumbotron-heading">SEU PERFIL:</h1>
            <h5 class="jumbotron-heading"><a href="dogs.php?id=<?php echo $id; ?>">VOLTAR PARA A PAGINA PRINCIPAL</a></h5>
            <h5 class="jumbotron-heading"><a href="../BD/delUser.php?id=<?php echo $id; ?>">DELETAR PERFIL</a></h5>
            <h6>SE QUISER ATUALIZAR, ALTERE OS CAMPOS E CLIQUE NO BOTÃO "ATUALIZAR" NO FINAL</h6>
            <form action="../BD/updateUsuario.php" method="post" name="formUser" >
                <div class="form-group">
                    <input class="form-control" type="hidden" name="id" value="<?php echo $id; ?>">
                    <label><b>NOME COMPLETO:</b></label>
                    <input class="form-control" type="text" name="nomeUser" id="nomeUser_id" value="<?php echo $pessoaSql['nome']; ?>"><br><br>
                    <label><b>DATA DE NASCIMENTO:</b></label>
                    <input class="form-control" type="date" name="niverUser" id="niverUser_id" value="<?php echo $pessoaSql['aniver']; ?>"><br><br>
                    <label><b>CPF:</b></label>
                    <input class="form-control" type="number" name="cpf" id="cpf_id" value="<?php echo $pessoaSql['cpf']; ?>"><br><br>
                    <label><b>CEP:</b></label>
                    <input class="form-control" type="number" name="cep" id="cep_id" value="<?php echo $pessoaSql['cep']; ?>"><br><br>
                    <label><b>ESTADO:</b></label>
                    <p class="form-control"><?php echo $pessoaSql['estado']; ?></p>
                    <select class="form-control" name="estadoUser" id="estadoUser_id">
                        <option value="AC">Acre</option>
                        <option value="AL">Alagoas</option>
                        <option value="AP">Amapá</option>
                        <option value="AM">Amazonas</option>
                        <option value="BA">Bahia</option>
                        <option value="CE">Ceará</option>
                        <option value="DF">Distrito Federal</option>
                        <option value="ES">Espírito Santo</option>
                        <option value="GO">Goiás</option>
                        <option value="MA">Maranhão</option>
                        <option value="MT">Mato Grosso</option>
                        <option value="MS">Mato Grosso do Sul</option>
                        <option value="MG">Minas Gerais</option>
                        <option value="PA">Pará</option>
                        <option value="PB">Paraíba</option>
                        <option value="PR">Paraná</option>
                        <option value="PE">Pernambuco</option>
                        <option value="PI">Piauí</option>
                        <option value="RJ">Rio de Janeiro</option>
                        <option value="RN">Rio Grande do Norte</option>
                        <option value="RS">Rio Grande do Sul</option>
                        <option value="RO">Rondônia</option>
                        <option value="RR">Roraima</option>
                        <option value="SC">Santa Catarina</option>
                        <option value="SP">São Paulo</option>
                        <option value="SE">Sergipe</option>
                        <option value="TO">Tocantins</option>
                    </select><br><br>
                    <label ><b>CIDADE:</b></label>
                    <input class="form-control" type="text" name="cityUser" id="cityUser_id" value="<?php echo $pessoaSql['cidade']; ?>"><br><br>
                    <label><b>BAIRRO:</b></label>
                    <input class="form-control" type="text" name="baiUser" id="baiUser_id" value="<?php echo $pessoaSql['bairro']; ?>"><br><br>
                    <label><b>RUA:</b></label>
                    <input class="form-control" type="text" name="ruaUser" id="ruaUser_id" value="<?php echo $pessoaSql['rua']; ?>"><br><br>
                    <label><b>NÚMERO:</b></label>
                    <input class="form-control" type="text" name="numbUser" id="numbUser_id" value="<?php echo $pessoaSql['numb']; ?>"><br><br>
                    <label><b>RENDA MENSAL EM SALÁRIOS MINIMOS:</b></label>
                    <input class="form-control" type="number" name="salUser" id="salUser_id" value="<?php echo $pessoaSql['salmin']; ?>"><br><br>
                    <label><b>SEXO:</b></label><br>
                    <p class="form-control"><?php if($pessoaSql['sexo']=="m"){
                            echo "Homem";
                        }
                        elseif($pessoaSql['sexo']=="f"){
                            echo "Mulher";
                        } 
                        else{
                            echo "Outro";
                        }
                    ?></p>
                    <input type="radio" name="sexoUser" value="m" checked> Homem
                    <input type="radio" name="sexoUser" value="f"> Mulher
                    <input type="radio" name="sexoUser" value="o"> Outro <br><br>         
                    <label><b>TELEFONE:</b></label>
                    <input class="form-control" type="tel" name="telUser" id="telUser_id" value="<?php echo $pessoaSql['telefone']; ?>"><br><br>
                    <label><b>E-MAIL:</b></label>
                    <input class="form-control" type="email" name="emailUser" id="emailUser_id" value="<?php echo $pessoaSql['email']; ?>"><br><br>
                    <label><b>SENHA:</b></label>
                    <input class="form-control" type="password" name="passUser" id="passUser_id" value="<?php echo $pessoaSql['senha']; ?>"><br><br>
                    <label><b>CONFIRME SUA SENHA:</b></label>
                    <input class="form-control" type="password" name="confirmPassUser" id="confirmPassUser_id" onblur="validatePassword()" value="<?php echo $pessoaSql['senha']; ?>"><br><br><p id="ok_id"></p>
                    <label><b>DESCREVA SUA RESIDENCIA:</b></label>
                    <textarea  class="form-control" name="habitatUser" id="habitatUser_id" maxlength="500"><?php echo $pessoaSql['habitat']; ?></textarea><br><br>
                    <label><b>POR QUE VOCÊ QUER ADOTAR UM CÃO:</b></label>
                    <textarea  class="form-control" name="motivUser" id="motivUser_id" maxlength="500"><?php echo $pessoaSql['motivos']; ?></textarea><br><br>
                    <input type="submit" value="atualizar" class="btn btn-primary">
                </div>
            </form><br>
            <script>
                function validatePassword(){
                    var password = document.getElementById("passUser_id").value;
                    var confirm_password = document.getElementById("confirmPassUser_id").value;
                    if(password != confirm_password) {
                        document.getElementById("ok_id").innerHTML = "Senhas não são iguais";
                    }else{
                        document.getElementById("ok_id").innerHTML = "";
                    }
                }
            </script>
        </div>
    </div>
</body>
</html>
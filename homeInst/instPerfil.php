<?php
    include_once("../BD/connectDB.php");
    $id = $_GET['id'];
    $pegarSql= "SELECT * FROM instituicao WHERE id = '$id'";
    $pegueiSql=mysqli_query($conectar, $pegarSql);
    $instSql=mysqli_fetch_assoc($pegueiSql);
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="../css/bootstrap.css" rel="stylesheet" />
	<link href="../css/bootstrap-theme.css" rel="stylesheet" />
    <meta charset="utf-8">
    <title>usuario institucional</title>
    <link rel="shortcut icon" href="../imagensDogs/dog.ico" type="image/x-icon" />
</head>
<body>
    <p></p>
    <div class='container'>
        <div id="form_id">
            <h1 class="jumbotron-heading">SEU PERFIL:</h1>
            <h5 class="jumbotron-heading"><a href="dogs.php?id=<?php echo $id; ?>">VOLTAR PARA A PAGINA PRINCIPAL</a></h5>
            <h5 class="jumbotron-heading"><a href="../BD/delInst.php?id=<?php echo $id; ?>">DELETAR USUARIO</a></h5>
            <h6>SE QUISER ATUALIZAR, ALTERE OS CAMPOS E CLIQUE NO BOTÃO "ATUALIZAR" NO FINAL</h6>
            <form action="../BD/updateInst.php" method="post">
                <div class="form-group">
                    <input type="hidden" name="id" value="<?php echo $id; ?>">
                    <label><b>NOME:</b></label>
                    <input class="form-control" type="text" name="nomeInst" id="nomeInst_id" value="<?php echo $instSql['nome']; ?>"><br><br>
                    <label><b>DATA DE CRIAÇÃO:</b></label>
                    <input class="form-control" type="date" name="niverInst" id="niverInst_id" value="<?php echo $instSql['criacao']; ?>"><br><br>
                    <label><b>CEP:</b></label>
                    <input class="form-control" type="number" name="cepInst" id="cepInst_id" value="<?php echo $instSql['cep']; ?>"><br><br>
                    <label><b>ESTADO:</b></label>
                    <p class="form-control"><?php echo $instSql['estado']; ?></p>
                    <select class="form-control" name="estadoInst" id="estadoInst_id">
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
                    <label><b>CIDADE:</b></label>
                    <input class="form-control" type="text" name="cityInst" id="cityInst_id" value="<?php echo $instSql['cidade']; ?>"><br><br>
                    <label><b>BAIRRO:</b></label>
                    <input class="form-control" type="text" name="baiInst" id="baiInst_id" value="<?php echo $instSql['bairro']; ?>"><br><br>
                    <label><b>RUA:</b></label>
                    <input class="form-control" type="text" name="ruaInst" id="ruaInst_id" value="<?php echo $instSql['rua']; ?>"><br><br>
                    <label><b>NÚMERO:</b></label>
                    <input class="form-control" type="text" name="numbInst" id="numbInst_id" value="<?php echo $instSql['ruanumb']; ?>"><br><br>    
                    <label><b>TELEFONE:</b></label>
                    <input class="form-control" type="tel" name="telInst" id="telInst_id" value="<?php echo $instSql['telefone'];?>" ><br><br>
                    <label><b>E-MAIL:</b></label>
                    <input class="form-control" type="email" name="emailInst" id="emailInst_id" value="<?php echo $instSql['email'];?>"><br><br>
                    <label><b>SENHA:</b></label>
                    <input class="form-control" type="password" name="senhaInst" id="senhaInst_id" value="<?php echo $instSql['senha'];?>"><br><br>
                    <label><b>CONFIRME SUA SENHA:</b></label>
                    <input class="form-control" type="password" name="confirmPassInst" id="confirmPassInst_id" onblur="validatePassword()" value="<?php echo $instSql['senha'];?>"><br><br><p id="ok_id"></p>
                    <label><b>SOBRE A INSTITUIÇÃO:</b></label>
                    <textarea  class="form-control" name="sobreInst" id="sobreInst_id" maxlength="500"><?php echo $instSql['sobre'];?></textarea><br><br>
                    <input type="submit" value="enviar" class="btn btn-primary">
                </div>
            </form><br>
            <script>
                function validatePassword(){
                    var password = document.getElementById("senhaInst_id").value;
                    var confirm_password = document.getElementById("confirmPassInst_id").value;
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
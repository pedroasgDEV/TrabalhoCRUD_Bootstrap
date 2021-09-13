<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="../css/bootstrap.css" rel="stylesheet" />
	<link href="../css/bootstrap-theme.css" rel="stylesheet" />
    <meta charset="utf-8">
    <title>Criar usuario institucional</title>
    <link rel="shortcut icon" href="../imagensDogs/dog.ico" type="image/x-icon" />
</head>
<body>
    <p></p>
    <div class='container'>
        <div id="form_id">
            <h1 cass="jumbotron-heading">CRIAR USUÁRIO INSTITUCIONAL:</h1>
            <h5 cass="jumbotron-heading"><a href="../login.php">VOLTAR PARA A PAGINA DE LOGIN</a></h5>
            <form action="../BD/newInst.php" method="post">
                <div class="form-group">
                    <label><b>NOME:</b></label>
                    <input class="form-control" type="text" name="nomeInst" id="nomeInst_id"><br><br>
                    <label><b>DATA DE CRIAÇÃO:</b></label>
                    <input class="form-control" type="date" name="niverInst" id="niverInst_id"><br><br>
                    <label><b>CEP:</b></label>
                    <input class="form-control" type="number" name="cepInst" id="cepInst_id"><br><br>
                    <label><b>ESTADO:</b></label>
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
                    <input class="form-control" type="text" name="cityInst" id="cityInst_id"><br><br>
                    <label><b>BAIRRO:</b></label>
                    <input class="form-control" type="text" name="baiInst" id="baiInst_id"><br><br>
                    <label><b>RUA:</b></label>
                    <input class="form-control" type="text" name="ruaInst" id="ruaInst_id"><br><br>
                    <label><b>NÚMERO:</b></label>
                    <input class="form-control" type="text" name="numbInst" id="numbInst_id"><br><br>    
                    <label><b>TELEFONE:</b></label>
                    <input class="form-control" type="tel" name="telInst" id="telInst_id"><br><br>
                    <label><b>E-MAIL:</b></label>
                    <input class="form-control" type="email" name="emailInst" id="emailInst_id"><br><br>
                    <label><b>SENHA:</b></label>
                    <input class="form-control" type="password" name="senhaInst" id="senhaInst_id"><br><br>
                    <label><b>CONFIRME SUA SENHA:</b></label>
                    <input class="form-control" type="password" name="confirmPassInst" id="confirmPassInst_id" onblur="validatePassword()"><br><br><p id="ok_id"></p>
                    <label><b>SOBRE A INSTITUIÇÃO:</b></label>
                    <textarea  class="form-control" name="sobreInst" id="sobreInst_id" maxlength="500"></textarea><br><br>
                    <input type="submit" value="enviar" class="btn btn-primary">
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
            </form><br>
        </div>
    </div>
</body>
</html>
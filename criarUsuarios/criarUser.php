<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="../css/bootstrap.css" rel="stylesheet" />
	<link href="../css/bootstrap-theme.css" rel="stylesheet" />
    <meta charset="utf-8">
    <title>Criar usuário</title>
    <link rel="shortcut icon" href="../imagensDogs/dog.ico" type="image/x-icon" />
</head>
<body>
    <p></p>
        <div class='container'>
            <div id="form_id">
                <h1 class="jumbotron-heading">CRIAR USUÁRIO:</h1>
                <h5 class="jumbotron-heading" ><a href="../login.php">VOLTAR PARA A PAGINA DE LOGIN</a></h5>
                <form action="../BD/newUsuario.php" method="post" name="formUser" >
                    <div class="form-group">
                        <label><b>NOME COMPLETO:</b></label>
                        <input class="form-control" type="text" name="nomeUser" id="nomeUser_id"><br><br>
                        <label><b>DATA DE NASCIMENTO:</b></label>
                        <input class="form-control" type="date" name="niverUser" id="niverUser_id"><br><br>
                        <label><b>CPF:</b></label>
                        <input class="form-control" type="number" name="cpf" id="cpf_id"><br><br>
                        <label><b>CEP:</b></label>
                        <input class="form-control" type="number" name="cep" id="cep_id"><br><br>
                        <label><b>ESTADO:</b></label>
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
                            <option val<h2>ue="SE">Sergipe</option>
                            <option value="TO">Tocantins</option>
                        </select><br><br>
                        <label><b>CIDADE:</b></label>
                        <input class="form-control" type="text" name="cityUser" id="cityUser_id"><br><br>
                        <label><b>BAIRRO:</b></label>
                        <input class="form-control" type="text" name="baiUser" id="baiUser_id"><br><br>
                        <label><b>RUA:</b></label>
                        <input class="form-control" type="text" name="ruaUser" id="ruaUser_id"><br><br>
                        <label><b>NÚMERO:</b></label>
                        <input class="form-control" type="text" name="numbUser" id="numbUser_id"><br><br>
                        <label><b>RENDA MENSAL EM SALÁRIOS MINIMOS:</b></label>
                        <input class="form-control" type="number" name="salUser" id="salUser_id"><br><br>
                        <label><b>SEXO:</b></label><br>
                        <input type="radio" name="sexoUser" value="m" checked> Homem
                        <input type="radio" name="sexoUser" value="f"> Mulher
                        <input type="radio" name="sexoUser" value="o"> Outro <br><br>        
                        <label><b>TELEFONE:</b></label>
                        <input class="form-control" type="tel" name="telUser" id="telUser_id"><br><br>
                        <label><b>E-MAIL:</b></label>
                        <input class="form-control" type="email" name="emailUser" id="emailUser_id"><br><br>
                        <label><b>SENHA:</b></label>
                        <input class="form-control" type="password" name="passUser" id="passUser_id"><br><br>
                        <label><b>CONFIRME SUA SENHA:</b></label>
                        <input class="form-control" type="password" name="confirmPassUser" id="confirmPassUser_id" onblur="validatePassword()"><br><br><p id="ok_id"></p>
                        <label><b>DESCREVA SUA RESIDENCIA:</b></label>
                        <textarea  class="form-control" name="habitatUser" id="habitatUser_id" maxlength="500"></textarea><br><br>
                        <label><b>POR QUE VOCÊ QUER ADOTAR UM CÃO:</b></label>
                        <textarea  class="form-control" name="motivUser" id="motivUser_id" maxlength="500"></textarea><br><br>
                        <input type="submit" value="enviar" class="btn btn-primary">
                    </div>
                </form><br>
            </div>
        </div>
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
</body>
</html>
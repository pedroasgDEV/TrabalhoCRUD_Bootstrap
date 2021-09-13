<?php
    include_once("../BD/connectDB.php");
    $id = $_GET['id'];
    $pegarSql= "SELECT * FROM dog WHERE id = '$id'";
    $pegueiSql=mysqli_query($conectar, $pegarSql);
    $dogSql=mysqli_fetch_assoc($pegueiSql);
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="../css/bootstrap.css" rel="stylesheet" />
	<link href="../css/bootstrap-theme.css" rel="stylesheet" />
    <meta charset="utf-8">
    <title>PERFIL DO CÃO</title>
    <link rel="shortcut icon" href="../imagensDogs/dog.ico" type="image/x-icon" />
</head>
<body>
    <p></p>
    <div class='container'>
        <div id="form_id">
            <h3 class="jumbotron-heading">PERFIL CÃO:</h3>
            <h5 class="jumbotron-heading"><a href="dogs.php?id=<?php echo $dogSql['inst']; ?>">VOLTAR PARA A PAGINA ANTERIOR</a></h5>
            <h5 class="jumbotron-heading"><a href="../BD/delDog.php?id=<?php echo $id; ?>">DELETAR CÃO</a></h5>
            <h6>SE QUISER ATUALIZAR, ALTERE OS CAMPOS E CLIQUE NO BOTÃO "ATUALIZAR" NO FINAL</h6>
            <form action="../BD/updateDog.php" method="post" name="formUser" enctype="multipart/form-data">
                <div class="form-group">
                    <input type="hidden" name="idDog" value="<?php echo $id; ?>">
                    <input type="hidden" name="idInst" value="<?php echo $dogSql['inst']; ?>">
                    <label><b>NOME :</b></label>
                    <input class="form-control" type="text" name="nomeDog" id="nomeUser_id" value="<?php echo $dogSql['nome']; ?>"><br><br>
                    <label><b>RAÇA:</b></label>
                    <input class="form-control" type="text" name="racaDog" id="racaDog_id" value="<?php echo $dogSql['raca']; ?>"><br><br>
                    <label><b>DATA DE NASCIMENTO:</b></label>
                    <input class="form-control" type="date" name="niverDog" id="niverDog_id" value="<?php echo $dogSql['aniver']; ?>"><br><br>
                    <label><b>SEXO:</b></label><br>
                    <p class="form-control"><?php if($dogSql['sexo']=="m"){
                            echo "Macho";
                        }
                        elseif($dogSql['sexo']=="f"){
                            echo "Fêmea";
                        } 
                    ?></p>
                    <input type="radio" name="sexoDog" value="m" checked> Macho
                    <input type="radio" name="sexoDog" value="f"> Fêmea <br><br>        
                    <label ><b>FALE SOBRE ELE(A) (EX: COMPORTAMENTO, EMOCIONAL E PECULIARIDADES):</b></label>
                    <textarea  class="form-control" name="sobreDog" id="sobreDog_id" maxlength="500"><?php echo $dogSql['sobre']; ?></textarea><br><br>
                    <label ><b>QUAL A HISTORIA DELE(A) (EX: QUAL O SEU PASSADO, TRAUMAS, COMO FOI ACOLHIDO):</b></label>
                    <textarea  class="form-control" name="histDog" id="histDog_id" maxlength="500"><?php echo $dogSql['hist']; ?></textarea><br><br>
                    <label><b>QUAL SERIA O LUGAR IDEAL PARA ELE(A) (EX: DESCREVA COMO SERIA A RESIDENCIA PARA ACOLHE-LO(A)):</b></label>
                    <textarea  class="form-control" name="habitatDog" id="habitatDog_id" maxlength="500"><?php echo $dogSql['habitat']; ?></textarea><br><br>
                    <label><b>QUAL A APARENCIA DELE(A) (EX: DESCREVA ELE(A), TAMANHO, SE TEM ALGUMA DEFICIENCIA):</b></label>
                    <textarea  class="form-control" name="aparDog" id="aparDog_id" maxlength="500"><?php echo $dogSql['carac']; ?></textarea><br><br>
                    <label><b>ADICIONE UMA FOTO DELE(A) DE 150px POR 150px:</b></label><br>
                    <p><b>FOTO ANTERIOR<b><p>
                    <img src='../imagensDogs/<?php echo $dogSql['imagem']; ?>' style='width:150px;height:150px;'><br><br>
                    <input class="btn btn-primary" type="file" name="fotoDog" id="fotoDog_id"><br><br>
                    <input type="submit" value="enviar" class="btn btn-primary">
                </div>
            </form><br>
        </div>
    </div>
</body>
</html>
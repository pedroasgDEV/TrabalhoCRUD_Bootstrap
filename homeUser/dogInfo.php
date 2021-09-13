<?php
    include_once("../BD/connectDB.php");
    $id = $_GET['id'];
    $idUser = $_GET['idUser'];
    $pegarSql= "SELECT * FROM dog WHERE id = '$id' ";
    $pegueiSql=mysqli_query($conectar, $pegarSql);
    $dogSql=mysqli_fetch_assoc($pegueiSql);
    $idInst=$dogSql['inst'];
    $pegarSqlInst= "SELECT * FROM instituicao WHERE id = '$idInst'";
    $pegueiSqlInst=mysqli_query($conectar, $pegarSqlInst);
    $instSql=mysqli_fetch_assoc($pegueiSqlInst);
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link href="../css/bootstrap.css" rel="stylesheet" />
	<link href="../css/bootstrap-theme.css" rel="stylesheet" />
    <title>informações do cão</title>
    <link rel="shortcut icon" href="../imagensDogs/dog.ico" type="image/x-icon" />
</head>
<body>
    <p></p>
    <div class='container'>
        <div id="form_id">
        <h5><a class="jumbotron-heading" href="dogs.php?id=<?php echo $idUser; ?>">VOLTAR PARA A PAGINA PRINCIPAL</a></h5>
            <h1 class="jumbotron-heading">NFORMAÇÕES DO CÃO:</h1>
            <img src='../imagensDogs/<?php echo $dogSql['imagem']; ?>' style='width:150px;height:150px;'><br><br>
            <label><b>NOME :</b></label>
            <p class="form-control"><?php echo $dogSql['nome']; ?></p><br><br>
            <label><b>RAÇA:</b></label>
            <p class="form-control"><?php echo $dogSql['raca']; ?></p><br><br>
            <label><b>DATA DE NASCIMENTO:</b></label>
            <p class="form-control"><?php echo $dogSql['aniver']; ?></p><br><br>
            <label><b>SEXO:</b></label><br>
            <p class="form-control"><?php if($dogSql['sexo']=="m"){
                    echo "Macho";
                }
                elseif($dogSql['sexo']=="f"){
                    echo "Fêmea";
                } 
            ?></p><br><br>      
            <label><b>SOBRE ELE(A) (EX: COMPORTAMENTO, EMOCIONAL E PECULIARIDADES):</b></label>
            <p class="form-control"><?php echo $dogSql['sobre']; ?></p><br><br>
            <label><b> A HISTORIA DELE(A) (EX:O PASSADO DELE(A), TRAUMAS, COMO FOI ACOLHIDO(A)):</b></label>
            <p class="form-control"><?php echo $dogSql['hist']; ?></p><br><br>
            <label><b>O LUGAR IDEAL PARA ELE(A) (EX: A RESIDENCIA IDEAL PARA ACOLHE-LO(A)):</b></label>
            <p class="form-control"><?php echo $dogSql['habitat']; ?></p><br><br>
            <label><b>A APARENCIA DELE(A) (EX: TAMANHO, SE TEM ALGUMA DEFICIENCIA):</b></label>
            <p class="form-control"><?php echo $dogSql['carac']; ?></p><br><br><br><br>
            <h1>INFORMAÇÕES DA INSTITUIÇÃO VINCULADA AO CÃO:</h1>
            <label><b>NOME:</b></label>
            <p class="form-control"><?php echo $instSql['nome']; ?></p><br><br>
            <label><b>DATA DE CRIAÇÃO:</b></label>
            <p class="form-control"><?php echo $instSql['criacao']; ?></p><br><br>
            <label><b>CEP:</b></label>
            <p class="form-control"><?php echo $instSql['cep']; ?></p><br><br>
            <label><b>ESTADO:</b></label>
            <p class="form-control"><?php echo $instSql['estado']; ?></p><br><br>
            <label><b>CIDADE:</b></label>
            <p class="form-control"><?php echo $instSql['cidade']; ?></p><br><br>
            <label><b>BAIRRO:</b></label>
            <p class="form-control"><?php echo $instSql['bairro']; ?></p><br><br>
            <label><b>RUA:</b></label>
            <p class="form-control"><?php echo $instSql['rua']; ?><p><br><br>
            <label><b>NÚMERO:</b></label>
            <p class="form-control"><?php echo $instSql['ruanumb']; ?><p><br><br>    
            <label><b>TELEFONE:</b></label>
            <p class="form-control"><?php echo $instSql['telefone'];?></p><br><br>
            <label><b>E-MAIL:</b></label>
            <p class="form-control"><?php echo $instSql['email'];?></p><br><br>
            <label><b>SOBRE A INSTITUIÇÃO:</b></label>
            <p class="form-control"><?php echo $instSql['sobre'];?></p><br><br>
        </div>
    </div>
</body>
</html>
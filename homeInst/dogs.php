<?php
  include_once("../BD/connectDB.php");
  $id = $_GET['id'];
  $sql = "SELECT * FROM dog WHERE inst = '$id' ORDER BY nome";
  $getSql = mysqli_query($conectar, $sql);
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link href="../css/bootstrap.css" rel="stylesheet" />
	<link href="../css/bootstrap-theme.css" rel="stylesheet" />
  <title>CÃES</title>
  <link rel="shortcut icon" href="../imagensDogs/dog.ico" type="image/x-icon" />
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav mr-auto">
          <a class="nav-link" href="../criarUsuarios/criarDog.php?id=<?php echo $id; ?>"><b>CADASTRAR UM NOVO CÃO</b></a>
          <a class="nav-link" href="instPerfil.php?id=<?php echo $id; ?>"><b>SEU PERFIL</b></a>
          <a class="nav-link" href="dogs.php?id=<?php echo $id; ?>"><b>CACHORROS</b></a>
          <a class="nav-link" href="../login.php"><b>SAIR</b></a>
        </ul>
        <form class="form-inline" action="searchDog.php?id=<?php echo $id; ?>" method="post" name="formUser" enctype="multipart/form-data">
          <input class="form-control mr-sm-2" type="search" name="pesquisaDog" name="pesquisaDog_id" placeholder="PESQUISA POR RAÇA:" aria-label="Search">
          <input type="submit" value="pesquisar" class="btn btn-outline-success my-2 my-sm-0">
        </form>
      </div>
    </div>
  </nav>
  <div class='container'>
    <p></p>      
    <h1 class="jumbotron-heading"> SEUS CÃES CADASTRADOS:</h1>
    <p></p>
    <?php
      echo "<table class='table table-striped'";
      while($dogSql = mysqli_fetch_assoc($getSql)
      ){
        $foto= $dogSql['imagem'];
        echo "<tr>";
        echo "<td><img src='../imagensDogs/$foto' style='width:150px;height:150px;'></td>";
        echo "<td style='text-align: center; vertical-align: middle'><h3>id: ". $dogSql['id'] . "</h3></td>";
        echo "<td style='text-align: center; vertical-align: middle'><h3>Nome: " . $dogSql['nome'] . "</h3></td>";
        echo "<td style='text-align: center; vertical-align: middle'><h3>E-mail: " . $dogSql['raca'] . "</h3></td>";
        echo "<td style='text-align: center; vertical-align: middle'><h5>Sobre:<br>" . $dogSql['sobre'] . "</h5></td>";
        echo "<td style='text-align: center; vertical-align: middle'><h3><a href='dogPerfil.php?id=" . $dogSql['id'] . "'>VER MAIS</a></h3></td>";
        echo "</tr>";
      }
      echo "</table>";
    ?>
  </div>
</body>
</html>
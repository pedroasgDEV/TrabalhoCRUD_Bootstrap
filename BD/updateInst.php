<?php
    include_once("connectDB.php");
    $id = $_POST['id'];
    $nomeInst=$_POST['nomeInst'];
    $niverInst=$_POST['niverInst'];
    $cepInst=$_POST['cepInst'];
    $estadoInst=$_POST['estadoInst'];
    $cityInst=$_POST['cityInst'];
    $baiInst=$_POST['baiInst'];
    $ruaInst=$_POST['ruaInst'];
    $numbInst=$_POST['numbInst'];
    $telInst=$_POST['telInst'];
    $emailInst=$_POST['emailInst'];
    $confirmPassInst=$_POST['confirmPassInst'];
    $sobreInst=$_POST['sobreInst'];
    $sql="UPDATE instituicao SET nome='$nomeInst', criacao='$niverInst', cep='$cepInst', estado='$estadoInst', cidade='$cityInst', bairro='$baiInst', rua='$ruaInst', ruanumb='$numbInst', sobre='$sobreInst', email='$emailInst', telefone='$telInst', senha='$confirmPassInst' WHERE id = '$id'";
    $criarest= mysqli_query($conectar,$sql);
	header("Location:../homeInst/instPerfil.php?id=".$id);
?> 
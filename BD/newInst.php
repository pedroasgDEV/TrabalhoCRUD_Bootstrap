<?php
    include_once("connectDB.php");
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
    $sql="INSERT INTO instituicao ( nome, criacao, cep, estado, cidade, bairro, rua, ruanumb, sobre, email, telefone, senha) VALUES ('$nomeInst',' $niverInst','$cepInst','$estadoInst','$cityInst','$baiInst','$ruaInst','$numbInst','$sobreInst','$emailInst','$telInst','$confirmPassInst')";
    $criarest= mysqli_query($conectar,$sql);
	header("Location:../login.php");
?> 
<?php
    include_once("connectDB.php");
    $nomeUser=$_POST['nomeUser'];
    $niverUser=$_POST['niverUser'];
    $cpf=$_POST['cpf'];
    $cep=$_POST['cep'];
    $estadoUser=$_POST['estadoUser'];
    $cityUser=$_POST['cityUser'];
    $baiUser=$_POST['baiUser'];
    $ruaUser=$_POST['ruaUser'];
    $numbUser=$_POST['numbUser'];
    $salUser=$_POST['salUser'];
    $sexoUser=$_POST['sexoUser'];
    $telUser=$_POST['telUser'];
    $emailUser=$_POST['emailUser'];
    $confirmPassUser=$_POST['confirmPassUser'];
    $habitatUser=$_POST['habitatUser'];
    $motivUser=$_POST['motivUser'];
    $sql="INSERT INTO pessoa( cpf, sexo, nome, cep, estado, cidade, bairro, rua, numb, habitat, motivos, aniver, salmin, email, telefone, senha) VALUES ('$cpf', '$sexoUser', '$nomeUser', '$cep', '$estadoUser', '$cityUser', '$baiUser', '$ruaUser', '$numbUser', '$habitatUser', '$motivUser', '$niverUser', '$salUser', '$emailUser', '$telUser', '$confirmPassUser')";
    $criarest= mysqli_query($conectar,$sql);
	header("Location:../login.php");
?> 
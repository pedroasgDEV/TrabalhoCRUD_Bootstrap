<?php
    include_once("connectDB.php");
    $nomeDog=$_POST['nomeDog'];
    $racaDog=$_POST['racaDog'];
    $niverDog=$_POST['niverDog'];
    $sexoDog=$_POST['sexoDog'];
    $sobreDog=$_POST['sobreDog'];
    $histDog=$_POST['histDog'];
    $habitatDog=$_POST['habitatDog'];
    $aparDog=$_POST['aparDog'];
    $idInst=$_POST['idInst'];
    $ext = strtolower(substr($_FILES['fotoDog']['name'],-4));
    $new_name = date("Y.m.d-H.i.s"). $ext;
    $dir = '../imagensDogs/';
    move_uploaded_file($_FILES['fotoDog']['tmp_name'], $dir.$new_name);
    $sql="INSERT INTO dog( nome, sexo, raca, aniver, sobre, hist, habitat, imagem, carac, inst) VALUES ('$nomeDog','$sexoDog','$racaDog','$niverDog','$sobreDog','$histDog','$habitatDog','$new_name','$aparDog','$idInst')";
    $criarest= mysqli_query($conectar,$sql);
	header("Location:../homeInst/dogs.php?id=".$idInst);
?> 
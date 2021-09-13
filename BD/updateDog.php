<?php
    include_once("connectDB.php");
    $id = $_POST['idDog'];
    $idInst = $_POST['idInst'];
    $nomeDog=$_POST['nomeDog'];
    $racaDog=$_POST['racaDog'];
    $niverDog=$_POST['niverDog'];
    $sexoDog=$_POST['sexoDog'];
    $sobreDog=$_POST['sobreDog'];
    $histDog=$_POST['histDog'];
    $habitatDog=$_POST['habitatDog'];
    $aparDog=$_POST['aparDog'];
    $ext = strtolower(substr($_FILES['fotoDog']['name'],-4));
    $new_name = date("Y.m.d-H.i.s"). $ext;
    $dir = '../imagensDogs/';
    if($ext != null){
        $SQL="SELECT * FROM dog WHERE id = '$id'";
        $DOGSql= mysqli_query($conectar,$SQL);
        $dogSql=mysqli_fetch_assoc($DOGSql);
        $imagem=$dogSql['imagem'];
        $delFoto=unlink("../imagensDogs/$imagem");
        echo $delFoto;
        move_uploaded_file($_FILES['fotoDog']['tmp_name'], $dir.$new_name);
        $sql="UPDATE dog SET nome='$nomeDog', sexo ='$sexoDog', raca ='$racaDog', aniver ='$niverDog', sobre ='$sobreDog', hist ='$histDog', habitat ='$habitatDog', imagem ='$new_name', carac ='$aparDog' WHERE id='$id'";
        $criarest= mysqli_query($conectar,$sql);
	    header("Location:../homeInst/dogPerfil.php?id=".$id);
    }
    else{
        $sql="UPDATE dog SET nome='$nomeDog', sexo ='$sexoDog', raca ='$racaDog', aniver ='$niverDog', sobre ='$sobreDog', hist ='$histDog', habitat ='$habitatDog', carac ='$aparDog' WHERE id='$id'";
        $criarest= mysqli_query($conectar,$sql);
        header("Location:../homeInst/dogPerfil.php?id=".$id);
    }
?>
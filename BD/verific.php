<?php
    include_once("connectDB.php");
    $email=$_POST['email_login'];
    $password=$_POST['senha_login'];
    $senhaVeriInst="SELECT * FROM instituicao WHERE email LIKE '%$email%'";
    $senhaVeriUser="SELECT * FROM pessoa WHERE email LIKE '%$email%'";
    $senhaVericationInst= mysqli_query($conectar, $senhaVeriInst);
    $senhaVericationUser= mysqli_query($conectar, $senhaVeriUser);
    $takePassInst=mysqli_fetch_assoc($senhaVericationInst);
    $takePassUser=mysqli_fetch_assoc($senhaVericationUser);
    $idInst=$takePassInst["id"];
    $idUser=$takePassUser["id"];
    if ( $password == $takePassInst['senha']){
        header("Location:../homeInst/dogs.php?id=".$idInst);
    }
    elseif( $password == $takePassUser['senha']){
        header("Location:../homeUser/dogs.php?id=".$idUser);
    }
    else{
        header("Location:../login.php");
    } 
?>
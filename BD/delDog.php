<?php
    include_once("connectDB.php");
    $id=$_GET['id'];
    $sql = "SELECT * FROM dog WHERE id ='$id'";
    $DOGSql= mysqli_query($conectar,$sql);
    $dogSql=mysqli_fetch_assoc($DOGSql);
    $inst=$dogSql['inst'];
    $imagem=$dogSql['imagem'];
    $delFoto=unlink("../imagensDogs/$imagem");
    echo $delFoto;
	$sql = "DELETE FROM dog WHERE id ='$id'";
    $criarest= mysqli_query($conectar,$sql);
    header("Location:../homeInst/dogs.php?id=".$inst);
?>
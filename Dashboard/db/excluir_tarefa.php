<?php
session_start();
    require_once ("conexao.php");
    $cod = $_GET['cod'];
    $sql = "DELETE FROM produtos WHERE cod = $cod ";
    $resultado = mysqli_query($con, $sql);

    if($resultado  == true)
    {
        header("Location:../home.php");
    } else{
        echo "FALHA";
    }





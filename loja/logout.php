<?php include("logica-usuario.php");
logout();
$_SESSION["success"] = "Deslogado com sucesso".
header("Location: index.php");
die();
/**
 * Created by PhpStorm.
 * User: henrique
 * Date: 12/03/19
 * Time: 11:01
 */
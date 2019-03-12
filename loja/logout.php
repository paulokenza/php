<?php include("logica-usuario.php");
logout();
header("Location: index.php?logout=true");
die();
/**
 * Created by PhpStorm.
 * User: henrique
 * Date: 12/03/19
 * Time: 11:01
 */
<?php
/**
 * Created by PhpStorm.
 * User: henrique
 * Date: 20/03/19
 * Time: 09:31
 */
    require_once ("class/Produto.php");

    $livro = new Produto();

    $livro -> nome = "Livro de PHP e OO";

    var_dump($livro);
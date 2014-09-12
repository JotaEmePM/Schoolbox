<?php
include('/Smarty/libs/Smarty.class.php');

$categorias[0]["url"] = "noticias.php";
$categorias[0]["categoria"] = "Noticias";
$Titulo = "SchoolBox";

$html = new Smarty;
$html->assign("categorias", $categorias);
$html->assign("titulo", $Titulo);
$html->display("index.html");
?>
<?php
require_once("3.php");
require_once("models/articles.php");
$link=db_connect();

$article=article_get($link,$_GET['id']);
include("views/article.php");
 ?>

<?php
require_once("3.php");
require_once("models/articles.php");
require_once("common.php");
$link=db_connect();

if(isset($_GET['action' ]))
  $action=$_GET['action'];
else
  $action="";
if($action=="add"){
  if(!empty($_POST)){
    // $img=$_FILES['img']['tmp_name'];

  //  print_r($_POST['img']);
    articles_new($link, $_POST['header'],$_POST['date'],$_POST['content'],$_FILES['img']['tmp_name']);
    header("Location: welcome.php");
  }
  include("views/article_add.php");
}else if($action=="edit"){
  if(!isset($_GET['id']))
    header:"Location: index.php";
  $id=(int)$_GET['id'];
  if(!empty($_POST) && $id>0){
    article_edit($link, $id, $_POST['header'], $_POST['date'], $_POST['content'],$_FILES['img']['tmp_name']);
    header("Location: welcome.php");
  }
  $article = article_get($link,$id);
  include("views/article_edit.php");
}else if($action=="delete"){
  $id=$_GET['id'];
  $article=article_delete($link,$id);
  header("Location:welcome.php");
}else{
$articles=articles_all();
include("views/articlesview.php");
}
 ?>

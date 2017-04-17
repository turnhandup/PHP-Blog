<?php

function articles_all(){
  $link=db_connect();
  $query="SELECT * FROM post ORDER BY id DESC";
  $result=mysqli_query($link,$query);
  if(!$result)
    die(mysqli_error($link));


  $n=mysqli_num_rows($result);
  $articles=array();
  for($i=0; $i<$n; $i++){
    $row =mysqli_fetch_assoc($result);
    $articles[]=$row;
  }
  return $articles;
}

function article_get($link, $id_article){
  $query =sprintf("SELECT * FROM post WHERE id=%d",(int)$id_article);
  $result =mysqli_query($link, $query);
  $article=mysqli_fetch_assoc($result);
  return $article;
}
function articles_new($link, $header, $date, $content, $img){
  $content=trim($content);

  if($header== '')
    return false;
    //$img = substr(explode(";",$img)[1], 7);
    $image=file_get_contents($img);
    $t="INSERT INTO post (header,date,text,img) VALUES('%s', '%s','%s','%s')";
    $query =sprintf($t, mysqli_real_escape_string($link,$header),mysqli_real_escape_string($link,$date), mysqli_real_escape_string($link,$content),mysqli_real_escape_string($link,$image));

    $result =mysqli_query($link,$query);

    if(!$result)
      die(mysqli_error($link));

    return true;
}
function stream_new($link, $message){
  $t="INSERT INTO stream (message) VALUES('%s')";
  $query=sprintf($t,mysqli_real_escape_string($link,$message));
  $result=mysqli_query($link,$query);

  return true;
}
function article_edit($link, $id, $header, $date, $content,$img){

  $image=file_get_contents($img);
  $sql="UPDATE post SET header='%s', date='%s', text='%s', img='%s' WHERE id='%d'";
  $query =sprintf($sql, mysqli_real_escape_string($link,$header),mysqli_real_escape_string($link,$date), mysqli_real_escape_string($link,$content),mysqli_real_escape_string($link,$image), $id);
  $result=mysqli_query($link,$query);
  return mysqli_affected_rows($link);
}


function article_delete($link, $id){
  $id=(int)$id;

  if($id == 0)
    return false;
  $query=sprintf("DELETE FROM post WHERE id='%d'", $id);
  echo $query;
  $result=mysqli_query($link,$query);
  return mysqli_affected_rows($link);
}
 ?>

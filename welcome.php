<?php
   include('session.php');
   require_once('3.php');
   require_once('models/articles.php');
   $link=db_connect();
   $articles=articles_all();
?>
<html>

<head>
  <!---METADATA--->
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale = 1.0">
  <meta name="description" content="Great resource which will help you to find your best sport team to play with" />
  <title>NYBlog.com</title>
  <!---FONTS--->
  <link href='http://fonts.googleapis.com/css?family=Roboto:300,400' rel='stylesheet' type='text/css'>
  <link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300|Playfair+Display|Roboto+Condensed|Ubuntu+Condensed" rel="stylesheet">
  <!---CSS--->
  <link rel="stylesheet" href="resources/libraries/font-awesome-4.7.0/css/font-awesome.min.css">
  <!--JAVASCRIPT-->
  <script type="text/javascript" src="less/main.js"></script>

  <!--BOOTSTRAP-->
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  <!-- Optional theme -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
  <!-- Latest compiled and minified JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

  <!--LESS-->
  <link rel="stylesheet/less" type="text/css" src="/less/main.less" />
  <link href="https://fonts.googleapis.com/css?family=Poiret+One" rel="stylesheet">

  <!-- LESS JavaScript компілятор -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/less.js/2.5.3/less.min.js"></script>

  <!--ICONS-->

</head>

   <body>

      <h4><a href = "logout.php">Sign Out</a></h4>
      <hr>
      <h4><a href= "index.php?action=add"> Add post </a></h4>
      <hr>
      <h4><a href= "index.php?action=addstream"> Livestream </a></h4>
      <table class="table" >
        <tr>
        <th> Date </th>
        <th> Header </th>
        <th> </th>
        <th> </th>
      </tr>
      <?php foreach ($articles as $a): ?>
        <tr>
          <td><?=$a['date']?></td>
          <td><?=$a['header']?></td>
          <td>
            <a href="index.php?action=edit&id=<?=$a['id']?>">Edit</a>
          </td>
          <td>
            <a href="index.php?action=delete&id=<?=$a['id']?>">Delete</a>
          </td>
        </tr>
      <?php endforeach ?>

      </table>
   </body>

</html>

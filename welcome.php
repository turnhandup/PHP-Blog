<?php
   include('session.php');
   require_once('3.php');
   require_once('models/articles.php');
   $link=db_connect();
   $articles=articles_all();
?>
<html>

   <head>
      <title>Welcome </title>
   </head>

   <body>
      <h1>Welcome <?php echo $login_session; ?></h1>
      <h2><a href= "index.php?action=add"> Add post </a></h2>
      <h2><a href = "logout.php">Sign Out</a></h2>
      <table border="1">
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

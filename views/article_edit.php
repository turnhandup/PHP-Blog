<html>
<body>
  <h1> Adding new post </h1>
  <div>
    <form enctype="multipart/form-data" method="post" action="index.php?action=<?=$_GET['action']?>&id=<?=$_GET['id']?>">
      <label> Header
      <input type="text" name="header" value="<?=$article['header']?>" required>
    </label><br>
      <label> Date
      <input type="date" name="date" value="<?=$article['date']?>" required>
    </label><br>
    <label> Text
      <textarea name="content" required><?=$article['text']?></textarea>
    </label><br>
    <label> Image
      <input type="file" name="img">
    </label><br>
    <input type="submit">
  </div>
</body>
<html>

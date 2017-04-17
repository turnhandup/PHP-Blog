<html>
<body>
  <h1> Adding new post </h1>
  <div>
    <form enctype="multipart/form-data" method="post" action="index.php?action=add">
      <label> Header
      <input type="text" name="header" value="" required>
    </label><br>
      <label> Date
      <input type="date" name="date" value="" required>
    </label><br>
    <label> Text
      <textarea name="content" required></textarea>
    </label><br>
    <label> Image
      <input type="file" name="img">
    </label><br>
    <input type="submit">
  </div>
</body>
<html>

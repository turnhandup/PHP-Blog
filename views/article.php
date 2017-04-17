<html>
<body>
<div>
    <div>
      <h3><?=$article['header']?></h3>
      <p><?=$article['date']?></p>
  
      <text><?=$article['text']?></text>
      <br><img src="data:image/jpeg;base64,<?php echo base64_encode($article['img']); ?>" style="width:400px;" />
    </div>
</div>
</body>
</html>

<?php
include_once("common.php");
?>
<html>
<body>
<div>
  <?php  echo $lang['PAGE_TITLE']; ?>
   <a href="index.php?lang=en">en</a>
   <a href="index.php?lang=ua">ua</a>
   <a href="indexlogin.php">Login</a>
<?php foreach ($articles as $a): ?>
    <div>
      <h3>
        <?=$a['header']?> </h3>
      <p><?=$a['date']?></p>
      <?php
      $big=$a['text'];
      $small=substr($big,0,50);
       ?>
      <text><?=$small?><a href="showarticle.php?id=<?=$a['id']?>">View more</a></text>
      <br>
      <?php if($a['img']){ ?>
      <img src="data:image/jpeg;base64,<?php echo base64_encode($a['img']); ?>" style="width:400px;" />
      <?php } ?>
    </div>
<?php endforeach ?>
</div>
</body>
</html>

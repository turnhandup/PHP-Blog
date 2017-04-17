<?php
include_once("common.php");
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
<body style="background:url(https://images.unsplash.com/42/U7Fc1sy5SCUDIu4tlJY3_NY_by_PhilippHenzler_philmotion.de.jpg) fixed; background-size:100%;">
  <nav class="navbar navbar-default">
    <div class="container-fluid">
        <div class="row">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="/index.html">NYBlog.com</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li><a href="#" onclick="showMain()"><?php  echo $lang['MAIN']; ?> <span class="sr-only"></span></a></li>
                    <li><a href="#" onclick="showPosts()"><?php  echo $lang['NEWS']; ?> <span class="sr-only"></span></a></li>
                    <li><a href="ajax_page.html"><?php  echo $lang['LIVESTREAM']; ?> <span class="sr-only"></span></a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="index.php?lang=en"><?php  echo $lang['ENGLISH']; ?></a></li>
                    <li><a href="index.php?lang=ua"><?php  echo $lang['UKRAINIAN']; ?></a></li>
                    <li><a href="indexlogin.php"><?php  echo $lang['LOGIN']; ?></a></li>
                </ul>
            </div>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>
<div id="main">
  <p align=center style="background-color:rgba(212, 214, 219,0.7);margin-top:15%;padding-left:20px;padding-right:20px;color:white;font-size:50px">  <?php  echo $lang['DESCRIPTION']; ?> </p>
</div>
<div id="posts" style="display:none;background-color:rgba(212, 214, 219,0.9);" class="col-md-6 col-md-offset-3">
<?php foreach ($articles as $a): ?>
    <div>
      <h1 style="font-family:'Poiret One'"><?=$a['header']?> </h1>
      <p><?php  echo $lang['PUBLISHED']; ?> <?=$a['date']?></p>
      <?php $big=$a['text'];
      $small=substr($big,0,50);
       ?>
       <?php if($a['img']){ ?>
       <img src="data:image/jpeg;base64,<?php echo base64_encode($a['img']); ?>" style="width:400px;" />
       <?php } ?><br>
      <text><?=$small?><a href="showarticle.php?id=<?=$a['id']?>">  View more</a></text>
      <br>

      <hr>
    </div>
<?php endforeach ?>
</div>
</body>
</html>

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
<body  style="background:url(https://images.unsplash.com/42/U7Fc1sy5SCUDIu4tlJY3_NY_by_PhilippHenzler_philmotion.de.jpg); background-size:100%;">

  <div align=center style="background-color:rgba(212, 214, 219,0.7);margin-top:50px; padding-bottom:50px;" class="col-md-6 col-md-offset-3">
    <h1 style="font-family:'Poiret One'"> EDITING </h1>
    <form enctype="multipart/form-data" method="post" action="index.php?action=<?=$_GET['action']?>&id=<?=$_GET['id']?>">
      <label> HEADER</label><br>
      <input class="form-control" type="text" name="header" value="<?=$article['header']?>" required>

      <label> DATE</label><br>
      <input class="form-control" type="date" name="date" value="<?=$article['date']?>" required>

    <label> TEXT</label><br>
      <textarea rows="10" class="form-control" name="content" required><?=$article['text']?></textarea>

    <label> IMAGE</label><br>
      <input type="file"  name="img">

    <input type="submit" style="margin-top:10px" class="col-sm-offset-2 col-sm-8 btn btn-default">
  </div>
</body>
<html>

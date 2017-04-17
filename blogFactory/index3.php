<html>
<head>
<?php
include('3.php');
$fullname=@$_POST['fullname'];
$username=@$_POST['username'];
$password=@$_POST['password'];
$repeatpassword=@$_POST['repeatpassword'];
$submit=@$_POST['submit'];

$encpassword = md5($password);
if($submit){
  if($fullname==true){
    if($username==true){
      if($password==true){
        if($password==$repeatpassword){
          if(strlen($username)<50||strlen($fulname)<50){
            if(strlen($password)<50||strlen($password)>5){
              echo "INSERT INTO users  VALUES (null,'$fullname','$username','$password')";
                $insert =mysqli_query($db,"INSERT INTO users (fullname,username,password) VALUES ('fullname','$username','$password')");
                if ( false===$insert ) {
                      printf("error: %s\n", mysqli_error($db));
                    }
                    else {
                      echo 'done.';
                    }
            }else {
              echo "Password should be at least 5 characters and not more than 50";
            }
          }else {
            echo "the maximum length for username/fullname is 50";
          }
        }else {
          echo "Your passwords don't match";
        }
      }else {
        echo "Please input a password";
      }
    }else {
      echo "Please input a username";
    }
  }else {
    echo "Please input a fullname";
  }
};
?>
</head>
<body>
  <form method="post">
Fullname:    <input name="fullname" type="text"><br>
Username:    <input name="username" type=text"><br>
Password:    <input name="password" type="password"><br>
Repeat password:    <input name="repeatpassword" type="password"><br>
    <input name="submit" type="submit">
  </form>
</body>
</html>

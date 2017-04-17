<?php
	$con = mysqli_connect("localhost", "root", "");
  mysqli_select_db($con,"blog");
  $result=mysqli_query($con,"select * from stream");
  while($data = mysqli_fetch_row($result))
{
    echo "<p style='font-size:20px;font:solid;color:white;' align=center> $data[1] </p><hr>";
}
echo "</table>";
?>

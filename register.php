<?php
$con=mysqli_connect("localhost","root","","form");


if(isset(sub))
{
$sql="insert into buyer values('$_post[email]','$_post[firstname]','$_post[lastname]','$_post[password]')";
$c=mysqli_query($con,$sql);
if($c)
	echo"record added";
}
?>

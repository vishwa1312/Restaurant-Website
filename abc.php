<?php
//$con = mysqli_connect("localhost","root","root","hhi");
$news= $_GET['text1'];

$con = mysqli_connect("localhost","root","root","hhi");
if (!$con)
{
    die('Could not connect: ' . mysql_error());
}
$result2=mysqli_query($con,"INSERT INTO news (news) VALUES ('$news')");
if($result2)
{
	echo "Successfully Posted";
									
}
else
	echo "Failed to Post";
?>
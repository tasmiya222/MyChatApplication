<?php
session_start();
$con=mysqli_connect("localhost","root","","realtime");
if(!$con)
{
	echo "connection Fail!!".mysqli_error();
}

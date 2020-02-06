<?php
$con=mysqli_connect("localhost","root","") or die("not connected");
$mydb=mysqli_select_db("hai") or die("no db found");
if($mydb)
{
echo "db found";
}
else
{
echo "db not found";
}
?>
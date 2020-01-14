<?php
include("db.php"); 

$uname=$_POST['uname'];
$pass=$_POST['pass'];

if ($uname==""  or $pass=="")
{
echo "All fields must be entered, hit back button and re-enter information";
}
else
{
$sql="SELECT * FROM donor_reg WHERE uname='".$uname."' and pass='".$pass."'";
 $result=mysql_query($sql);
$count=mysql_num_rows($result);
if($count==1)
{
header('location: donor.php');
}
else
{echo "Incorrect User Name & Password";}
}

?>
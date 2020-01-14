<?php 

include("db.php"); 

$uname=$_POST['uname'];
$pass=$_POST['pass'];
$name=$_POST['name'];
$mob_num=$_POST['mob_num'];
$email=$_POST['email'];
$msg=$_POST['msg'];

 $usercheck = $uname;

 $check = mysql_query("SELECT uname FROM member_reg WHERE uname = '$usercheck'") 

or die(mysql_error());

 $check2 = mysql_num_rows($check);


if ($uname==""  or $pass=="" or $name=="" or $mob_num=="" or $email=="")
{
echo "All fields must be entered, hit back button and re-enter information";
}
elseif ($check2 != 0) {

 		die('Sorry, the username '.$_POST['uname'].' is already in use.');

 				}


elseif($_POST['pass'] != $_POST['cpass']) {

 		die('Your passwords did not match. ');

 	}

else{

$sql="INSERT INTO member_reg (uname, pass,name,mob_num,e_mail,msg)
VALUES
('$uname','$pass','$name','$mob_num','$email','$msg')";
 mysql_query($sql) or die(mysql_error());

 echo "Your message has been received";
 header( 'Location: member_login.php' ) ;

 }
?>

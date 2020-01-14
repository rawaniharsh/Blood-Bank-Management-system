<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<?php
session_start();
$d=$_POST['a'];
$a=$_POST['t1'];
$b=$_POST['a2'];
$c=$_POST['a3'];
/*
$con=mysql_connect('localhost','root','');
if(!$con)
{
die("could not connect".mysql_error());
}
$db=mysql_select_db('tracking');
$qry="insert into mail(name,guard,Phone,message)values('$d','$a',$b,'$c')";
//echo $qry;
mysql_query($qry);
*/


function PostRequest($url, $referer, $_data) {
// convert variables array to string:
$data = array();
while(list($n,$v) = each($_data)){
$data[] = "$n=$v";
}
$data = implode('&', $data);
// format --> test1=a&test2=b etc.
// parse the given URL
$url = parse_url($url);
if ($url['scheme'] != 'http') {
die('Only HTTP request are supported !');
}
// extract host and path:
$host = $url['host'];
$path = $url['path'];
// open a socket connection on port 80
$fp = fsockopen($host, 80);
// send the request headers:
fputs($fp, "POST $path HTTP/1.1\r\n");
fputs($fp, "Host: $host\r\n");
fputs($fp, "Referer: $referer\r\n");
fputs($fp, "Content-type: application/x-www-form-urlencoded\r\n");
fputs($fp, "Content-length: ". strlen($data) ."\r\n");
fputs($fp, "Connection: close\r\n\r\n");
fputs($fp, $data);
$result = '';
while(!feof($fp)) {
// receive the results of the request
$result .= fgets($fp, 128);
}
// close the socket connection:
fclose($fp);
// split the result header from the content
$result = explode("\r\n\r\n", $result, 2);
$header = isset($result[0]) ? $result[0] : '';
$content = isset($result[1]) ? $result[1] : '';
// return as array:
return array($header, $content);
}
$data = array(
'user' => "ajinvipin",
'password' => "317605",
'msisdn' => "$b",
'sid' => "WebSMS",
'msg' => "UR ATTENDANCE DETAILS ARE HERE ",
'fl' =>"0",
);
list($header, $content) = PostRequest(
"http://www.smslane.com//vendorsms/pushsms.aspx", // the url to post to
"http://www.yourdomain.com/sms.php", // its your url
$data
);
echo $content;
$_SESSION['send']=1;
header("location:msg.php");
?>

</body>
</html>

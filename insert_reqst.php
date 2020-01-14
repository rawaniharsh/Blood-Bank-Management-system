<?php 

include("db.php"); 

$pt_name=$_POST['pt_name'];
$typ_dis=$_POST['typ_dis'];
$doc_name=$_POST['doc_name'];
$whn_req=$_POST['whn_req'];
$cont_num=$_POST['cont_num'];
$blood_gp=$_POST['blood_gp'];
$quan=$_POST['quan'];
$req_city=$_POST['req_city'];
$cont_per_name=$_POST['cont_per_name'];
$hosp_add=$_POST['hosp_add'];
$date = date("Y-m-d H:i:s");
 

if ($pt_name==""  or $typ_dis=="" or $doc_name=="" or $whn_req=="" or $cont_num=="" or $blood_gp=="" or $quan=="" or $req_city=="" or $cont_per_name=="" or $hosp_add=="")
{
echo "All fields must be entered, hit back button and re-enter information";
}




else{

$sql="INSERT INTO blood_req(pat_name,typ_dis,doc_name,whn_req,cont_num,blood_grp,quan,req_city,cont_per_name,hosp_add,dt)
VALUES
('$pt_name','$typ_dis','$doc_name','$whn_req','$cont_num','$blood_gp','$quan','$req_city','$cont_per_name','$hosp_add','$date')";
 mysql_query($sql) or die(mysql_error());


 header( 'Location: request_blood.php' ) ;
 echo "Your message has been received";
 }
?>
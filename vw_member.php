<link href="Style.css" rel="stylesheet" type="text/css" />

<?php
include('db.php');



$sql="SELECT * FROM member_reg ";
 $result=mysql_query($sql);

?>



	<?php 
	  while($row=mysql_fetch_array($result))
	  {
	 
  echo '<div class="nw">';
	echo '<table><tr ><td width="350">Name</td>';
	  echo '<td> '.$row['name'].'</td>' ;
	echo '</tr>';

	
	 
	  echo '<tr><td>Contact Number</td>';
	  echo '  <td>'.$row['mob_num'].'</td>' ;
	 echo '</tr><tr><td>E-mail</td>';
	  echo ' <td> '.$row['e_mail'].'</td>' ;
	  echo '</tr><tr><td>Message</td>';
	  echo ' <td> '.$row['msg'] .'</td>';
	  
	  echo '</tr>';
	  echo '</table>';
    echo '</div>';
	echo '</br>';
	}
	  ?>
   
    
  </table>

</div>
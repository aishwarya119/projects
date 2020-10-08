<html>

<?php
  $dbh = mysqli_connect("localhost", "root", "") or die(mysqli_error());
    mysqli_select_db($dbh,'insurance policy management') or die(mysqlii_error($dbh));
     
$del=$_REQUEST['policy_no'];
$query1 = mysqli_query($dbh,"delete from policies where policy_no='$del'");
    

echo"data deleted successfully!!!";

 $var=mysqli_query($dbh,"SELECT  * FROM policies");

 echo"<table border size=1>";
 echo"<tr> <th>policy_no</th> <th>agent_id</th> <th>customer_id</th> <th>type</th> <th>insured_date</th> <th>effective_date</th> <th>insured_amount</th> <th>face_value</th> <th>premium</th>  </tr>";
  
 while ($arr=mysqli_fetch_row($var))
 { 
    echo"<tr> <td>$arr[0]</td> <td>$arr[1]</td> <td>$arr[2]</td> <td>$arr[3]</td> <td>$arr[4]</td> <td>$arr[5]</td> <td>$arr[6]</td> <td>$arr[7]</td> <td>$arr[8]</td>  </tr>";
 } 
 echo"</table>";

?>
<a href="policiesindex.html"><font size=5>go back</font></a><br><br>

</html>























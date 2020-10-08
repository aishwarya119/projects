<html>

<?php
 $dbh = mysqli_connect("localhost", "root", "") or die(mysqli_error());
    mysqli_select_db($dbh,'insurance policy management') or die(mysqli_error($dbh));

	$policy_no = $_REQUEST["policy_no"];
	$agent_id = $_REQUEST["agent_id"];
        $customer_id = $_REQUEST["customer_id"]; 
        $type = $_REQUEST["type"];  
    $insured_date = $_REQUEST["insured_date"];   
	$effective_date = $_REQUEST["effective_date"]; 
	$insured_amount=$_REQUEST["insured_amount"]; 
	$face_value = $_REQUEST["facevalue"];	
	$premium = $_REQUEST["premium"];
     

    $query = "INSERT INTO policies VALUES ('$policy_no','$agent_id','$customer_id','$type','$insured_date','$effective_date','$insured_amount','$face_value','$premium')";
    $result = mysqli_query($dbh,$query) or die(mysqli_error($dbh));



echo"data inserted successfully!!!";

 $var=mysqli_query($dbh,"SELECT  * FROM policies");

 echo"<table border size=1>";
 echo"<tr> <th>policy_no</th> <th>agent_id</th> <th>customer_id</th> <th>type</th> <th>insured_date</th> <th>effective_date</th> <th>insured_amount</th> <th>face_value</th> <th>premium</th>  </tr>";
  
 while ($arr=mysqli_fetch_row($var))
 { 
    echo"<tr> <td>$arr[0]</td> <td>$arr[1]</td> <td>$arr[2]</td> <td>$arr[3]</td> <td>$arr[4]</td> <td>$arr[5]</td> <td>$arr[6]</td> <td>$arr[7]</td> <td>$arr[8]</td>  </tr>";
 } 
 echo"</table>";

$db_host="localhost";
$db_name="insurance policy management";
$db_user="root";
$db_pass="";
$con = mysqli_connect("$db_host","$db_user","$db_pass") or die("could not connect");
mysqli_select_db($dbh,'insurance policy management') or die(mysqli_error($dbh));
$p0=mysqli_query($dbh,"call avginsured_amount(@out);");
$rs=mysqli_query( $dbh,'SELECT @out' );

while($row=mysqli_fetch_row($rs))
{
echo 'Avginsured_amount= '.$row[0];
}


mysqli_close($con);
?>
<a href="policiesindex.html"><front size=5>go back</front></a><br><br>

</html>
<html>

<?php
 $dbh = mysqli_connect("localhost", "root", "") or die(mysqli_error());
    mysqli_select_db($dbh,'insurance policy management') or die(mysqli_error($dbh));

	$address_id = $_REQUEST["agent_id"];
        $customer_id = $_REQUEST["customer_id"];  
	$city = $_REQUEST["city"];   
	$state = $_REQUEST["state"];  
	$zipcode = $_REQUEST["zipcode"];
     
     

    $query = "INSERT INTO customer_address VALUES ('$address_id','$customer_id','$city','$state','$zipcode')";
    $result = mysqli_query($dbh,$query) or die(mysqli_error($dbh));



echo"data inserted successfully!!!";

 $var=mysqli_query($dbh,"SELECT  * FROM customer_address");

 echo"<table border size=1>";
 echo"<tr> <th>address_id</th> <th>customer_id</th> <th>city</th> <th>state</th> <th>zipcode</th> </tr>";
  
 while ($arr=mysqli_fetch_row($var))
 { 
    echo"<tr> <td>$arr[0]</td> <td>$arr[1]</td> <td>$arr[2]</td> <td>$arr[3]</td> <td>$arr[4]</td> </tr>";
 } 
 echo"</table>";
?>
<a href="customer_addressindex.html"><font size=5>go back</font></a><br><br>


</html>

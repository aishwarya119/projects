<html>

<?php
 $dbh = mysqli_connect("localhost", "root", "") or die(mysqli_error());
    mysqli_select_db($dbh,'insurance policy management') or die(mysqli_error($dbh));

	$customer_id = $_REQUEST["customer_id"];
        $customer_name = $_REQUEST["customer_name"];  
     

    $query = "INSERT INTO customer VALUES ('$customer_id','$customer_name')";
    $result = mysqli_query($dbh,$query) or die(mysql_error($dbh));



echo"data inserted successfully!!!";

 $var=mysqli_query($dbh,"SELECT  * FROM customer");

 echo"<table border size=1>";
 echo"<tr> <th>customer_id</th> <th>customer_name</th></tr>";
  
 while ($arr=mysqli_fetch_row($var))
 { 
    echo"<tr> <td>$arr[0]</td> <td>$arr[1]</td> </tr>";
 } 
 echo"</table>";
?>
<a href="customerdelete.html">click here to delete</a>

</html>
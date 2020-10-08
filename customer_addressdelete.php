<html>

<?php
  $dbh = mysqli_connect("localhost", "root", "") or die(mysqli_error());
    mysqli_select_db($dbh,'insurance policy management') or die(mysqli_error($dbh));
     $del=$_REQUEST['address_id'];

    $query1 = mysqli_query($dbh,"delete from customer_address where address_id='$del'");
    

echo"data deleted successfully!!!";

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























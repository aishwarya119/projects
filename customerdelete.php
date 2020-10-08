<html>

<?php
  $dbh = mysqli_connect("localhost", "root", "") or die(mysqli_error());
    mysqli_select_db($dbh,'insurance policy management') or die(mysqli_error($dbh));
     $del=$_REQUEST['customer_id'];

    $query1 = mysqli_query($dbh,"delete from customer where customer_id='$del'");
    

echo"data deleted successfully!!!";

 $var=mysqli_query($dbh,"SELECT  * FROM customer");

 echo"<table border size=1>";
 echo"<tr> <th>customer_id</th> <th>customer_name</th> </tr>";
  
 while ($arr=mysqli_fetch_row($var))
 { 
    echo"<tr> <td>$arr[0]</td> <td>$arr[1]</td> </tr>";
 } 
 echo"</table>";
?>
<a href="customerindex.html"><font size=5>go back</font></a><br><br>

</html>























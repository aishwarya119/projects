<html>

<?php
  $dbh = mysqli_connect("localhost", "root", "") or die(mysqli_error());
    mysqli_select_db($dbh,'insurance policy management') or die(mysqli_error($dbh));
     $del=$_REQUEST['territory_id'];

    $query1 = mysqli_query($dbh,"delete from territory where territory_id='$del'");
    

echo"data deleted successfully!!!";

 $var=mysqli_query($dbh,"SELECT  * FROM territory");

 echo"<table border size=1>";
 echo"<tr> <th>territory_id</th> <th>zipcode</th> <th>median_income</th> <th>population_density</th> <th>median_age</th> </tr>";
  
 while ($arr=mysqli_fetch_row($var))
 { 
    echo"<tr> <td>$arr[0]</td> <td>$arr[1]</td> <td>$arr[2]</td> <td>$arr[3]</td> <td>$arr[4]</td> </tr>";
 } 
 echo"</table>";
?>
<a href="territoryindex.html"><font size=5>go back</font></a><br><br>

</html>























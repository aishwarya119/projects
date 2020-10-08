<html>

<?php
  $dbh = mysqli_connect("localhost", "root", "") or die(mysqli_error());
    mysqli_select_db($dbh,'insurance policy management') or die(mysqli_error($dbh));

	$territory_id = $_REQUEST["territory_id"];
        $zipcode = $_REQUEST["zipcode"];  
	$median_income = $_REQUEST["median_income"];   
	$population_density = $_REQUEST["population_density"];  
	$median_age = $_REQUEST["median_age"];
     

    $query = "INSERT INTO territory VALUES ('$territory_id','$zipcode','$median_income','$population_density','$median_age')";
    $result = mysqli_query($dbh,$query) or die(mysqli_error($dbh));

echo"data inserted successfully!!!";

 $var=mysqli_query($dbh,"SELECT  * FROM territory");

 echo"<table border size=1>";
 echo"<tr> <th>territory_id</th> <th>zipcode</th> <th>median_income</th> <th>population_density</th> <th>median_age</th> </tr>";
  
 while ($arr=mysqli_fetch_row($var))
 { 
    echo"<tr> <td>$arr[0]</td> <td>$arr[1]</td> <td>$arr[2]</td> <td>$arr[3]</td> <td>$arr[4]</td> </tr>";
 } 
 echo"</table>";
?>
<a href="territoryindex.html"><front size=5>go back</front></a><br><br>

</html>























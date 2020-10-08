<html>

<?php
 $dbh = mysqli_connect("localhost", "root", "","") or die(mysqli_error());
 mysqli_select_db($dbh,'insurance policy management') or die(mysqli_error());
    

	$agent_id = $_REQUEST["agent_id"];
        $agent_name= $_REQUEST["agent_name"];  
	$date_of_hire = $_REQUEST["date_of_hire"];   
	$territory_id = $_REQUEST["territory_id"];  
     

    $query = "update agent set agent_id='$agent_id',agent_name='$agent_name',date_of_hire='$date_of_hire',territory_id='$territory_id' where agent_id='$agent_id'";
    $result = mysqli_query($dbh,$query) or die(mysqli_error($dbh));
    



echo"data updated successfully!!!";

 $var=mysqli_query($dbh,"SELECT  * FROM agent");

 echo"<table border size=1>";
 echo"<tr> <th>agent_id</th> <th>agent_name</th> <th>date_of_hire</th> <th>territory_id</th></tr>";
  
 while ($arr=mysqli_fetch_row($var))
 { 
    echo"<tr> <td>$arr[0]</td> <td>$arr[1]</td> <td>$arr[2]</td> <td>$arr[3]</td> </tr>";
 } 
 echo"</table>";
?>
<a href="agentdelete.html"<click here to delete</a><br><br>
<a href="agentindex.html"><font size=5>go back</font></a><br><br>
</html>
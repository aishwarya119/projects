<html>

<?php
 $dbh = mysqli_connect("localhost", "root", "","") or die(mysqli_error());
 mysqli_select_db($dbh,'insurance policy management') or die(mysqli_error());
    


     
          $del=$_REQUEST['agent_id'];
    $query1 = mysqli_query($dbh,"delete from agent where agent_id='$del'");
    
    



echo"data deleted successfully!!!";

 $var=mysqli_query($dbh,"SELECT  * FROM agent");

 echo"<table border size=1>";
 echo"<tr> <th>agent_id</th> <th>agent_name</th> <th>date_of_hire</th> <th>territory_id</th></tr>";
  
 while ($arr=mysqli_fetch_row($var))
 { 
    echo"<tr> <td>$arr[0]</td> <td>$arr[1]</td> <td>$arr[2]</td> <td>$arr[3]</td> </tr>";
 } 
 echo"</table>";
?>
<a href="agentindex.html"><font size=5>go back</font></a><br><br>
</html>
<html>
<head>
<script language=javascript>
function toprint()
{
window.print();
}
</script>
</head>
<body>
<form name=frm method=post action=pagepunch1.php>
<center><h1>Punchanama Information<h1>
</center>

<tr>
<td colspan=2><div id="tp" style="text-align:center" >

<input type=submit name=sbm value=display>

</td>
</tr>
</table>
</form>
</body>
</html>
<?php
if(isset($_POST['sbm']))
{
$cn=mysql_connect("localhost","root"); 
mysql_select_db("project1",$cn);
$sb=$_POST['sbm'];
if($sb=="display")
{
echo "<br>";
echo "<br>";
echo "<center><table border=1>";
echo "<caption>Punchanama Information</caption>";
echo "<tr>";
echo "<th>Punchanama_No</th>";
echo "<th>Pid</th>";
echo "<th>Incharge_Station</th>";
echo "<th>Name_of_Punchas</th>";
echo "<th>Age</th>";
echo "<th>Address</th>";
echo "<th>Incident_Place</th>";
echo "<th>Time</th>";
echo "<th>Evidence</th>";
echo "<th>Vehicle_Details</th>";
echo "</tr>";
$sql="select * from pagepunch";
$result=mysql_query($sql,$cn);
while($row=mysql_fetch_array($result))
{
echo "<tr>";
echo "<td>$row[0]</td>";
echo "<td>$row[1]</td>";
echo "<td>$row[2]</td>";
echo "<td>$row[3]</td>";
echo "<td>$row[4]</td>";
echo "<td>$row[5]</td>";
echo "<td>$row[6]</td>";
echo "<td>$row[7]</td>";
echo "<td>$row[8]</td>";
echo "<td>$row[9]</td>";
echo "</tr>";
}
echo "</table>";
echo "<br>";
echo "<input type=button name=btn value=print onclick=toprint()></center>";
}
}
?>
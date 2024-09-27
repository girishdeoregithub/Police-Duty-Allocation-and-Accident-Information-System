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
<form name=frm method=post action=pagealloc1.php>
<center><h1>Allocation Information</h1></center>

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
echo "<caption>Allocation Information</caption>";
echo "<tr>";
echo "<th>AllocationNo</th>";
echo "<th>AllocationDate</th>";
echo "<th>Pid</th>";
echo "<th>DutyNo</th>";
echo "</tr>";
$sql="select * from pagealloc";
$result=mysql_query($sql,$cn);
while($row=mysql_fetch_array($result))
{
echo "<tr>";
echo "<td>$row[0]</td>";
echo "<td>$row[1]</td>";
echo "<td>$row[2]</td>";
echo "<td>$row[3]</td>";

echo "</tr>";
}
echo "</table>";
echo "<br>";
echo "<input type=button name=btn value=print onclick=toprint()></center>";
}
}
?>
<?php
$err1="";
$err2="";
$fl=0;
if(isset($_POST['sbm']))
{
if($_POST['sbm']=="submit"||$_POST['sbm']=="update")
{
if(empty($_POST['dt']))
{
$err1="Date must exist";
$fl=1;
}
if(empty($_POST['ti']))
{
$err2="FromTime must exist";
$fl=1;
}
if(empty($_POST['sp']))
{
$err3="ToTime must exist";
$fl=1;
}
if(empty($_POST['lc']))
{
$err4="location must exist";
$fl=1;
}
if(empty($_POST['dd']))
{
$err5="duty details must exist";
$fl=1;
}
}
}
?>

<html>
<head>
<script src="sr.js"></script>
</head>
<body>
<form  name=frm method=post action=pageduty.php>
<table width="50%" height= "40%" border="7px solid #ff6b8e" align="center">
<tr>
<th colspan=2><h2>Duty Form</h2><?php
                $cn=mysql_connect("localhost","root");
                mysql_select_db("project1",$cn);
                $sql="select count(*) from pageduty";
                $result=mysql_query($sql,$cn);
                $row=mysql_fetch_array($result);
                $orn=$row[0]+1;
        
        ?>
        </th>
</tr>
<tr>
<td>DutyNo</td>
<td><input type="int" size="44" name=dno value=<?php echo $orn;?>></td>
</tr>
<tr>
<td>Date</td>
<td><input type="date" size="44" name=dt><?php echo $err1; ?></td>
</tr>
<tr>
<td>FromTime</td>
<td><input type="time" size="44" name=ti><?php echo $err2; ?></td>
</tr>
<tr>
<td>ToTime</td>
<td><input type="time" size="44" name=sp><?php echo $err3; ?></td>
</tr>
<tr>
<td>Location</td>
<td ><input type="text" size="44" name=lc ><?php echo $err4; ?><td>
</tr>
<tr>
<td>Duty_Details</td>
<td><input type="text" size="44" name=dd onkeypress="return valid2(event);"><?php echo $err5; ?></td>
</tr>

<tr>
<td colspan=2><div id="tp" style="text-align:center" >
<input type=submit name=sbm value=submit>
<input type=submit name=sbm value=update>
<input type=submit name=sbm value=display>
<input type=submit name=sbm value=delete>
<input type=submit name=sbm value=search></td>
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
if($sb=="submit")
{
    if($fl==0)
{
$sql="insert into pageduty values('$_POST[dno]','$_POST[dt]','$_POST[ti]','$_POST[sp]','$_POST[lc]','$_POST[dd]')"; 
mysql_query($sql,$cn); 
echo "data stored";
}
}
else
if($sb=="update")
{
    if($fl==0)
{
$sql="update pageduty set Date='$_POST[dt]',FromTime='$_POST[ti]',ToTime='$_POST[sp]',Location='$_POST[lc]',Duty_Details='$_POST[dd]' where DutyNo='$_POST[dno]'";
mysql_query($sql,$cn);
echo "data updated";
}
}
else
if($sb=="delete")
{
$sql="delete from pageduty where DutyNo='$_POST[dno]'";
mysql_query($sql,$cn);
echo "data deleted";
}
else
if($sb=="display")
{
echo "<center><table border=1>";
echo "<caption>Duty Information</caption>";
echo "<tr>";
echo "<th>DutyNo</th>";
echo "<th>Date</th>";
echo "<th>FromTime</th>";
echo "<th>ToTime</th>";
echo "<th>Location</th>";
echo "<th>Duty_Details</th>";
echo "</tr>";
$sql="select * from pageduty";
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
echo "</tr>";
}
echo "</table></center>";
}
else 
if($sb=="search")
{
echo "<center><table border=1>"; 
echo "<caption>Duty information</caption>";
echo "<tr>"; 
echo "<th>DutyNo</th>";
echo "<th>Date</th>"; 
echo "<th>FromTime</th>";
echo "<th>ToTime</th>";
echo "<th>Location</th>";
echo "<th>Duty_Details</th>";
echo "</tr>";
$sql="select * from pageduty where DutyNo='$_POST[dno]'"; 
$result=mysql_query($sql, $cn);
while($row=mysql_fetch_array($result))
{
echo "<tr>";
echo "<td>$row[0]</td>";
echo "<td>$row[1]</td>"; 
echo "<td>$row[2]</td>";
echo "<td>$row[3]</td>";
echo "<td>$row[4]</td>";
echo "<td>$row[5]</td>";

echo "</tr>";
}
echo "</table></center>";
}
}
?>


<?php
$err1="";
$err2="";
$fl=0;
if(isset($_POST['sbm']))
{
if($_POST['sbm']=="submit"||$_POST['sbm']=="update")
{
if(empty($_POST['nm']))
{
$err1="name must exist";
$fl=1;
}
if(empty($_POST['st']))
{
$err2="station name must exist";
$fl=1;
}
if(empty($_POST['pt']))
{
$err3="post must exist";
$fl=1;
}
if(empty($_POST['ad']))
{
$err4="address must exist ";
$fl=1;
}
if(empty($_POST['cy']))
{
$err5="city must exist";
$fl=1; 
}
if(empty($_POST['age']))
{
$err6="age must exist";
$fl=1;
}
if(empty($_POST['emi']))
{
$err7="Emailid must exist";
$fl=1;
}
if(empty($_POST['ct']))
{
$err8="contact must exist";
$fl=1;

}
}
}
?>

<html>
<head>
<style>

table{
background-image:url("images/Scre.png")

}

#rty {
font-size: 18px;
 color: #000000;
text-align:left;
}
</style>
<script src="sr.js"></script>
</head>
<body>
<form name=frm method=post action=pagepolice.php>
<table  width="50%" height= "40%" border="7px solid #ff6b8e" align="center">
<tr>
<th colspan=2><h2>Police Information Form</h2>
<?php
                $cn=mysql_connect("localhost","root");
                mysql_select_db("project1",$cn);
                $sql="select count(*) from pagepolice";
                $result=mysql_query($sql,$cn);
                $row=mysql_fetch_array($result);
                $orn=$row[0]+1;
        
        ?>
</th>
</tr>
<tr>
<td id="rty">Pid</td>
<td><input type="text" name=id size="55" value=<?php echo $orn;?>></td>
</tr>
<tr>
<td id="rty">Name</td>
<td><input type="text" size="55" name=nm onkeypress="return valid2(event);"><?php echo $err1; ?></td>
</tr>
<tr>
<td id="rty">Station</td>
<td><input type="text" size="55" name=st onkeypress="return valid2(event);"><?php echo $err2; ?></td>
</tr>
<tr>
<td id="rty">Post</td>
<td><input type="text" size="55" name=pt onkeypress="return valid2(event);"><?php echo $err3; ?></td>
</tr>
<tr>
<td id="rty">Address</td>
<td ><input type="text" size="55" name=ad><?php echo $err4; ?><td>
</tr>
<tr>
<td id="rty">City</td>
<td><input type="text" size="55" name=cy onkeypress="return valid2(event);"><?php echo $err5; ?></td>
</tr>
<tr>
<td id="rty">Age</td>
<td><input type="text" size="55" name=age onkeypress="return nval(event);"><?php echo $err6; ?></td>
</tr>
<tr>
<td id="rty">Emailid</td>
<td><input type="text" size="55" name=emi onkeypress="return valid2(event);"><?php echo $err7; ?></td>
</tr>
<tr>
<td id="rty">ContactNo</td>
<td><input type="text" size="55" name=ct onkeypress="return nval(event);"><?php echo $err8; ?></td>
</tr>
<tr>
<td id="rty">Gender</td>
<td id="rty"><input type="radio" name="Gender" value="Male"/> Male<br>
<input type="radio" name="Gender" value="Female"/> Female</td>
</tr>
<tr>
<td id="rty">status</td>
<td><input type="text" size="55" name=sts onkeypress="return valid2(event);"><?php echo $err; ?></td>
</tr>
<tr>
<td id="rty">Password</td>
<td><input type="password" size="55" name=pass><?php echo $err8; ?></td>
</tr>

<td colspan=2><div id="tp" style="text-align:center" >
<input type="submit" name=sbm value=submit>
<input type="submit" name=sbm value=update>

<input type="submit" name=sbm value=delete>

</tr>
</table>
</form>
</body>
</html>
<br>
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
$sql="insert into pagepolice values('$_POST[id]','$_POST[nm]','$_POST[st]','$_POST[pt]','$_POST[ad]','$_POST[cy]','$_POST[age]','$_POST[emi]','$_POST[ct]','$_POST[Gender]','N','$_POST[pass]')"; 
mysql_query($sql,$cn); 
echo "data stored";
}
}
else
if($sb=="update")
{
    if($fl==0)
{
$sql="update pagepolice set Name='$_POST[nm]',Station='$_POST[st]',Post='$_POST[pt]',Address='$_POST[ad]',City='$_POST[cy]',Age='$_POST[age]',Emailid='$_POST[emi]',ContactNo='$_POST[ct]',Gender='$_POST[Gender]',Password='$_POST[pass]' where Id='$_POST[id]'";
mysql_query($sql,$cn);
echo "data updated";
}
}
else
if($sb=="delete")
{
$sql="delete from pagepolice where Pid='$_POST[id]'";
mysql_query($sql,$cn);
echo "data deleted";
}
else
if($sb=="display")
{
echo "<center><table border=1>";
echo "Police Information";
echo "<tr>";
echo "<th>Id</th>";
echo "<th>Name</th>";
echo "<th>Station</th>";
echo "<th>Post</th>";
echo "<th>Address</th>";
echo "<th>City</th>";
echo "<th>Age</th>";
echo "<th>Emailid</th>";
echo "<th>ContactNo</th>";
echo "<th>Gender</th>";
echo "<th>Status</th>";
echo "<th>Password</th>";
echo "</tr>";
$sql="select * from pagepolice";
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
echo "<td>$row[10]</td>";
echo "<td>$row[11]</td>";
echo "</tr>";
}
echo "</table></center>";
}
else 
if($sb=="search")
{
echo "<center><table border=1>"; 
echo "<caption>Police information</caption>";
echo "<tr>"; 
echo "<th>Id</th>";
echo "<th>Name</th>"; 
echo "<th>Station</th>";
echo "<th>Post</th>";
echo "<th>Address</th>";
echo "<th>City</th>";
echo "<th>Age</th>";
echo "<th>Emailid</th>";
echo "<th>ContactNo</th>";
echo "<th>Status</th>";
echo "<th>Password</th>";
echo "</tr>";
$sql="select * from pagepolice where Pid='$_POST[id]'"; 
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
echo "<td>$row[6]</td>";
echo "<td>$row[7]</td>";
echo "<td>$row[8]</td>";
echo "<td>$row[9]</td>";
echo "<td>$row[10]</td>";
echo "<td>$row[11]</td>";
echo "</tr>";
}
echo "</table></center>";
echo "<br>";
}
}
echo "<br>";
echo "<br>";
?>

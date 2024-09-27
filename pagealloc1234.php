<?php
$err1="";
$err2="";
$fl=0;
if(isset($_POST['sbm']))
{
if($_POST['sbm']=="submit"||$_POST['sbm']=="update")
{
if(empty($_POST['alno']))
{
$err1="AllocationNo must exist";
$fl=1;
}
if(empty($_POST['ald']))
{
$err2="Date must exist";
$fl=1;
}
if(empty($_POST['id']))
{
$err3="Pid must exist";
$fl=1;
}
if(empty($_POST['dno']))
{
$err4="DutyNo must exist";
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
<form name=frm method=post action=pagealloc.php>
<table  width="50%" height= "40%" border="7px solid #ff6b8e" align="center">
<tr>
<th colspan=2><h2>Allocation Form</h2><?php
                $cn=mysql_connect("localhost","root");
                mysql_select_db("project1",$cn);
                $sql="select count(*) from pagealloc";
                $result=mysql_query($sql,$cn);
                $row=mysql_fetch_array($result);
                $orn=$row[0]+1;
        
        ?>
        </th>

</tr>

<tr>
<td>AllocationNo :</td>
<td><input type="text" name=alno size="44" onkeypress="return nval(event);" value=<?php echo $orn;?>></td>
</tr>
<tr>
<td>AllocationDate :</td>
<td><input type="date" size="44" name=ald onkeypress="return valid2(event);"><?php echo $err2; ?></td>
</tr>
<tr>
<td>Pid :</td>
<td><select name="id">
                <?php
                $cn=mysql_connect("localhost","root");
                mysql_select_db("project1",$cn);
                $sql="select Pid from pagepolice where status='N'";
                $result=mysql_query($sql,$cn);
                while($row=mysql_fetch_array($result))
                {
                    echo "<option value=$row[0]>$row[0]</option>";

                }
                
                ?>


            </select></td>
</tr>
<tr>
<td>DutyNo :</td>
<td><select name="dno">
                <?php
                $cn=mysql_connect("localhost","root");
                mysql_select_db("project1",$cn);
                $sql="select DutyNo from pageduty";
                $result=mysql_query($sql,$cn);
                while($row=mysql_fetch_array($result))
                {
                    echo "<option value=$row[0]>$row[0]</option>";

                }
                
                ?>


            </select></td>
</tr>

<tr>
<td colspan=2><div id="tp" style="text-align:center" >
<input type=submit name=sbm value=submit>
<input type=submit name=sbm value=update>
<input type=submit name=sbm value=display>
<input type=submit name=sbm value=delete>
<input type=submit name=sbm value=search>
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
if($sb=="submit")
{
    if($fl==0)
{
$sql="insert into pagealloc values('$_POST[alno]','$_POST[ald]','$_POST[id]','$_POST[dno]')"; 
mysql_query($sql,$cn); 
$sql1="update pagepolice set status='Y' where pid='$_POST[id]'";
mysql_query($sql1,$cn);
echo "data stored";
}
}
else
if($sb=="update")
{
    if($fl==0)
{
$sql="update pagealloc set AllocationDate='$_POST[ald]',Pid='$_POST[id]',DutyNo='$_POST[dno]' where AllocationNo='$_POST[alno]'";
mysql_query($sql,$cn);
echo "data updated";
}
}
else
if($sb=="delete")
{
$sql="delete from pagealloc where AllocationNO='$_POST[alno]'";
mysql_query($sql,$cn);
echo "data deleted";
}
else
if($sb=="display")
{
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
echo "</table></center>";
}
else 
if($sb=="search")
{
echo "<center><table border=1>"; 
echo "<caption>Allocation information</caption>";
echo "<tr>"; 
echo "<th>AllocationNo</th>";
echo "<th>AllocationDate</th>";
echo "<th>Pid</th>";
echo "<th>DutyNo</th>";
echo "</tr>";
$sql="select * from pagealloc where AllocationNo='$_POST[alno]'"; 
$result=mysql_query($sql, $cn);
while($row=mysql_fetch_array($result))
{
echo "<tr>";
echo "<td>$row[0]</td>";
echo "<td>$row[1]</td>"; 
echo "<td>$row[2]</td>";
echo "<td>$row[3]</td>";

echo "</tr>";
}
echo "</table></center>";
}
}
?>
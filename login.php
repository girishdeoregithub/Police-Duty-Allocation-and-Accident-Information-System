
</br>
</br>

<html>
<head>

<style>
#op {

font-weight: bold;
font-size: 18px;
 color: #000000;
}

#uo {
font-weight: bold;
font-size: 28px;
 color: #000000;
}

input[type="submit"] {
  display: block;
  box-sizing: border-box;
  width: 100%;
  outline: none;
  height: 60px;
  line-height: 60px;
  border-radius: 4px;
}

input[type="submit"] {
  border: none;
  display: block;
  background-color: #3ca9e2;
  color: #fff;
  font-weight: bold;
  text-transform: uppercase;
  cursor: pointer;
  -webkit-transition: all 0.2s ease;
  transition: all 0.2s ease;
  font-size: 18px;
  position: relative;
  display: inline-block;
  cursor: pointer;
  text-align: center;
}
input[type="submit"]:hover {
  background-color: #329dd5;
  -webkit-transition: all 0.2s ease;
  transition: all 0.2s ease;
}

}
</style>
</head>
<body>
<form name="frm1" method=post action=login.php>
<table   align="center" >
<tr>
<th colspan=2><h2>Login</h2></th>
</tr>
<tr height="60">
<td id="op">User_Id</td>
<td id="uo"><input type="text" name="id" height="77" size="44" ></td>
</tr>
<tr height="60">
<td id="op">Password</td>
<td ><input type="password" name="pass" size="44"></td>
</tr>
<td colspan=2><div id="tp" style="text-align:center" >
<input type="submit" name="login" value=login>
</td>
</tr>
<tr>
<td><button><a href="index.html">Back</a></button></td>
</tr>

</table>
</form>
</body>
</html>
<?php
if(isset($_POST['login']))
{
    if($_POST['id']=="admin" && $_POST['pass']=="admin")
    header("location:http://localhost/Fieldwork1/index1.html");
    else
    {
        $cn=mysql_connect("localhost","root");
        mysql_select_db("project1",$cn);
        $sql="select count(*) from pagepolice where Pid='$_POST[id]' and password='$_POST[pass]'";
        $result=mysql_query($sql,$cn);
        $row=mysql_fetch_array($result);
        if($row[0]>0)
        {
            session_start();
            $_SESSION['Pid']=$_POST['id'];
            header("location:http://localhost/Fieldwork1/index2.html");
        }
        else
        echo "<center>";
        echo "invalid username or password";
        echo "</center>";
        
    }
    

}
?>
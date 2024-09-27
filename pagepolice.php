
<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>blueneek</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
      <link rel="stylesheet" href="css/bootstrap.min.css">
      <!-- style css -->
      <link rel="stylesheet" href="css/style.css">
      <!-- Responsive-->
      <link rel="stylesheet" href="css/responsive.css">
      <!-- fevicon -->
      <link rel="icon" href="images/fevicon.png" type="image/gif" />
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->

<style>

.city{
text-align:center;

}
</style>
   </head>
   <!-- body -->
   <body class="main-layout">
      <!-- loader  -->
      
      <!-- end loader -->
      <!-- header -->
      <header>
         <!-- header inner -->
         <div class="header">
            <div class="container-fluid">
               <div class="row">
                  <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col logo_section">
                     <div class="full">
                        <div class="center-desk">
                           <div class="logo">
                              <a href="index.html"><img src="images/logo.png" alt="#" /></a>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9">
                     <div class="header_information">
                        <nav class="navigation navbar navbar-expand-md navbar-dark ">
                           <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
                           <span class="navbar-toggler-icon"></span>
                           </button>
                           <div class="collapse navbar-collapse" id="navbarsExample04">
                              <ul class="navbar-nav mr-auto">
                                 <li class="nav-item active">
                                    <a class="nav-link" href="#">Home</a>
                                 </li> 
                                 <li class="nav-item">
                                    <a class="nav-link" href="#">About us</a>
                                 </li>
                                 <li class="nav-item">
                                    <a class="nav-link" href="#">About system</a>
                                 </li>
                                 <li class="nav-item">
                                    <a class="nav-link" href="#">Need</a>
                                 </li>
                              </ul>
                              <div class="sign_btn"><a href="index.html">Back</a></div>
                           </div>
                        </nav>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </header>
      <!-- end header inner -->
      <!-- end header -->

<div class="city">
<br>

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
<th colspan=2><h2>User Information Form</h2>
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
<td><input type="text" size="55" name=nm autocomplete="off"><?php echo $err1; ?></td>
</tr>
<tr>
<td id="rty">ContactNo1</td>
<td><input type="text" size="55" name=st autocomplete="off"><?php echo $err2; ?></td>
</tr>
<tr>
<td id="rty">Region</td>
<td><input type="text" size="55" name=pt autocomplete="off" onkeypress="return valid2(event);"><?php echo $err3; ?></td>
</tr>
<tr>
<td id="rty">Address</td>
<td ><input type="text" size="55" name=ad autocomplete="off"><?php echo $err4; ?><td>
</tr>
<tr>
<td id="rty">City</td>
<td><input type="text" size="55" name=cy autocomplete="off"><?php echo $err5; ?></td>
</tr>
<tr>
<td id="rty">Age</td>
<td><input type="text" size="55" name=age onkeypress="return nval(event);" autocomplete="off"><?php echo $err6; ?></td>
</tr>
<tr>
<td id="rty">Emailid</td>
<td><input type="email" size="55" name=emi autocomplete="off" ><?php echo $err7; ?></td>
</tr>
<tr>
<td id="rty">ContactNo2</td>
<td><input type="text" size="55" name=ct onkeypress="return nval(event);" autocomplete="off"><?php echo $err8; ?></td>
</tr>
<tr>
<td id="rty">Gender</td>
<td id="rty"><input type="radio" name="Gender" value="Male"/> Male<br>
<input type="radio" name="Gender" value="Female"/> Female</td>
</tr>
<tr>
<td id="rty">Add_Detail</td>
<td><input type="text" size="55" name=sts autocomplete="off"><?php echo $err; ?></td>
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
$sql="update pagepolice set Name='$_POST[nm]',ContactNo1='$_POST[st]',Region='$_POST[pt]',Address='$_POST[ad]',City='$_POST[cy]',Age='$_POST[age]',Emailid='$_POST[emi]',ContactNo2='$_POST[ct]',Gender='$_POST[Gender]',Password='$_POST[pass]' where Id='$_POST[id]'";
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
echo "<th>ContactNo1</th>";
echo "<th>Region</th>";
echo "<th>Address</th>";
echo "<th>City</th>";
echo "<th>Age</th>";
echo "<th>Emailid</th>";
echo "<th>ContactNo2</th>";
echo "<th>Gender</th>";
echo "<th>Add_Detail</th>";
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
echo "<th>ContactNo1</th>";
echo "<th>Region</th>";
echo "<th>Address</th>";
echo "<th>City</th>";
echo "<th>Age</th>";
echo "<th>Emailid</th>";
echo "<th>ContactNo2</th>";
echo "<th>Add_Detail</th>";
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



 </div>

</div>
     <!-- Javascript files-->
      <script src="js/jquery.min.js"></script>
      <script src="js/popper.min.js"></script>
      <script src="js/bootstrap.bundle.min.js"></script>
      <script src="js/jquery-3.0.0.min.js"></script>

     <!-- sidebar -->
      <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
      <script src="js/custom.js"></script>
      <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
      

   </body>
</html>

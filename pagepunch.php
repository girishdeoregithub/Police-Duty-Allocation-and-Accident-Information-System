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
                              <div class="sign_btn"><a href="index2.html">Back</a></div>
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
</br>

<?php
$err1="";
$err2="";
$fl=0;
if(isset($_POST['sbm']))
{
if($_POST['sbm']=="submit"||$_POST['sbm']=="update")
{
if(empty($_POST['is']))
{
$err2="station name must exist";
$fl=1;
}
if(empty($_POST['np']))
{
$err3="name must exist";
$fl=1;
}
if(empty($_POST['age']))
{
$err4="age must exist ";
$fl=1;
}
if(empty($_POST['add']))
{
$err5="address must exist";
$fl=1; 
}
if(empty($_POST['inp']))
{
$err6="incident must exist";
$fl=1;
}
if(empty($_POST['ti']))
{
$err7="time must exist";
$fl=1;
}
if(empty($_POST['evi']))
{
$err8="evidence must exist";
$fl=1;
}
if(empty($_POST['vd']))
{
$err9="vehicle must exist";
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
<form name=frm method=post action=pagepunch.php>
<table  width="50%" height= "40%" border="7px solid #ff6b8e" align="center">
<tr>
<th colspan=2><h2>Service Form</h2></th>
<?php
                $cn=mysql_connect("localhost","root");
                mysql_select_db("project1",$cn);
                $sql="select count(*) from pagepunch";
                $result=mysql_query($sql,$cn);
                $row=mysql_fetch_array($result);
                $orn=$row[0]+1;
        
        ?>
</tr>

<tr>
<td>Service_No :</td>
<td> &nbsp<input type="text" size="44" name=pn onkeypress="return nval(event);" value=<?php echo $orn;?>></td>
</tr>
<tr>
<td>Pid :</td>
<td> &nbsp<select name="dno">
                <?php
                $cn=mysql_connect("localhost","root");
                mysql_select_db("project1",$cn);
                $sql="select Pid from pagepolice";
                $result=mysql_query($sql,$cn);
                while($row=mysql_fetch_array($result))
                {
                    echo "<option value=$row[0]>$row[0]</option>";

                }
                
                ?>


            </select></td>
</tr>
<tr>
<td>Client_Name :</td>
<td> &nbsp<input type="text" size="44" name=is autocomplete="off"><?php echo $err2; ?></td>
</tr>
<tr>
<td>Service :</td>
<td> &nbsp<input type="text" size="44" name=np autocomplete="off"><?php echo $err3; ?></td>
</tr>
<tr>
<td>PhoneNo :</td>
<td > &nbsp<input type="text" size="44" name=age autocomplete="off"><?php echo $err4; ?><td>
</tr>
<tr>
<td>Address :</td>
<td> &nbsp<input type="text" size="44" name=add autocomplete="off"><?php echo $err5; ?></td>
</tr>
<tr>
<td>From_Time :</td>
<td> &nbsp<input type="time" size="44" name=inp autocomplete="off"><?php echo $err6; ?></td>
</tr>
<tr>
<td>To_Time :</td>
<td> &nbsp<input type="time" size="44" name=ti><?php echo $err7; ?></td>
</tr>
<tr>
<td>Event :</td>
<a ><td > &nbsp<input type="text" size="44" name=evi autocomplete="off"><?php echo $err8; ?></td></a>
</tr>
<tr>
<td>More_Details :</td>
<a ><td > &nbsp<input type="text" size="44" name=vd autocomplete="off"><?php echo $err9; ?></td></a>
</tr>

<tr>
<td colspan=2><div id="tp" style="text-align:center" >
<input type=submit name=sbm value=submit>
<input type=submit name=sbm value=update>
<input type=submit name=sbm value=display>
<input type=submit name=sbm value=delete >
<input type=submit name=sbm value=search>
</td>
</tr>
</table>
</form>
</body>
</html>
</br>
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
$sql="insert into pagepunch values('$_POST[pn]','$_POST[dno]','$_POST[is]','$_POST[np]','$_POST[age]','$_POST[add]','$_POST[inp]','$_POST[ti]','$_POST[evi]','$_POST[vd]')"; 
mysql_query($sql,$cn); 
echo "data stored";
}
}
else
if($sb=="update")
{
    if($fl==0)
{
$sql="update pagepunch set Pid='$_POST[dno]',Client_Name='$_POST[is]',Service='$_POST[np]',PhoneNo='$_POST[age]',Address='$_POST[add]',From_Time='$_POST[inp]',To_Time='$_POST[ti]',Event='$_POST[evi]',More_Details='$_POST[gn]' where Service_No='$_POST[pn]'";
mysql_query($sql,$cn);
echo "data updated";
}
}
else
if($sb=="delete")
{
$sql="delete from pagepunch where Service_No='$_POST[pn]'";
mysql_query($sql,$cn);
echo "data deleted";
}
else
if($sb=="display")
{
echo "<center><table border=1>";
echo "<caption>Service Information</caption>";
echo "<tr>";
echo "<th>Service_No</th>";
echo "<th>Pid</th>";
echo "<th>Client_Name</th>";
echo "<th>Service</th>";
echo "<th>PhoneNo</th>";
echo "<th>Address</th>";
echo "<th>Frome_Time</th>";
echo "<th>To_Time</th>";
echo "<th>Event</th>";
echo "<th>More_Details</th>";
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
echo "</table></center>";
}
else 
if($sb=="search")
{
echo "<center><table border=1>"; 
echo "<caption>Service information</caption>";
echo "<tr>"; 
echo "<th>Service_No</th>";
echo "<th>Pid</th>";
echo "<th>Client_Name</th>";
echo "<th>Service</th>";
echo "<th>PhoneNo</th>";
echo "<th>Address</th>";
echo "<th>From_Time</th>";
echo "<th>To_Time</th>";
echo "<th>Event</th>";
echo "<th>More_Details</th>";
echo "</tr>";
$sql="select * from pagepunch where Service_No='$_POST[pn]'"; 
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
echo "</tr>";
}
echo "</table></center>";
}
}
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

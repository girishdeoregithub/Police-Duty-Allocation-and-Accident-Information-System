

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
                              <div class="sign_btn"><a href="index1.html">Back</a></div>
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
<style>



#rty {
font-size: 18px;
 color: #000000;
text-align:left;
}
</style>
<script src="sr.js"></script>
</head>
<body>
<form  name=frm method=post action=pageduty.php>
<table width="50%" height= "40%" border="7px solid #ff6b8e" align="center">
<tr>
<th colspan=2><h2>Equipment booking confirmation</h2><?php
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
<td id="rty">Bid</td>
<td id="rty"><input type="int" size="44" name=dno value=<?php echo $orn;?>></td>
</tr>
<tr>
<td id="rty">Confirmation</td>
<td id="rty"><input type="text" size="44" name=dd autocomplete="off"><?php echo $err5; ?></td>
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
</br>
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
$sql="insert into pageduty values('$_POST[dno]','$_POST[dd]')"; 
mysql_query($sql,$cn); 
echo "data stored";
}
}
else
if($sb=="update")
{
    if($fl==0)
{
$sql="update pageduty set Confirmation='$_POST[dd]' where Bid='$_POST[dno]'";
mysql_query($sql,$cn);
echo "data updated";
}
}
else
if($sb=="delete")
{
$sql="delete from pageduty where Bid='$_POST[dno]'";
mysql_query($sql,$cn);
echo "data deleted";
}
else
if($sb=="display")
{
echo "<center><table border=1>";
echo "<caption>Booked equipment confirmation</caption>";
echo "<tr>";
echo "<th>Bid</th>";
echo "<th>Confirmation</th>";
echo "</tr>";
$sql="select * from pageduty";
$result=mysql_query($sql,$cn);
while($row=mysql_fetch_array($result))
{
echo "<tr>";
echo "<td>$row[0]</td>";
echo "<td>$row[1]</td>";
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
echo "<th>Bid</th>";
echo "<th>Confirmation</th>";
echo "</tr>";
$sql="select * from pageduty where Bid='$_POST[dno]'"; 
$result=mysql_query($sql, $cn);
while($row=mysql_fetch_array($result))
{
echo "<tr>";
echo "<td>$row[0]</td>";
echo "<td>$row[1]</td>"; 
echo "</tr>";
}
echo "</table></center>";
}
}
?>
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



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
   </head>
   <!-- body -->
   <body class="main-layout">
      <!-- loader  -->
      <div class="loader_bg">
         <div class="loader"><img src="images/loading.gif" alt="#" /></div>
      </div>
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
                                    <a class="nav-link" href="index1.html">Home</a>
                                 </li>
                                 <li class="nav-item ">
                                    <a class="nav-link" href="pagepolice.php"> Police  </a>
                                 </li> 
                                 <li class="nav-item">
                                    <a class="nav-link" href="pageduty.php">Duty</a>
                                 </li>
                                 <li class="nav-item">
                                    <a class="nav-link" href="pagealloc.php">Allocation</a>
                                 </li>
                                 <li class="nav-item">
                                    <a class="nav-link" href="reports.html">logout</a>
                                 </li>
                              </ul>
                              <div class="sign_btn"><a href="reports.html">Reports</a> </div>
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
      <!-- banner -->
      <div id="myCarousel" class="carousel slide banner_main" data-ride="carousel">
        
         <div class="carousel-inner">
            <div class="carousel-item active">
               <img class="first-slide" src="images/banner.jpg" alt="First slide">
               <div class="container">
                 <div class="carousel-caption relative"> 
                     
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
<td>Pid</td>
<td><input type="text" name=id size="44" onkeypress="return nval(event);" value=<?php echo $orn;?>></td>
</tr>
<tr>
<td>Name</td>
<td><input type="text" size="44" name=nm onkeypress="return valid2(event);"><?php echo $err1; ?></td>
</tr>
<tr>
<td>Station</td>
<td><input type="text" size="44" name=st onkeypress="return valid2(event);"><?php echo $err2; ?></td>
</tr>
<tr>
<td>Post</td>
<td><input type="text" size="44" name=pt onkeypress="return valid2(event);"><?php echo $err3; ?></td>
</tr>
<tr>
<td>Address</td>
<td ><input type="text" size="44" name=ad><?php echo $err4; ?><td>
</tr>
<tr>
<td>City</td>
<td><input type="text" size="44" name=cy onkeypress="return valid2(event);"><?php echo $err5; ?></td>
</tr>
<tr>
<td>Age</td>
<td><input type="text" size="44" name=age onkeypress="return nval(event);"><?php echo $err6; ?></td>
</tr>
<tr>
<td>Emailid</td>
<td><input type="text" size="44" name=emi onkeypress="return valid2(event);"><?php echo $err7; ?></td>
</tr>
<tr>
<td>ContactNo</td>
<td><input type="text" size="44" name=ct onkeypress="return nval(event);"><?php echo $err8; ?></td>
</tr>
<tr>
<td>Gender</td>
<td><input type="radio" name="Gender" name=gn> Male<br>
<input type="radio" name="Gender" name=gn> Female</td>
</tr>

<tr>
<td>status</td>
<td><input type="text" size="44" name=sts onkeypress="return valid2(event);"><?php echo $err; ?></td>
</tr>
<tr>
<td>password</td>
<td><input type="password" size="44" name=pass><?php echo $err8; ?></td>
</tr>

<td colspan=2><div id="tp" style="text-align:center" >
<input type="submit" name=sbm value=submit>
<input type="submit" name=sbm value=update>
<input type="submit" name=sbm value=display>
<input type="submit" name=sbm value=delete>
<input type="submit" name=sbm value=search></td>
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
$sql="insert into pagepolice values('$_POST[id]','$_POST[nm]','$_POST[st]','$_POST[pt]','$_POST[ad]','$_POST[cy]','$_POST[age]','$_POST[emi]','$_POST[ct]','$_POST[gn]','N','$_POST[pass]')"; 
mysql_query($sql,$cn); 
echo "data stored";
}
}
else
if($sb=="update")
{
    if($fl==0)
{
$sql="update pagepolice set Name='$_POST[nm]',Station='$_POST[st]',Post='$_POST[pt]',Address='$_POST[ad]',City='$_POST[cy]',Age='$_POST[age]',Emailid='$_POST[emi]',ContactNo='$_POST[ct]',Gender='$_POST[gn]',password='$_POST[pass]' where Id='$_POST[id]'";
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
echo "<caption>Police Information</caption>";
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
echo "</tr>";
}
echo "</table></center>";
}
}
?>
                  </div>
               </div>
            </div>
           
            
          
            
         </div>
         <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
         <span class="carousel-control-prev-icon" aria-hidden="true"></span>
         <span class="sr-only">Previous</span>
         </a>
         <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
         <span class="carousel-control-next-icon" aria-hidden="true"></span>
         <span class="sr-only">Next</span>
         </a>
      </div>
      <!-- end banner -->
      <!-- about -->
      <div id="about"  class="about">
         <div class="container">
            <div class="row d_flex">
               <div class="col-md-7">
                  <div class="titlepage">
                     <h2>Reports</h2>
                     <span></span>
                     
                              <ul >
                                 <li>
                                    <a class="nav-link" href="pagepolice1.php">Police</a>
                                 </li> 
                                 <li>
                                    <a class="nav-link" href="pageduty1.php">Duty</a>
                                 </li>
                                 <li>
                                    <a class="nav-link" href="pagealloc1.php">Allocation</a>
                                 </li>
                                 <li >
                                    <a class="nav-link" href="pageaccid1.php">Accident</a>
                                 </li>
                              </ul>
                     <a class="read_more">Read More <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
                  </div>
               </div>
               <div class="col-md-5">
                  <div class="about_img">
                     <figure><img src="images/about_img.png" alt="#"/></figure>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- end about -->
      <!-- mobile -->
      <div id="mobile"  class="mobile">
         <div class="container">
            <div class="row d_flex">
               <div class="col-md-5">
                  <div class="mobile_img">
                     <figure><img src="images/mobile.png" alt="#"/></figure>
                  </div>
               </div>
               <div class="col-md-7">
                  <div class="titlepage">
                     <h2>Mobile App Development</h2>
                     <span></span>
                     <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo </p>
                     <a class="read_more">Read More <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- end mobile -->
      <!-- clients -->
      <div class="clients">
         <div class="container">
            <div class="row">
               <div class="col-md-6 offset-md-3">
                  <div class="titlepage">
                     <h2>What is Say clients</h2>
                     <span></span>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-12">
                  <div class="clients_box">
                     <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text.</p>
                  </div>
                  <div class="jonu">
                     <img src="images/cross_img.png" alt="#"/>
                     <h3>Jone due</h3>
                     <strong>(sure there isn't)</strong>
                     <a class="read_more" href="#">Get A Quote</a>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- end clients -->
      <!--  contact -->
      <div id="contact" class="contact">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage">
                     <h2>Request A call back</h2>
                  </div>
               </div>
               <div class="col-md-6 offset-md-3">
                  <form id="request" class="main_form">
                     <div class="row">
                        <div class="col-md-12 ">
                           <input class="contactus" placeholder="Full Name" type="type" name="Full Name"> 
                        </div>
                        <div class="col-md-12">
                           <input class="contactus" placeholder="Phone Number" type="type" name="Phone Number"> 
                        </div>
                        <div class="col-md-12">
                           <input class="contactus" placeholder="Email" type="type" name="Email">                          
                        </div>
                        <div class="col-md-12">
                           <textarea class="contactus" placeholder="Message" type="type" Message="Name">Message </textarea>
                        </div>
                        <div class="col-sm-12">
                           <button class="send_btn">Send</button>
                        </div>
                     </div>
                  </form>
               </div>
            </div>
         </div>
      </div>
      <!-- end contact -->
      <!--  footer -->
      <footer>
         <div class="footer">
            <div class="container">
               <div class="row border-top">
                  <div class="col-md-6 padding_bottom1   ">
                     <h3>Subscribe Now</h3>
                     <form class="footer_form">
                        <input class="enter" placeholder="Enter your email" type="type" name="Enter your email">
                        <button class="submit">submit</button>
                     </form>
                  </div>
                  <div class="col-md-6">
                     <div class="row">
                        <div class="col-md-5 offset-md-1 padding_bottom1">
                           <h3>Links</h3>
                           <ul class="cont">
                              <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do </li>
                           </ul>
                        </div>
                        <div class="col-md-5 offset-md-1">
                           <h3>Contact us</h3>
                           <ul class="cont">
                              <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do </li>
                           </ul>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="copyright">
               <div class="container">
                  <div class="row">
                     <div class="col-md-12">
                        <p>© 2019 All Rights Reserved. <a href="https://html.design/"> Free Html Templates</a></p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </footer>
      <!-- end footer -->
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


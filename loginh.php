

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
                                    <a class="nav-link" href="index1.html">Home</a>
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
<table  align="center" >
<tr>
<th colspan=2><h2>Login</h2></th>
</tr>
<tr height="60">
<td id="op">User_Id</td>
<td ><input type="text" name="id" size="44"></td>
</tr>
<tr height="60">
<td id="op">Password</td>
<td id="uo"><input type="password" name="pass" size="44"></td>
</tr>
<td colspan=2><div id="tp" style="text-align:center" >
<input type="submit" name="login" value=login>
</td>
</tr>

</table>
</form>
</body>
</html>
<?php
if(isset($_POST['login']))
{
    if($_POST['id']=="admin" && $_POST['pass']=="admin")
    header("location:http://localhost/Fieldwork/index1.html");
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
            header("location:http://localhost/Fieldwork/index2.html");
        }
        else
        echo "<center>";
        echo "invalid username or password";
        echo "</center>";
        
    }
    

}
?>



   </body>
</html>

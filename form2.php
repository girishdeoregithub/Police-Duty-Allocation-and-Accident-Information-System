<html>

<body>
<?php
if(isset($_POST['id'],$_POST['pass'])){
$id = $_POST['id'];
$pass = $_POST['pass'];
?>
<table border"2" cellpadding="5" align="center">
  <tbody>
    <tr> <td><label>Id</lable></td>
         <td><?php echo $id; ?></td>  </tr>

   <tr> <td><label>PAssword</lable></td>
         <td><?php echo $pass; ?></td>  </tr>
</tbody>

</table>
<?php }else{ ?>
<table> 
<tbody>
<tr>
<td>fjfrjrj</td>
</tr>
</tbody>
</table>
<?php } ?>
</body>
</html>
<?php
session_start();
include('include/dbconfig.php');

if(strlen($_SESSION['alogin'])==0)
  { 
header('location:index.php');
}
else{

 ?>
<script language="javascript" type="text/javascript">
function f2()
{
window.close();
}ser
function f3()
{
window.print(); 
}
</script>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Complainant Profile</title>
<link href="style.css" rel="stylesheet" type="text/css" />
<link href="anuj.css" rel="stylesheet" type="text/css">
</head>
<body>

<div style="margin-left:50px;">
 <form name="updateticket" id="updateticket" method="post"> 
<table width="100%" border="0" cellspacing="0" cellpadding="0">
<?php 

$ret1=mysqli_query($bd, "select * FROM complainant where id='".$_GET['uid']."'");
while($row=mysqli_fetch_array($ret1))
{
?>

    
  
		
    <tr>
      <td colspan="2"><b><?php echo $row['username'];?>'s profile</b></td>
      
    </tr>
    
    
    <tr>
      <td  >&nbsp;</td>
      <td >&nbsp;</td>
    </tr>
    <tr height="50">
      <td><b>Reg Date:</b></td>
      <td><?php echo htmlentities($row['regDate']); ?></td>
    </tr>
    <tr height="50">
      <td><b>Complainant's Email:</b></td>
      <td><?php echo htmlentities($row['email']); ?></td>
    </tr>


      <tr height="50">
      <td><b>Complainant's Contact no:</b></td>
      <td><?php echo htmlentities($row['contactNo']); ?></td>
    </tr>
    


        <tr height="50">
      <td><b>Address:</b></td>
      <td><?php echo htmlentities($row['address']); ?></td>
    </tr>



        <tr height="50">
      <td><b>Region:</b></td>
      <td><?php echo htmlentities($row['State']); ?></td>
    </tr>


        <tr height="50">
      <td><b>Country:</b></td>
      <td><?php echo htmlentities($row['country']); ?></td>
    </tr>


        <tr height="50">
      <td><b>Pincode:</b></td>
      <td><?php echo htmlentities($row['pincode']); ?></td>
    </tr>  


        <tr height="50">
      <td><b>Last Updation:</b></td>
      <td><?php echo htmlentities($row['updationDate']); ?></td>
    </tr>
     <tr height="50">
      <td><b>Status:</b></td>
      <td><?php if($row['status']==1)
      { echo "Active";
} else{
  echo "Not active";
}
        ?></td>
    </tr>
    
    <tr>
  
      <td colspan="2">   
      <input name="Submit2" type="submit" class="txtbox4" value="Close this window " onClick="return f2();" style="cursor: pointer;"  /></td>
    </tr>
   
    <?php } 

 
    ?>
 
</table>
 </form>
</div>

</body>
</html>

     <?php } ?>
<?php
session_start();
include("includes/dbconfig.php");
$_SESSION['login']=="";
date_default_timezone_set('Africa/Nairobi');
$ldate=date( 'd-m-Y h:i:s A', time () );
mysqli_query($bd, "UPDATE userlog  SET logout = '$ldate' WHERE username = '".$_SESSION['login']."' ORDER BY id DESC LIMIT 1");
session_unset();

?>
<script language="javascript">
document.location="index.php";
</script>
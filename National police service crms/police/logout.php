<?php
session_start();
$_SESSION['login']=="";
session_unset();
//session_destroy();
$_SESSION['errmsg']="You have successfully logged out";
?>
<script language="javascript">
document.location="index.php";
</script>

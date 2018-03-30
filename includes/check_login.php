<?php
session_start();
/*print_r($_SESSION);*/
//if($_SESSION['admin_user_login']==''){
	if($_SESSION['pub_user_login']==''){

echo '<script>window.location="login.php";</script>';
exit();
}
?>
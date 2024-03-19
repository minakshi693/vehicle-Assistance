<?php
//session_start();
//print "hi ".$_SESSION['uid'];
if($_SESSION['id']=="")
{
header('location:index.php');
}
?>
<?php
@session_start();
    if($_SESSION['flag']==1)
{
}
else
{
	header("location:login.php");
}
include_once("../configuration/configuration.php");
require_once '../connection/connection.php';
$page = NULL;
if(isset($_GET['page']))
{
	$page = $_GET['page'];
	$pageName=$_GET['pageName'];
}
?>

<?php 
if($page == NULL)
{
	$page = "home";
	$pageName="index.php";
	include_once('layout/masterLayout.php');
}
else
{
	include_once('layout/masterLayout.php');
}
?>
</div>
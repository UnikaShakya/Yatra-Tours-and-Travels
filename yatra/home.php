<?php include_once 'configuration/configuration.php'; ?>
<?php
$page = NULL;
if(isset($_GET['pageName']))
{
  
  $page = $_GET['page'];
  $pageName=$_GET['pageName'];
}
elseif(isset($_GET['page']))
{
  $pageName ="pages" ;
  $page=$_GET['page'].'.php';
}
?>

<?php 
if($page == NULL)
{
  $pageName="pages";
  $page="home.php";
}
else
{
}
?>
<?php include_once('common/header/header.php') ?>
<body>
<?php include_once('common/navbar/navbar.php') ?> 
<?php include_once('common/footer/footer.php') ?>  
</body>
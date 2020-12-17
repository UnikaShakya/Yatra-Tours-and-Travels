<?php 
$table = $_SESSION['table'];
if (isset($_GET['pageno'])) {
    $pageno = $_GET['pageno'];
} else {
    $pageno = 1;
}
$no_of_records_per_page = 6;
$offset = ($pageno-1) * $no_of_records_per_page;

$total_pages_sql = "SELECT COUNT(*) FROM $table";
$res = mysqli_query($con,$total_pages_sql);
$total_rows = mysqli_fetch_array($res)[0];
$total_pages = ceil($total_rows / $no_of_records_per_page);

$sql = "SELECT * FROM $table LIMIT $offset, $no_of_records_per_page";
$res_data = mysqli_query($con,$sql);
$_SESSION['resultData'] = $res_data;
?>
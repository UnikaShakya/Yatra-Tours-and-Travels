<html>
<head>
</head>
<body>
<?php
$target_dir="images/";
$target_file=$target_dir.basename($_FILES[file to upload]['name']);
if(move_uploaded_file($_FILES["uploadfile"]["temp_name"],$target_file))
{
	echo"The file".basename($_FILES["uploadfile"]["name"])."has been uploaded";
}
else

{
	echo"Sorry,There was an error uploading your file";
}
?>
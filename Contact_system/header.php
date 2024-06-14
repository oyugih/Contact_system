<?php
require_once("connection.php");
$query = mysqli_query($conn , "SELECT * FROM contacts ORDER BY id DESC");
$total_records = mysqli_num_rows($query);
?>

<!DOCTYPE html>
<html>
<head>
  <link type="text/css" rel="stylesheet" href="src/css/style.css"/>
  <link rel="stylesheet" href="src/css/bootstrap.min.css">
  <script src="src/js/jquery.js"></script>
  <script src="src/js/bootstrap.min.js"></script>
<style>
body{
	font-family: trebuchet ms;
}
.error{
	margin: 4px 0 8px 0;
	font-size: 10px;
	color: #f71111;
}
table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

td, th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
}


</style>
</head>
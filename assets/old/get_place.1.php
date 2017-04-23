
<?php

$dbc = mysqli_connect('localhost','root','','myapp') or die('Error connecting to MySQL server');
$id = $_POST['id'];
$query = "SELECT * FROM place WHERE assets_id = '{$id}'";
$result = mysqli_query($dbc,$query) or die('Error querying database.');
$row = mysqli_fetch_array($result);
$placeid = $row['place_id'];

echo '<img src="img/',$placeid,'.jpg">'

?>
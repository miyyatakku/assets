
<?php

$dbc = mysqli_connect('localhost','root','','myapp') or die('Error connecting to MySQL server');
$assetsid = $_POST['assetsid'];
$placeid = $_POST['placeid'];
$query = "UPDATE place SET place_id = '{$placeid}' WHERE assets_id = '{$assetsid}'";
$result = mysqli_query($dbc,$query) or die('Error querying database.');

echo $placeid
?>
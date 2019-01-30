<?php
$id1;
session_start();
include("config.php");
if (!isset($_SESSION['username'])) {
header('Location:index'); 
} else {
$email=$_SESSION['username'];
}

$qry="SELECT id FROM tbl_users where email='$email'";
$res=mysql_query($qry);
while($row=mysql_fetch_array($res))
{
 $id1=$row['id'];
}



?>
<?php
if(isset($_POST["export"]))
{

// output headers so that the file is downloaded rather than displayed
header('Content-Type: text/csv; charset=utf-8');
header('Content-Disposition: attachment; filename=user_data.csv');

// create a file pointer connected to the output stream
$output = fopen('php://output', 'w');

// output the column headings
fputcsv($output, array('Id', 'Email', 'Status'));

// fetch the data
$query = "SELECT id, email, status FROM user_data where user_id='$id1' ORDER BY id ASC";
$result= mysql_query($query);
// loop over the rows, outputting them
while ($row = mysql_fetch_assoc($result))
{
  fputcsv($output,$row);
} 
	fclose($output);
}


?>
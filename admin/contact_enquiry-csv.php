<?php
include 'inc/config.php';


$now = gmdate("D, d M Y H:i:s");
header('Content-Type: text/csv; charset=utf-8');  
header('Content-Disposition: attachment; filename=Contact_enquiry-list.csv');  
$output = fopen("php://output", "w");  
fputcsv($output, array('SL','Name','Email','Phone','Subject','Message'));
$i=1;  
$statement = $pdo->prepare("SELECT * FROM tbl_contact");
$statement->execute();
$result = $statement->fetchAll(PDO::FETCH_ASSOC);							
foreach ($result as $row) {
	fputcsv($output, array($i,$row['fullname'],$row['email'],$row['phone'],$row['subject'],$row['message']));

	$i++;
} 
fclose($output);
?>
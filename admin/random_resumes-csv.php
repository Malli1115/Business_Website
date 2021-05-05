<?php
include 'inc/config.php';


$now = gmdate("D, d M Y H:i:s");
header('Content-Type: text/csv; charset=utf-8');  
header('Content-Disposition: attachment; filename=Random_Resume-list.csv');  
$output = fopen("php://output", "w");  
fputcsv($output, array('SL','Role','Name','Email','Phone','Address','Experience (Yrs)','Resume'));
$i=1;  
$statement = $pdo->prepare("SELECT * FROM job_resume WHERE career_id='' ");
$statement->execute();
$result = $statement->fetchAll(PDO::FETCH_ASSOC);							
foreach ($result as $row) {
	fputcsv($output, array($i,$row['job_title'],$row['ftname'].' '.$row['ltname'],$row['email'],$row['phone'],$row['state'].', '.$row['country'],
		$row['experience'],$row['resume']));

	$i++;
} 
fclose($output);
?>
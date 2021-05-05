<?php
include 'inc/config.php';
$cid=$_GET['id'];


$now = gmdate("D, d M Y H:i:s");
header('Content-Type: text/csv; charset=utf-8');  
header('Content-Disposition: attachment; filename=Resume_list.csv');  
$output = fopen("php://output", "w");  
fputcsv($output, array('SL','Job id','Job title','Name','Email','Phone','Address','Resume'));
$i=1;  
$statement = $pdo->prepare("SELECT * FROM job_resume WHERE career_id=?");
$statement->execute(array($cid));
$result = $statement->fetchAll(PDO::FETCH_ASSOC);							
foreach ($result as $row) {
	fputcsv($output, array($i,$row['job_id'],$row['job_title'],$row['ftname'].' '.$row['ltname'],$row['email'],$row['phone'],$row['state'].', '.$row['country'],$row['resume']));

	$i++;
} 
fclose($output);
?>
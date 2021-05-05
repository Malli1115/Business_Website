<?php require_once('header.php'); 

$cid=$_GET['id'];

$statement = $pdo->prepare("SELECT * FROM job_resume INNER JOIN tbl_careers WHERE tbl_careers.id=job_resume.career_id AND career_id=? ");
							$statement->execute(array($cid));
							$result = $statement->fetchAll(PDO::FETCH_ASSOC);							
							foreach ($result as $row) {

                                 $jid    = $row['job_id'];
                                 $jtitle = $row['job_title'];
                                 $location= $row['location'];
                              
							}

?>

<section class="content-header">
	<div class="content-header-left">
		<h3><?php echo $jid; ?> - <span style="color: #f36523"><?php echo $jtitle; ?></span></h3>
		<h4 style="color: #f36523"><?php echo $location ?></h4>
	</div>
	<div class="content-header-right">
		<!-- <a href="career-add.php" class="btn btn-primary btn-sm">Add Jobs</a> -->
		<a href="resumes-csv.php?id=<?php echo $cid ?>" class="btn btn-primary btn-sm">Export as CSV</a>
	</div>
</section>

<section class="content">
	<div class="row">
		<div class="col-md-12">
			<div class="box box-info">
				<div class="box-body table-responsive">
					<table id="example1" class="table table-bordered table-striped">
						<thead>
							<tr>
								<th width="30">SL</th>
								<th width="150">Name</th>
								<th width="150">Email</th>
								<th width="100">Phone</th>
								<th width="100">Location</th>								
								<th width="200">Resume</th>
								<th width="100">Apply date</th>
								<th width="100">Action</th>
							</tr>
						</thead>
						<tbody>
							<?php
							$i=0;
							$statement = $pdo->prepare(" SELECT * FROM job_resume WHERE career_id=? ");
							$statement->execute(array($cid));
							$result = $statement->fetchAll(PDO::FETCH_ASSOC);							
							foreach ($result as $row) {
								             
								$i++;
								?>
								<tr>
									<td><?php echo $i; ?></td>
									<td><?php echo $row['ftname'].' '.$row['ltname']; ?></td>
									<td><?php echo $row['email']; ?></td>
									<td><?php echo $row['phone']; ?></td>
									<td><?php echo $row['state']; ?>, <br>
									    <?php echo $row['country']; ?>.</td>
									<td><?php echo $row['resume']; ?> <br>
									    <a href="../cv/<?php echo $row['resume']; ?>" target="_blank">View | Download</a></td>
									<td><?php 
									   $created=date_create($row['created_at']);
                                       $da=date_format($created,'m-d-Y');
                                       echo $da; 
                                       ?></td>
									<td>		
										<!-- <a href="resumes-view.php?id=<?php echo $row['id']; ?>" class="btn btn-primary btn-xs">View</a> -->
										<a href="#" class="btn btn-danger btn-xs" data-href="resumes-delete.php?id=<?php echo $row['id']; ?>" data-toggle="modal" data-target="#confirm-delete">Delete</a>  
									</td>
								</tr>
								<?php
							}
							?>							
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>


</section>


<div class="modal fade" id="confirm-delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel">Delete Confirmation</h4>
            </div>
            <div class="modal-body">
                <p>Are you sure want to delete this item?</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                <a class="btn btn-danger btn-ok">Delete</a>
            </div>
        </div>
    </div>
</div>


<?php require_once('footer.php'); ?>
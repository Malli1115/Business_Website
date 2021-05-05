<?php require_once('header.php'); ?>

<section class="content-header">
	<div class="content-header-left">
		<h1>View Jobs</h1>
	</div>
	<div class="content-header-right">
		<a href="career-add.php" class="btn btn-primary btn-sm">Add Jobs</a>
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
								<th>Photo</th>
								<th width="100">Job id</th>
								<th width="150">Job Title</th>
								<th width="100">Category</th>
								<th width="100">Location</th>
								<th width="150">Date</th>
								<th width="150">Action</th>
							</tr>
						</thead>
						<tbody>
							<?php
							$i=0;
							$statement = $pdo->prepare(" SELECT * FROM tbl_careers ");
							$statement->execute();
							$result = $statement->fetchAll(PDO::FETCH_ASSOC);							
							foreach ($result as $row) {
								              $ending = $row['ending_dt'];
								              $date1 = $ending; 
                                              $date2 = date("Y-m-d");                                                
                                              $dateTimestamp1 = strtotime($date1); 
                                              $dateTimestamp2 = strtotime($date2);
								$i++;
								?>
								<tr class="<?php if($dateTimestamp1 < $dateTimestamp2) echo 'bg-r'; ?>">
									<td><?php echo $i; ?></td>
									<td style="width:130px;"><img src="../assets/uploads/<?php echo $row['photo']; ?>" alt="<?php echo $row['name']; ?>" style="width:120px;"></td>
									<td><?php echo $row['job_id']; ?></td>
									<td><?php echo $row['job_title']; ?></td>
									<td><?php echo $row['job_category']; ?></td>
									<td><?php echo $row['location']; ?></td>
									<td><?php echo $row['starting_dt'].' <br> <b>to</b> <br> '.$row['ending_dt']; ?></td>
									<td>
									    <a href="resumes.php?id=<?php echo $row['id']; ?>" class="btn btn-success btn-xs">View resumes</a>			
										<a href="career-edit.php?id=<?php echo $row['id']; ?>" class="btn btn-primary btn-xs">Edit</a>
										<a href="#" class="btn btn-danger btn-xs" data-href="career-delete.php?id=<?php echo $row['id']; ?>" data-toggle="modal" data-target="#confirm-delete">Delete</a>  
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
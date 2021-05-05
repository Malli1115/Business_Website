<?php require_once('header.php'); ?>

<?php
if(isset($_POST['form1'])) {
	$valid = 1;

	if(empty($_POST['job_id'])) {
		$valid = 0;
		$error_message .= 'Job id can not be empty<br>';
	}

	if(empty($_POST['job_title'])) {
		$valid = 0;
		$error_message .= 'Job title can not be empty<br>';
	}

	if(empty($_POST['job_category'])) {
		$valid = 0;
		$error_message .= 'job Category Name can not be empty<br>';
	}

	
    $path = $_FILES['photo']['name'];
    $path_tmp = $_FILES['photo']['tmp_name'];

    if($path!='') {
        $ext = pathinfo( $path, PATHINFO_EXTENSION );
        $file_name = basename( $path, '.' . $ext );
        if( $ext!='jpg' && $ext!='png' && $ext!='jpeg' && $ext!='gif' ) {
            $valid = 0;
            $error_message .= 'You must have to upload jpg, jpeg, gif or png file<br>';
        }
    }

    if(empty($_POST['description'])) {
		$valid = 0;
		$error_message .= 'description can not be empty<br>';
	}

	if($valid == 1) {

		if($path == '') {
			$statement = $pdo->prepare("UPDATE tbl_careers SET job_id=?, job_title=?, job_category=?, location=?, starting_dt=?, ending_dt=?, posted_by=?, description=? WHERE id=?");
    		$statement->execute(array($_POST['job_id'],$_POST['job_title'],$_POST['job_category'],$_POST['location'],$_POST['starting_dt'],$_POST['ending_dt'],$_POST['posted_by'],$_POST['description'],$_REQUEST['id']));
		} else {

			unlink('../assets/uploads/'.$_POST['current_photo']);

			$final_name = 'careers-'.$_REQUEST['id'].'.'.$ext;
        	move_uploaded_file( $path_tmp, '../assets/uploads/'.$final_name );

        	$statement = $pdo->prepare("UPDATE tbl_careers SET job_id=?, job_title=?, job_category=?, photo=?, location=?, starting_dt=?, ending_dt=?, posted_by=?, description=? WHERE id=?");
    		$statement->execute(array($_POST['job_id'],$_POST['job_title'],$_POST['job_category'],$final_name,$_POST['location'],$_POST['starting_dt'],$_POST['ending_dt'],$_POST['posted_by'],$_POST['description'],$_REQUEST['id']));
		}	   

	    $success_message = 'Careers is updated successfully!';
	}
}
?>

<?php
if(!isset($_REQUEST['id'])) {
	header('location: logout.php');
	exit;
} else {
	// Check the id is valid or not
	$statement = $pdo->prepare("SELECT * FROM tbl_careers WHERE id=?");
	$statement->execute(array($_REQUEST['id']));
	$total = $statement->rowCount();
	$result = $statement->fetchAll(PDO::FETCH_ASSOC);
	if( $total == 0 ) {
		header('location: logout.php');
		exit;
	}
}
?>

<section class="content-header">
	<div class="content-header-left">
		<h1>Edit Jobs</h1>
	</div>
	<div class="content-header-right">
		<a href="career.php" class="btn btn-primary btn-sm">View All</a>
	</div>
</section>

<?php
$statement = $pdo->prepare("SELECT * FROM tbl_careers WHERE id=?");
$statement->execute(array($_REQUEST['id']));
$result = $statement->fetchAll(PDO::FETCH_ASSOC);
foreach ($result as $row) {
	$job_id        = $row['job_id'];
	$job_title     = $row['job_title'];
	$job_category  = $row['job_category'];
	$photo         = $row['photo'];
	$location      = $row['location'];
	$starting_dt   = $row['starting_dt'];
	$ending_dt     = $row['ending_dt'];
	$posted_by     = $row['posted_by'];
	$description   = $row['description'];
}
?>

<section class="content">

	<div class="row">
		<div class="col-md-12">

			<?php if($error_message): ?>
			<div class="callout callout-danger">
				<p>
				<?php echo $error_message; ?>
				</p>
			</div>
			<?php endif; ?>

			<?php if($success_message): ?>
			<div class="callout callout-success">
				<p><?php echo $success_message; ?></p>
			</div>
			<?php endif; ?>

			<form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
				<input type="hidden" name="current_photo" value="<?php echo $photo; ?>">
				<div class="box box-info">
					<div class="box-body">
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">Job id <span>*</span></label>
							<div class="col-sm-6">
								<input type="text" autocomplete="off" class="form-control" name="job_id" value="<?php echo $job_id; ?>" required>
							</div>
						</div>
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">Job title <span>*</span></label>
							<div class="col-sm-6">
								<input type="text" autocomplete="off" class="form-control" name="job_title" value="<?php echo $job_title; ?>" required>
							</div>
						</div>
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">Job category <span>*</span></label>
							<div class="col-sm-6">
								 <select class="form-control select2" name="job_category" required>
				            		<option value="<?php echo $job_category; ?>" <?php echo 'selected';?> >
				            			<?php echo $job_category; ?></option>
									<option value="Full time">Full time</option>
						            <option value="Internship">Internship</option>
						            <option value="Freelance">Freelance</option>	
				            	</select>
							</div>
						</div>
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">Existing Photo</label>
							<div class="col-sm-9" style="padding-top:5px">
								<img src="../assets/uploads/<?php echo $photo; ?>" alt="Career Photo" style="width:180px;">
							</div>
						</div>
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">Photo </label>
							<div class="col-sm-6" style="padding-top:5px">
								<input type="file" name="photo">(Only jpg, jpeg, gif and png are allowed)
							</div>
						</div>
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">Location <span>*</span></label>
							<div class="col-sm-6">
								<input type="text" autocomplete="off" class="form-control" name="location" value="<?php echo $location; ?>" required>
							</div>
						</div>
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">Start date <span>*</span></label>
							<div class="col-sm-6">
								<input type="date" autocomplete="off" class="form-control" name="starting_dt" value="<?php echo $starting_dt; ?>" required>
							</div>
						</div>
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">End date <span>*</span></label>
							<div class="col-sm-6">
								<input type="date" autocomplete="off" class="form-control" name="ending_dt" value="<?php echo $ending_dt; ?>" required>
							</div>
						</div>
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">Posted by <span>*</span></label>
							<div class="col-sm-6">
								<input type="text" autocomplete="off" class="form-control" name="posted_by" value="<?php echo $posted_by; ?>" required>
							</div>
						</div>						
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">Description <span>*</span></label>
							<div class="col-sm-6">
								<textarea class="form-control" name="description" id="editor1" required><?php echo $description; ?></textarea>
							</div>
						</div>			
						<div class="form-group">
							<label for="" class="col-sm-2 control-label"></label>
							<div class="col-sm-6">
								<button type="submit" class="btn btn-success pull-left" name="form1">Submit</button>
							</div>
						</div>
					</div>
				</div>
			</form>
		</div>
	</div>

</section>

<?php require_once('footer.php'); ?>
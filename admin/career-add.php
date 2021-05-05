<?php require_once('header.php'); ?>

<?php
if(isset($_POST['form1'])) {
	$valid = 1;

	if(empty($_POST['job_id'])) {
		$valid = 0;
		$error_message .= 'job id can not be empty<br>';
	}

	if(empty($_POST['job_title'])) {
		$valid = 0;
		$error_message .= 'job title can not be empty<br>';
	}

	if(empty($_POST['job_category'])) {
		$valid = 0;
		$error_message .= 'job category Name can not be empty<br>';
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
    } else {
    	$valid = 0;
        $error_message .= 'You must have to select a photo<br>';
    }

    if(empty($_POST['description'])) {
		$valid = 0;
		$error_message .= 'description can not be empty<br>';
	}

	if($valid == 1) {

		// getting auto increment id
		$statement = $pdo->prepare("SHOW TABLE STATUS LIKE 'tbl_careers'");
		$statement->execute();
		$result = $statement->fetchAll();
		foreach($result as $row) {
			$ai_id=$row[10];
		}


		$final_name = 'careers-'.$ai_id.'.'.$ext;
        move_uploaded_file( $path_tmp, '../assets/uploads/'.$final_name );

	
		$statement = $pdo->prepare("INSERT INTO tbl_careers (job_id,job_title,job_category,location,starting_dt,ending_dt,posted_by,description,photo) VALUES (?,?,?,?,?,?,?,?,?)");
		$statement->execute(array($_POST['job_id'],$_POST['job_title'],$_POST['job_category'],$_POST['location'],$_POST['starting_dt'],$_POST['ending_dt'],$_POST['posted_by'],$_POST['description'],$final_name));
			
		$success_message = 'Careers is added successfully!';

		unset($_POST['job_title']);
		unset($_POST['location']);
		unset($_POST['description']);
		unset($_POST['job_category']);
		unset($_POST['job_id']);
		unset($_POST['starting_dt']);
		unset($_POST['ending_dt']);
		unset($_POST['posted_by']);
	}
}
?>

<section class="content-header">
	<div class="content-header-left">
		<h1>Add Jobs</h1>
	</div>
	<div class="content-header-right">
		<a href="career.php" class="btn btn-primary btn-sm">View All</a>
	</div>
</section>


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
				<div class="box box-info">
					<div class="box-body">
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">Job id <span>*</span></label>
							<div class="col-sm-6">
								<input type="text" autocomplete="off" class="form-control" name="job_id" value="<?php if(isset($_POST['job_id'])){echo $_POST['job_id'];} ?>" required>
							</div>
						</div>
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">Job title <span>*</span></label>
							<div class="col-sm-6">
								<input type="text" autocomplete="off" class="form-control" name="job_title" value="<?php if(isset($_POST['job_title'])){echo $_POST['job_title'];} ?>" required>
							</div>
						</div>
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">Job category <span>*</span></label>
							<div class="col-sm-6">
                               <select class="form-control select2" name="job_category" required>
				            		<option value="">Select a category</option>
									<option value="Full time">Full time</option>
						            <option value="Internship">Internship</option>
						            <option value="Freelance">Freelance</option>	
				            	</select>
							</div>
						</div>
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">Location <span>*</span></label>
							<div class="col-sm-6">
								<input type="text" autocomplete="off" class="form-control" name="location" value="<?php if(isset($_POST['location'])){echo $_POST['location'];} ?>" required>
							</div>
						</div>
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">Start date <span>*</span></label>
							<div class="col-sm-6">
								<input type="date" autocomplete="off" class="form-control" name="starting_dt" value="<?php if(isset($_POST['starting_dt'])){echo $_POST['starting_dt'];} ?>" required>
							</div>
						</div>
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">End date <span>*</span></label>
							<div class="col-sm-6">
								<input type="date" autocomplete="off" class="form-control" name="ending_dt" value="<?php if(isset($_POST['ending_dt'])){echo $_POST['ending_dt'];} ?>" required>
							</div>
						</div>
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">Posted by <span>*</span></label>
							<div class="col-sm-6">
								<input type="text" autocomplete="off" class="form-control" name="posted_by" value="<?php if(isset($_POST['posted_by'])){echo $_POST['posted_by'];} ?>" required>
							</div>
						</div>
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">Photo <span>*</span></label>
							<div class="col-sm-9" style="padding-top:5px">
								<input type="file" name="photo">(Only jpg, jpeg, gif and png are allowed)
							</div>
						</div>	
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">Description <span>*</span></label>
							<div class="col-sm-6">
								<textarea class="form-control" name="description" id="editor1" required></textarea>
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
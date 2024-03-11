<?php session_start();
 ?>
 <!DOCTYPE html>
<html lang="en">
	<head>
		<link rel="stylesheet" href="assets/css/bootstrap.css">
		<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet">
		<script src="assets/js/jquery-3.2.0.min.js"></script>
		<link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">
		<link href="https://fonts.googleapis.com/css?family=PT+Sans+Narrow" rel="stylesheet">
		<script src="assets/js/bootstrap.js"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css"/>
		<link rel="stylesheet" href="assets/css/style.css">
	
        <style>
    body {
        background-color: #f8f8f8; /* Set the background color of the page */
    }

    .container-fluid {
         /* Add some top margin to center the form */
    }

    .form-container {
        border: 1px solid #000; /* Add a border to the form */
        padding: 20px; /* Add some padding to the form */
        background-color: aqua; /* Set a different background color for the form */
        border-radius: 5px; /* Add rounded corners to the form */
        align-items: center;
    }

    .form-container .form-group {
        margin-bottom: 20px; /* Add some space between form elements */
    }

    .form-container label {
        font-weight: bold; /* Make labels bold */
    }

    .form-container select {
        width: 100%; /* Make select elements full width */
    }
</style>

    </head>
<body>
<?php 
	$usname=$_SESSION['username'];
	include('dbconnect.php');
	$query="SELECT * FROM internships WHERE employer='$usname'";
	$result=mysqli_query($conn,$query);
		
?>
	<nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="./">Internshala</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li><a href="#">Logged in as <?php echo $usname; ?></a></li>
                <li><a href="add_post.php">Add Post</a></li> <!-- Add this line -->
                <li><a href-"">Previous Post</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="logout" role="button"><span class="glyphicon glyphicon-tasks"></span> Log Out</a></li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>
<div class="container-fluid">
	<div class="row">
		<div class="col-sm-4">
		<h2 class="text-center"><strong>Add Post </strong></h2>
			<form role="form" action="insert_internship.php" method="post">
			<input type="hidden" name="id" value="<?php echo $row['id']; ?>">
			<div class="form-group">
					<label>Employer: </label>
					<input type="text" name="employer" class="form-control" value="<?php echo $usname ?>">
				</div>
				<div class="form-group">
					<label>Title: </label>
					<input type="text" name="title" class="form-control">
				</div>
				<div class="form-group">
                <label for="type">Type:</label>
                <select class="form-control" id="type">
                    <option value="job">Job</option>
                    <option value="internship">Internship</option>
                </select>
            </div>
				<div class="form-group">
					<label>Description: </label>
					<input type="text" name="description" class="form-control">
				</div>
				<div class="form-group">
					<label>Stipend: </label>
					<input type="text" name="stipend" class="form-control">
				</div>
				<div class="form-group">
					<label>Start Date: </label>
					<input type="text" name="start_date" placeholder="YYYY-MM-DD" class="form-control datepicker">
				</div>
				<div class="form-group">
					<label>End Date: </label>
					<input type="text" name="end_date" placeholder="YYYY-MM-DD" class="form-control datepicker">
				</div>
				<button type="submit" name="loginBtn" class="btn btn-primary btn-block">Add Internship</button>
			</form>
		</div>
		
			<?php
	while($row=mysqli_fetch_assoc($result)){}

 ?>
</body>
</html>
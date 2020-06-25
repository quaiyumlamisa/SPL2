<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="../css/bootstrap.min.css">
	<script src="../js/jquery-3.2.1.min.js"></script>
	<script type="text/javascript">

		$(document).ready(function(){
			$("#subjects").change(function(){
				var aid = $("#subjects").val();
				$.ajax({
					url: 't.php',
					method: 'post',
					data: 'ID=' + aid
				}).done(function(courses){
					console.log(courses);
					courses = JSON.parse(courses);
					$('#courses').empty();
					courses.forEach(function(course){
						$('#courses').append('<option>' + course.Course_name + '</option>')
					})
				})
			})
		})
	</script>
</head>
<body>
	<div class="container">
		<h1 class="text-center">Dependent Drop Down list In PHP/MySQL using jQuery & Ajax </h1>
		<hr>
		<div class="row">
		    <div class="col-md-6 col-md-offset-3">
				<form role="form" method="post" action="">
		        	<div class="row">
		                <div class="form-group">
		                    <label for="subjects">Subjects</label>
		                    <select class="form-control" id="subjects" name="subjects">
		                    	<option selected="" disabled="">Select Subject</option>
		                    	<?php 
		                    		require 't.php';
		                    		$subjects = loadAuthors();
		                    		foreach ($subjects as $subject) {
		                    			echo "<option id='".$subject['ID']."' value='".$subject['ID']."'>".$subject['Subject_name']."</option>";
		                    		}
		                    	 ?>
		                    </select>
		                </div>
		            </div>
		            <div class="row">
		                <div class="form-group">
		                    <label for="courses">Courses</label>
		                    <select class="form-control" id="courses" name="courses">
		                    	
		                    </select>
		                </div>
		            </div>
		        </form>
		    </div>
		</div>
	</div>
</body>
</html>
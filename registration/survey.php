
<!DOCTYPE html>
<html>
<head>
	<title>Survey Form</title>
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>
	<div class="container">
		<h2>Survey Form</h2>
		<form method="post" action="submit_survey.php">
			<div class="form-group">
				<label for="name">Name:</label>
				<input type="text" class="form-control" id="name" name="name">
			</div>
			<div class="form-group">
				<label for="age">Age:</label>
				<input type="number" class="form-control" id="age" name="age">
			</div>
			<div class="form-group">
				<label for="gender">Gender:</label>
				<select class="form-control" id="gender" name="gender">
					<option value="male">Male</option>
					<option value="female">Female</option>
					<option value="other">Other</option>
				</select>
			</div>
			<h3>Survey Questions</h3>
			<?php for($i = 1; $i <= 18; $i++) { ?>
				<div class="form-group">
					<label for="question<?php echo $i; ?>">Question <?php echo $i; ?>:</label>
					<div class="radio">
						<label><input type="radio" name="question<?php echo $i; ?>" value="1">Strongly Disagree</label>
					</div>
					<div class="radio">
						<label><input type="radio" name="question<?php echo $i; ?>" value="2">Disagree</label>
					</div>
					<div class="radio">
						<label><input type="radio" name="question<?php echo $i; ?>" value="3">Somewhat Disagree</label>
					</div>
					<div class="radio">
						<label><input type="radio" name="question<?php echo $i; ?>" value="4">Neither Agree nor Disagree</label>
					</div>
					<div class="radio">
						<label><input type="radio" name="question<?php echo $i; ?>" value="5">Somewhat Agree</label>
					</div>
					<div class="radio">
						<label><input type="radio" name="question<?php echo $i; ?>" value="6">Agree</label>
					</div>
					<div class="radio">
						<label><input type="radio" name="question<?php echo $i; ?>" value="7">Strongly Agree</label>
					</div>
				</div>
			<?php } ?>
			<button type="submit" class="btn btn-default">Submit</button>
		</form>
	</div>
</body>
</html>
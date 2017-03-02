<html>
	<head>
	<title>Online-Checker</title>
	<link href="<?=base_url('resources/bootstrap/css/bootstrap.min.css')?>" rel="stylesheet">
	</head>
	<body>
		<div class="container">
			<center><h2><b>Online Checker</b></h2><br>
			<form action="<?=site_url('checker/insertdb')?>" method="POST" onsubmit="return confirm('Are you sure you want to SUBMIT ?');">
					<div class="input-group col-md-4 col-sm-4">
						<span class="input-group-addon" id="basic-addon1">Name</span>
						<input class="form-control" type="text" name="name" required aria-describedby="basic-addon1">
					</div>
					<br><br>
					<div class="input-group col-md-4 col-sm-4">
						<span class="input-group-addon" id="basic-addon2">Roll No.</span>
						<input class="form-control" type="text" name="roll" required aria-describedby="basic-addon2">
					</div>
				<br><br><br>
				<?php
					for($i=1;$i<=30;$i++)
					{
						echo "<div class = 'row'>";
						echo "<div class = 'col-md-offset-3 col-md-1 col-sm-offset-3 col-sm-1'><b>";
						echo $i.". ";
						echo "</div></b>";		
				?>
						<div class = "col-md-1 col-sm-1">
							<input type="radio" name="q<?=$i?>" value="a">a
						</div>
						<div class = "col-md-1 col-sm-1">
							<input type="radio" name="q<?=$i?>" value="b">b
						</div>
						<div class = "col-md-1 col-sm-1">
							<input type="radio" name="q<?=$i?>" value="c">c
						</div>
						<div class = "col-md-1 col-sm-1">
							<input type="radio" name="q<?=$i?>" value="d">d
						</div>
						<br><br>
					</div>
				<?php
					}
				?>
				<br><br>
				<b>Feedback</b><br>
				<div class = "col-md-6 col-md-offset-3 col-sm-6 col-sm-offset-3">
					<textarea class="form-control" name="feedback" required></textarea>
				</div>
				<br><br><br><br><br><br>
				<input type="submit" class="btn btn-primary" value="Submit My Responses"/><br><br>
			</form>
		</div>
		<br><br>
		<hr>
		<br>
		<center>
		Version 1.0
		</center>
		<script src="<?=base_url('resources/bootstrap/js/bootstrap.min.js')?>"></script>
	</body>
</html>
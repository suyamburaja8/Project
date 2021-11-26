<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<title>Laravel</title>
</head>

<body>
	<br>
	<br>
	<div class="container">
		<form method="POST" action="/task">
            {{ csrf_field() }}
			<div class="form-group">
				<label for="name">Name</label>
				<input type="text" class="form-control" name="username" placeholder="Enter Name" required> </div>
			<div class="form-group">
				<label for="exampleInputEmail1">Email</label>
				<input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" required> </div>
			<div class="form-group">
				<label for="subject">Subject</label>
				<input type="text" class="form-control" name="subject" placeholder="Enter Subject" required> </div>
			<div class="form-group">
				<label for="message">Message</label>
				<input type="text" class="form-control" name="message" placeholder="Enter Message" required> </div>
			<div class="form-group">
				<label for="message">Date</label>
				<input type="date" class="form-control" name="date" value="<?php echo date('Y-m-d'); ?>"> </div>
			<div class="form-group">
				<label for="time">Time</label>
				<input type="time" onchange="onTimeChange()" id="timeInput" name="time" /> </div>
			<div class="form-group">
				<label for="exampleFormControlFile1">File</label>
				<input type="file" name="files" class="form-control-file" id="exampleFormControlFile1"> </div>
			<button type="submit" class="btn btn-primary">Submit</button>
		</form>
	</div>
	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script>
	var inputEle = document.getElementById('timeInput');

	function onTimeChange() {
		var timeSplit = inputEle.value.split(':'),
			hours,
			minutes,
			meridian;
		hours = timeSplit[0];
		minutes = timeSplit[1];
		if(hours > 12) {
			meridian = 'PM';
			hours -= 12;
		} else if(hours < 12) {
			meridian = 'AM';
			if(hours == 0) {
				hours = 12;
			}
		} else {
			meridian = 'PM';
		}
	}
	</script>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>
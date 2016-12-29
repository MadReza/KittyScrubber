<!DOCTYPE html>
<html lang="en">
<head>
	<title>Page</title>

<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="css/style.css">

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<!-- Left and Right arrow key page changer -->
<script>
	page_id = 1; //get this to be the current page

	function leftArrowPressed() {
	    document.location = 'jratx.ga/scrubby/page' + page_id - 1;
	}

	function rightArrowPressed() {
	    document.location = 'jratx.ga/scrubby/page' + page_id + 1;
	}

	document.onkeydown = function(evt) {
	    evt = evt || window.event;
	    switch (evt.keyCode) {
	        case 37:
	            leftArrowPressed();
	            break;
	        case 39:
	            rightArrowPressed();
	            break;
	    }
	};
</script>

</head>
<body>

	<div class="container-fluid">
		<div class="row">
			<div class="col-xs-12">
				<div class="col-xs-10 text-right">
					<button type="button" class="btn btn-info btn-circle btn-lg"><i class="glyphicon glyphicon-chevron-left"></i></button>
				</div>
				<div class="col-xs-2">
					<button type="button" class="btn btn-info btn-circle btn-lg"><i class="glyphicon glyphicon-chevron-right"></i></button>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-12 text-center">
				<img src="img/poster_2.jpg" class="current_page_content">
			</div>
		</div>
		<div class="row">
			<div class="col-xs-12 text-center">
				<button class="resource_button">Report</button>
				<button class="resource_button">Bookmark</button>
				<button class="resource_button">Subscribe</button>
			</div>
		</div>
	</div>

</body>
</html>
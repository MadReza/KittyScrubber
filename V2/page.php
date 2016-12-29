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
			
			
		</div>
		<div class="row">
			<div class="col-xs-1">
				<button>Backwards</button>
			</div>
			<div class="col-xs-10">
				<img src="img/poster_2.jpg" class="current_page_content">
			</div>
			<div class="col-xs-1">
				<button>Forwards</button>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-12">
				<button>Report</button>
				<button>Bookmark</button>
				<button>Subscribe</button>
			</div>
		</div>
	</div>

</body>
</html>
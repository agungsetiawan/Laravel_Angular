<!DOCTYPE html>
<html ng-app="AgungApp">
<head>
	<title>Laravel - Angular</title>
	<script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.2.8/angular.min.js"></script>
	<script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.2.10/angular-route.js"></script>
	<script src="js/app.js"></script>
	<script src="js/controller.js"></script>
	<script src="js/commentService.js"></script>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<header>
		<div id="top">
			<h2><a href="http://agung-setiawan.com">Agung-Setiawan.com</a></h2>
		</div>
	</header>

	<div id="main">
		<div ng-view></div>
	</div>

	<div id="footer">
		<a href="http://agung-setiawan.com">Tutorial by Agung-Setiawan.com</a>
	</div>
</body>
</html>
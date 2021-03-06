var AgungApp = angular.module('AgungApp', ['ngRoute','commentService','controller']);

		// configure our routes
	AgungApp.config(function($routeProvider) {
		$routeProvider

			// route for the home page
			.when('/', {
				templateUrl : 'pages/home.php',
				controller  : 'listPageController'
			})

			// route for the about page
			.when('/edit/:id', {
				templateUrl : 'pages/edit.php',
				controller  : 'editPageController'
			})

			// route for the contact page
			.when('/create', {
				templateUrl : 'pages/create.php',
				controller  : 'createPageController'
			})
			.otherwise({redirectTo: '/'});
	});

	// scotchApp.factory("mydata",function(){
	// 	return {};
	// });

	// // create the controller and inject Angular's $scope
	// scotchApp.controller('mainController', function($scope,$location,mydata,$routeParams) {
	// 	// create a message to display in our view
	// 	$scope.message = 'Everyone come and see how good I look!';
	// 	// $scope.mydata=mydata;

	// 	// $scope.edit=function($id){

	// 	// 	$scope.mydata.id=$id
	// 	// 	$scope.message = 'Edited'+' '+$id;
	// 	// 	console.log($id);
	// 	// 	$location.path('/edit');
	// 	// }

	// 	$scope.id=$routeParams.id;
	// 	console.log($routeParams.id);
	// });

	// scotchApp.controller('editController', function($scope,$routeParams) {
	// 	$scope.id=$routeParams.id;
	// 	$scope.message = 'Look! I am an EDIT page.';
	// });

	// scotchApp.controller('contactController', function($scope) {
	// 	$scope.message = 'Contact us! JK. This is just a demo.';
	// });
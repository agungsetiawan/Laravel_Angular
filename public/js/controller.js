angular.module('controller',[])
	.controller('listPageController',function($scope,$location,Comment){

		$scope.commentData={};

		Comment.getAll()
			.success(function(data){
				$scope.comments=data;
			});

		$scope.create=function(){
			$location.path('/create');
		}

		$scope.edit=function(id){
			$location.path('/edit/'+id);
		}

		$scope.delete=function(id){
			Comment.delete(id)
				.success(function(data){

					Comment.getAll()
						.success(function(getData){
							$scope.comments=getData;
						});

				});
		}

	})

	.controller('editPageController',function($scope,$routeParams,$location,Comment){

		$scope.commentData={};

		Comment.get($routeParams.id)
			.success(function(data){
				$scope.commentData=data;
			});

		$scope.update=function(){
			Comment.put($scope.commentData)
				.success(function(data){
					$location.path('/')
				});
		}

		$scope.cancel=function(){
			$location.path('/');
		}
	})

	.controller('createPageController',function($scope,$location,Comment){
		$scope.commentData={};

		$scope.save=function(){

			Comment.post($scope.commentData)
				.success(function(data){
					$location.path('/');
				});

		}

		$scope.cancel=function(){
			$location.path('/');
		}

	});
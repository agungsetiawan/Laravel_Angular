angular.module('commentService',[])
	.factory('Comment',function($http){

		return{

			getAll:function(){
				return $http.get('http://localhost:8000/api/comments');
			},

			get:function(id){
				return $http.get('http://localhost:8000/api/comments/'+id);
			},

			post:function(commentData){
				return $http({
					method: 'POST',
					url: 'http://localhost:8000/api/comments',
					headers: { 'Content-Type' : 'application/json' },
					data: {author:commentData.author,text:commentData.text}
				});
			},

			delete:function(id){
				return $http.delete('http://localhost:8000/api/comments/'+id);
			},

			put:function(commentData){
				return $http.put('http://localhost:8000/api/comments/'+commentData.id,commentData);
			}

		}

	});
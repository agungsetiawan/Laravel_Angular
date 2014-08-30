angular.module('commentService',[])
	.factory('Comment',function($http){

		return{

			getAll:function(){
				return $http.get('http://localhost:8000/api/comments?access_token=GiVR0JIM1C3gc2eOA9isgN50gjADYTrNw08WL0Wi');
			},

			get:function(id){
				return $http.get('http://localhost:8000/api/comments/'+id+'?access_token=GiVR0JIM1C3gc2eOA9isgN50gjADYTrNw08WL0Wi');
			},

			post:function(commentData){
				return $http({
					method: 'POST',
					url: 'http://localhost:8000/api/comments',
					headers: { 'Content-Type' : 'application/json','Authorization':'Bearer GiVR0JIM1C3gc2eOA9isgN50gjADYTrNw08WL0Wi' },
					data: {author:commentData.author,text:commentData.text}
				});
			},

			delete:function(id){
				return $http.delete('http://localhost:8000/api/comments/'+id,{headers:{'Authorization':'Bearer GiVR0JIM1C3gc2eOA9isgN50gjADYTrNw08WL0Wi'}});
			},

			put:function(commentData){
				return $http.put('http://localhost:8000/api/comments/'+commentData.id,commentData,{headers :{'Authorization':'Bearer GiVR0JIM1C3gc2eOA9isgN50gjADYTrNw08WL0Wi'}});
			}

		}

	});
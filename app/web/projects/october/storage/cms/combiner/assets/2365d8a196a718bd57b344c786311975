var comment=angular.module('comment',[]);
comment.factory('commentservice',function($http){
	return{
		get:function(){
			return $http.get('./comment/getall');
		},
		store:function(commentdata){
			 //var commentdata=commentdata.toSource();
			var commentdata=(commentdata);
			return $http({
				method:'POST',
				url:'./comment/store',
				data:commentdata
			});
			//return $http.post('./comment/store',commentdata);

		},
		destroy:function(id){
			return $http.delete('./comment/'+id);
		}
	}
});

comment.controller('commentcontroller',function($http,commentservice,$scope){
	$scope.commentdata={};
	$scope.loading=true;

	commentservice.get().success(function(data){
		$scope.comments=data;
		$scope.loading=false;
	});
	$scope.submitcomment=function(){
		$scope.loading=true;
		commentservice.store($scope.commentdata).success(function(data){
			commentservice.get().success(function(getdata){
				//console.log('it doesnt work');
				$scope.comments=getdata;
				$scope.loading=false;
			});
		}).error(function(data){

			console.log(data);
		});
	};
	$scope.deletecomment=function(id){
		$scope.loading=true;
		commentservice.destroy(id).success(function(data){
			commentservice.get().success(function(getdata){
				$scope.comments=getdata;
				$scope.loading=false;
				//$scope.apply(comments);
			});
		});
	};
});
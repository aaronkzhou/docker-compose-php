var movie=angular.module('movie',[]);
movie.factory('movieservice',function($http){
	return{	
		get:function(){
			return $http.get('data/movie.json');
		}
		}
	});

movie.controller('moviecontroller',function($http,movieservice,$scope){
	$scope.moviedata={};
	$scope.loading=true;

	movieservice.get().success(function(data){
		$scope.movies=data;
		//console.log($scope.name);
		
		$scope.$watch("name",function(name){
			var $scope.newmovies=[];
			for (i in $scope.movies){
				//console.log(name);
				if($scope.movies[i].Name==name){
				$scope.newmovies.Genre=$scope.movies[i].Genre;
				$scope.newmovies.Runtime=$scope.movies[i].Runtime;
				$scope.newmovies.Rating=$scope.movies[i].Rating;
				}
			}
    	});
    	$scope.$watch("rating",function(rating){
			for (i in $scope.movies){
				//console.log(rating);
				if($scope.movies[i].Rating==rating){
				$scope.newmovies.Genre=$scope.movies[i].Genre;
				$scope.newmovies.Runtime=$scope.movies[i].Runtime;
				$scope.newmovies.Name=$scope.movies[i].Name;
				}
			}
    	});
    	$scope.$watch("genre",function(genre){
			for (i in $scope.movies){
				//console.log(rating);
				if($scope.movies[i].Rating.indexOf(genre)>0){
				$scope.newmovies.Rating=$scope.movies[i].Rating;
				$scope.newmovies.Runtime=$scope.movies[i].Runtime;
				$scope.newmovies.Rating=$scope.movies[i].Name;
				}
			}
    	});
    	$scope.$watch("runtime",function(runtime){
			for (i in $scope.movies){
				//console.log(name);
				if($scope.movies[i].Runtime>runtime){
				$scope.newmovies.Genre=$scope.movies[i].Genre;
				$scope.newmovies.Runtime=$scope.movies[i].Runtime;
				$scope.newmovies.Rating=$scope.movies[i].Name;
				}
			}
    	});
		});
		
		//console.log($scope.movies);
		$scope.loading=false;
	});
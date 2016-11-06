var cart=angular.module('cart',[]);
cart.factory('cartservice',function($http){
	return{
		get:function(){
			return $http.get('./cart/getall');
		},
		store:function(cartdata){
			 //var cartdata=cartdata.toSource();
			var cartdata=(cartdata);
			return $http({
				method:'POST',
				url:'./cart/store',
				data:cartdata
			});
			//return $http.post('./cart/store',cartdata);
		},
		destroy:function(id){
			return $http.delete('./cart/'+id);
		},
		getinfo:function(){
			return $http.get('./cart/getinfo');
		},
		clear:function(){
			return $http.get('./cart/clear');
		}
	}
});

cart.controller('cartcontroller',function($http,cartservice,$scope){
	$scope.cartdata={};
	$scope.loading=true;
	cartservice.getinfo().success(function(data){
		$scope.productinfos=data;
		$scope.loading=false;
	});
	cartservice.get().success(function(data){
		$scope.carts=data;
		$scope.loading=false;
	});
	$scope.clear=function(){
		$http.get('./cart/clear').success(function(){
		cartservice.get().success(function(data){
		$scope.carts=data;
		$scope.loading=false;
		});
		});
	};
	$scope.getTotal = function(){
    var total = 0;
    for (name in $scope.carts){
    	total += ($scope.carts[name].price * $scope.carts[name].qty);
    }
    return total.toFixed(2);
	}
	$scope.remove=function(name){
			$http.get('./cart/remove/'+name).success(function(){
			cartservice.get().success(function(data){
			$scope.carts=data;
			$scope.loading=false;
			});
		});
	};
	$scope.add=function(data,key){
		$scope.loading=true;
		var data={
			info:data,
			key:key
		};
		$http.post('./cart/add',data).success(function(){
			cartservice.get().success(function(data){
			$scope.carts=data;
			$scope.loading=false;
			});
		});
	};


});
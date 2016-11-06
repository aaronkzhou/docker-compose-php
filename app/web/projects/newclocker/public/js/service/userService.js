(function(){
'use strict',
angular.module('TimeTracker').factory('UserService',UserService);

function UserService($resource){
	var User=$resource('api/users');
	function getUsers(){
		return User.query().$promise.then(function(results){
			return results;
		},function(error){
			console.log(error);
		});
	}
return {
        getUsers: getUsers
      }
}



})();
(function(){

  'use strict';
  angular.module('TimeTracker').controller('TimeController',TimeController);
  function TimeController(TimeService,UserService,$scope){
    var vm=this;
    vm.timeentries=[];
    vm.totalTime = {};
    vm.users=[];
    // Initialize the clockIn and clockOut times to the current time.
      vm.clockIn = moment();
      vm.clockOut = moment();

      // Grab all the time entries saved in the database
      getTimeEntries();

      // Get the users from the database so we can select
      // who the time entry belongs to
      getUsers();

    function getUsers(){
    	UserService.getUsers().then(function(result){
    		vm.users=result;
    		//console.log(result);
    	},function(error){
    		console.log(error);
    	});
    }

	function getTimeEntries() {
    TimeService.getTime().then(function(results){
    	vm.timeentries=results;
    	console.log(vm.timeentries);
    	updateTotalTime(vm.timeentries);
    },function(error){
    	console.log(error);
    });
	}
    function updateTotalTime(timeentries) {
        vm.totalTime = TimeService.getTotalTime(timeentries);
    }
    vm.logNewTime=function(){

    	if(vm.clockOut<vm.clockIn){
    		alert("you can't clockout a time before clockin");
    		return;
    	}
    	if(vm.clockOut==vm.clockIn){
    		alert("you can't log a clockout time equals to clockin");
    		return;
    	}
    	TimeService.saveTime({
    		"user_id":vm.timeEntryUser.id,
            "start_time":vm.clockIn,
    		"end_time":vm.clockOut,
            "comment":vm.comment
    	}).then(function(success){
    		getTimeEntries();
    		console.log(vm.timeEntryUser);
    	},function(error){
    		console.log(error);
    	});
		// Reset clockIn and clockOut times to the current time
		  vm.clockIn = moment();
		  vm.clockOut = moment();

		  // Clear the comment field
		  vm.comment = "";

		  // Deselect the user
		  vm.timeEntryUser = "";

    }
    vm.updateTimeEntry=function(timeentry){
        var updatedTimeEntry={
            "id":timeentry.id,
            "user_id":timeentry.user.id,
            "start_time":timeentry.start_time,
            "end_time":timeentry.end_time,
            "comment":timeentry.comment
        }
        TimeService.updateTime(updatedTimeEntry).then(function(success){
            getTimeEntries();
            $scope.showEditDialog=false;
            console.log(success);
        },function(error){
            console.log(error);
        });
    }
    vm.deleteTimeEntry=function(timeentry){
        var id=timeentry.id;
        TimeService.deleteTime(id).then(function(success) {
            getTimeEntries();
            console.log(success);
          }, function(error) {
            console.log(error);
          }); 
    }
  }

})();
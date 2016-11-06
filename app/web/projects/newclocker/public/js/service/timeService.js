(function(){
    'use strict';
    angular.module('TimeTracker').factory('TimeService',TimeService);
    function TimeService($resource){
        var Time=$resource('api/time/:id',{},{
            update:{
                method:'PUT'
            }
        });
        function getTime(){
            return Time.query().$promise.then(function(results){
                angular.forEach(results,function(result){
                    result.loggedTime=getTimeDiff(result.start_time,result.end_time);
                });
                return results;
            },function(error){
                console.log(error);
            });
        }
        function getTimeDiff(start,end){
            var diff=moment(end).diff(moment(start));
            var duration=moment.duration(diff);
            return{
                duration:duration
            }
        }
        function getTotalTime(timeentries) {
                var totalMilliseconds = 0;

                angular.forEach(timeentries, function(key) {
                    totalMilliseconds += key.loggedTime.duration._milliseconds;
                });

                // After 24 hours, the Moment.js duration object
                // reports the next unit up, which is days.
                // Using the asHours method and rounding down with
                // Math.floor instead gives us the total hours
                return {
                    hours: Math.floor(moment.duration(totalMilliseconds).asHours()),
                    minutes: moment.duration(totalMilliseconds).minutes()
                }
            }
        function saveTime(data){
            return Time.save(data).$promise.then(function(success){
                console.log(success);
            },function(error){
                console.log(error);
            });
        }
        function updateTime(data){
            return Time.update({id:data.id}, data).$promise.then(function(success) {
            console.log(success);
          }, function(error) {
            console.log(error);
          });
        }
        function deleteTime(id) {
        return Time.delete({id:id}).$promise.then(function(success) {
        console.log(success);
        }, function(error) {
        console.log(error);
        });
        }
        return {

            getTime:getTime,
            getTimeDiff:getTimeDiff,
            getTotalTime: getTotalTime,
            saveTime:saveTime,
            updateTime: updateTime,
            deleteTime:deleteTime
        }
    }
})();
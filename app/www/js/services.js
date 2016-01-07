angular.module('app.services', [])

.factory('devotionService', function($firebaseArray){

	var dev = new Firebase("devotionapp.firebaseIO.com");

	var devs = $firebaseArray(dev);

	var devotionService={

		all:devs,
		get: function(devId){

			return devs.$getRecord(devId);
		}

	};
	return devotionService;

});

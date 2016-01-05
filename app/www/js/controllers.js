angular.module('app.controllers', [])
  
.controller('devotionAppCtrl', function($scope) {

})
   
.controller('loginCtrl', function($scope) {

})
   
.controller('devotionApp2Ctrl', function($scope,devotionService) {
	$scope.devotions= devotionService.all;
})
   
.controller('podcastsCtrl', function($scope) {

})
   
.controller('settingsCtrl', function($scope) {

})
 
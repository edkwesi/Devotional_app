angular.module('app.controllers', [])
  
.controller('devotionAppCtrl', function($scope) {

})
   
.controller('loginCtrl', function($scope) {

})
   
.controller('devotionListCtrl', function($scope,devotionService,$location) {
	$scope.devotions= devotionService.all;

	$scope.singleDev=function(id){
	$location.path("/Dev/"+id);

	}


})

.controller('singleDevCtrl', function($scope,devotionService,$stateParams,$state) {
	$scope.singleDevotion =devotionService.get($stateParams.id);
    $scope.content =  $scope.singleDevotion.content;
    $scope.date = $scope.singleDevotion.datee;
    $scope.text = $scope.singleDevotion.text;
    $scope.quote = $scope.singleDevotion.quote;
})
   
.controller('podcastsCtrl', function($scope) {

})
   
.controller('settingsCtrl', function($scope) {

})
 
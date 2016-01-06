angular.module('app.controllers', [])
  
.controller('devotionAppCtrl', function($scope) {

})
   
.controller('loginCtrl', function($scope) {

})
   
.controller('devotionListCtrl', function($scope,devotionService) {
	$scope.devotions= devotionService.all;
})

.controller('singleDevCtrl', function($scope,devotionService,$stateParams,$state) {
	$scope.singleDevotion = deovtionService.get($stateParams.datee);
    $scope.ingList =  $scope.singleDevotion.content;
    $scope.prepList = $scope.singleDevotion.text;
})
   
.controller('podcastsCtrl', function($scope) {

})
   
.controller('settingsCtrl', function($scope) {

})
 
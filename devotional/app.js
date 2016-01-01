//Define an angular module for our app
var app = angular.module('devotionApp', []);


app.controller('devotionController',function($scope,$http){

	getDevotions();

	function getDevotions(){

		$http.post("ajax/getDevotions.php").success(function(data){
			getDevotions();
		});
	};



	});

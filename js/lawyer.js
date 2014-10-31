var myApp = angular.module("myApp", []);

myApp.controller("MainCtrl", ["$scope", function($scope){
	$scope.text = "Olá, fã de angular!";
}]);

myApp.controller("UserCtrl", ["$scope", function($scope){

	$scope.user = {};
	$scope.user.details = {
		"name": "Edgar de Oliveira Carmo";
		"email": "edgar.carmo@edenred.com";
	}
	
}]);

var myApp = angular.module("myApp", []);

myApp.controller("UserCtrl", ["$scope", "$http", function($scope, $http){

	$scope.users = [
		{
			"id": 1,
			"name": "Edgar de Oliveira Carmo",
			"email": "edgarcarmo@gmail.com",
			"password": "123456",
			"isadmin": 1
		}, {
			"id": 2,
			"name": "Adauto Cavasini Fernandes",
			"email": "atocf1@gmail.com",
			"password": "1234567",
			"isadmin": 0
		}
	]
	
}]);

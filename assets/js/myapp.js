var app = angular.module('myApp', []);
app.controller('myCtrl', function($scope,$http) {
    // $scope.firstName= "John";
    // $scope.lastName= "Doe";
    $scope.users = [];
    $http.get('index.php/angularjs/get_list').success(function($data){
    	$scope.users=$data;
    });
});
var app = angular.module('myApp', ['ui.bootstrap']);
app.controller('myCtrl', function($scope,$http) {
    // $scope.firstName= "John";
    // $scope.lastName= "Doe";

    $scope.curPage = 1,
  	$scope.itemsPerPage = 25,
  	$scope.maxSize = 5;

    $scope.users = [];
    $http.get('index.php/angularjs/get_list').success(function($data){
    	$scope.users=$data;
    });
    
    // this.items = itemsDetails;  
  
  	$scope.numOfPages = function () {
    	return Math.ceil($scope.users.length / $scope.itemsPerPage);
    
  	};
  
    $scope.$watch('curPage + numPerPage', function() {
	    var begin = (($scope.curPage - 1) * $scope.itemsPerPage),
	    end = begin + $scope.itemsPerPage;	    
	    $scope.users = $scope.users.slice(begin, end);
	});
});
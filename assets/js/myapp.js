var app = angular.module('myApp', ['ui.bootstrap']);
app.controller('myCtrl', function($scope,$http) {
    // $scope.firstName= "John";
    // $scope.lastName= "Doe";

    $scope.curPage = 1,
  	$scope.itemsPerPage = 10,
  	$scope.maxSize = 5;

    $scope.users = [];
    $http.get('index.php/angularjs/get_list').success(function($data){
    	$scope.users=$data;
    });
    
    var itemsDetails = $scope.users;

  	$scope.numOfPages = function () {
    	return Math.ceil(itemsDetails.length / $scope.itemsPerPage);
    
  	};
  
    $scope.$watch('curPage + numPerPage', function() {
	    var begin = (($scope.curPage - 1) * $scope.itemsPerPage), end = begin + $scope.itemsPerPage;
	    console.log("begin=" + begin + ", end=" + end);

	    $scope.users = itemsDetails.slice(begin, end);
	});

	/*$scope.totalItems = $scope.users.length;
	$scope.currentPage = 1;
	$scope.itemsPerPage = 5;

	$scope.$watch("currentPage", function() {
	    // setPagingData($scope.currentPage);
	    var page = $scope.currentPage;
	    var pagedData = $scope.users.slice( (page - 1) * $scope.itemsPerPage, page * $scope.itemsPerPage );
	    $scope.users = pagedData;
	});

	function setPagingData(page) {
	    var pagedData = $scope.users.slice( (page - 1) * $scope.itemsPerPage, page * $scope.itemsPerPage );
	    $scope.users = pagedData;
	}*/
});
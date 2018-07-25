<!DOCTYPE html >
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Arjunphp.com</title>
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.2.0/angular.min.js"></script> 
<script type="text/javascript">
 function userController($scope,$http) {
     $scope.users = [];
     $http.get('<?php echo site_url('angularjs/get_list'); ?>').success(function($data){ $scope.users=$data; });
 }
</script>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css">
<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body ng-app>
<!-- ng-app : which tells the Angular framework to parse data from this div -->
<div class="container">
  <div class="col-lg-12 col-md-12">
    <table ng-controller="userController" class="table table-bordered table-condensed table-responsive">
      <thead>
        <tr>
          <th>infoProduk</th>
          <th>infoProduk1</th>
          <th>noProduk</th>
          <th>lihatProduk</th>
          <th>imageProduk</th>
          <th>namaManufaktur</th>
          <th>namaProduk</th>
          <th>hargaProduk</th>
          <th>tglTayang</th>
          <th>tglupdatedHarga</th>
          <th>jumlahStok</th>
          <th>penyedia</th>
          <th>akhirTayang</th>
        </tr>
      </thead>
      <tbody>
        <tr ng-repeat="user in users">
          <td>{{user.infoProduk}}</td>
          <td>{{user.infoProduk1}}</td>
          <td>{{user.noProduk}}</td>
          <td>{{user.lihatProduk}}</td>
          <td>{{user.imageProduk}}</td>
          <td>{{user.namaManufaktur}}</td>
          <td>{{user.namaProduk}}</td>
          <td>{{user.hargaProduk}}</td>
          <td>{{user.updatedDate}}</td>
          <td>{{user.updatedDate1}}</td>
          <td>{{user.jumlahStok}}</td>
          <td>{{user.penyedia}}</td>
          <td>{{user.penyedia1}}</td>
        </tr>
      </tbody>
    </table>
  </div>
</div>
 
</body>
</html>
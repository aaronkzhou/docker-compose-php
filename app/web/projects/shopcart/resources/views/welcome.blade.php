<!DOCTYPE html>
<html>
 <head>
 <meta charset="UTF-8">
 <title>Ezyvet Cart</title>
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css">

    <style>
        body        { padding-top:30px; }
        form        { padding-bottom:20px; }
        .cart       { padding-bottom:20px; }
    </style>

    <script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
    <script src="//ajax.googleapis.com/ajax/libs/angularjs/1.2.8/angular.min.js"></script>
    <script src="js/main.js"></script>
</head>

<body class="container fluid" ng-app="cart" ng-controller="cartcontroller">
<div class="col-md-7">
    <div class="page-header">
        <h2>Product List</h2>
    </div>
    <form>
    <table class="col-md-8">
        <thead>
          <tr>
            <th>ID</th>
            <th>Product name</th>
            <th>Price</th>
          </tr>
          <tbody ng-repeat="(key,productinfo) in productinfos" >
              <tr >
                <td>@{{key+1}}</td>
                <td>@{{productinfo.name}}</td>
                <td>@{{(productinfo.price).toFixed(2)}}</td>
                <td><a herf="#" ng-click="add(productinfo,key)" >[add to shopcart]</a></td>
              </tr>
          </tbody>
        </thead>
    </table>
    </form>
</div>
<div class="col-md-5">
    <h3>ShopCart</h3>
    <p class="text-center" ng-show="loading"><span class="fa fa-meh-o fa-5x fa-spin"></span></p>
    <div class="cart" ng-hide="loading">
    <table class="col-md-12">
    <thead>
        <tr>
            <th>Name</th>
            <th>Quantity</th>
            <th>Price</th>
            <th>Subtotal</th>
            <th><a herf="#" ng-click="clear()" >[Empty Cart]</a></th>
        </tr>
        <tbody>
        <tr ng-repeat="(key,cart) in carts">
            <td>@{{ key }}</td>
            <td>@{{ cart.qty }}</td>
            <td>$@{{(cart.price).toFixed(2)}}</td>
            <td>$@{{(cart.price*cart.qty).toFixed(2)}}</td>
            <td><a herf="#" ng-click="remove(key)" >[Remove Cart]</a></td>
        </tr>
        </tbody>
        <div>Total:$@{{getTotal()}}</div>
    </thead>

    </div>
</div>
</body>
</html>
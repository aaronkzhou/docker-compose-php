<!DOCTYPE html>
<html>
 <head>
 <meta charset="UTF-8"> 
 <title>Movie Presentation System</title>

    <!-- CSS -->
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css"> <!-- load bootstrap via cdn -->
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css"> <!-- load fontawesome -->
    <style>
        body        { padding-top:30px; }
        form        { padding-bottom:20px; }
        .comment    { padding-bottom:20px; }
    </style>
    <!-- JS -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
    <script src="//ajax.googleapis.com/ajax/libs/angularjs/1.2.8/angular.min.js"></script> <!-- load angular -->
    <!-- ANGULAR -->
    <!-- all angular resources will be loaded from the /public folder -->
        <script src="js/main.js"></script> <!-- load our controller -->

</head>
<!-- declare our angular app and controller -->
<body class="container" ng-app="movie" ng-controller="moviecontroller">
<div class="col-md-8 col-md-offset-2">

    <div class="page-header">
        <h2>Movie Presentation System</h2>
    </div>
    <form ng-submit="">
        <div class="form-group">
            <input type="text" class="form-control input-sm" name="name" ng-model="name" placeholder="match movie with name">
        </div>
        <div class="form-group">
            <input type="text" class="form-control input-sm" name="genre" ng-model="genre" placeholder="match movie with genre">
        </div>
        <div class="form-group">
            <input type="text" class="form-control input-sm" name="rating" ng-model="rating" placeholder="match movie with rating">
        </div>
        <div class="form-group">
            <input type="text" class="form-control input-sm" name="runtime" ng-model="runtime" placeholder="match movie less than runtime">
        </div>

    </form>
    <p class="text-center" ng-show="loading"><span class="fa fa-meh-o fa-5x fa-spin"></span></p>
    
    <div class="movie" ng-hide="loading" ng-repeat="movie in newmovies">
        <h3>Movie name: @{{ movie.name }} <small>@{{movie.runtime}} mins</small></h3>
        <h5>Genre: @{{ movie.genre }}</h5><h5>Rating: @{{ movie.rating }}</h5>
    </div>
    
</div> 
</body> 
</html>
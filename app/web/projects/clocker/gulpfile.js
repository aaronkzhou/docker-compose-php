var elixir = require('laravel-elixir');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for our application, as well as publishing vendor resources.
 |
 */
var jsPlugins = [
    '../bower_components/angular/angular.min.js',
    '../bower_components//angular-bootstrap/ui-bootstrap-tpls.js',
    '../bower_components/angular-resource/angular-resource.js',
    '../bower_components/moment/moment.js',
    '../bower_components/jquery/dist/jquery.js',
    '../bower_components/bootstrap/dist/js/bootstrap.js',
    '../bower_components/angular-bootstrap/ui-bootstrap.js'
];

elixir(function(mix) {
    mix.scripts(jsPlugins, 'public/dep/dep.js');
});

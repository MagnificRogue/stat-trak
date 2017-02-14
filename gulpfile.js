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

elixir(function(mix) {
	mix.sass([
		'app-blue.scss'
	], 'public/css/app-blue.css');
	mix.sass([
		'app-green.scss'
	], 'public/css/app-green.css');
	mix.sass([
		'app-lynch.scss'
	], 'public/css/app-lynch.css');
	mix.sass([
		'app-midnight-blue.scss'
	], 'public/css/app-midnight-blue.css');
	mix.sass([
		'app-purple.scss'
	], 'public/css/app-purple.css');
	mix.sass([
		'app-red.scss'
	], 'public/css/app-red.css');   

    mix.copy('resources/assets/images/**', 'public/images');
    mix.copy('resources/assets/fonts/**', 'public/fonts');
    mix.copy('bower_components/ckeditor', 'public/vendor/ckeditor');
    mix.copy('bower_components/font-awesome/fonts/**', 'public/fonts');

    mix.styles([
        'bower_components/font-awesome/css/font-awesome.min.css',
     	'bower_components/c3/c3.min.css',
     	'resources/assets/ProgressButtonStyles/css/component.css',
        'bower_components/fullcalendar/dist/fullcalendar.min.css',
        'bower_components/growl/stylesheets/jquery.growl.css',
        'bower_components/eonasdan-bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.min.css',
        'bower_components/hover/css/hover-min.css',
        'bower_components/perfect-scrollbar/css/perfect-scrollbar.css',
        'bower_components/animate.css/animate.css'
    ], 'public/css/vendor.css', './');

    mix.scripts([
        'bower_components/jquery/dist/jquery.min.js',
        'bower_components/tether/dist/js/tether.min.js',
        'bower_components/bootstrap/dist/js/bootstrap.min.js',
        'bower_components/c3/c3.min.js',
        'bower_components/d3/d3.min.js',
        'bower_components/moment/min/moment.min.js',
        'bower_components/eonasdan-bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js',
        'bower_components/fullcalendar/dist/fullcalendar.min.js',
        'bower_components/growl/javascripts/jquery.growl.js',
        'bower_components/Chart.js/Chart.js',
        'resources/assets/js/modernizr.custom.js',
        'resources/assets/js/classie.js',
        'resources/assets/js/jquery.vmap.min.js',
        'resources/assets/js/jquery.vmap.world.js',        
        'bower_components/perfect-scrollbar/js/perfect-scrollbar.jquery.js'
	], 'public/js/vendor.js', './')
});

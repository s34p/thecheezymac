var gulp = require('gulp');
var minifycss = require('gulp-minify-css');
var autoprefixer = require('gulp-autoprefixer');
var autoprefixer = require('gulp-autoprefixer');
var browserify = require('gulp-browserify');
var include = require('gulp-include');

var assetDir = 'app/assets/';
var cssTargetDir = '../public_html/thecheezymac/css/min/';
var jsTargetDir = '../public_html/thecheezymac/js/';

gulp.task('css', function(){
   return gulp.src(assetDir + 'css/thecheezymac.css')
       .pipe(autoprefixer('last 10 version'))
       .pipe(minifycss())
       .pipe(gulp.dest(cssTargetDir));
});

gulp.task('scripts', function(){
   return gulp.src(assetDir + 'js/thecheezymac.js')
       //.pipe(browserify({
       //    insertGlobals : true,
       //    debug : !gulp.env.production
       //}))
       .pipe(include())
       .pipe(gulp.dest(jsTargetDir));
});

gulp.task('default', function(){
    gulp.run('css');


    //gulp.watch('../public_html/thecheezymac/css/*.css', function () {
    //    gulp.run('css');
    //});
});
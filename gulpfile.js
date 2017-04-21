'use strict';

//sass
var gulp        = require('gulp');
var sass 				= require('gulp-sass');
var sourcemaps  = require('gulp-sourcemaps');

// Browsersync
var browserSync = require('browser-sync');
var reload      = browserSync.reload;

// svg
// var svgstore    = require('gulp-svgstore');
// var svgmin      = require('gulp-svgmin');

//js
var uglify = require('gulp-uglifyjs');
var concat = require('gulp-concat');

gulp.task('sass', function () {
  gulp.src('assets/sass/main.scss')
  	.pipe(sourcemaps.init())
    .pipe(sass({
    	// outputStyle: 'compressed',
    }).on('error', sass.logError))
    .pipe(sourcemaps.write('./'))
    .pipe(gulp.dest('dist/css'))
    .pipe(reload({stream:true}));
});

// gulp.task('sass-vendor', function () {
//   gulp.src('assets/sass/vendor.scss')
//   	.pipe(sourcemaps.init())
//     .pipe(sass({
//     	// outputStyle: 'compressed',
//     }).on('error', sass.logError))
//     .pipe(sourcemaps.write('./'))
//     .pipe(gulp.dest('dist/css/vendor'))
//     .pipe(reload({stream:true}));
// });

gulp.task('browser-sync', function() {

  browserSync({
    watchTask: true,
    proxy: 'localhost/uniq'
  });

});

// Reload all Browsers
gulp.task('bs-reload', function () {
  browserSync.reload();
});

// SVG
// gulp.task('svgstore', function () {
//   return gulp
//   .src('dist/svg-icons/icons/*.svg')
//   .pipe(svgmin({
//     js2svg: {
//       pretty: true
//     }
//   }))
//   .pipe(svgstore())
//   .pipe(gulp.dest('dist/svg-icons'));
// });

gulp.task('uglify',['concat'], function() {
  gulp.src('dist/js/main.js')
  .pipe(uglify('main.min.js'))
  .pipe(gulp.dest('dist/js'))
});

gulp.task('concat', function() {
  return gulp.src([
    'bower_components/jquery/dist/jquery.js',
    'assets/js/main.js'
    ])
  .pipe(concat('main.js'))
  .pipe(gulp.dest('dist/js'))
});

// Default task to be run with `gulp`
gulp.task('watch', ['sass', 'browser-sync'], function () {
  gulp.watch(["assets/sass/**/*.scss"], ['sass']);
  gulp.watch("*.php", ['bs-reload']);
  // gulp.watch("assets/js/main.js", ['concat', 'uglify']);
});



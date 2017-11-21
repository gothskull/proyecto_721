var gulp        = require('gulp');
    browserSync = require('browser-sync'),
    reload      = browserSync.reload,
    plumber     = require('gulp-plumber'),
    sass        = require('gulp-sass'),
    autoprefix  = require('gulp-autoprefixer'),
    cleanCss    = require('gulp-clean-css'),
    sourcemaps  = require('gulp-sourcemaps'),
    uglify      = require('gulp-uglify'),
    concat      = require('gulp-concat'),
    imagemin    = require('gulp-imagemin'),
    watch       = require('gulp-watch'),
    // notify      = require('gulp-notify'),
    jshint      = require('gulp-jshint');


var onError = function(err)
{
  console.log('Se ha producido un error: ', err.message);
  this.emit('end');
}

 gulp.task('sass', function() {
  return gulp.src('./scss/style.scss')
    .pipe(plumber({errorHandler:onError}))
    .pipe(sourcemaps.init())
    .pipe(sass())
    .pipe(autoprefix({
      browsers: ['last 2 versions', 'ie >= 9']
    }))
    .pipe(gulp.dest('.'))
    .pipe(cleanCss({keepSpecialComments: 1}))
    .pipe(sourcemaps.write('.') )
    .pipe(gulp.dest('.'));    
});

 gulp.task('lint', function() {
  return gulp.src('./js/**/*.js')
    .pipe(jshint())    
});

 gulp.task('javascript', ['lint'], function() {
  return gulp.src('./js/**/*.js')
    .pipe(plumber({errorHandler:onError}))
    .pipe(concat('all.min.js'))
    .pipe(gulp.dest('./js'))
    
});

 gulp.task('imagemin',function(){
   return gulp.src('./images/raw/**/*.**')
   .pipe(plumber({errorHandler:onError}))
   .pipe(imagemin({
      progressive: true,
      interlaced: true
   }))
   .pipe(gulp.dest('./images/final'))
 });

gulp.task('browser-sync',function(){
  var archivos = [
    './css/*.css',
    './*.php',
    './scss/**/*.scss',
    './template-parts/*.php',
    './inc/**/*.php',
    './js/**/*.js',
    './tmp/**/*.php',
    './functions/**/*.php',
    './images/**/*.**',
    './style.css'



  ];
  browserSync.init(archivos,{
    proxy : 'http://localhost/discapacidad/',
    notify : false
  })
});



gulp.task('default', ['sass','browser-sync','javascript','imagemin'], function() {
  gulp.watch(['scss/*.scss'], ['sass']);
});

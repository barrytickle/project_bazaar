var gulp = require('gulp'),
    notify = require('gulp-notify'),
    filter = require('gulp-filter'),
    sass = require('gulp-ruby-sass'),
    order = require('gulp-order'),
    watch = require('gulp-watch'),
    concat = require('gulp-concat'),
    minify = require('gulp-clean-css'),
    uglify = require('gulp-uglify'),
    util = require('gulp-util'),
    rename = require('gulp-rename');


  //SCCS Compile
  gulp.task('sass', () =>
    sass('resources/assets/scss/*.scss', {style: 'expanded'})
      .on('error', sass.logError)
      .pipe(gulp.dest('resources/assets/css'))
);

  //minify CSS
  gulp.task('minify', function() {
    var cssFiles = ['resources/assets/css/*.css'];

    gulp.src(cssFiles)
    .pipe(concat('app.css'))
    .pipe(minify())
    .pipe(gulp.dest('public/css'))
    .pipe(notify({message: 'Task complete innit!'}));
  });


  //JS Files
  gulp.task('uglify', function() {
    var jsFiles = ['resources/assets/js/*.js'];

    gulp.src(jsFiles)
    .pipe(order([
      'jquery.min.js',
      '*',
      'scripts.js'
    ]))
    .pipe(concat('main.js'))
    .pipe(uglify().on('error', util.log))
    .pipe(gulp.dest('public/js'))
    .pipe(notify({message: 'Task complete innit!'}));
  });


  //watch
  gulp.task('watch', function() {

    //css files
    gulp.watch('resources/assets/css/*', ['minify']);

    //js files
    gulp.watch('resources/assets/js/*', ['uglify']);

    //sass files
    gulp.watch('resources/assets/scss/**/*', ['sass']);
  });

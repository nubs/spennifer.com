var gulp = require('gulp');
var less = require('gulp-less');
var bower = require('gulp-bower');
var minifyCSS = require('gulp-minify-css');
var uglify = require('gulp-uglify');
var concat = require('gulp-concat');

var paths = {
  css: 'src/styles/**/*.less',
  fonts: 'bower_components/font-awesome/fonts/**/*',
  js: ['bower_components/jquery/dist/jquery.min.js', 'bower_components/bootstrap/js/carousel.js', 'src/scripts/**/*.js']
};

gulp.task('bower', function() {
  bower();
});

gulp.task('css', function() {
  return gulp.src(paths.css)
    .pipe(less())
    .pipe(minifyCSS())
    .pipe(gulp.dest('public/css'));
});

gulp.task('fonts', function() {
  return gulp.src(paths.fonts)
    .pipe(gulp.dest('public/fonts'));
});

gulp.task('js', function() {
  return gulp.src(paths.js)
    .pipe(uglify())
    .pipe(concat('all.min.js'))
    .pipe(gulp.dest('public/js'));
});

gulp.task('watch', function() {
  gulp.watch(paths.css, ['css']);
  gulp.watch(paths.js, ['js']);
});

gulp.task('default', ['bower', 'css', 'fonts', 'js']);

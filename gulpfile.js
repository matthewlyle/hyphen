var gulp        = require('gulp');
var sass        = require('gulp-sass');
var uglify      = require('gulp-uglify');
var concat      = require('gulp-concat');
var gutil       = require('gulp-util');

gulp.task('styles', function () {
  return gulp.src('./scss/style.scss')
    .pipe(sass({outputStyle: 'compressed'}).on('error', sass.logError))
    .pipe(gulp.dest('./'))
});

gulp.task('scripts', function(){
  var list = [];
  return gulp.src(['./js/vendor/*/*.js', './js/scripts.js'])
    .pipe(concat('mortified.min.js'))
    .pipe(uglify()).on('error', gutil.log)
    .pipe(gulp.dest('./'))
})

gulp.task('serve', ['styles', 'scripts'], function() {
    gulp.watch("./js/**/*.*", ['scripts']);
    gulp.watch("./scss/**/*.*", ['styles']);
});

gulp.task('default', ['serve']);

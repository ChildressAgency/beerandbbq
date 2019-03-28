//this is from https://coursetro.com/posts/code/130/Learn-Bootstrap-4-Final-in-2018-with-our-Free-Crash-Course
//another example with gulp: https://github.com/bassjobsen/jbst-4-sass

var gulp = require('gulp');
var browserSync = require('browser-sync').create();
var sass = require('gulp-sass');
var autoprefixer = require('gulp-autoprefixer');
var sourcemaps = require('gulp-sourcemaps');
var concat = require('gulp-concat');
var uglify = require('gulp-uglify');
var cssnano = require('gulp-cssnano');

// Compile sass into CSS & auto-inject into browsers
gulp.task('sass', function(){
  return gulp.src('scss/**/*.scss')
    .pipe(sourcemaps.init())
    .pipe(sass())
    .pipe(autoprefixer())
    .pipe(cssnano())
    .pipe(sourcemaps.write('.'))
    .pipe(gulp.dest("./"))
    .pipe(browserSync.stream())
});

// Move the javascript files into our /src/js folder
//gulp.task('js', function () {
//  return gulp.src(['node_modules/bootstrap/dist/js/bootstrap.min.js', 'node_modules/jquery/dist/jquery.min.js', 'node_modules/popper.js/dist/umd/popper.min.js'])
//    .pipe(gulp.dest("js"))
//    .pipe(browserSync.stream());
//});
gulp.task('js', function(){
  return gulp.src('js/src/*.js')
    .pipe(sourcemaps.init())
    .pipe(concat('custom-scripts.min.js'))
    .pipe(uglify())
    .pipe(sourcemaps.write('.'))
    .pipe(gulp.dest("./js"))
    .pipe(browserSync.stream())
});

// Static Server + watching scss/html files
gulp.task('serve', gulp.series('sass', function () {

  browserSync.init({
    server: "./"
  });

  gulp.watch(['node_modules/bootstrap/scss/bootstrap.scss', 'scss/**/*.scss'], gulp.series('sass'));
  gulp.watch("*.html").on('change', browserSync.reload);
  //gulp.watch('js/*.js').on('change', browserSync.reload);
  gulp.watch('js/src/*.js', gulp.series('js'));
}));

gulp.task('build', function(){

})

gulp.task('default', gulp.parallel(['js','serve']));
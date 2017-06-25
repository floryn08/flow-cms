var gulp = require('gulp');
var concat = require('gulp-concat');
var uglify = require('gulp-uglify');
var minify = require('gulp-minify-css');
var rename = require('gulp-rename');
var header = require('gulp-header');
var watch = require('gulp-watch');
var pkg = require('./package.json');

gulp.task('js', function () {
    gulp.src([
        'node_modules/jquery/dist/jquery.js',
        'node_modules/bootstrap/dist/js/bootstrap.js',
        'public/js/*.js'
    ])
        .pipe(concat('scripts.js'))
        .pipe(uglify())
        .pipe(rename({suffix: '.min'}))
        .pipe(header('/*! <%= pkg.name %> <%= pkg.version %> */\n', {pkg: pkg} ))
        .pipe(gulp.dest('public/js/'));
});

gulp.task('css', function () {
    gulp.src([
        'node_modules/bootstrap/dist/css/bootstrap.css',
        'public/css/*.css'
    ])
        .pipe(concat('styles.css'))
        .pipe(minify({keepBreaks:false}))
        .pipe(rename({suffix: '.min'}))
        .pipe(header('/*! <%= pkg.name %> <%= pkg.version %> */\n', {pkg: pkg} ))
        .pipe(gulp.dest('public/css/'));
});

gulp.task('watcher', function() {
    gulp.src('public/js/*.js')
        .pipe(watch('public/js/*.js', function(event) { // if changed any file in "public/js/" (recursively)
            gulp.watch('js'); // run task "js"
        }));
    gulp.src('public/css/*.css')
        .pipe(watch('public/css/*.css', function(event) {
            gulp.watch('css');
        }));
});

gulp.task('default', ['js', 'css']); // start default tasks "gulp"
gulp.task('watch', ['watcher']); // start watcher task "gulp watch"
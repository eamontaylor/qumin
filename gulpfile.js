var gulp = require('gulp');
var livereload = require('gulp-livereload');
var connect = require('gulp-connect-php');
var sass = require('gulp-sass');
var browserSync = require('browser-sync');
var cleanCSS = require('gulp-clean-css');
var uglify = require("gulp-uglify");
var rename = require('gulp-rename');

gulp.task('sass', function () {
    return gulp.src('./sass/**/*.scss')
        .pipe(sass().on('error', sass.logError))
        .pipe(gulp.dest('css/'));
});
gulp.task('minify', function () {
    gulp.src('css/main.css') // path to your file
        .pipe(cleanCSS({compatibility: 'ie8'}))
        .pipe(rename({
            suffix: '.min'
        }))

        .pipe(gulp.dest('./css'));
    gulp.src('./js/main.js') // path to your files
        .pipe(uglify())
        .pipe(rename({
            suffix: '.min'
        }))
        .pipe(gulp.dest('./js'));
});
gulp.task('serve', function () {
    connect.server({}, function () {
        browserSync({
            proxy: '127.0.0.1:8000'
        });
    });
    livereload.listen();
    gulp.watch('sass/*.scss', ['sass']);

    gulp.watch(['css/*.css', '**/*.php', 'js/*.js']).on('change', function () {
        browserSync.reload()
    })
});

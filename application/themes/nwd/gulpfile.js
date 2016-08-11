// Include gulp
var gulp = require('gulp');

// Include Our Plugins
var sass = require('gulp-sass');
var concat = require('gulp-concat');
var uglify = require('gulp-uglify');
var rename = require('gulp-rename');
var imagemin = require('gulp-imagemin');


// Compile Our Sass
gulp.task('sass', function() {
    return gulp.src('assets/styles/**/*.scss')
        .pipe(sass())
        .pipe(gulp.dest('dist/styles'));
});

// Concatenate & Minify JS
gulp.task('scripts', function() {
    return gulp.src('assets/scripts/*.js')
        .pipe(concat('main.js'))
        .pipe(gulp.dest('dist/scripts'))
        .pipe(rename('main.min.js'))
        .pipe(uglify())
        .pipe(gulp.dest('dist/scripts'));
});

// Imagemin
gulp.task('smash', function() {
    return gulp.src('assets/images/*')
        .pipe(imagemin())
        .pipe(gulp.dest('dist/images'))
});

// Watch Files For Changes
gulp.task('watch', function() {
    gulp.watch('assets/scripts/*.js', ['scripts']);
    gulp.watch('assets/styles/**/*.scss', ['sass']);
    gulp.watch('assets/images/*', ['smash']);
});

// Default Task
gulp.task('default', ['sass', 'scripts', 'smash', 'watch']);
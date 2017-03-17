var gulp = require('gulp');
var sass = require('gulp-sass');
var autoprefixer = require('gulp-autoprefixer');
var uglify = require('gulp-uglify');


// Sass task
gulp.task('styles', function () {
	return gulp.src('./assets/styles/main.scss')
		.pipe(sass({outputStyle: 'compressed'}))
		.pipe(autoprefixer('last 2 version', 'ie 10'))
		.pipe(gulp.dest('./'))
});

// Watch task
gulp.task('watch', function () {
	gulp.watch(['./assets/styles/**/*.scss'], ['styles']);
	return;
});

// Default task
gulp.task('default', [
	'styles',
	'watch'
]);
var gulp = require('gulp');
var sass = require('gulp-sass');
var autoprefixer = require('gulp-autoprefixer');

gulp.task('default', ['sass']);

gulp.task('sass', function () {
    gulp.src('./scss/custom.scss')
        .pipe(sass({errLogToConsole: true}))
		.pipe(autoprefixer({
			browsers: ['last 2 versions'],
			cascade: false
		}))
        .pipe(gulp.dest('./'));
});

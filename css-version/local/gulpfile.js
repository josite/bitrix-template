var gulp = require('gulp'),
	concatCss = require('gulp-concat-css'),
	gcmq = require('gulp-group-css-media-queries'),
	cleanCSS = require('gulp-clean-css'),
	livereload = require('gulp-refresh');

gulp.task('css', function () {
	return gulp.src([
						'__dev/css/normalize.min.css',
						'__dev/css/main.css',
						'__dev/css/header.css',
						'__dev/css/nav.css',
						'__dev/css/components.css',
						'__dev/css/pages.css',
						'__dev/css/footer.css',
						'__dev/css/responsive.css',
						'__dev/css/fontawesome-all.css'
					])
	.pipe(concatCss("style.min.css"))
	.pipe(gcmq())
	.pipe(cleanCSS())
	.pipe(gulp.dest('assist/css/'))
	.pipe(livereload());
});

gulp.task('php', function () {
	return gulp.src('templates/**/*.php')
	.pipe(livereload());
});

gulp.task('js', function () {
	return gulp.src('assist/js/*.js')
	.pipe(livereload());
});

gulp.task('default', function () {
	livereload.listen();
	gulp.watch('__dev/css/*.css', ['css']);
	gulp.watch('templates/**/*.php', ['php']);
	gulp.watch('assist/js/*.js', ['js']);
});
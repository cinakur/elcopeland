var gulp             = require('gulp'),
    plumber          = require('gulp-plumber'),
    sass             = require('gulp-ruby-sass'),
    autoprefixer     = require('gulp-autoprefixer'),
    cleanCSS         = require('gulp-clean-css'),
    concat           = require('gulp-concat'),
    uglify           = require('gulp-uglify'),
    livereload       = require('gulp-livereload');

var themeName        = 'elcopeland',
    themePath        = 'wp-content/themes/' + themeName,
    jsPath           = themePath + '/assets/js';

/**
 * Compile Styles
 *
 * @since     1.0.0
 */
gulp.task('styles', function() {
	return sass( [ themePath + '/assets/scss/**/*', themePath + '/assets/scss/*' ] )
		.pipe(cleanCSS())
		.pipe(gulp.dest(themePath))
		.pipe(livereload());
});

/**
 * Concatenate scripts for home js file
 *
 * @since    1.0.0
 */
gulp.task('home-scripts', function(){
	return gulp.src([
		jsPath + '/mobile-navigation.js',
		jsPath + '/scripts.js',
		jsPath + '/home-scripts.js'
	])
	.pipe(concat('home-scripts.js'))
	.pipe(uglify())
	.pipe(gulp.dest(themePath + '/js'))
});

/**
 * Concatenate scripts for internal (non front-page) scripts
 *
 * @since    1.0.0
 */
gulp.task('page-scripts', function(){
	return gulp.src([
		jsPath + '/mobile-navigation.js',
		jsPath + '/scripts.js',
		jsPath + '/page-scripts.js'
	])
	.pipe(concat('page-scripts.js'))
	.pipe(uglify())
	.pipe(gulp.dest(themePath + '/js'))
});

/**
 * Watch task
 *
 * @since    1.0.0
 */
gulp.task('watch', function(){
	livereload.listen();

	gulp.watch(themePath + '/assets/scss/**/*', ['styles']);
  gulp.watch(themePath + '/*.php' ).on('change',function(file) {
    livereload.changed(file.path);
  });

});

/**
 * Prepare scripts and styles for deploy
 *
 * @since     1.0.0
 */
gulp.task( 'prepare', ['home-scripts', 'page-scripts', 'styles' ]);

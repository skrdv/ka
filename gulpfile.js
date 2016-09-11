
// General
var gulp 				= require('gulp');
var bower 			= require('gulp-bower');
var notify 			= require('gulp-notify');
var sourcemaps  = require('gulp-sourcemaps');
var browserSync = require('browser-sync').create();
var reload      = browserSync.reload;
var rename 			= require('gulp-rename');
var ignore      = require('gulp-ignore');
var rimraf      = require('gulp-rimraf'); 
var plumber     = require('gulp-plumber');
var cache       = require('gulp-cache');
var zip         = require('gulp-zip');

// Styles
var sass 				= require('gulp-sass');
var autoprefixer = require('gulp-autoprefixer');
var sourcemaps 	= require('gulp-sourcemaps');
var uglifycss 	= require('gulp-uglifycss');
var filter 			= require('gulp-filter');

// Scripts
var jshint 			= require('gulp-jshint');
var stylish 		= require('jshint-stylish');
var concat 			= require('gulp-concat');
var uglify 			= require('gulp-uglify');

// Images
var imagemin 		= require('gulp-imagemin');


// Config
var config = {
  project:  'ka',
  url:      'ka.skrdv.com',
  assets:    '../../../assets/*',
  styles: {
    files:  './library/scss/main.scss',
		parts:	'./library/scss/pace.scss',
    build:  '../../../assets/css'
  },
  scripts: {
    files:  ['./bower_components/fullpage.js/dist/jquery.fullpage.js',
            './library/js/custom.js'],
		parts:	'./bower_components/PACE/pace.js',
    build:  '../../../assets/js'
  },
  fonts: {
    files:  './library/fonts/**/*',
    build:  '../../../assets/fonts'
  },
  images: {
    files:    './library/img/**/*.{png,jpg,gif}',
    build:  '../../../assets/img'
  },
  svg: {
    raw:    './library/svg/raw/**/*.{svg}',
    build:  './library/svg'
  },
  watch: {
    scss:   './library/scss/**/*.scss',
    js:     './library/js/*.js',
    php:    './**/*.php'
  }
};



// Browser Sync
gulp.task( 'browser-sync', function() {
  browserSync.init({
    //proxy: 'dev.kira-all.ru',
    open: true,
    injectChanges: true,
    // port: 7000,
  });
});

// Styles
gulp.task('styles:combined', function () {
  return gulp.src(config.styles.files)
    .pipe(rename({basename: 'style'}))
    .pipe(sourcemaps.init())
    .pipe(sass({
      errLogToConsole: true,
      outputStyle: 'expanded',
      precision: 10
    }))
    .on('error', console.error.bind(console))
    .pipe(autoprefixer({
      browsers: ['last 2 versions'],
      cascade: false
    }))
    .pipe(sourcemaps.write())
    .pipe(gulp.dest(config.styles.build))
    .pipe(rename({suffix:'.min'}))
    .pipe(uglifycss({
      uglyComments: true
    }))
    .pipe(gulp.dest(config.styles.build))
		.pipe( browserSync.stream() )
    .pipe(notify({message: 'Styles:Combined - OK!', onLast: true }))
});

// Styles Single
gulp.task ('styles:single', function(){
		return gulp.src(config.styles.parts)
		.pipe(sass({
      errLogToConsole: true,
      outputStyle: 'expanded',
      precision: 10
    }))
    .on('error', console.error.bind(console))
    .pipe(autoprefixer({
      browsers: ['last 2 versions'],
      cascade: false
    }))
    .pipe(rename({suffix:'.min'}))
    .pipe(uglifycss({ uglyComments: true }))
    .pipe(gulp.dest(config.styles.build))
    .pipe(notify({message: 'Styles:Single - OK!', onLast: true }))
});

// Scripts Combined
gulp.task( 'scripts:combined', function() {
  return gulp.src(config.scripts.files)
    .pipe(concat('script.js'))
    .pipe(gulp.dest(config.scripts.build))
    .pipe(rename({ suffix: '.min' }))
    .pipe(uglify())
    .pipe(gulp.dest(config.scripts.build))
    .pipe(notify({message: 'Scripts:Combined - OK!', onLast: true }));
});

// Scripts Single
gulp.task ('scripts:single', function(){
		return gulp.src(config.scripts.parts)
		.pipe(rename({ suffix: '.min' }))
		.pipe(uglify())
		.pipe(gulp.dest(config.scripts.build))
		.pipe(notify({message: 'Scripts:Single - OK!', onLast: true }));
});


// Fonts
gulp.task('fonts', function() {
   gulp.src(config.fonts.files, {base: './library/fonts'})
   .pipe(gulp.dest(config.fonts.build))
   .pipe(notify({message: 'Fonts - OK!', onLast: true }));
});

// Images
gulp.task( 'images', function() {
  gulp.src( config.images.files )
    .pipe( imagemin( {
          progressive: true,
          optimizationLevel: 3, // 0-7 low-high
          interlaced: true,
          svgoPlugins: [{removeViewBox: false}]
        } ) )
    .pipe(gulp.dest( config.images.build ))
    .pipe( notify( { message: 'Images - OK!', onLast: true } ) );
});

// Clean
gulp.task('clean', function() {
 	return gulp.src(config.assets, { read: false })
		 		.pipe(rimraf({ force: true }))
				.pipe(cache.clearAll(done))
		 		.pipe(notify({ message: 'Cleanup - OK!', onLast: true }));
});

// Styles
gulp.task('styles', ['styles:combined', 'styles:single']);

// Scripts
gulp.task('scripts', ['scripts:combined', 'scripts:single']);

// Build
gulp.task('build', ['styles', 'scripts', 'fonts', 'images']);

// Default
gulp.task( 'default', ['styles', 'scripts', 'browser-sync'], function () {
  gulp.watch( config.watch.scss, [ 'styles' ] );
  gulp.watch( config.watch.js, [ 'scripts', reload ] );
	gulp.watch( config.watch.php, reload );
 });

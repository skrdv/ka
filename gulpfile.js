
// General
var gulp        = require('gulp');
var bower       = require('gulp-bower');
var notify      = require('gulp-notify');
var rename       = require('gulp-rename');

// Styles
var sass         = require('gulp-sass');
var autoprefixer = require('gulp-autoprefixer');
var sourcemaps = require('gulp-sourcemaps');
var uglifycss = require('gulp-uglifycss');
var filter       = require('gulp-filter');

// Scripts
var jshint = require('gulp-jshint');
var stylish = require('jshint-stylish');
var concat = require('gulp-concat');
var uglify = require('gulp-uglify');
var karma = require('gulp-karma');


var config = {
  project:  'ka',
  url:      'ka.skrdv.com',
  bower:    './bower_components',
  styles: {
    files:  './library/scss/style.scss',
    build:  '../../../assets/css'
  },
  scripts: {
    files:  ['./bower_components/jquery/jquery.js',
            './bower_components/fullpage.js/dist/jquery.fullpage.js',
            './bower_components/jquery-backstretch/jquery.backstretch.js',
            './bower_components/semantic-ui-sass/app/assets/javascripts/semantic-ui.js',
            './library/js/custom.js'],
    build:  '../../../assets/js'
  },
  img: {
    files:    './library/img/raw/**/*.{png,jpg,gif}',
    build:  '../../../assets/img'
  },
  svg: {
    raw:    './library/svg/raw/**/*.{svg}',
    build:  './library/svg'
  },
  watch: {
    scss:   './library/scss/**/*.scss',
    js:     './library/js/custom/*.js',
    php:    './**/*.php'
  }
};

gulp.task('styles', function () {
  return gulp.src(config.styles.files)
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
    .pipe(notify({message: 'TASK: "styles" completed!', onLast: true }))
});

gulp.task( 'scripts', function() {
  return gulp.src(config.scripts.files)
    .pipe(concat('script.js'))
    .pipe(gulp.dest(config.scripts.build))
    .pipe(rename({
      suffix: '.min'
    }))
    .pipe(uglify())
    .pipe(gulp.dest(config.scripts.build))
    .pipe(notify({message: 'TASK: "scripts" completed!', onLast: true }));
});

 gulp.task( 'images', function() {
  gulp.src( imagesSRC )
    .pipe( imagemin( {
          progressive: true,
          optimizationLevel: 3, // 0-7 low-high
          interlaced: true,
          svgoPlugins: [{removeViewBox: false}]
        } ) )
    .pipe(gulp.dest( imagesDestination ))
    .pipe( notify( { message: 'TASK: "images" Completed! 💯', onLast: true } ) );
 });

 gulp.task('icons', function() {
   return gulp.src(config.bower + '/fontawesome/fonts/**.*')
     .pipe(gulp.dest('./library/fonts'));
 });


 gulp.task( 'translate', function () {
     return gulp.src( projectPHPWatchFiles )
         .pipe(sort())
         .pipe(wpPot( {
             domain        : text_domain,
             destFile      : destFile,
             package       : packageName,
             bugReport     : bugReport,
             lastTranslator: lastTranslator,
             team          : team
         } ))
        .pipe(gulp.dest(translatePath))
        .pipe( notify( { message: 'TASK: "translate" Completed! 💯', onLast: true } ) )

 });

 gulp.task( 'default', ['styles', 'vendorsJs', 'customJS', 'images', 'browser-sync'], function () {
  gulp.watch( projectPHPWatchFiles, reload ); // Reload on PHP file changes.
  gulp.watch( styleWatchFiles, [ 'styles' ] ); // Reload on SCSS file changes.
  gulp.watch( vendorJSWatchFiles, [ 'vendorsJs', reload ] ); // Reload on vendorsJs file changes.
  gulp.watch( customJSWatchFiles, [ 'customJS', reload ] ); // Reload on customJS file changes.
 });

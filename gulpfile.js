
// General
var gulp        = require('gulp');
var bower       = require('gulp-bower');
var notify      = require('gulp-notify');
var rename       = require('gulp-rename');
var browserSync = require('browser-sync');
var reload      = browserSync.reload;

// Styles
var sass         = require('gulp-sass');
var autoprefixer = require('gulp-autoprefixer');
var sourcemaps = require('gulp-sourcemaps');
var uglifycss = require('gulp-uglifycss');
var filter       = require('gulp-filter');

// scripts
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
    custom:  './library/scss/ka.scss',
    build:    './library/css'
  },
  scripts: {
    files:  ['./bower_components/jquery/jquery.js',
             './bower_components/jquery-backstretch/jquery.backstretch.js'],
    custom: ['./bower_components/fullpage.js/dist/jquery.fullpage.js',
            './library/js/custom/*.js'],
    build:  './library/js'
  },
  img: {
    raw:    './library/img/raw/**/*.{png,jpg,gif}',
    build:  './library/img'
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

gulp.task('bower', function() {
  return bower()
    .pipe(gulp.dest(config.bower))
});

gulp.task('icons', function() {
  return gulp.src(config.bower + '/fontawesome/fonts/**.*')
    .pipe(gulp.dest('./library/fonts'));
});

gulp.task('browser-sync', function() {
  var files = [
    '**/*.php',
    '**/*.{png,jpg,gif}'
  ];
  browserSync.init(files, {
    server: {
      baseDir: "./"
    },
    proxy: config.url,
    open: true,
    notify: true,
    injectChanges: true,
  });
});

gulp.task('cssVendor', function () {
  return gulp.src(config.styles.files)
    .pipe(concat('vendors.js'))
    .pipe(sourcemaps.init())
    .pipe(sass({
      errLogToConsole: true,
      outputStyle: 'nested',
      precision: 10
    }))
    .on('error', console.error.bind(console))
    .pipe(autoprefixer({
      browsers: ['last 2 versions'],
      cascade: false
    }))
    .pipe(sourcemaps.write())
    .pipe(gulp.dest(config.styles.build))
    .pipe(filter('**/*.css'))
    .pipe(reload({stream:true}))
    .pipe(rename({suffix:'.min'}))
    .pipe(uglifycss({
      uglyComments: true
    }))
    .pipe(gulp.dest(config.styles.build))
    .pipe(reload({stream:true}))
    .pipe(notify({message: 'TASK: "cssVendor" Completed!', onLast: true }))
});

gulp.task('cssCustom', function () {
  return gulp.src(config.styles.custom)
    .pipe(sourcemaps.init())
    .pipe(sass({
      errLogToConsole: true,
      outputStyle: 'nested',
      precision: 10
    }))
    .on('error', console.error.bind(console))
    .pipe(autoprefixer({
      browsers: ['last 2 versions'],
      cascade: false
    }))
    .pipe(sourcemaps.write())
    .pipe(gulp.dest(config.styles.build))
    .pipe(filter('**/*.css'))
    .pipe(reload({stream:true}))
    .pipe(rename({suffix:'.min'}))
    .pipe(uglifycss({
      uglyComments: true
    }))
    .pipe(gulp.dest(config.styles.build))
    .pipe(reload({stream:true}))
    .pipe(notify({message: 'TASK: "cssCustom" Completed!', onLast: true }))
});

gulp.task( 'jsVendor', function() {
  return gulp.src(config.scripts.files)
    .pipe(concat('vendors.js'))
    .pipe(gulp.dest(config.scripts.build))
    .pipe(rename({
      suffix: '.min'
    }))
    .pipe(uglify())
    .pipe(gulp.dest(config.scripts.build))
    .pipe(notify({message: 'TASK: "jsVendor" completed!', onLast: true }));
});

gulp.task( 'jsCustom', function() {
    gulp.src(config.scripts.custom)
    .pipe(concat('scripts.js'))
    .pipe(gulp.dest(config.scripts.build))
    .pipe(rename({
      suffix: '.min'
    }))
    .pipe(uglify())
    .pipe(gulp.dest(config.scripts.build))
    .pipe( notify({ message: 'TASK: "jsCustom" completed!', onLast: true }));
 });

 gulp.task('jsTest', function() {
 	return gulp.src([paths.test.input].concat([paths.test.spec]))
 		.pipe(karma({ configFile: paths.test.karma }))
 		.on('error', function(err) { throw err; });
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

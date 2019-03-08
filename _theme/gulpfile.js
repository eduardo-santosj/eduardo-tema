// Require gulpfile configuration file
const conf = require('./config/.config.json');

// Require necessary packages for transpiling files
const babel = require('gulp-babel'),
      browserSync = require('browser-sync'),
      gulp = require('gulp'),
      autoprefixer = require('gulp-autoprefixer'),
      bless = require('gulp-bless'),
      changed = require('gulp-changed'),
      concat = require('gulp-concat'),
      cssnano = require('gulp-cssnano'),
      ftp = require('vinyl-ftp'),
      gutil = require('gulp-util'),
      htmlmin = require('gulp-htmlmin'),
      imagemin = require('gulp-imagemin'),
      runSequence = require('run-sequence'),
      sass = require('gulp-sass'),
      uglify = require('gulp-uglify'),
      wait = require('gulp-wait'),
      watch = require('gulp-watch');

// Custom tasks for individual extensions
gulp.task('php', () => {
  return gulp.src([conf.dev.php])
    .pipe(changed(conf.build.php, { extension: 'php' }))
    .pipe(gulp.dest(conf.destination));
});

gulp.task('css', () => {
  return gulp.src([conf.dev.css])
    .pipe(wait(200))
    .pipe(changed(conf.build.css, { extension: 'css' }))
    .pipe(sass())
    .pipe(autoprefixer())
    .pipe(bless())
    .pipe(cssnano())
    .pipe(gulp.dest(conf.destination + '/css'));
});

gulp.task('js', () => {
  return gulp.src([conf.dev.js])
    .pipe(changed(conf.build.js, { extension: 'js' }))
    //.pipe(babel())
    .pipe(uglify())
    .pipe(concat('main.min.js'))
    .pipe(gulp.dest(conf.destination + '/js'));
});

gulp.task('img', () => {
  return gulp.src([conf.dev.img])
    .pipe(imagemin())
    .pipe(gulp.dest(conf.destination + '/img'));
});

// Compile fonts on theme folder
gulp.task('fonts', () => {
  return gulp.src([conf.dev.fonts])
    .pipe(gulp.dest(conf.destination + '/fonts'));
});


gulp.task('base', () => {
  return gulp.src(['source/style.css'])
    .pipe(gulp.dest('../wp-content/themes/eduardoTema'));
});

gulp.task('watch', () => {
  var base = gulp.watch([conf.dev.php], ['php']);
  var css = gulp.watch([conf.dev.cssAll], ['css']);
  var js = gulp.watch([conf.dev.js], ['js']);
  var fonts = gulp.watch([conf.dev.fonts], ['fonts']);
  var img = gulp.watch([conf.dev.img], ['img']);
});

gulp.task('browser-sync', () => {
  browserSync.init([conf.destination], {
		proxy: conf.bs.proxy,
		browser: conf.bs.browser,
		port: conf.bs.port,
		injectChanges: true,
		notify: true,
    reloadOnRestart: true,
    reloadDebounce: 100
  });
});

// Auto deploy to Kinghost server
// function ftpConnectionParams() {
//   return ftp.create({
//     host: "",
//     port: 80,
//     user: "",
//     password: "",
//     parallel: 5,
//     log: gutil.log
//   });
// }

// gulp.task('ftp-clean', () => {
//   var conn = ftpConnectionParams();

//   return conn.clean(conf.deploy.path, conf.deploy.path);
// });

// gulp.task('ftp-upload', () => {
//   var conn = ftpConnectionParams();

//   return gulp.src('../wp-content/themes/**', { base: 'themes', buffer: false })
//     .pipe(conn.newer(conf.deploy.path))
//     .pipe(conn.dest(conf.deploy.path))
// });

// gulp.task('deploy', (done) => {
//   runSequence('ftp-clean', 'ftp-upload', function(err) {
//     if ( err ) return err;
//     done();
//   });
// });


// Group tasks
gulp.task('dev', ['base', 'php', 'css', 'js', 'img', 'fonts','watch', 'browser-sync']);
gulp.task('build', ['base', 'php', 'css', 'js', 'img', 'fonts']);
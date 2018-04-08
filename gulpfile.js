let gulp = require('gulp');
let browserSync = require('browser-sync').create();
let sass = require('gulp-sass');
let plumber = require('gulp-plumber');

let config = {
  browserSyncOptions: {
    proxy: 'localhost/richard-resto', // <- change here
    notify: false
  },
  browserSyncWatchFiles: [
    './assets/css/*.css',
    './assets/js/*.js',
    './**/*.php'
  ],
  path: {
    js: './assets/js',
    css: './assets/css',
    sass: './assets/sass'
  }
};

gulp.task('default', ['browser-sync', 'watch', 'sass'], function() {
  // 
});

gulp.task('browser-sync', function() {
  browserSync.init(config.browserSyncWatchFiles, config.browserSyncOptions);
});

gulp.task('watch', function() {
  gulp.watch(config.path.sass + '/**/*.scss', ['sass']);
});

gulp.task('sass', function() {
  let stream = gulp.src(config.path.sass + '/*.scss')
    .pipe(plumber({
      errorHandler: function(err) {
        console.log(err);
        this.emit('end');
      }
    }))
    .pipe(sass({errLogToConsole: true}))
    .pipe(gulp.dest(config.path.css));
  return stream;
});

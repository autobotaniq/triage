'use strict';

const browserSync = require('browser-sync').create(),
      gulp        = require('gulp'),
      plugins     = require('gulp-load-plugins')(),
      uglifyES    = require('uglify-es'),
      composer    = require('gulp-uglify/composer');

plugins.fs                      = require('fs');
plugins.path                    = require('path');
plugins.merge                   = require('merge-stream');
plugins.pngquant                = require('imagemin-pngquant');
plugins.uglifyES                = composer(uglifyES, console);


gulp.task('pl', function () {
  console.log(plugins);
});

/* Secondary functions */
let getFolders = function (dir) {
  return plugins.fs.readdirSync(dir)
    .filter(function (file) {
      return plugins.fs.statSync(plugins.path.join(dir, file)).isDirectory();
    });
};
/* End Secondary functions */

/* Paths and variables */
let src = {
    main: '../',
    scss: './scss',
    js: './js'
  },
  dist = {
    main: '../',
    css: '../assets/css',
    js: '../assets/js'
  },
  domain = 'triage';
/* End Paths and variables */

/* Service tasks */
gulp.task('clean-css-maps', function () {
  return gulp.src([dist.css + '/maps', dist.css + '/components/maps'], {read: false})
    .pipe(plugins.clean({force: true}))
});
/* End Service tasks */


gulp.task('scss', require('./gulpfile_css')(gulp, plugins, getFolders, false));
gulp.task('scss:release', require('./gulpfile_css')(gulp, plugins, getFolders, true));
gulp.task('js', require('./gulpfile_js')(gulp, plugins, getFolders, false));
gulp.task('js:release', require('./gulpfile_js')(gulp, plugins, getFolders, true));
gulp.task('vendor', require('./gulpfile_vendor')(gulp, plugins));

gulp.task('browser-sync', function () {
  if(domain) {
    browserSync.init({
      proxy: domain,
      notify: false,
      port: 9000
    })
  } else {
    browserSync.init({
      server: {
        baseDir: dist.main
      },
      port: 4000
    })
  }

  gulp.watch([
    dist.main + '**/*.php',
    dist.css + '/**/*.css',
    dist.js + '/**/*.js'
  ], {cwd:'./'})
    .on('change',  function(path, stats) {
      browserSync.reload();
    });
});

gulp.task('watch', function () {
  gulp.watch(src.scss + '/**/*.scss', {cwd:'./'}, gulp.series('scss'));
  gulp.watch(src.js + '/**/*.js', {cwd:'./'}, gulp.series('js'));
});

gulp.task('default', gulp.series('vendor', 'scss', 'js', gulp.parallel('browser-sync', 'watch')));
gulp.task('release', gulp.series('vendor', 'clean-css-maps', 'scss:release', 'js:release'));

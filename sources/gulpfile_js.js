module.exports = function (gulp, plugins, getFolders, mobileSettings) {
  function onError(e) {
    console.log(e.toString());
    this.emit('end');
  }

  /* Paths */
  let src = {
      main: './js/[^_]*.js'
    },
    dist = {
      main: '../assets/js'
    };
  /* End Paths */

  return function () {

    return gulp.src(src.main)
      .pipe(plugins.plumber({errorHandler: onError}))
      .pipe(plugins.changedInPlace({firstPass: true}))
      .pipe(plugins.if(!mobileSettings, plugins.uglifyES()))
      //.pipe(plugins.debug({title: 'JS:'}))
      .pipe(gulp.dest(dist.main));

  };
};
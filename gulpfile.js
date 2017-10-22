var gulp            = require("gulp");
var sass            = require("gulp-sass");
var pleeease        = require("gulp-pleeease");
var uglify          = require("gulp-uglify");
var concat          = require("gulp-concat");
var plumber         = require("gulp-plumber");
var browserify      = require("browserify");
var source          = require('vinyl-source-stream');
var packageImporter = require('node-sass-package-importer');
var css2txt         = require('gulp-css2txt');
var fontmin         = require('gulp-fontmin');
// var browserSync  = require('browser-sync').create();

gulp.task("sass", function() {
  gulp.src("webroot/css/scss/*.scss")
  .pipe(sass({
      importer: packageImporter({
        extensions: ['.scss', '.css']
      })
  }))
  .pipe(pleeease())
  .pipe(concat('style.css'))
  .pipe(gulp.dest("webroot/css"));
});

gulp.task('subset', cb => {

  const texts = []

  // まずCSSを処理してcontentプロパティの値を集めます
  gulp.src(['webroot/css/style.css'])
    .pipe(css2txt())
    .on('data', file => texts.push(file.contents.toString()))
    .on('end', () => {

      const text =  texts.join('')
      const formats = ['eot', 'ttf', 'woff', 'svg']

      // cssからの文字の抽出が終わったら、これをフォントファイルに適用します
      gulp.src(['./node_modules/font-awesome/fonts/fontawesome-webfont.ttf'])
        .pipe(fontmin({ text, formats }))
        .pipe(gulp.dest('webroot/fonts'))
        .on('end', () => cb())
    })
})


gulp.task('js', function () {
  return browserify('webroot/js/module/entry.js')
    .bundle()
    .pipe(source('bundle.js'))
    .pipe(gulp.dest('webroot/js'));
});

/* Apacheが80番使ってるからbrowser-syncのプロセスが80番掴めねーって言って勝手に81番にするから使えませんでしたと。 */
/*gulp.task('browser-sync', function() {
  browserSync.init({
    server: {
      baseDir: './media'
    },
    open: 'local',
    port: 80
  });
});

gulp.task('browser-reload', function () {
  browserSync.reload();
});*/

gulp.task('default', ['sass','js'], function() {
  gulp.watch("webroot/css/scss/*.scss",['sass']);
  gulp.watch("webroot/js/module/*.js",['js']);
});
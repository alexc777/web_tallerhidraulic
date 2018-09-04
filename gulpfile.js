var gulp = require('gulp');
var plumber = require('gulp-plumber');
var sass = require('gulp-sass');
var cssnano = require('gulp-cssnano');
var autoprefixer = require('gulp-autoprefixer');
var sourcemaps = require('gulp-sourcemaps');
var browserSync = require('browser-sync').create();


gulp.task('sass', function() {
  gulp.src('./sass/**/*.scss')
    .pipe(sourcemaps.init({ loadMaps: true }))
    .pipe(plumber())
    .pipe(sass({includePaths: ['./sass/layouts/']}))
    .pipe(cssnano())
    .pipe(autoprefixer({
        browsers: ['last 2 versions'],
        cascade: false
    }))
    .pipe(sourcemaps.write('.'))
    .pipe(gulp.dest('./css'))
    .pipe(browserSync.stream());
});

gulp.task('watch', ['sass'], function() {
    gulp.watch('./sass/**/*.scss', ['sass']);
});

// Configuración browserSync

//archivos a observar
var browserSyncWatchFiles = [
    './css/*.css',
    './js/*.js',
    './**/*.php'
];


// Servidor proxy para cargar archivos
var browserSyncOptions = {
    proxy: "webtaller.test",
    notify: false
};

gulp.task('default', ['sass'], function () {
    browserSync.init(browserSyncWatchFiles, browserSyncOptions);
    gulp.watch("sass/**/*.scss", ['sass']);
});
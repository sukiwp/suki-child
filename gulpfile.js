//Definisikan lokasi
var basePaths = {
    node: './node_modules',
    css_location: './assets/css/',
    js_location: './assets/js/',
};

// Definisikan & muat package yang ingin digunakan.
let gulp        = require('gulp'),
    concat      = require('gulp-concat'),
    sass        = require('gulp-sass'),
    cleanCSS    = require('gulp-clean-css'),
    sourcemaps  = require('gulp-sourcemaps'),
    minify      = require('gulp-minify'),
    browsersync = require('browser-sync');

// Awasi file dengan browser-sync.
let browsersyncWatchFiles = [
    basePaths.css_location + '*.css',
    basePaths.js_location + '*.js'
];

// Ubah file *.sass menjadi *.css
function styles() {
    return (
        gulp
            .src( basePaths.css_location + '/sass/*.scss' )
            .pipe( sass( { style: 'compressed' } ).on('error', sass.logError) )
            .pipe( cleanCSS( { debug: true }, (details) =>{
                console.log(details.name + ': ' + (details.stats.originalSize / 1000) + 'KB' );
                console.log(details.name + ': ' + (details.stats.minifiedSize / 1000) + 'KB' );
            } ) )
            .pipe( gulp.dest( basePaths.css_location ) )
    );
}


// Perkecil File javascript.
function scripts() {
    return (
        gulp
            .src( basePaths.js_location + '/src/*.js' )
            .pipe( minify() )
            .pipe( gulp.dest( basePaths.js_location ) )
    );
}

// Fungsi untuk melakukan perubahan ketika ada file yang berubah
function watch() {
    gulp.watch( basePaths.css_location + 'sass/**/*.scss', styles );
    gulp.watch( basePaths.js_location + 'src/**/*.js', scripts);
}

// Buat perintah gulp dan jalankan fungsi yang telah di definisikan.
exports.styles = styles;
exports.scripts = scripts;
exports.watch = watch;


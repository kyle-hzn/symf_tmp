var gulp = require( 'gulp' );

gulp.task( 'default', function()
{
    console.log( 'Lauching Gulp...' );
} );

// Dependencies
var gulp          = require( 'gulp'         ),
    gulp_css_nano = require( 'gulp-cssnano' ),
    gulp_rename   = require( 'gulp-rename'  ),
    gulp_concat   = require( 'gulp-concat'  ),
    gulp_uglify   = require( 'gulp-uglify'  ),
    gulp_plumber  = require( 'gulp-plumber' ),
    gulp_stylus   = require( 'gulp-stylus'  );
    gulp_sass     = require( 'gulp-sass'  );

var config = {
    bowerDir: './public/components',
    stylusPath: './assets/stylus',
    cssPath: './public/css',
    jsPath: './public/js'
}


// CSS task+Stylus
gulp.task( 'stylus', function()
{
    gulp.src( [config.stylusPath + '/main.styl',  config.stylusPath + '/pages/**' ] )   // main.styl as input
        .pipe( gulp_plumber() )                    // Print errors
        .pipe( gulp_stylus( { compress: true } ) ) // Convert to CSS
        .pipe( gulp.dest( './public/css' ) );         // Put it in CSS folder
} );


// JS task
gulp.task( 'js', function()
{
    return gulp.src( [                          // Get JS files (in order)
        config.jsPath + '/**'
    ] )
        .pipe( gulp_concat( 'main_js.min.js' ) )   // Concat in one file
        .pipe( gulp_uglify() )                  // Minify them
        .pipe( gulp.dest( './public/js' ) );       // Put it in folder
} );


// Watch task
gulp.task( 'watch', function()
{
    // Watch for STYLUS modifications
    gulp.watch(config.stylusPath + '/**', [ 'stylus' ] );

    // Watch for JS modifications
    gulp.watch(config.jsPath + '/**', [ 'js' ] );


} );

gulp.task( 'default', [ 'stylus', 'js', 'watch' ] );
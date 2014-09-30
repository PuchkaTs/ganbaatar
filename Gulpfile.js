var gulp = require('gulp');
var sass = require('gulp-sass');
var autoprefixer = require('gulp-autoprefixer');

var sassDir = 'public/css';
var targetCSSDir = 'public/css/autopref';

gulp.task('css', function(){
    return gulp.src(sassDir +'/main.css')
        .pipe(autoprefixer('last 10 version'))
        .pipe(gulp.dest(targetCSSDir));
});

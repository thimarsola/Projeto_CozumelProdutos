const gulp = require('gulp');
const imagemin = require('gulp-imagemin');
 
exports.default = () => (
    gulp.src('./_cdn/dist/img/*')
        .pipe(imagemin())
        .pipe(gulp.dest('./_cdn/img'))
);
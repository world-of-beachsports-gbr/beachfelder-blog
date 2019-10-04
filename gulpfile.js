"use strict";

let gulp = require("gulp");
let sass = require("gulp-sass");
let cleanCSS = require("gulp-clean-css");
let autoprefixer = require("gulp-autoprefixer");
let rename = require("gulp-rename");
let browserSync = require("browser-sync");

sass.compiler = require("node-sass");

gulp.task("sass", () => {
  return gulp
    .src("scss/**/main.scss")
    .pipe(sass().on("error", sass.logError))
    .pipe(autoprefixer("last 2 version"))
    .pipe(gulp.dest("assets/css"))
    .pipe(
      browserSync.reload({
        stream: true
      })
    );
});

gulp.task("minify", ()=> {
  return gulp
    .src("assets/css/main.css")
    .pipe(cleanCSS({ compatibility: "ie10" }))
    .pipe(rename("main.min.css"))
    .pipe(gulp.dest("assets/css/"))
})

//BROWSERSYNC SETUP
gulp.task("browserSync", () =>
  browserSync.init({
    proxy: "http://aha-lp.devsite"
  })
);

gulp.task("dev", ["browserSync", "sass"], () => {
  gulp.watch("scss/**/*.scss", ["sass"]);
  gulp.watch("**/*.php").on("change", browserSync.reload);
});

gulp.task("build", ["sass", "minify"])
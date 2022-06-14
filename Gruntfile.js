module.exports = function (grunt) {
  const sass = require('sass');

  require('load-grunt-tasks')(grunt);

  grunt.initConfig({
    sass: {
      options: {
        implementation: sass,
        outputStyle: 'compressed',
        sourceMap: false,
      },
      dist: {
        files: {
          'style.css': 'scss/style.scss',
        },
      },
    },
    watch: {
      source: {
        files: ['scss/*.scss'],
        tasks: ['sass'],
        options: {
          livereload: true,
        },
      },
    },
    imagemin: {
      jpgs: {
        options: {
          progressive: true,
        },
        files: [
          {
            expand: true,
            cwd: 'src/img',
            src: ['*.{png,jpg,gif}'],
            dest: 'img/',
          },
        ],
      },
    },
  });

  grunt.loadNpmTasks('grunt-contrib-imagemin');
  grunt.registerTask('default', ['sass']);
};

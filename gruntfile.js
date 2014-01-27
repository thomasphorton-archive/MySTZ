module.exports = function(grunt) {


  grunt.initConfig({
    pkg: grunt.file.readJSON('package.json'),

    concat: {

      dist: {
        src: [
            'js/src/libs/jquery-1.10.2-min.js',
            'js/src/libs/underscore-min.js',
            'js/src/libs/backbone-min.js',
            'js/src/libs/bootstrap-min.js',
            'js/src/plugins/**/*.js',
            'js/src/modules/**/*.js'
        ],
        dest: 'js/build/production.js'
      },
      options: {
        stripBanners: true,
        banner: '/*! <%= pkg.name %> - v<%=pkg.version %> - ' +
          '<%= grunt.template.today("yyyy-mm-dd") %> */',
        separator: ';\n\n'
      }
    },

    uglify: {
      build: {
        src: 'js/build/production.js',
        dest: 'js/build/production.min.js'
      }
    },

    imagemin: {
      dynamic: {
        files: [{
          expand: true,
          cwd: 'images/',
          src: ['**/*.{png,jpg,gif}'],
          dest: 'images/'
        }]
      }
    },

    watch: {
      scripts: {
        files: ['js/src/**/*.js'],
        tasks: ['concat', 'uglify'],
        options: {
          spawn: false,
        },
      } 
    },

    "ftp-deploy": {
      build: {
        auth: {
          host: 'canvassedapparel.com',
          port: 21,
          authKey: 'key1'
        },
        src: './',
        dest: '/beta',
        //dest: '/htdocs/mystz.com',
        exclusions: [
          '**/.DS_Store',
          './.git/**/*',
          './images/**/*',
          './js/src/**/*',
          './node_modules/**/*',
          '.gitignore',
          'README.md',
          'gruntfile.js',
          'dist/tmp',
          '.ftppass',
        ]
      }
    },

  });

  // 3. Where we tell Grunt we plan to use this plug-in.
  grunt.loadNpmTasks('grunt-contrib-concat');

  grunt.loadNpmTasks('grunt-contrib-uglify');

  grunt.loadNpmTasks('grunt-contrib-imagemin');

  grunt.loadNpmTasks('grunt-contrib-watch');

  grunt.loadNpmTasks('grunt-ftp-deploy');

  // 4. Where we tell Grunt what to do when we type "grunt" into the terminal.
  grunt.registerTask('default', ['watch']);

  grunt.registerTask('beta', ['ftp-deploy']);

};
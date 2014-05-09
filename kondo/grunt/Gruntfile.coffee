module.exports = (grunt) ->

  grunt.initConfig

    ### config ###
    js_files:      "../js"
    #coffee_files: "../coffee"
    css_files:     "../css"
    sass_files:    "../sass"
    scss_files:    "../scss"
    #assets_files: "../assets"

    ### tasks ###

    #coffee:

    #copy:

    #uglify:

    #concat:

    cssmin:
      css:
        files:
          '<%= css_files %>/core.bundle.min.css': ['<%= css_files %>/core.bundle.css']
          '<%= css_files %>/app.bundle.min.css': ['<%= css_files %>/app.bundle.css']

    compass:
      dev:
        options:
          config: 'compass.config.rb'
          environment: 'development'
      prod:
        options:
          config: 'compass.config.rb'
          environment: 'production'

    watch:
      js:
        files: [
          '<%= js_files %>/*.js'
          '<%= js_files %>/**/*.js'
          '<%= js_files %>/**/**/*.js'
        ]

        tasks: [
          'js'
        ]

        #options:

      css:
        files: [
          '<%= scss_files %>/*.scss'
          '<%= scss_files %>/**/*.scss'
          '<%= scss_files %>/**/**/*.scss'
        ]

        tasks: [
          'css'
        ]

        #options:
        #  interval: 2000

      all:
        files: [
          '<%= watch.js.files %>'
          '<%= watch.css.files %>'
        ]

        tasks: [
          'js'
          'css'
        ]

        #options:

  grunt.loadNpmTasks 'grunt-contrib'
  ###
  grunt.loadNpmTasks 'grunt-contrib-compass'
  grunt.loadNpmTasks 'grunt-contrib-concat'
  grunt.loadNpmTasks 'grunt-contrib-cssmin'
  grunt.loadNpmTasks 'grunt-contrib-uglify'
  grunt.loadNpmTasks 'grunt-contrib-watch'
  ###
  grunt.registerTask 'js', [
    #'coffee'
    #'copy'
    #'uglify'
  ]
  grunt.registerTask 'css', [
    'compass:dev'
    #'concat'
    'cssmin'
  ]

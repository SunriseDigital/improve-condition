module.exports = (grunt) ->

  grunt.initConfig

    ### config ###
    js_files:      "../js"
    #coffee_files: "../coffee"
    css_files:     "../css"
    sass_files:    "../sass"
    #assets_files: "../assets"

    ### tasks ###

    coffee:
      compile:
        files:
          '<%= js_files %>/common.js': ['<%= coffee_files %>/common.coffee']

    copy:
      dist:
        files:
          src: [
            '<%= coffee_files %>/common.js'
          ]
          dest: '<%= js_files %>'

    uglify:
      options:
        mangle: false

      js:
        files:
          '<%= js_files %>/common.min.js': ['<%= js_files %>/common.js']

    concat:
      set_css:
        src: [
            '<%= css_files %>/index.css'
            '<%= css_files %>/base.css'
            '<%= css_files %>/layout.css'
            '<%= css_files %>/state.css'
            '<%= css_files %>/module.css'
            '<%= css_files %>/theme.css'
          ]

        dest: '<%= css_files %>/set.css'

    cssmin:
      css:
        files:
          '<%= css_files %>/set.min.css': ['<%= css_files %>/set.css']

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
        ]

        tasks: [
          'js'
        ]

        #options:

      css:
        files: [
          '<%= sass_files %>/*.scss'
          '<%= sass_files %>/**/*.scss'
          '<%= sass_files %>/*.sass'
          '<%= sass_files %>/**/*.sass'
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
    #'cssmin'
  ]

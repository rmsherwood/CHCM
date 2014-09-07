'use strict';
module.exports = function(grunt) {

    grunt.initConfig({

    	compass: {
			  dev: {
			    options: {
			      require: 'susy', // optional if you don't use Susy. But you should!
			      sassDir: 'dev/scss',
			      cssDir: 'dev/css',
			      fontsDir: 'dev/fonts',
			      javascriptsDir: 'dev/js',
			      imagesDir: 'dev/images',
			      relativeAssets: true,
			    }
			  }
			},
        // watch our project for changes
        watch: {
            scripts: {
                files: ['js/*.js'],
                tasks: ['jshint', 'concat']
              },
              compass: {
                files: ['sass/{,*/}*.{scss,sass}', 'vendor/*', 'vendor/**/*'],
                tasks: ['compass:dev']
              }
            }
        });
    	grunt.loadNpmTasks('grunt-contrib-compass');
		grunt.loadNpmTasks('grunt-contrib-watch');			

		grunt.registerTask('default', [
		 	  'compass',
		 	  'watch'
    ]);

};
'use strict';
module.exports = function(grunt) {

    grunt.initConfig({

        // let us know if our JS is sound
        jshint: {
            options: {
                "bitwise": true,
                "browser": true,
                "curly": true,
                "eqeqeq": true,
                "eqnull": true,
                "es5": true,
                "esnext": true,
                "immed": true,
                "jquery": true,
                "latedef": true,
                "newcap": true,
                "noarg": true,
                "node": true,
                "strict": false,
                "trailing": true,
                "undef": true,
                "globals": {
                    "jQuery": true,
                    "alert": true
                }
            },
            all: [
                'Gruntfile.js',
                'js/source/*.js'
            ]
        },

        // concatenation and minification all in one
        uglify: {
            dist: {
                files: {
//                    'javascripts/build/vendor.min.js': [
//                        'javascripts/vendor/plugin1/jquery.plugin.js',
//                        'javascripts/vendor/plugin2/js/plugin/plugin.js'
//                    ],
                    'js/build/script.min.js': [
                        'js/customizer.js',
                        'js/featured-content-admin.js',
                        'js/functions.js',
                        'js/html5.js',
                        'js/keyboard-image-navigation.js',
                        'js/slider.js'
                    ]
                }
            }
        },

        // style (Sass) compilation via Compass
        compass: {
            dist: {
                options: {
                    sassDir: 'sass',
                    cssDir: '',
                    imagesDir: 'images',
                    images: 'images',
                    javascriptsDir: 'js',
                    fontsDir: 'fonts',
                    environment: 'production',
                    outputStyle: 'nested',
                    relativeAssets: true,
                    noLineComments: true,
                    force: true
                }
            }
        },

        // watch our project for changes
        watch: {
            compass: {
                files: [
                    'sass/*',
                    'sass/**/*',
                    'vendor/*',
                    'vendor/**/*'
                ],
                tasks: ['compass']
            },
            js: {
                files: [
                    '<%= jshint.all %>'
                ],
                tasks: ['jshint', 'uglify']
            }
        }
    });

    // load tasks
    grunt.loadNpmTasks('grunt-contrib-jshint');
    grunt.loadNpmTasks('grunt-contrib-uglify');
    grunt.loadNpmTasks('grunt-contrib-compass');
    grunt.loadNpmTasks('grunt-contrib-watch');

    // register task
    grunt.registerTask('default', [
        'jshint',
        'compass',
        'uglify',
        'watch'
    ]);

};
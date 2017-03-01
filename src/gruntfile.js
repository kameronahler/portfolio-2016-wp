/*
npm install --save-dev grunt time-grunt grunt-postcss cssnano pixrem autoprefixer css-mqpacker grunt-sass grunt-contrib-uglify grunt-contrib-watch grunt-notify
*/
module.exports = function(grunt) {
    require('time-grunt')(grunt);
    grunt.initConfig({

        // Sass
        sass: {
            dev:{
                options: {
                    lineNumbers: false,
                    trace: true,
                    sourcemap: 'inline'
                },
                files: [{
                    expand: true,
                    cwd: 'scss',
                    src: ['*.scss'],
                    dest: '../wp-content/themes/tracks-child',
                    ext: '.css'
                }]
            },
            build:{
                options: {
                    lineNumbers: false,
                    trace: true,
                    sourcemap: 'none'
                },
                files: [{
                    expand: true,
                    cwd: 'scss',
                    src: ['*.scss'],
                    dest: '../wp-content/themes/tracks-child',
                    ext: '.css'
                }]
            }
        },

        // Post CSS
        postcss: {
            dev: {
                options: {
                    map:true,
                    processors: [
                        require('autoprefixer')({
                            browsers: ['last 4 versions', '> .5% in US']
                        }),
                        require('css-mqpacker')({
                            expand: true,
                            cwd: '../wp-content/themes/tracks-child/',
                            src: '*.css',
                            dest: '../wp-content/themes/tracks-child/',
                            sort:true
                        }),
                        require('cssnano')({
                            calc: false,
                            colorMin: false,
                            convertValues: false,
                            discardUnused: false,
                            zindex: false,
                            reduceIdents: false,
                            mergeIdents: false,
                            minifySelectors: false,
                            minifyFontValues: false,
                            normalizeUrl: false,
                            safe: true,
                            mergeRules:true,
                            core:false
                        })
                    ]
                },
                src: '../wp-content/themes/tracks-child/*.css'
            },
            build: {
                options: {
                    map:false,
                    processors: [
                        require('autoprefixer')({
                            browsers: ['last 4 versions', '> .5% in US']
                        }),
                        require('pixrem')({
                            rootValue: '16px'
                        }),
                        require('css-mqpacker')({
                            expand: true,
                            cwd: '../wp-content/themes/tracks-child/',
                            src: '*.css',
                            dest: '../wp-content/themes/tracks-child/',
                            sort:true
                        }),
                        require('cssnano')({
                            calc: false,
                            colorMin: false,
                            convertValues: false,
                            discardUnused: false,
                            zindex: false,
                            reduceIdents: false,
                            mergeIdents: false,
                            minifySelectors: false,
                            minifyFontValues: false,
                            normalizeUrl: false,
                            safe: true,
                            mergeRules:true
                        })
                    ]
                },
                src: '../wp-content/themes/tracks-child/*.css'
            }
        },

        // Uglify
        uglify: {
            dev: {
                options: {
                    mangle: false,
                    compress: false,
                    preserveComments: 'all'
                },
                src: 'js/*.js',
                dest: '../wp-content/themes/tracks-child/main.min.js',
                sourceMap: true,
                sourceMapIncludeSources: true
            },
            build: {
                src: 'js/*.js',
                dest: '../wp-content/themes/tracks-child/main.min.js'
            }
        },

        // Notify
        notify: {
            sass: {
                options: {
                    title: 'Sass',
                    message: 'Compiled'
                }
            },
            js: {
                options: {
                    title: 'Javascript',
                    message: 'Compiled'
                }
            }
        },

        // Watch
        watch: {
            styles: {
                files: 'scss/**/*.scss',
                tasks: ['sass:dev', 'postcss:dev', 'notify:sass'],
                options: {
                    livereload: true
                }
            },
            scripts: {
                files: 'js/**/*.js',
                tasks: ['uglify:dev', 'notify:js'],
                options: {
                    livereload: true
                }
            },
            livereload: {
                files: [
                    '../wp-content/themes/tracks-child/*.css',
                    '../wp-content/themes/tracks-child/*.js',
                    '../wp-content/themes/tracks-child/*.html',
                    '../wp-content/themes/tracks-child/*.php'
                ],
                options: {
                    livereload: true
                }
            }
        }
    });

    // Load plugins
    grunt.loadNpmTasks('grunt-sass'); //libsass
    grunt.loadNpmTasks('grunt-postcss');
    grunt.loadNpmTasks('grunt-contrib-uglify');
    grunt.loadNpmTasks('grunt-contrib-watch');
    grunt.loadNpmTasks('grunt-notify');

    // Register tasks
    grunt.registerTask('default', [
        'sass:dev',
        'postcss:dev',
        'uglify:dev'
    ]);

    grunt.registerTask('build', [
        'sass:build',
        'postcss:build',
        'uglify:build'
    ]);
};

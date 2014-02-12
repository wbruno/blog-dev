module.exports = function (grunt) {
    'use strict';

    grunt.initConfig({
        pkg: grunt.file.readJSON('package.json'),
        uglify: {
            options: {
                banner: '/*Minified JavaScript of wbruno */\n'
            },
            my_target: {
                files: {
                    'javascript/all.min.js': ['src/javascript/all.js']
                }
            }
        },
        cssmin: {
            with_banner: {
                options: {
                    banner: '/* \n' +
                        'Theme Name: <%= pkg.name %> \n' +
                        'Theme URI: <%= pkg.homepage %>\n' +
                        'Description: <%= pkg.title %>\n' +
                        'Author: William Bruno \n' +
                        'Author URI: <%= pkg.repository.url %> \n' +
                        'Version: <%= pkg.version %> \n' +
                        'Tags: light, two-columns, left-sidebar, fluid-layout, sticky-post \n' +
                        'License: GNU General Public License v2 or later \n' +
                        'License URI: http://www.gnu.org/licenses/gpl-2.0.html \n' +
                        '*/'
                },
                files: {
                    'style.css': ['src/style.css', 'src/prettify.css']
                }
            }
        }
    });
 
    grunt.loadNpmTasks('grunt-contrib-uglify');
    grunt.loadNpmTasks('grunt-contrib-cssmin');

    grunt.registerTask('default', ['uglify', 'cssmin']);
};

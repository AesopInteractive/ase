'use strict';
module.exports = function(grunt) {
 
    require('load-grunt-tasks')(grunt);
 
    grunt.initConfig({
 
        // watch our project for changes
        watch: {
            less: {
				files: ['less/**/*'],
                tasks: ['less']
            },
            livereload: {
                options: { livereload: true },
                files: ['less/**/*', 'js/*.js', '**/*.html', '**/*.php', 'images/**/*.{png,jpg,jpeg,gif,webp,svg}']
            }
        },
        // style (Sass) compilation via Compass
		less: {
		  development: {
		    options: {
		      paths: ["less/source"]
		    },
		    files: {
		      "css/style.css": "less/style.less"
		    }
		  },
		  production: {
		    options: {
		      paths: ["less/source"],
		      cleancss:true
		    },
		    files: {
		      "css/style.css": "less/style.less"
		    }
		  }
		},
		// concatenation and minification all in one
   		uglify: {
            plugins: {
                options: {
                    sourceMap: 'js/ase.js.map',
                    sourceMappingURL: 'ase.js.map',
                    sourceMapPrefix: 2
                },
               	files: {
                    'js/ase.min.js': [
                    	'js/source/transition.js',
                     	'js/source/collapse.js',
                        'js/source/modal.js',
                        'js/source/tooltip.js',
                        'js/source/general.js'
                    ]
                }
            }
        }
    });
 
    // register task
    grunt.registerTask('default', ['watch']);
 
};
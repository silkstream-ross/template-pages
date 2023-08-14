const sass = require('sass');

module.exports = function(grunt){

    // Project configuration.
    grunt.initConfig({
        pkg: grunt.file.readJSON('package.json'),
        concat: {
            options:{
                banner: '(function(window,document){\n',
                footer: '\n})(window,document);'
            },
            dist: {
                src: ['src/js/lib/*.js', 'src/js/plugins/*.js', 'src/js/controller.js', 'src/js/modules/*.js', 'src/js/main.js'],
                dest: 'public/dist/js/main.js'
            }
        },
        uglify: {
            src_files: {
                files: {
                    'public/dist/js/main.min.js': ['public/dist/js/main.js']
                }
            }
        },
        sass: {
            options: {
                noLineComments: true,
                sourcemap: false,
                outputStyle: 'compressed',
                implementation: sass
            },
            dist: {
                files: {
                    'public/dist/css/default.css':'src/scss/default.scss'
                }
            }
        }
    });

    grunt.loadNpmTasks('grunt-contrib-concat');
    grunt.loadNpmTasks('grunt-contrib-uglify');
    grunt.loadNpmTasks('grunt-sass');

    grunt.registerTask('js', ['concat', 'uglify']);
    grunt.registerTask('scss', ['sass:dist']);
};

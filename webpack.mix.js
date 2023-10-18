let mix = require('laravel-mix'),
    build = require('./cleaver.build.js'),
    command = require('node-cmd')
    path = require('path');

mix.disableNotifications()
    .webpackConfig({
        plugins: [
            build.cleaver
        ],
        devServer: {
            contentBase: path.join(__dirname, 'dist')
        }
    })
    .setPublicPath('./')
    .js('resources/assets/js/app.js', 'dist/assets/js')
    .css('resources/assets/css/styles-light.css', 'dist/assets/css')
    .css('resources/assets/css/styles-dark.css', 'dist/assets/css')
    .postCss('resources/assets/css/app.css', 'dist/assets/css', [
        require('tailwindcss')
    ])
    .options({
        processCssUrls: false
    })
    .version()
    .copyDirectory('resources/images', 'dist/assets/images')
    .browserSync({
        files: [
            "dist/**/*",
            {
                match: ["resources/**/*"],
                fn: function(event, file) {
                    command.run('php cleaver build', (error, stdout, stderr) => {
                        console.log(error ? stderr : stdout);
                    });

                    this.reload();
                }
            }
        ],
        proxy: '127.0.0.1:80',
        notify: false,
        open: false
    });

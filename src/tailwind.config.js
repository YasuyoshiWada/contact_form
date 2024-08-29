module.exports = {
    // jitmodeを使用
    mode: 'jit',
    purge: [
        './resources/views/**/*.blade.php',
        './resources/css/**/*.css',
        './resources/js/**/*.js',
    ],
    darkMode: false, // or 'media' or 'class'
    theme: {
        extend: {
            colors: {
                custom_brown: '#8B7969',
                custom_bg: '#C5B9B0',
                custom_gray: '#F4F4F4',
                custom_brown_2: '#82756A',
            }
        },
    },
    variants: {
        extend: {},
    },
    plugins: [],
}

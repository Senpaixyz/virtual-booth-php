var themeToggleDarkIcon = document.getElementById('theme-toggle-dark-icon');
var themeToggleLightIcon = document.getElementById('theme-toggle-light-icon');

var imageSource = $(".here-comes-power-logo");

console.log('Image Source: ', imageSource);

// Change the icons inside the button based on previous settings
if (localStorage.getItem('color-theme') === 'dark' || (!('color-theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
    themeToggleLightIcon.classList.remove('hidden');
    document.documentElement.classList.add('dark');
    
    if(imageSource){
        imageSource.attr('src','./assets/images/logo/white-Here-Comes-the-Power-Logo.png');
    }

    if (window.tidioChatApi) {
        tidioChatApi.setColorPalette('#1F2937');
    }
} else {
    themeToggleDarkIcon.classList.remove('hidden');
    document.documentElement.classList.add('light');

    if(imageSource){
        imageSource.attr('src','./assets/images/logo/Here-Comes-the-Power-Logo.png');
    }


    if (window.tidioChatApi) {
        tidioChatApi.setColorPalette('#0061aa');
    }
}

var themeToggleBtn = document.getElementById('theme-toggle');

themeToggleBtn.addEventListener('click', function() {

    // toggle icons inside button
    themeToggleDarkIcon.classList.toggle('hidden');
    themeToggleLightIcon.classList.toggle('hidden');

    // if set via local storage previously
    if (localStorage.getItem('color-theme')) {
        if (localStorage.getItem('color-theme') === 'light') {
            document.documentElement.classList.add('dark');
            localStorage.setItem('color-theme', 'dark');

            if(imageSource){
                imageSource.attr('src','./assets/images/logo/white-Here-Comes-the-Power-Logo.png');
            }

            if (window.tidioChatApi) {
                tidioChatApi.setColorPalette('#1F2937');
            }

        } else {
            document.documentElement.classList.remove('dark');
            localStorage.setItem('color-theme', 'light');

            if(imageSource){
                imageSource.attr('src','./assets/images/logo/Here-Comes-the-Power-Logo.png');
            }

            if (window.tidioChatApi) {
                tidioChatApi.setColorPalette('#0061aa');
            }
        }

        // if NOT set via local storage previously
    } else {
        if (document.documentElement.classList.contains('dark')) {
            document.documentElement.classList.remove('dark');
            localStorage.setItem('color-theme', 'light');

            if(imageSource){
                imageSource.attr('src','./assets/images/logo/Here-Comes-the-Power-Logo.png');
            }
            if (window.tidioChatApi) {
                tidioChatApi.setColorPalette('#1F2937');
            }

        } else {
            document.documentElement.classList.add('dark');
            localStorage.setItem('color-theme', 'dark');

            if(imageSource){
                imageSource.attr('src','./assets/images/logo/white-Here-Comes-the-Power-Logo.png');
            }

            if (window.tidioChatApi) {
                tidioChatApi.setColorPalette('#0061aa');
            }
        }
    }

});
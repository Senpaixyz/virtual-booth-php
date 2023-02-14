<?php
$updateVersion = "?v=".rand();
?>
<!DOCTYPE html>
<html lang="en" xmlns='http://www.w3.org/1999/xhtml'>
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />

    <title>SANDOZ CARDIO AND METABOLIC CARE | Virtual Booth</title>
    <meta name="description" content="Lorem ipsum dolor sit amet, consectetueradipiscing elit. Aenean commodo ligulaeget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis.">

    <link rel="icon" href="./assets/images/favicon_io/android-chrome-512x512.png" type="image/x-icon">
    <link rel="shortcut icon"  href="./assets/images/favicon_io/android-chrome-512x512.png"  type="image/x-icon">

    <link rel="android-chrome" sizes="192x192" href="./assets/images/favicon_io/android-chrome-192x192.png"/>
    <link rel="android-chrome" sizes="512x512" href="./assets/images/favicon_io/android-chrome-512x512.png"/>
    <link rel="apple-touch-icon" sizes="180x180" href="./assets/images/favicon_io/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="./assets/images/favicon_io/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="./assets/images/favicon_io/favicon-16x16.png">
    <link rel="manifest" href="./assets/images/favicon_io/site.webmanifest">


    <meta property="twitter:title" content="SANDOZ CARDIO AND METABOLIC CARE | VIRTUAL BOOTH">
    <meta property="twitter:site_name" content="lifegetsbetterwithsandoz.com">
    <meta property="twitter:url" content="https://lifegetsbetterwithsandoz.com/">
    <meta property="twitter:description" content="Lorem ipsum dolor sit amet, consectetueradipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis.">
    <meta property="twitter:type" content="website">
    <meta property="twitter:image" content="./assets/images/favicon.jpg">

    <meta property="og:title" content="SANDOZ CARDIO AND METABOLIC CARE | VIRTUAL BOOTH">
    <meta property="og:site_name" content="lifegetsbetterwithsandoz.com">
    <meta property="og:url" content="https://lifegetsbetterwithsandoz.com/">
    <meta property="og:description" content="Lorem ipsum dolor sit amet, consectetueradipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis.">
    <meta property="og:type" content="website">
    <meta property="og:image" content="./assets/images/favicon.jpg">


    <link
            href="./assets/stylesheets/wave.css<?=$updateVersion?>"
            rel="stylesheet"
    />
 
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.3/flowbite.min.css"  rel="stylesheet" />
    <link rel="stylesheet" href="https://unpkg.com/tailwindcss@2.2.19/dist/tailwind.min.css" />

    

    <script src="./assets/javascripts/jquery-3.6.3.min.js"></script>


    <script src="./assets/javascripts/virtual-booth-script.js<?=$updateVersion?>"></script>
    
    <script>
        $(document).ready(function(){
            console.log('Rotation Event Listner');
            function orientationChange() {
            if(window.addEventListener) {
                $(window).bind("orientationchange", function() {
                    // window.alert('Rotation Event Calle!');
                    location.reload();
                });

                
            }
            else{
                var windowWidth = $(window).width();
                $(window).on("resize", function() {
                    console.log('window on r esize')
                if ($(window).width() != windowWidth) {
                    location.reload();
                }
                });
            }

            

        }
        orientationChange();
        });



    </script>


    <title>Virtual Booth</title>
</head>

<!-- oncontextmenu="return false;" -->
<body class="bg-white dark:bg-gray-900">
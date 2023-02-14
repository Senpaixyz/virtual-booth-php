<?php  
require_once 'auth-middleware.php';
?>

<?php include 'views/header.php';?>
<?php include 'views/auth-navbar.php';?>
<link
            href="./assets/stylesheets/style.css<?=$updateVersion?>"
            rel="stylesheet"
    />
    
<div class="container:2xl  mx-auto virtual-booth-parent">
    <?php include 'views/modals.php';?>
    <div id="KeyShotXR" class="mx-auto  backdrop-blur-sm "></div>
</div>


<script src="assets/javascripts/modals.js<?=$updateVersion?>"></script>


<div class="container  flex flex-col mx-auto visible md:invisible lg:invisible xl:invisible  static md:fixed lg:fixed xl:fixed">
        <div class="my-3 text-left " id="sandoz-corp-video">
            <h1 class="text-md text-gray-900 dark:text-gray-300 mx-3 mb-2 font-semibold text-center" >SANDOZ CORP AVP</h1>
            <video class="w-full h-auto max-w-full mobile-viewport-video-player" poster="assets/images/thumbnails/thumbnail-01.jpg" controls>
                <source src="assets/videos/LGB wSEC.mp4" type="video/mp4">
                Your browser does not support the video tag.
            </video>
        </div>
        <div class="my-3 text-left" id="mistacor-corp-video">
            <h1 class="text-md text-gray-900 dark:text-gray-300 mx-3 mb-2 font-semibold text-center">MISTACOR AVP</h1>
            <video class="w-full h-auto max-w-full mobile-viewport-video-player" poster="assets/images/thumbnails/thumbnail-02.jpg" controls>
                <source src="assets/videos/MISTACOR MAIN AVP MASTER 120222.mp4" type="video/mp4">
                Your browser does not support the video tag.
            </video>
        </div>
</div>


<?php include 'views/booth-script-init.php';?>





<?php include 'views/auth-footer.php';?>
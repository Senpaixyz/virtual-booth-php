<?php  
require_once 'auth-middleware.php';
?>

<?php include 'views/header.php';?>
<?php include 'views/auth-navbar.php';?>
<link
            href="./assets/stylesheets/style.css"
            rel="stylesheet"
    />
<div class="container:2xl  mx-auto virtual-booth-parent">
    <?php include 'views/modals.php';?>
    <div id="KeyShotXR" class="mx-auto  backdrop-blur-sm bg-white/30"></div>
</div>


<?php include 'views/booth-script-init.php';?>


<script src="assets/javascripts/modals.js"></script>


<?php include 'views/footer.php';?>
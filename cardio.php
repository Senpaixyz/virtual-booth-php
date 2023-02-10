<?php  
require_once 'auth-middleware.php';
?>

<?php include 'views/header.php';?>
<?php include 'views/auth-navbar.php';?>


<div class="container mx-auto py-5">
    <div class="flex flex-row justify-around gap-6">

        <div class="
            transition ease-in-out delay-150
            max-w-sm bg-white border border-gray-200 rounded-lg shadow-lg dark:bg-gray-800 dark:border-gray-700">
            <a href="#">
                <img class="rounded-t-lg" src="./assets/images/tmp-vb.jpg" alt="" />
            </a>
            <div class="p-5">
                <a href="#">
                    <h5 class="mb-2 text-xl font-bold tracking-tight text-gray-900 dark:text-white">Welcome to Virtual Booth Page</h5>
                </a>
                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Lorem ipsum dolor sit amet, consectetueradipiscing elit. chronological order.</p>

            </div>
        </div>



    </div>
</div>



<?php include 'views/footer.php';?>
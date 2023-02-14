<nav class="bg-white border-gray-200 px-2 sm:px-4 py-2.5 dark:bg-gray-800">
    <div class="container-xxl flex flex-wrap items-center justify-end md:justify-start lg:justify-between xl:justify-between mx-auto">
        <a href="<?= getParentUrl() ?>/virtual-booth" 
        class="flex items-center   
        fixed md:static lg:static xl:static 
        invisible md:visible lg:visible xl:visible">
            <img src="./assets/images/logo/white-Here-Comes-the-Power-Logo.png" class="w-72 mt-3  lg:w-72 xl:w-72  mx-1 here-comes-power-logo"/>
            <!-- <img src="./assets/images/logo/Here-Comes-the-Power-Logo.png" class="w-72 mt-3  lg:w-72 xl:w-72  mx-1 block dark:hidden"/> -->
        </a>

        <div class="flex md:order-2 justify-between w-full md:justify-end md:w-auto">
            <p class="text-xs text-gray-900 dark:text-gray-300 mr-3">Back to PLAS-PSH 2023 Main Hall</p>
 
            <div class="flex flex-row ">

                        <img src="./assets/images/logo/plas.png" class="w-10 mx-1"/>
                        <img src="./assets/images/logo/psoh.png" class="w-10 mx-1"/>
                        <!-- Dark mode switcher -->
                        <button
                                data-tooltip-target="tooltip-bottom"
                                data-tooltip-placement="bottom"
                                id="theme-toggle"
                                type="button"
                                class="mx-4 text-gray-500 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-700 focus:outline-none focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 rounded-lg text-sm p-2.5"
                        >
                            <svg
                                    id="theme-toggle-dark-icon"
                                    class="w-5 h-5 hidden"
                                    fill="currentColor"
                                    viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg"
                            >
                                <path
                                        d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z"
                                ></path>
                            </svg>
                            <svg
                                    id="theme-toggle-light-icon"
                                    class="w-5 h-5 hidden"
                                    fill="currentColor"
                                    viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg"
                            >
                                <path
                                        d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zm-.464 4.95l.707.707a1 1 0 001.414-1.414l-.707-.707a1 1 0 00-1.414 1.414zm2.12-10.607a1 1 0 010 1.414l-.706.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM17 11a1 1 0 100-2h-1a1 1 0 100 2h1zm-7 4a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zM5.05 6.464A1 1 0 106.465 5.05l-.708-.707a1 1 0 00-1.414 1.414l.707.707zm1.414 8.486l-.707.707a1 1 0 01-1.414-1.414l.707-.707a1 1 0 011.414 1.414zM4 11a1 1 0 100-2H3a1 1 0 000 2h1z"
                                        fill-rule="evenodd"
                                        clip-rule="evenodd"
                                ></path>
                            </svg>
                        </button>
                        <div id="tooltip-bottom" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
                            Night Mode Toggle
                            <div class="tooltip-arrow" data-popper-arrow></div>
                        </div>

                        <button data-collapse-toggle="navbar-cta" type="button" class="inline-flex items-center p-2 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-cta" aria-expanded="false">
                            <span class="sr-only">Open main menu</span>
                            <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path></svg>
                        </button>

                
            </div>

<!-- 
            <button
                    data-tooltip-target="users-tooltip-bottom"
                    data-tooltip-placement="bottom"
                    type="button" class="flex mr-3 text-sm bg-gray-800 rounded-full md:mr-0 focus:ring-4 focus:ring-gray-300 dark:focus:ring-gray-600" id="user-menu-button" aria-expanded="false" data-dropdown-toggle="user-dropdown" data-dropdown-placement="bottom">
                <div class="relative w-10 h-10 overflow-hidden bg-gray-100 rounded-full dark:bg-gray-600">
                    <svg class="absolute w-12 h-12 text-gray-400 -left-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd"></path></svg>
                </div>
            </button>
            <div id="users-tooltip-bottom" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
                Registered
                <div class="tooltip-arrow" data-popper-arrow></div>
            </div>
            <div class="z-50 hidden my-4 text-base list-none bg-white divide-y divide-gray-100 rounded-lg shadow dark:bg-gray-700 dark:divide-gray-600" id="user-dropdown">
                <div class="px-4 py-3">
                    <span class="block text-sm text-gray-900 dark:text-white"><b>Welcome!</b> <br/><?= $user ?></span>
                    <span class="block text-sm font-medium text-gray-500 truncate dark:text-gray-400"><?= $email ?></span>
                </div>
                <ul class="py-2" aria-labelledby="user-menu-button">
                    <li>
                        <a href="<?= getParentUrl()  ?>/routes/logout" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Sign out</a>
                    </li>
                </ul>
            </div> -->

        </div>


        <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-cta">
            <!-- <div class="block md:hidden lg:hidden xl:hidden flex flex-row justify-between mt-4">
                    <p class="text-xs text-gray-900 dark:text-gray-300 mr-3">Back to PLAS-PSH 2023 Main Hall</p>
                    <div class="flex flex-row">
                        <img src="./assets/images/logo/plas.png" class="w-10 mx-1"/>
                        <img src="./assets/images/logo/psoh.png" class="w-10 mx-1"/>
                    </div>
            </div> -->

            <div class="block md:hidden lg:hidden xl:hidden flex flex-row justify-center mt-2">
                <img src="./assets/images/logo/white-Here-Comes-the-Power-Logo.png" class="w-4/5 mx-1 here-comes-power-logo"/>
            </div>
      
      
            <ul class="visible md:invisible lg:invisible xl:invisible flex flex-col p-4 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:flex-row md:space-x-8 md:mt-0 md:text-sm md:font-medium md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-800 dark:border-gray-800">
                <li>
                    <a href="javascript:void(0)"  class="modal-button block py-2 pl-3 pr-4 text-gray-700  rounded md:bg-transparent md:text-blue-700 md:p-0 dark:text-white" aria-current="page">VIRTUAL BOOTH</a>
                </li>
                <li>
                    <a  href="javascript:void(0)" data-target="#panel-modal" class="modal-button block py-2 pl-3 pr-4 text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-white dark:text-gray-400 dark:hover:bg-gray-800 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">PANELS</a>
                </li>
                <li>
                    <a  href="javascript:void(0)" data-target="#sandoz-corp-video"  class="mobile-navbar-avp block py-2 pl-3 pr-4 text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-white dark:text-gray-400 dark:hover:bg-gray-800 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">SANDOZ CORP AVP</a>
                </li>

                <li>
                    <a  href="javascript:void(0)" data-target="#mistacor-corp-video"  class="mobile-navbar-avp block py-2 pl-3 pr-4 text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-white dark:text-gray-400 dark:hover:bg-gray-800 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">MISTACOR AVP</a>
                </li>
 
            </ul>
        </div>





    </div>



    <div class="container-xxl flex flex-wrap justify-end mx-auto invisible md:visible lg:visible xl:visible fixed md:static lg:static xl:static">
        <ul class="flex  mx-5  border border-gray-100 rounded-lg bg-gray-50  md:flex-row md:space-x-8 md:mt-0 md:text-sm md:font-medium md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-800 dark:border-gray-800">
            <li>
                <a href="javascript:void(0)"  class="modal-button text-lg block py-2 pl-3 pr-4 text-white  rounded md:bg-transparent md:text-blue-700 md:p-0 dark:text-white" aria-current="page">VIRTUAL BOOTH</a>
            </li>
            <li>
                <a  href="javascript:void(0)" data-target="#panel-modal" class="modal-button text-lg block py-2 pl-3 pr-4 text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-white dark:text-gray-400 dark:hover:bg-gray-800 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">PANELS</a>
            </li>
            <li>
                <a  href="javascript:void(0)" data-target="#panel-video-modal"  class="modal-button text-lg block py-2 pl-3 pr-4 text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-white dark:text-gray-400 dark:hover:bg-gray-800 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">VIDEOS</a>
            </li>

        </ul>
    </div>



</nav>


<style>

.swiper .swiper-wrapper {
    align-items: center;
}
.swiper .swiper-slide {
    /* border-radius: 5px; */
    height: 450px !important;
    padding-top: 50px;
    transition: 0.2s;
}
.swiper .swiper-slide.active {
    height: 480px !important;
}
.swiper .prev,
.swiper .next {
    cursor: pointer;
    z-index: 100;
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
    opacity: 0.65;
    transition: 0.2s;
}
.swiper .prev:hover,
.swiper .next:hover {
    opacity: 1;
}
.swiper .prev svg,
.swiper .next svg {
    width: 20px;
    height: 20px;
}
.swiper .prev svg path,
.swiper .next svg path {
    fill: #fff;
}
.swiper .prev {
    left: 25px;
}
.swiper .next {
    right: 25px;
}
.swiper .pagination {
    margin-left: 8px !important;
    display: flex;
    align-items: center;
    justify-content: center;
    margin-top: 40px;
    z-index: 100;
}
.swiper .pagination span {
    font-size: 0;
    opacity: 1;
    margin: 0px 6px !important;
    border: 1px solid #fff;
}
.swiper .pagination span.swiper-pagination-bullet-active {
    background-color: transparent;
    transform: scale(1.5);
}
</style>
<div id="panel-modal" class="modal fixed top-0 left-0 right-0  overflow-x-hidden overflow-y-auto md:inset-0 h-modal md:h-full">
        <!-- MOBILE -->
        <div class="gap-4 flex flex-row  justify-between visible lg:invisible xl:invisible" style="position:absolute;top: 3.5rem;width:100%;">
                <div class="swiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <a href="javascript:void(0)" >
                                <img 
                                src="./assets/images/panels/Valcamp 4x8 ft 021223.jpg" 
                                class="h-auto panel-images-sm panel-images-sm-md transition-all duration-300 cursor-pointer"  
                                /> 
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="javascript:void(0)">
                                <img 
                                src="./assets/images/panels/Mistacor 4x8 ft FA 021223.jpg" 
                                class="h-auto panel-images-sm panel-images-sm-md transition-all duration-300 cursor-pointer  show-r-logo"    
                                /> 
                            </a>
                        </div>
                        <div class="swiper-slide">
                                <a href="javascript:void(0)">
                                    <img 
                                    src="./assets/images/panels/Robestar 4x8 ft FA.jpg"  
                                    class="h-auto panel-images-sm panel-images-sm-md transition-all duration-300 cursor-pointer"  
                                    /> 
                                </a>
                        </div>
                        <div class="swiper-slide">
                                <a href="javascript:void(0)">
                                    <img 
                                    src="./assets/images/panels/Tareg 4x8 ft FA 021223.jpg" 
                                    class="h-auto panel-images-sm panel-images-sm-md transition-all duration-300 cursor-pointer"   
                                    /> 
                                </a> 
                        </div>


                    </div>

                    <div class="pagination"></div>

                    <div class="prev">
                        <svg width="10" height="15" viewBox="0 0 10 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M9.2625 13.2375L3.5375 7.5L9.2625 1.7625L7.5 0L0 7.5L7.5 15L9.2625 13.2375Z" fill="#A99260" />
                        </svg>

                    </div>
                    <div class="next">
                        <svg width="10" height="15" viewBox="0 0 10 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M0.737305 13.2375L6.4623 7.5L0.737305 1.7625L2.4998 0L9.9998 7.5L2.4998 15L0.737305 13.2375Z" fill="#A99260" />
                        </svg>

                    </div>
                    </div>
        
            <!-- <a href="javascript:void(0)" >
                <img 
                src="./assets/images/panels/Valcamp 4x8 ft 021223.jpg" 
                class="h-auto panel-images-sm panel-images-sm-md transition-all duration-300 cursor-pointer"  
                /> 
            </a>
            <a href="javascript:void(0)">
                <img 
                src="./assets/images/panels/Mistacor 4x8 ft FA 021223.jpg" 
                class="h-auto panel-images-sm panel-images-sm-md transition-all duration-300 cursor-pointer"    
                /> 
            </a>
            <a href="javascript:void(0)">
                <img 
                src="./assets/images/panels/Robestar 4x8 ft FA.jpg"  
                class="h-auto panel-images-sm panel-images-sm-md transition-all duration-300 cursor-pointer"  
                /> 
            </a>
            <a href="javascript:void(0)">
                <img 
                src="./assets/images/panels/Tareg 4x8 ft FA 021223.jpg" 
                class="h-auto panel-images-sm panel-images-sm-md transition-all duration-300 cursor-pointer"   
                /> 
            </a> -->
        </div>

        <!-- DESKTOP -->
        <div class="gap-4 flex flex-row  justify-between invisible lg:visible  xl:visible " style="position:absolute;width:100%;">
            <a href="javascript:void(0)" >
                <img 
                src="./assets/images/panels/Valcamp 4x8 ft 021223.jpg" 
                class="h-auto panel-images-sm panel-images-lg-xl transition-all duration-300 cursor-pointer"  
                /> 
            </a>
            <a href="javascript:void(0)">
                <img 
                src="./assets/images/panels/Mistacor 4x8 ft FA 021223.jpg" 
                class="h-auto panel-images-sm panel-images-lg-xl transition-all duration-300 cursor-pointer show-r-logo"    
                /> 
            </a>
            <a href="javascript:void(0)">
                <img 
                src="./assets/images/panels/Robestar 4x8 ft FA.jpg"  
                class="h-auto panel-images-sm panel-images-lg-xl transition-all duration-300 cursor-pointer"  
                /> 
            </a>
            <a href="javascript:void(0)">
                <img 
                src="./assets/images/panels/Tareg 4x8 ft FA 021223.jpg" 
                class="h-auto panel-images-sm panel-images-lg-xl transition-all duration-300 cursor-pointer"   
                /> 
            </a>
        </div>


</div>


<div id="panel-solo-modal" class="modal-large   p-4 overflow-x-hidden ">
        
     
        <a href="javascript:void(0)"  class="invisible md:visible lg:visible xl:visible" >
    
                <!-- DESKTOP VIEW -->
                <div >
                    <div class="position:relative;">
                        <button class="text-white font-bold py-2 px-4 rounded close-panel-image"
                        style="position:absolute;top:1rem;right:6rem;z-index:9999;">
                        &times;
                        </button>
                        <img 
                        id=""
                        src="./assets/images/panels/Valcamp 4x8 ft 021223.jpg" 
                        class="panel-images-lg panel-image-large panel-images-large-lg-xl transition-all duration-300 cursor-pointer invisible lg:visible  xl:visible"  
                        style=""
                        />
                        <img src="./assets/images/logo/PLAS_PSH letters R.jpeg" 
                        class="w-10 mx-1 missing-r-logo" 
                        style="margin-top: -2.7rem;margin-left:-1rem;z-index:9999;display:none;"/>
                    </div>
                
                </div>
       
                <!-- MOBILE VIEW -->

          </a>

          <a href="javascript:void(0)" class="visible md:invisible lg:invisible xl:invisible" >
                    <!-- MOBILE VIEW -->

                    <div >
                    <div class="position:relative;">
 
                        <button class="text-white font-bold py-2 px-4 rounded close-panel-image"
                        style="position:absolute;top:5.2rem;right:0.75rem;z-index:9999;">
                        &times;
                        </button>
                        <img 
                        id=""
                        src="./assets/images/panels/Valcamp 4x8 ft 021223.jpg" 
                        class="panel-images-lg panel-image-large panel-images-large-sm-md transition-all duration-300 cursor-pointer visible lg:invisible xl:invisible"  
                        style="position:absolute;right:0.25rem;top:5rem;z-index:999;"
                        />
                        <img src="./assets/images/logo/PLAS_PSH letters R.jpeg" 
                        class="w-10 mx-1 missing-r-logo" 
                        style="position:absolute;bottom:0.3rem;left:0.75rem;z-index:9999;display:none;"/>
               
                    </div>
                    </div>


         
            </a>
         

            

</div>
 

<!-- VIDEO -->

<div id="panel-video-modal" class="modal fixed top-0 left-0 right-0  overflow-x-hidden overflow-y-auto md:inset-0 h-modal md:h-full">

        <div class="gap-4 flex flex-row justify-between" style="position:absolute;width:100%;">
            <a href="javascript:void(0)" >
                <img 
                src="./assets/images/thumbnails/thumbnail-01.jpg" 
                data-content="./assets/videos/LGB wSEC.mp4"
                class="h-auto panel-videos-sm panel-videos-sm-md transition-all duration-300 cursor-pointer filter grayscale hover:grayscale-0"  
                /> 
            </a>
            <a href="javascript:void(0)">
                <img 
                src="./assets/images/thumbnails/thumbnail-02.jpg" 
                data-content="./assets/videos/MISTACOR MAIN AVP MASTER 120222.mp4"
                class="h-auto panel-videos-sm panel-videos-sm-md transition-all duration-300 cursor-pointer filter grayscale hover:grayscale-0"    
                /> 
            </a>
        </div>

</div>

<div id="panel-solo-video-modal" class="modal-video-large ">
</div>

<!-- RECORDS -->



<div id="panel-records-modal" class="modal data-table-modal fixed top-0 left-0 right-0   md:inset-0 h-modal md:h-full">

        <div class="relative  shadow-md sm:rounded-lg">
            <table id="table-records" class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                <caption class="p-5 text-lg font-semibold text-left text-gray-900 bg-white dark:text-white dark:bg-gray-800">
                    Multistep Registration  <?= date('F d'); ?>
                    <p class="mt-1 text-sm font-normal text-gray-500 dark:text-gray-400">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    </p>
                </caption>
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-2 py-3">
                            Submission Time
                        </th>
                        <th scope="col" class="px-2 py-3">
                            First Name
                        </th>
                        <th scope="col" class="px-2 py-3">
                            Last Name
                        </th>
                        <th scope="col" class="px-2 py-3">
                            PRC#
                        </th>
                        <th scope="col" class="px-2 py-3">
                           Specialty
                        </th>
                        <th scope="col" class="px-2 py-3">
                            I accept all terms & conditions
                        </th>
      
                    </tr>
                </thead>
                <tbody>
                    <!-- <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <th scope="row" class="px-2 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            12:34
                        </th>
                        <td class="px-2 py-4">
                            Sliver
                        </td>
                        <td class="px-2 py-4">
                            Laptop
                        </td>
                        <td class="px-2 py-4">
                            234234324234234324
                        </td>
                        <td class="px-2 py-4">
                            Lirem
                        </td>
                        <td class="px-2 py-4">
                            Yes
                        </td>
                    </tr> -->
                </tbody>
            </table>
        </div>


</div>
<!-- Styles -->
<link href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" rel="stylesheet">
<!-- Script -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/8.4.6/swiper-bundle.min.js"></script>
<script>
    const swiper = new Swiper(".swiper", {
        slidesPerView: 4,
        spaceBetween: 50,
        loop: true,
        grabCursor: true,
        centeredSlides: true,
        slideActiveClass: "active",
        navigation: {
            nextEl: ".next",
            prevEl: ".prev"
        },
        pagination: {
            el: ".pagination",
            clickable: true
        },
        autoplay: {
            enabled: true,
            delay: 5000
        },
        // Media
        // breakpoints: {
        //   // when window width is >= 320px
        //   320: {
        //     slidesPerView: 2,
        //     spaceBetween: 20
        //   },
        //   // when window width is >= 480px
        //   480: {
        //     slidesPerView: 4,
        //     spaceBetween: 30
        //   },
        // }
        });

</script>
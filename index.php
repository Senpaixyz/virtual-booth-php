<?php include 'views/header.php';?>
<?php include 'views/not-auth-navbar.php';?>
<!--Hey! This is the original version
of Simple CSS Waves-->

<div class="header pt-4 ">
  <div id="message-container">

  </div>
  <form method="POST" action="/create" class="w-full">
  <!--Content before waves-->
  <div class="pt-4 block md:flex xl:flex justify-center items-center z-1 w-full ">
    <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-2 gap-2">


      <div class="mx-0 sm:mx-auto md:mx-auto xl:mx-auto max-w-xl">
            <img src="assets/images/logo/Here-Comes-the-Power-Logo With Addition.png" class="w-100"/>
            <!-- <p class="px-6 text-left text-lg font-semibold text-white" style="font-size: 1.18rem">Management of Cardiovascular Symptoms and Conditions</p> -->
            <p class="px-6 text-left text-md mt-4 text-white">To register, please take the time to fill out the information below</p>
            <div class="p-6  leading-normal   ">

              <div class="mb-6">
                <input
                        type="text"
                        placeholder="First Name"
                        id="first_name"
                        name="first_name"
                        class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"
                        required>
                <!-- <label for="first_name" class="block mb-2 text-left text-sm font-medium text-white">First Name</label> -->
              </div>
              <div class="mb-6">

                <input
                        type="text"
                        placeholder="Last Name"
                        id="last_name"
                        name="last_name"
                        class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"
                        required>
                <!-- <label for="last_name" class="block mb-2 text-left text-sm font-medium text-white">Last Name</label> -->
              </div>
              <div class="mb-6">

                <input type="email" id="email" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" placeholder="name@email.com" required>
                <!-- <label for="email" class="block mb-2 text-left text-sm font-medium text-white">Email</label> -->
              </div>

              <div class="mb-6 grid grid-cols-1 md:grid-cols-2 xl:grid-cols-2 gap-4 ">
                    <div>
                      <!-- <input type="text" id="speciality" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" required> -->
                      <!-- <label for="speciality" class="block mb-2 text-left text-sm font-medium text-white">Speciality</label> -->
                      <select id="speciality" placeholder="Speciality" class="shadow-sm block w-full px-4 py-2 text-base text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                      <option selected disabled>Speciality</option>
                      <option value="Family Medicine">Family Medicine</option>
                      <option value="Gen. IM">Gen. IM</option>
                      <option value="Nephrologist">Nephrologist</option>
                      <option value="Diabetes">Diabetes</option>
                      <option value="Cardiologist">Cardiologist</option>
                      <option value="Others">Others</option>
                      
                    </select>

                    </div>
                    <div>
                      <input type="number"   pattern="/^-?\d+\.?\d*$/" onKeyPress="if(this.value.length==6) return false;" placeholder="PRC#" id="prc" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" required>
                      <!-- <label for="prc" class="block mb-2 text-left text-sm font-medium text-white">PRC #</label> -->
                    </div>
              </div>

            </div>

      </div>


      <div class="
              transition ease-in-out delay-150
              bg-white  border border-gray-200 mx-4 px-4 rounded shadow dark:bg-gray-800 dark:border-gray-800
              flex flex-col   mb-3 md:mb-1 xl:md-1 px-4 text-left
              max-w-xl">
        <div class="w-full flex flex-col px-3 py-6 items-center justify-center">
              <p class="text-sm text-left text-dark-900 dark:text-white">
                By clicking on the buttons below, I certify that: <br/> <br/>
                I am a healthcare professional. <br/> <br/>
                I am aware and hereby authorize Sandoz Philippines Corporation ("Sandoz") to collect, retain, share my personal data herein disclosed for purposes of documentation and follow-through activities.
                <br/> <br/>
                I likewise hereby authorize Sandoz to contact me using my personal data herein disclosed for the promotion of its pharmaceutical products, with the objective of improving healthcare and/or supporting continuing professional development among HCPs.
                <br/> <br/>
                I am aware that this same authorization and consent shall be valid for a period of ten (10) years from registration unless expressly revoked by me through proper written notice to Sandoz.
                <br/> <br/>
                I am aware that the information that I have provided shall not be used by Sandoz or any of its affiliates for any reason other than that which I have been expressed in this registration.
              </p>

              <div class="flex items-center  mt-4 mb-2">
                <div class="flex items-center h-5">
                  <input id="terms_and_condition" type="checkbox"  class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-blue-300 dark:bg-gray-700 dark:border-gray-600 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800" required>
                </div>
                <label for="terms_and_condition" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">I agree with the terms and conditions</label>
              </div>

              <button type="submit"
                      id="form-submit"
                      class="

                          transition transform ease-in-out delay-150 hover:-translate-y-1 hover:scale-110 duration-300
                          form-submit-btn text-white bg-blue-700 hover:bg-blue-800 focus:ring-4
                          focus:outline-none focus:ring-blue-300 font-medium rounded-lg
                          text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700
                          dark:focus:ring-blue-800 px-6"
              >Submit</button>
        </div>

      </div>



    </div>


  </div>
  </form>
  <!--Waves Container-->
  <div class="hidden md:block xl:block z-2">
    <svg class="waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
         viewBox="0 24 150 28" preserveAspectRatio="none" shape-rendering="auto">
      <defs>
        <path id="gentle-wave" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z" />
      </defs>
      <g class="parallax">
        <use xlink:href="#gentle-wave" x="48" y="0" fill="rgba(255,255,255,0.7" />
        <use xlink:href="#gentle-wave" x="48" y="3" fill="rgba(255,255,255,0.5)" />
        <use xlink:href="#gentle-wave" x="48" y="5" fill="rgba(255,255,255,0.3)" />
        <use xlink:href="#gentle-wave" x="48" y="7" fill="#fff" />
      </g>
    </svg>
  </div>
  <!--Waves end-->

</div>
<!--Header ends-->

<!--Content starts-->


<!--Content ends-->

<script src="assets/javascripts/form-submit.js"></script>

<?php include 'views/not-auth-footer.php';?>
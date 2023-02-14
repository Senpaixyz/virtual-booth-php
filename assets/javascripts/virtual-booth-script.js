$(document).on('click','a.custom-navbar-button',function(){
      $("a.custom-navbar-button").removeClass('dark:text-white');
      $("a.custom-navbar-button").removeClass('md:text-blue-700 text-blue-700');
      
      $("a.custom-navbar-button").addClass('dark:text-gray-400 text-gray-700');

      const HasVB = $(this).hasClass('vb-class');
      const HasPM = $(this).hasClass('pm-class');

      if(HasVB){
        $('.vb-class').removeClass('dark:text-gray-400 text-gray-700');
        $('.vb-class').addClass('dark:text-white md:text-blue-700 text-blue-700');
      }
      else if(HasPM){
        $('.pm-class').removeClass('dark:text-gray-400 text-gray-700');
        $('.pm-class').addClass('dark:text-white md:text-blue-700 text-blue-700');
      }
      else{
        $(this).removeClass('dark:text-gray-400 text-gray-700');
        $(this).addClass('dark:text-white md:text-blue-700 text-blue-700');
      }
  
});
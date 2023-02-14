const keyshotxrID = $("#KeyShotXR");
let largeModalPanelIsOpen = false;

const displayListOfPanels = function(){
  $(`.modal`).removeClass("visible");
  $(".modal-large").removeClass("visible");

  largeModalPanelIsOpen = false;
  keyshotxrID.find('#backbuffer').addClass('blurd-background-filter');
  $(`#panel-modal`).addClass("visible");
}

$(document).click(function(event) {
  //if you click on anything except the modal itself or the "open modal" link, close the modal
  if (!$(event.target).closest(".modal,.modal-button").length && !event.target.classList.contains('close-panel-image')) {
    $("body").find(".modal").removeClass("visible");
  }

  if (!$(event.target).closest(".modal-large,.panel-images-sm").length) {
    $("body").find(".modal-large").removeClass("visible");
  }
  let recentlyClose = false;
  if(
    $(event.target).closest(".modal,.modal-button").length &&
    $(event.target).closest(".modal-large,.panel-images-sm").length
  )
  {
      console.log('Moda is Open!!');
      largeModalPanelIsOpen = true;
  }
  else{
    if(largeModalPanelIsOpen && (!$(event.target).closest(".modal-large,.panel-images-sm").length)){
      displayListOfPanels();
      recentlyClose = true;
    }
  }

  if (!$(event.target).closest(".modal-video-large,.panel-videos-sm").length) {
    $("body").find(".modal-video-large").removeClass("visible");
  }


  


  if(
    !$(event.target).closest(".modal,.modal-button").length &&
    !$(event.target).closest(".modal-large,.panel-images-sm").length &&
    !$(event.target).closest(".modal-video-large,.panel-videos-sm").length &&
    !recentlyClose 
  ){
    // Set Virtual Booth Navabar tab as active
    $(".custom-navbar-button.vb-class").trigger('click');
  
    keyshotxrID.find('#backbuffer').removeClass('blurd-background-filter');
    $("#panel-solo-video-modal.modal-video-large").html(''); // empty video player;;
    $(".missing-r-logo").hide(); // hide r;
    // $(".mobile-viewport-video-player").trigger('pause'); // whenever theres event in booth just pause or videos
  }


});



$(document).on('click','.modal-button',function(){
    $(`.modal`).removeClass("visible");
    $(".modal-large").removeClass("visible");
    const modalTarget = $(this).attr('data-target');

    if(modalTarget == "#virtual-booth"){
      keyshotxrID.find('#backbuffer').removeClass('blurd-background-filter');
    }
    else{
      keyshotxrID.find('#backbuffer').addClass('blurd-background-filter');
      $(`${modalTarget}.modal`).addClass("visible");
    }
 
});



$(document).on('click','.panel-images-sm',function(){
      const src = $(this).attr('src');
      $(".panel-image-large").attr('src',src);
      $("#panel-solo-modal.modal-large").addClass('visible');

      const isShowR = $(this).hasClass('show-r-logo');
      console.log($(this));
      if(isShowR){
        $(".missing-r-logo").show();
      }
      else{
        $(".missing-r-logo").hide();
      }
      $("body").find(".modal").removeClass("visible");
});


$(document).on('click','.close-panel-image',function(){
  // Large Panel Close Button
  console.log('Close Button Click Success')
  keyshotxrID.find('#backbuffer').removeClass('blurd-background-filter');
  $("#panel-solo-video-modal.modal-video-large").html(''); // empty video player;;
  $("body").find(".modal-large").removeClass("visible");
  displayListOfPanels();
});


// Videos

$(document).on('click','.panel-videos-sm',function(){
      const src = $(this).attr('data-content');
      $("#panel-solo-video-modal.modal-video-large").html(`
          <video class="w-full" autoplay controls>
                <source id="video-source-file" src="${src}" type="video/mp4">
                Your browser does not support the video tag.
          </video>
      `);
      $("#panel-solo-video-modal.modal-video-large").addClass('visible');
      $("body").find(".modal").removeClass("visible");
});


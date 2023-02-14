const keyshotxrID = $("#KeyShotXR");
$(document).click(function(event) {
  //if you click on anything except the modal itself or the "open modal" link, close the modal
  if (!$(event.target).closest(".modal,.modal-button").length) {
    $("body").find(".modal").removeClass("visible");
  }

  if (!$(event.target).closest(".modal-large,.panel-images-sm").length) {
    $("body").find(".modal-large").removeClass("visible");
  }

  if (!$(event.target).closest(".modal-video-large,.panel-videos-sm").length) {
    $("body").find(".modal-video-large").removeClass("visible");
  }

  


  if(
    !$(event.target).closest(".modal,.modal-button").length &&
    !$(event.target).closest(".modal-large,.panel-images-sm").length &&
    !$(event.target).closest(".modal-video-large,.panel-videos-sm").length
  ){
    keyshotxrID.find('#backbuffer').removeClass('blurd-background-filter');
    $("#panel-solo-video-modal.modal-video-large").html(''); // empty video player;;
    $(".missing-r-logo").hide(); // hide r;
    // $(".mobile-viewport-video-player").trigger('pause'); // whenever theres event in booth just pause or videos
  }


});



$(document).on('click','.modal-button',function(){
    $(`.modal`).removeClass("visible");
    $(".modal-large").removeClass("visible");
    keyshotxrID.find('#backbuffer').addClass('blurd-background-filter');

    const modalTarget = $(this).attr('data-target');
    $(`${modalTarget}.modal`).addClass("visible");
});



$(document).on('click','.panel-images-sm',function(){
      const src = $(this).attr('src');
      $(".panel-image-large").attr('src',src);
      $("#panel-solo-modal.modal-large").addClass('visible');

      const isShowR = $(this).hasClass('show-r-logo');
      console.log($(this));
      if(isShowR){
        console.log('SHOWING  R')
        $(".missing-r-logo").show();
      }
      else{
        console.log('Hiding R');
        $(".missing-r-logo").hide();
      }
      $("body").find(".modal").removeClass("visible");
});


$(document).on('click','.close-panel-image',function(){
  console.log('Close Button Click Success')
  keyshotxrID.find('#backbuffer').removeClass('blurd-background-filter');
  $("#panel-solo-video-modal.modal-video-large").html(''); // empty video player;;
  $("body").find(".modal-large").removeClass("visible");
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

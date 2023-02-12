<style type="text/css">
        body { 
          -ms-touch-action: none;
          overflow-y: scroll;
          overflow-x: hidden;
        }
</style>
<script type="text/javascript" src="./assets/javascripts/KeyShotXR.js"></script>
<script type="text/javascript">
    var keyshotXR;

    function initKeyShotXR() {
      return new Promise((resolve,reject)=>{
          var nameOfDiv = "KeyShotXR";
          var folderName = "untitled.159";
          // var viewPortWidth = 778;
          // var viewPortHeight = 624;
          var viewPortWidth = 1366;
          var viewPortHeight = 737;
          var backgroundColor = "";
          var uCount = 1;
          var vCount = 1;
          var uWrap = true;
          var vWrap = false;
          var uMouseSensitivity = -0.05;
          var vMouseSensitivity = 1;
          var uStartIndex = 0;
          var vStartIndex = 0;
          var minZoom = 1;
          var maxZoom = 1;
          var rotationDamping = 0.96;
          var downScaleToBrowser = true;
          var addDownScaleGUIButton = false;
          var downloadOnInteraction = false;
          var imageExtension = "jpg";
          var showLoading = false;
          var loadingIcon = ""; // Set to empty string for default icon.
          var allowFullscreen = false; // Double-click in desktop browsers for fullscreen.
          var uReverse = false;
          var vReverse = false;
          var hotspots = {};
          var isIBooksWidget = false;
          
          keyshotXR = new keyshotXR(nameOfDiv,folderName,viewPortWidth,viewPortHeight,backgroundColor,uCount,vCount,uWrap,vWrap,uMouseSensitivity,vMouseSensitivity,uStartIndex,vStartIndex,minZoom,maxZoom,rotationDamping,downScaleToBrowser,addDownScaleGUIButton,downloadOnInteraction,imageExtension,showLoading,loadingIcon,allowFullscreen,uReverse,vReverse,hotspots,isIBooksWidget);

          console.log('init keyshotXR');
          console.log(keyshotXR);

          if(keyshotXR){
            resolve(keyshotXR);
          }
      });


    }

    window.onload = initKeyShotXR()
    .then((res)=>{
        keyshotXR = res;
    })
    .catch((err)=>{
      console.log("ERROR: ", err);
    });


</script>
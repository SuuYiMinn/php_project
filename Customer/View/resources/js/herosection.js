$(document).ready(function () {
  var imagesildes = $(".hero_img");
  var showImage = 0;
  console.log(imagesildes);
  function images_slider() {
    if (showImage >= imagesildes.length) {
      showImage = 0;
    }

    for (let index = 0; index < imagesildes.length; index++) {
      $(imagesildes[index]).removeClass("inline");
      $(imagesildes[index]).addClass("hidden");
    }
    $(imagesildes[showImage]).addClass("inline");
    $(imagesildes[showImage]).removeClass("hidden");

    showImage++;
  }
  setInterval(() => {
    images_slider();
  }, 2000);
});

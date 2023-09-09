$(document).ready(function () {
  var rating;
  var product_review;
  var productId;
  $("#rating_pop_up").hide();
  var orderproduct = $(".order");

  $("#close_rating_popup").click(function () {
    
    $("#rating_pop_up").hide();

  })

  for (let index = 0; index < orderproduct.length; index++) {
    $(orderproduct[index]).click(function () {
      $("#rating_pop_up").show();
       productId = $(this).attr("id");
     
      
    });
  }


  $("input:radio[name=rating]").click(function () {
    rating = $(this).val();
    console.log(rating);
  });

  $("#send_review").click(function () {
    product_review = $("#product_review").val();


    $.ajax({
      url: "../Controller/saveRatingReviewController.php",
      type: "POST",
      data: {
        Rating: rating,
        Review: product_review,
        Product: productId,
      },
      success: function (res) {
        $("#rating_pop_up").hide();
        console.log(res);
      },
      error: function (error) {
        console.log(error);
      },
    });
    $("#rating_pop_up").hide();
    console.log(product_review);
  });



});



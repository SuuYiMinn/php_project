$(document).ready(function () {
  var qty = Number(document.getElementById("qty").innerHTML);

  $("#plus").click(function () {
    qty = qty + 1;
    $("#qty").html(qty);
  });

  $("#minus").click(function () {
    if (qty != 1) {
      qty = qty - 1;
      $("#qty").html(qty);
    }
  });

  $("#delete").click(function () {
    console.log("hello");
    $("#delete").parent().parent().parent().html("");
  });
});

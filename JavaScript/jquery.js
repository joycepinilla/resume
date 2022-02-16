$(document).ready(function () {
  $("#expMain, #exp2").hide();
  $("#expTitle").click(function () {
    $("#expMain, #exp2").toggle();
  });
});

/*$(document).ready(function () {
  $(".navbar-nav .nav-item").click(function () {
    $(".navbar-nav .nav-item").removeClass("active");
    $(this).addClass("active");
  });
});*/
/*$(document).ready(function () {
  $(".navbar-nav li a").on("click", function (e) {
    $(".navbar-nav li").find("a").removeClass("active");
    $(this).addClass("active");
  });
});*/

function getViewport() {
  // https://stackoverflow.com/a/8876069
  const width = Math.max(document.documentElement.clientWidth, window.innerWidth || 0);
  if (width <= 576) return "xs";
  if (width <= 768) return "sm";
  if (width <= 992) return "md";
  if (width <= 1200) return "lg";
  return "xl";
}

// navbar menu mobil
const ElemensDropdownMenuMobile = document.querySelectorAll(".sidenav");
const InstanceDropdownMenuMobile = M.Sidenav.init(ElemensDropdownMenuMobile,{
    edge: "right",
    draggable: true,
});

$(".about").click(function() {
  $('html, body').animate({
  scrollTop: $("#about").offset().top
  }, 860);
});

$(".begin").click(function() {
  $('html, body').animate({
  scrollTop: $("#begin").offset().top
  }, 860);
});

$(document).ready(function () {
  /*Mostrar ocultar menu principal*/
  $(".btn-menu").on("click", function () {
    var navLateral = $(".navLateral");
    var pageContent = $(".pageContent");
    var navOption = $(".navBar-options");
    if (
      navLateral.hasClass("navLateral-change") &&
      pageContent.hasClass("pageContent-change")
    ) {
      navLateral.removeClass("navLateral-change");
      pageContent.removeClass("pageContent-change");
      navOption.removeClass("navBar-options-change");
    } else {
      navLateral.addClass("navLateral-change");
      pageContent.addClass("pageContent-change");
      navOption.addClass("navBar-options-change");
    }
  });
  /*Salir del sistema*/
  $(".btn-exit").on("click", function () {
    swal(
      {
        title: "Desea Cerrar Sesión en el sistema?",
        text: "La sesión actual se cerrará y abandonará el sistema.",
        type: "warning",
        showCancelButton: true,
        confirmButtonText: "si,salir",
        closeOnConfirm: false,
        closeButtonText: "Cancelar",
      },
      function (isConfirm) {
        if (isConfirm) {
          window.location = "ejecutar.php?c=Usuarios&a=cerrarS";
        }
      }
    );
  });

  /*Mostrar y ocultar submenus*/
  $(".btn-subMenu").on("click", function () {
    var subMenu = $(this).next("ul");
    var icon = $(this).children("span");
    if (subMenu.hasClass("sub-menu-options-show")) {
      subMenu.removeClass("sub-menu-options-show");
      icon.addClass("zmdi-chevron-left").removeClass("zmdi-chevron-down");
    } else {
      subMenu.addClass("sub-menu-options-show");
      icon.addClass("zmdi-chevron-down").removeClass("zmdi-chevron-left");
    }
  });
});
(function ($) {
  $(window).load(function () {
    $(".navLateral-body, .NotificationArea, .pageContent").mCustomScrollbar({
      theme: "dark-thin",
      scrollbarPosition: "inside",
      autoHideScrollbar: true,
      scrollButtons: {
        enable: true,
      },
    });
  });
})(jQuery);

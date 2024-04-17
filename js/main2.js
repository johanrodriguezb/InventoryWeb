$(document).on("keyup", "#caja_busqueda", function () {
  var valor = $(this).val();
  if (valor != "") {
    buscar_datos(valor);
  } else {
    buscar_datos();
  }
});

$(document).on("keyup", "#caja_busqueda3", function () {
  var valor = $(this).val();
  if (valor != "") {
    buscar_datos3(valor);
  } else {
    buscar_datos3();
  }
});

$(document).on("keyup", "#caja_busqueda2", function () {
  var valor = $(this).val();
  if (valor != "") {
    buscar_datos2(valor);
  } else {
    buscar_datos2();
  }
});

$(document).on("keyup", "#caja_busqueda5", function () {
  var valor = $(this).val();
  if (valor != "") {
    buscar_datos5(valor);
  } else {
    buscar_datos5();
  }
});

$(document).on("keyup", "#caja_busqueda4", function () {
  var valor = $(this).val();
  if (valor != "") {
    buscar_datos4(valor);
  } else {
    buscar_datos4();
  }
});

/* Funcion buscar estado */
$(buscar_datos());

function buscar_datos(consulta) {
  $.ajax({
    url: "ajax/buscador/Buscarcate.php",
    type: "POST",
    dataType: "html",
    data: { consulta: consulta },
  })
    .done(function (respuesta) {
      $("#datos").html(respuesta);
    })
    .fail(function () {
      console.log("error");
    });
}

/* Funcion buscar estado */

$(buscar_datos2());

function buscar_datos2(consulta) {
  $.ajax({
    url: "ajax/buscador/Buscarestado.php",
    type: "POST",
    dataType: "html",
    data: { consulta: consulta },
  })
    .done(function (respuesta) {
      $("#datos").html(respuesta);
    })
    .fail(function () {
      console.log("error");
    });
}

/* Funcion buscar usuarios */

$(buscar_datos4());

function buscar_datos4(consulta) {
  $.ajax({
    url: "ajax/buscador/Buscarusu.php",
    type: "POST",
    dataType: "html",
    data: { consulta: consulta },
  })
    .done(function (respuesta) {
      $("#datos").html(respuesta);
    })
    .fail(function () {
      console.log("error");
    });
}
/* Funcion buscar ambiente */

$(buscar_datos5());

function buscar_datos5(consulta) {
  $.ajax({
    url: "ajax/buscador/Buscaramb.php",
    type: "POST",
    dataType: "html",
    data: { consulta: consulta },
  })
    .done(function (respuesta) {
      $("#datos").html(respuesta);
    })
    .fail(function () {
      console.log("error");
    });
}

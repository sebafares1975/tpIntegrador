// EJEMPLO FUNCION CALLBACK
function primero(segundo) {
  setTimeout(function () {
    console.log("PRIMERO");
    segundo();
  }, 3000);
}

function segundo() {
  console.log("SEGUNDO");
}

primero(segundo);
//segundo();

//  elementos en variables
var resultado = document.getElementById("resultado");
resultado.addEventListener("click", validacion);
var precio = 200;
var textoResultado;
var cant;


function validacion() {
  var valorNombre = document.getElementById("nombre");
  var name = valorNombre.value;

  var valorApellido = document.getElementById("apellido");
  var lastName = valorApellido.value;

  var valorEmail = document.getElementById("email");
  var email = valorEmail.value;

  var valorCant = document.getElementById("cantidad");
  var cant = valorCant.value;

  var valorCategoria = document.getElementById("categoria");
  var categ = valorCategoria.value;

  if (name === "") {
    alert("Por favor complete su NOMBRE ");
  } else if (lastName === "") {
    alert("Por favor complete su APELLIDO ");
  } else if (email === "") {
    alert("Por favor complete su EMAIL ");
  } else if (cant == 0) {
    alert("Por favor complete la Cantidad de entradas  ");
  } else if (categ == 0) {
    alert("Por favor elija una Categoria ");
  } else {
    suma();
  }
}

function suma() {
  var x = Number(parseInt(cantidad.value));
  var valorBoton = document.getElementById("categoria");
  var valor = valorBoton.value;
  var cuenta;
  switch (valor) {
    case "1":
      cuenta = precio - (50 * precio) / 100;
      break;
    case "2":
      cuenta = precio - (80 * precio) / 100;
      break;
    case "3":
      cuenta = precio - (15 * precio) / 100;
      break;
    default:
      break;
  }

  textoResultado = document.getElementById("importe");
  document.getElementById("importe").value = "Total a Pagar: $" + cuenta * x;
}

function clear() {
  textoResultado = document.getElementById("importe");
}

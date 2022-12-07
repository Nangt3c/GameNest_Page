console.log("Bienvenido a GameNest - Shop")
//Funciones de botones siguiente y atras
window.onload=function () {
  var siguiente= document.getElementById("adelante");
  siguiente.addEventListener("click", verSiguiente);
  var anterior= document.getElementById("atras");
  anterior.addEventListener("click", verAnterior);

  //Void de verSiguiente imagen
  function verSiguiente() {
    var aux= document.getElementById("producto")
    var ruta= aux.src;
    if (ruta.includes('img/products/micro.png'))
      aux.src="img/products/micro2.png";
      else if(ruta.includes('img/products/micro2.png'))
        aux.src="img/products/micro3.png";
    else if(ruta.includes('img/products/micro3.png'))
      aux.src="img/products/micro.png";
    else
      aux.src="img/products/micro.png";
  }

  //Void de verAnterior imagen
  function verAnterior() {
    var aux= document.getElementById("producto")
    var ruta= aux.src;
    if (ruta.includes('img/products/micro3.png'))
      aux.src="img/products/micro2.png";
      else if(ruta.includes('img/products/micro2.png'))
        aux.src="img/products/micro.png";
    else if(ruta.includes('img/products/micro.png'))
      aux.src="img/products/micro3.png";
    else
      aux.src="img/products/micro.png";
  }


  //Ver y ocultar detalles
  var btn= document.getElementById("ver");
  btn.addEventListener("click", ver);
  
  //Ver detalles
  function ver() {
    var info= document.getElementById("datos");
    info.innerHTML="Especificaciones:";
    
    var especificaciones= document.createElement("h6");
    especificaciones.innerHTML="Cable USB-C, Portátil, Patrón de captación supercardioide ultrapreciso.";
    info.appendChild(especificaciones);

    var img_info= document.createElement("img");
    img_info.src="img/products/microinfo.jpg"
    especificaciones.appendChild(img_info);
  }

  var btn2= document.getElementById("ocultar");
  btn2.addEventListener("click", ocultar);

  //Ocultar detalles
  function ocultar() {
    var elemento= document.getElementById("datos");
    while (elemento.firstChild) {
      elemento.removeChild(elemento.firstChild);
    }
  }

  document.getElementById("black").addEventListener("click", function() { cambiarImagen(this);});
  document.getElementById("white").addEventListener("click", function() { cambiarImagen(this);});

  //Cambiar color de producto
  function cambiarImagen(objeto){
    var aux = document.getElementById("producto2");
    switch (objeto.id) {
      case 'black':
        aux.src="img/products/K552-b.png"
        break;
      case 'white':
        aux.src="img/products/K552-w.png"
        break;
      default:
        aux.src="img/products/K552-b.png"
    }
  }

  //Cambiar precio de producto
  document.getElementById("mate").addEventListener("click", function() {cambioPrecio(this);});
  document.getElementById("brilloso").addEventListener("click", function() {cambioPrecio(this);});

  function cambioPrecio(objeto) {
    var precio= document.getElementById("precio");

    switch (objeto.id) {
      case 'mate':
        price.innerHTML="$551.00"
        break;

      default:
        price.innerHTML="$475.00"
    }
  }
}
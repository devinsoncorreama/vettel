// Función para mostrar la ventana emergente
function mostrarPopup() {
    var popup = document.getElementById("popup");
    popup.style.display = "block";
  }
  
  // Función para cerrar la ventana emergente
  function cerrarPopup() {
    var popup = document.getElementById("popup");
    popup.style.display = "none";
  }
  
  // Asociar función a evento de carga de la ventana
  window.addEventListener("load", mostrarPopup);
  
  // Asociar funciones a eventos
  var botonMostrar = document.getElementById("mostrarPopup");
  botonMostrar.addEventListener("click", mostrarPopup);
  
  var botonCerrar = document.getElementById("cerrarPopup");
  botonCerrar.addEventListener("click", cerrarPopup);
  
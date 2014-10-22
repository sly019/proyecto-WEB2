

//asigna nombre de usuario actual
function asignarUsuario(){
      usuarioActual = localStorage.getItem('nombre');
      document.getElementById("nombreUsuario").value = usuarioActual;
}

function eliminarCarrera(){
if ((($("input:checked").attr("value")) != undefined)) {    
      var temp = [($("input:checked").attr("value"))];
       alert("si entro Y EL id SELECIONADO ES  " + temp);

    }else
      alert("Seleccione una carrera");    
}
//funcion para abrir formulario de estudiante
function FuncionAgregarCarrera(){
  setTimeout("location='agregar.html'")
}
let acercade = document.getElementById('acercade');

acercade.addEventListener('click', ventana);

function ventana() {
    bootbox.alert({title: "Usuario o contraseña incorrecta",message:"Ingese el usuario y contraseña correcta", centerVertical: true, size: "medium"});
}
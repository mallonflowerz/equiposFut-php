function obtenerTablas() {
    var tablaSelect = document.getElementById("tabla");

    var xhr = new XMLHttpRequest();
    xhr.open("GET", "obtenerTablas.php");
    xhr.onload = function () {
        if (xhr.status === 200) {
            var tablaObj = JSON.parse(xhr.responseText);
            for (var i = 0; i < tablaObj.length; i++) {
                var tabla = tablaObj[i];
                var option = document.createElement("option");
                option.text = tabla;
                tablaSelect.add(option);
            }
        }
    };
    xhr.send();
}
function mostrarEquipo() {

    var xhr = new XMLHttpRequest();
    xhr.open("GET", "mostrarEquipo.php");
    xhr.onload = function () {
        if (xhr.status === 200) {
            console.log(xhr.responseText);
            document.getElementById("table_sql").innerHTML = xhr.responseText;
        }
    };
    xhr.send();
}
function advert(resultado) {
    document.getElementById("warning").innerHTML = "<h4>Resultado: </h4>"+resultado;
    console.log(resultado);
    
}



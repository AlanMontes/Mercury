function cambiar2(dato){
        document.getElementById("tipo").value = dato;
}

function cargar(){
const xhttp = new XMLHttpRequest();
xhttp.onload = function() {
  document.getElementById("prov").innerHTML = this.responseText;
}
xhttp.open("GET", "hacerlista.php");
xhttp.send();
}


const $id = document.querySelector("#id"), 
      $nom_pro = document.querySelector("#nom_pro"),
      $des = document.querySelector("#des"),
      $precio_pu = document.querySelector("#precio_pu"),
      $precio_prov = document.querySelector("#precio_prov"),
      $cantidad = document.querySelector("#cantidad"),
      $proveedor = document.querySelector("#prov"),
      $f_cadu = document.querySelector("#f_cadu"),
      $tipo = document.querySelector("#tipo"),
      $btnEnviar = document.querySelector("#btnEnviar"), // El botón que envía el formulario
      $respuesta = document.querySelector("#respuesta"); // el div que muestra mensajes

// Agregar listener al botón
    $btnEnviar.addEventListener("click", () => {
    // Poner un estado de "enviando"
    $respuesta.textContent = "Dando de alta...";
    // Armar objeto con datos
    const datos = {
        id: $id.value,
        tipo: $tipo.value,
        nom_pro: $nom_pro.value,
        des: $des.value,
        precio_pu: $precio_pu.value,
        precio_prov: $precio_prov.value,
        cantidad: $cantidad.value,
        proveedor: $proveedor.value,
        f_cadu: $f_cadu.value,       
    };
    // Codificarlo como JSON
    const datosCodificados = JSON.stringify(datos);
    // Enviarlos
    fetch("/Mercury/PHP/altasqlproducto.php", {
            method: "POST", // Enviar por POST
            body: datosCodificados, // En el cuerpo van los datos
        })
        .then(respuestaCodificada => respuestaCodificada.json()) // Decodificar JSON que nos responde PHP
        .then(respuestaDecodificada => {
            // Aquí ya tenemos la respuesta lista para ser procesada
            $respuesta.textContent = respuestaDecodificada;
        });
        document.getElementById("altaproducto").reset();
        document.getElementById("fcadu").style.display = "none";
        setTimeout(function(){
            $respuesta.textContent = "";
        }, 2000);
});
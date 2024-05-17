

const $idp = document.querySelector("#idp"), 
      $nombrep = document.querySelector("#nombrep"),
      $cantidadp = document.querySelector("#cantidadp"),
      $fc = document.querySelector("#fc"),
      $btnEnviar2 = document.querySelector("#btnEnviar2"), // El botón que envía el formulario
      $btnEnviar3 = document.querySelector("#btnEnviar3"), // El botón que envía el formulario
      $respuesta2 = document.querySelector("#respuesta2"); // el div que muestra mensajes

// Agregar listener al botón
    $btnEnviar2.addEventListener("click", () => {
        
    // Poner un estado de "enviando"
    $respuesta2.textContent = "Dando de alta...";
    // Armar objeto con datos
    const datos = {
        idp: $idp.value,
        nombrep: $nombrep.value,
        cantidadp: $cantidadp.value,
        fc: $fc.value,
    };
    // Codificarlo como JSON
    const datosCodificados = JSON.stringify(datos);
    // Enviarlos
    fetch("/Mercury/PHP/altaExsqlproducto.php", {
            method: "POST", // Enviar por POST
            body: datosCodificados, // En el cuerpo van los datos
        })
        .then(respuestaCodificada => respuestaCodificada.json()) // Decodificar JSON que nos responde PHP
        .then(respuestaDecodificada => {
            // Aquí ya tenemos la respuesta lista para ser procesada
            $respuesta2.textContent = respuestaDecodificada;
        });
        document.getElementById("altaproducto2").reset();
        setTimeout(function(){
            $respuesta2.textContent = "";
        }, 2000);
});

// Agregar listener al botón
$btnEnviar3.addEventListener("click", () => {
    
// Poner un estado de "enviando"
$respuesta2.textContent = "Dando de alta...";
// Armar objeto con datos
const datos = {
    idp: $idp.value,
    nombrep: $nombrep.value,
    cantidadp: $cantidadp.value,
    fc: $fc.value,
};
// Codificarlo como JSON
const datosCodificados = JSON.stringify(datos);
// Enviarlos
fetch("/Mercury/PHP/altaExsqlproductonombre.php", {
        method: "POST", // Enviar por POST
        body: datosCodificados, // En el cuerpo van los datos
    })
    .then(respuestaCodificada => respuestaCodificada.json()) // Decodificar JSON que nos responde PHP
    .then(respuestaDecodificada => {
        // Aquí ya tenemos la respuesta lista para ser procesada
        $respuesta2.textContent = respuestaDecodificada;
    });
    document.getElementById("altaproducto2").reset();
    setTimeout(function(){
        $respuesta2.textContent = "";
    }, 2000);
});



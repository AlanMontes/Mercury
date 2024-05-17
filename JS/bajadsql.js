

const $idp2 = document.querySelector("#idp2"), 
      $nombrep2 = document.querySelector("#nombrep2"),
      $btnEnviar3 = document.querySelector("#btnEnviar3"), // El botón que envía el formulario
      $btnEnviar4 = document.querySelector("#btnEnviar4"), // El botón que envía el formulario
      $respuesta3 = document.querySelector("#respuesta3"); // el div que muestra mensajes

// Agregar listener al botón BAJA ID
    $btnEnviar3.addEventListener("click", () => {
        
    // Poner un estado de "enviando"
    $respuesta3.textContent = "Dando de baja...";
    // Armar objeto con datos
    const datos = {
        idp2: $idp2.value,
        nombrep2: $nombrep2.value,
    };
    // Codificarlo como JSON
    const datosCodificados = JSON.stringify(datos);
    // Enviarlos
    fetch("/Mercury/PHP/bajadidsql.php", {
            method: "POST", // Enviar por POST
            body: datosCodificados, // En el cuerpo van los datos
        })
        .then(respuestaCodificada => respuestaCodificada.json()) // Decodificar JSON que nos responde PHP
        .then(respuestaDecodificada => {
            // Aquí ya tenemos la respuesta lista para ser procesada
            $respuesta3.textContent = respuestaDecodificada;
        });
        document.getElementById("bajaproducto").reset();
        setTimeout(function(){
            $respuesta3.textContent = "";
        }, 2000);
});

// Agregar listener al botón BAJA NOMBRE
$btnEnviar4.addEventListener("click", () => {
    
// Poner un estado de "enviando"
$respuesta3.textContent = "Dando de baja...";
// Armar objeto con datos
const datos = {
    idp2: $idp2.value,
    nombrep2: $nombrep2.value,
};
// Codificarlo como JSON
const datosCodificados = JSON.stringify(datos);
// Enviarlos
fetch("/Mercury/PHP/bajadnomsql.php", {
        method: "POST", // Enviar por POST
        body: datosCodificados, // En el cuerpo van los datos
    })
    .then(respuestaCodificada => respuestaCodificada.json()) // Decodificar JSON que nos responde PHP
    .then(respuestaDecodificada => {
        // Aquí ya tenemos la respuesta lista para ser procesada
        $respuesta3.textContent = respuestaDecodificada;
    });
    document.getElementById("bajaproducto").reset();
    setTimeout(function(){
        $respuesta3.textContent = "";
    }, 2000);
});
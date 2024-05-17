function cambiar(dato){
    if (dato == "0") {
        document.getElementById("m1").value = "0";
      }
      if (dato == "1") {
        document.getElementById("m1").value = "1";
      }
}

const $idp = document.querySelector("#idp"), 
      $nombrep = document.querySelector("#nombrep"),
      $radio = document.querySelector("#m1"),     
      $cant = document.querySelector("#cant"),
      $btnEnviar1 = document.querySelector("#btnEnviar1"), // El botón que envía el formulario
      $btnEnviar2 = document.querySelector("#btnEnviar2"), // El botón que envía el formulario
      $respuesta4 = document.querySelector("#respuesta4"); // el div que muestra mensajes

// Agregar listener al botón BAJA ID
    $btnEnviar1.addEventListener("click", () => {
        
    // Poner un estado de "enviando"
    $respuesta4.textContent = "Dando bajas...";
    // Armar objeto con datos
    const datos = {
        idp: $idp.value,
        nombrep: $nombrep.value,
        radio: $radio.value,
        cant: $cant.value,
    };
    // Codificarlo como JSON
    const datosCodificados = JSON.stringify(datos);
    // Enviarlos
    fetch("/Mercury/PHP/bajacanidsql.php", {
            method: "POST", // Enviar por POST
            body: datosCodificados, // En el cuerpo van los datos
        })
        .then(respuestaCodificada => respuestaCodificada.json()) // Decodificar JSON que nos responde PHP
        .then(respuestaDecodificada => {
            // Aquí ya tenemos la respuesta lista para ser procesada
            $respuesta4.textContent = respuestaDecodificada;
        });
        document.getElementById("bajaproducto").reset();
        setTimeout(function(){
            $respuesta4.textContent = "";
        }, 2000);
});

// Agregar listener al botón BAJA NOM
    $btnEnviar2.addEventListener("click", () => {
        
    // Poner un estado de "enviando"
    $respuesta4.textContent = "Dando bajas...";
    // Armar objeto con datos
    const datos = {
        idp: $idp.value,
        nombrep: $nombrep.value,
        radio: $radio.value,
        cant: $cant.value,
    };
    // Codificarlo como JSON
    const datosCodificados = JSON.stringify(datos);
    // Enviarlos
    fetch("/Mercury/PHP/bajacannomsql.php", {
            method: "POST", // Enviar por POST
            body: datosCodificados, // En el cuerpo van los datos
        })
        .then(respuestaCodificada => respuestaCodificada.json()) // Decodificar JSON que nos responde PHP
        .then(respuestaDecodificada => {
            // Aquí ya tenemos la respuesta lista para ser procesada
            $respuesta4.textContent = respuestaDecodificada;
        });
        document.getElementById("bajaproducto").reset();
        setTimeout(function(){
            $respuesta4.textContent = "";
        }, 2000);
});

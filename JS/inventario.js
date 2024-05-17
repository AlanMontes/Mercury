
/*FUNCIONES DE DISEÑO*/ 
function talta(dato) {
    if (dato == "1") {
      document.getElementById("parte2").style.display = "block";
      document.getElementById("parte1").style.display = "none";
    }
    if (dato == "2") {
      document.getElementById("parte2").style.display = "none";
      document.getElementById("parte1").style.display = "block";
    }
  }

 function tbaja(dato) {
    if (dato == "1") {
      document.getElementById("cp").style.display = "block";
      document.getElementById("bd").style.display = "none";
    }
    if (dato == "2") {
      document.getElementById("cp").style.display = "none";
      document.getElementById("bd").style.display = "block";
    }
  }

  function cadu(obj)
  {   
      if (obj.checked){
        document.getElementById('fcadu').style.display = "block";
      }else{
       document.getElementById('fcadu').style.display = "none";
      }
  }

  function tbus(dato){
    if (dato == "1") {
      
      document.getElementById("idp").style.display = "block";
      document.getElementById("lbi").style.display = "block";
      document.getElementById("nombrep").style.display = "none";
      document.getElementById("lbn").style.display = "none";
      document.getElementById("btnn").style.display = "none";
      document.getElementById("btnid").style.display = "block";
      
    }
    if (dato == "2") {
      
      document.getElementById("idp").style.display = "none";
      document.getElementById("lbi").style.display = "none";
      document.getElementById("nombrep").style.display = "block";
      document.getElementById("lbn").style.display = "block";
      document.getElementById("btnn").style.display = "block";
      document.getElementById("btnid").style.display = "none";


    }
  }

  function tbus2(dato){
    if (dato == "1") {

      document.getElementById("idp2").style.display = "block";
      document.getElementById("lbi2").style.display = "block";
      document.getElementById("nombrep2").style.display = "none";
      document.getElementById("lbn2").style.display = "none";
      document.getElementById("btnn2").style.display = "none";
      document.getElementById("btnid2").style.display = "block";
      
    }
    if (dato == "2") {

      document.getElementById("idp2").style.display = "none";
      document.getElementById("lbi2").style.display = "none";
      document.getElementById("nombrep2").style.display = "block";
      document.getElementById("lbn2").style.display = "block";
      document.getElementById("btnn2").style.display = "block";
      document.getElementById("btnid2").style.display = "none";

    }
  }

function cargar(id){
  const xhttp = new XMLHttpRequest();
  xhttp.onload = function() {
    document.getElementById("prov").innerHTML = this.responseText;
  }
  xhttp.open("GET", "hacerlista2.php?q="+id);
  xhttp.send();
  }

function cargar2(nombre){
  const xhttp = new XMLHttpRequest();
  xhttp.onload = function() {
    document.getElementById("prov").innerHTML = this.responseText;
  }
  xhttp.open("GET", "hacerlista3.php?q="+nombre);
  xhttp.send();
  }

function showCustomer(str) {
    if (str == "") {
      document.getElementById("txtHint").innerHTML = "...";
      return;
    }
    
    if (str == "GENERAL") {
        const xhttp = new XMLHttpRequest();
        xhttp.onload = function() {
          document.getElementById("txtHint").innerHTML = this.responseText;
        }
        xhttp.open("GET", "sqlconsultageneral.php?q="+str);
        xhttp.send(); 
        return;
    }

    const xhttp = new XMLHttpRequest();
    xhttp.onload = function() {
      document.getElementById("txtHint").innerHTML = this.responseText;
    }
    xhttp.open("GET", "sqlconsultas.php?q="+str);
    xhttp.send();
}


function funid(){
    var id = $("#idp").val();
    document.getElementById("infopro").style.display = "block";
    const xhttp = new XMLHttpRequest();
    xhttp.onload = function() {
      document.getElementById("txtHint2").innerHTML = this.responseText;
    }
    xhttp.open("GET", "sqlbuscarid.php?q="+id);
    xhttp.send();
    
    funinfoid();
}

function funinfoid(){
    var id = $("#idp").val();

    const xhttp = new XMLHttpRequest();
    xhttp.onload = function() {
      document.getElementById("txtHint3").innerHTML = this.responseText;
    }
    xhttp.open("GET", "sqlinfoid.php?q="+id);
    xhttp.send();
    setTimeout(function(){
      cargar(id);
    }, 500);
    

}

function funinfonom(){
    var nombre = $("#nombrep").val();

    const xhttp = new XMLHttpRequest();
    xhttp.onload = function() {
      document.getElementById("txtHint3").innerHTML = this.responseText;
    }
    xhttp.open("GET", "sqlinfonom.php?q="+nombre);
    xhttp.send();
    setTimeout(function(){
      cargar2(nombre);
    }, 500);

}

function funnom(){
    var nombre = $("#nombrep").val();
    document.getElementById("infopro").style.display = "block";
    const xhttp = new XMLHttpRequest();
    xhttp.onload = function() {
      document.getElementById("txtHint2").innerHTML = this.responseText;
    }
    xhttp.open("GET", "sqlbuscarnom.php?q="+nombre);
    xhttp.send();

    funinfonom();
}


function funs(){
    var ide = $("#ide").val();
    var nome = $("#nome").val();
    var dese = $("#dese").val();
    var ppe = $("#ppe").val();
    var pre = $("#pre").val();
    var idpro = $("#prov").val();

    const xhttp = new XMLHttpRequest();
    xhttp.onload = function() {
      document.getElementById("respuesta").innerHTML = this.responseText;
    }
    xhttp.open("GET", "editarsqlproducto.php?q="+ide+"&nome="+nome+"&dese="+dese+"&ppe="+ppe+"&pre="+pre+"&idpro="+idpro);
    xhttp.send();
    
    setTimeout(function(){
        document.getElementById("respuesta").innerHTML = "";
    }, 2000);
    setTimeout(function(){
        funid();
    }, 500);
}

function funs2(){
    var ide = $("#ide").val();
    var nome = $("#nome").val();
    var dese = $("#dese").val();
    var ppe = $("#ppe").val();
    var pre = $("#pre").val();
    var idpro = $("#prov").val();

    const xhttp = new XMLHttpRequest();
    xhttp.onload = function() {
      document.getElementById("respuesta").innerHTML = this.responseText;
    }
    xhttp.open("GET", "editarsqlproducto.php?q="+ide+"&nome="+nome+"&dese="+dese+"&ppe="+ppe+"&pre="+pre+"&idpro="+idpro);
    xhttp.send();
    
    setTimeout(function(){
        document.getElementById("nombrep").value = nome;
    }, 500);

    setTimeout(function(){
        document.getElementById("respuesta").innerHTML = "";
    }, 2000);
    
    setTimeout(function(){
        funnom();
    }, 500);
}
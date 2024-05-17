    function funIniciarFecha(){
      document.getElementById("estadistis").style.display = "block";
        var fi = $("#fi").val();
        var ff = $("#ff").val();
    
        funmermas(fi,ff);
        funcadus(fi,ff);
        funmasven(fi,ff);
        funmenosven(fi,ff);
        funport();
        funt();
        document.getElementById("btt").style.display = "block";
    }

    function funmermas(fi,ff){
        const xhttp = new XMLHttpRequest();
        xhttp.onload = function() {
          document.getElementById("txtHint1").innerHTML = this.responseText;
        }
        xhttp.open("GET", "sqlmermas.php?fi="+fi+"&ff="+ff);
        xhttp.send();
    }

    function funcadus(fi,ff){
        const xhttp = new XMLHttpRequest();
        xhttp.onload = function() {
          document.getElementById("txtHint2").innerHTML = this.responseText;
        }
        xhttp.open("GET", "sqlcadus.php?fi="+fi+"&ff="+ff);
        xhttp.send();
    }

    function funmasven(fi,ff){
        const xhttp = new XMLHttpRequest();
        xhttp.onload = function() {
          document.getElementById("txtHint3").innerHTML = this.responseText;
        }
        xhttp.open("GET", "sqlmas.php?fi="+fi+"&ff="+ff);
        xhttp.send();
    }

    function funmenosven(fi,ff){
        const xhttp = new XMLHttpRequest();
        xhttp.onload = function() {
          document.getElementById("txtHint4").innerHTML = this.responseText;
        }
        xhttp.open("GET", "sqlmenos.php?fi="+fi+"&ff="+ff);
        xhttp.send();
    }

    function funport(){
        const xhttp = new XMLHttpRequest();
        xhttp.onload = function() {
          document.getElementById("txtHint5").innerHTML = this.responseText;
        }
        xhttp.open("GET", "sqlport.php");
        xhttp.send();
    }

    function funt(){
        const xhttp = new XMLHttpRequest();
        xhttp.onload = function() {
          document.getElementById("txtHint6").innerHTML = this.responseText;
        }
        xhttp.open("GET", "sqlt.php");
        xhttp.send();
    }

    function expedir(){
        document.getElementById("nota").style.display = "block";
        const xhttp = new XMLHttpRequest();
        xhttp.onload = function() {
          document.getElementById("txtHint7").innerHTML = this.responseText;
        }
        xhttp.open("GET", "sqlnota.php");
      //  numeroregistros = document.getElementById("numeroregistros").value; 
      //  document.getElementById("numeroregistros").innerHTML = "5";
      setTimeout(function(){
        xhttp.send();
      }, 1000);
      setTimeout(function(){
        numeroregistros = document.getElementById("numeroregistros");
       // document.getElementById("subtotal").innerHTML = numeroregistros.value;
      }, 1000);
    }




    
    var numeroregistros = 0;
    var total = 0;

    function myFunction(value,precio,id) {
      subtotal = (value * precio);
      document.getElementById(id).value = subtotal;
      csub();
    }
          
    var subtotal = 0.0;
    function csub(){
      subtotal = 0.0;
      var t = 0.0;
      numeroregistros = document.getElementById("numeroregistros");
      for (var i = 1; i <= numeroregistros.value; i++) {
         t= document.getElementById(i).value;
         subtotal += parseFloat(document.getElementById(i).value);
      }
       document.getElementById("subtotal").innerHTML = "$"+subtotal;
      }
      
      

  function pdf(){  
    // var documento = document.getElementById("txtHint7").outerHTML;
    // var nodo = String(documento);
    // alert(nodo);
    window.open("notapdf.php?id="+subtotal);
    // const xhttp = new XMLHttpRequest();
    // xhttp.onload = function() {
    //    document.getElementById("txtHint9").innerHTML = this.responseText;
    //  }
    // xhttp.open("POST", "notapdf.php");
    // xhttp.send();
    // let theForm = document.getElementById("elpdf");
    // theForm.submit(); 


}
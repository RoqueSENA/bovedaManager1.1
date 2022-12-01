function sendRequest(){

    var object = new XMLHttpRequest();
    object.open('POST','../Controllers/MovimientosController.php',true);
    object.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
    object.onreadystatechange=function(){
        document.getElementById('formFajos').innerHTML = object.responseText  }
    object.send('');

}

function agregarMov(){
    var datos =$("#formEntradasMov").serialize();
    console.log(datos);

    $.ajax({
        url:"http://localhost/mvc_estructure/Controllers/MovimientosController.php?action=guardar",
        type:"POST",
        async: true,
        data: datos,
        success: function(e){
            if (e==1){
                alert("Registro Exitoso");
            }else{
                alert("Error de Registro")
            }
        }
    });


    return false;

}


function actualizarCantidadCalidad(){
    var fecha = document.getElementById('inputFecha').value;
    var fondo = document.getElementById('inputFondo').value;
    var beCien = document.getElementById('cantCienBeNf').value;
    var dtCien = document.getElementById('cantCienDtNf').value;
    var encCien = document.getElementById('cantCienEncNf').value;
    var voCien = document.getElementById('cantCienVoNf').value;
    var atmCien = document.getElementById('cantCienAtm').value;
    var arqueoCien = document.getElementById('cantCienArqueo').value;

    var dataSend = 'fecha'+fecha +'fondo'+fondo +'beCien'+beCien +'dtCien'+dtCien +'encCien'+encCien +'voCien'+voCien +'atmCien'+atmCien +'arqueoCien'+arqueoCien;

    $.ajax({

        type:"post",
        url:"../Controllers/MovimientosController.php?calidades=ingresar",
        data: dataSend,
        success: function(){
          
                alert(dataSend);
            
        }
    });
    return false;
}
/* Sumar dos números. */
// function sumarCalidades (benf,dtnf,encnf,vonf,atm,arqueo,bead,dtad,encad) {
//     var total = 0;	
//     var benf = getElementById('#cantCienBeNf').value;
//     var dtnf = getElementById('#cantCienDtNf').value;
//     var encnf = getElementById('#cantCienEncNf').value;
//     var vonf = getElementById('#cantCienVoNf').value;
//     var atm = getElementById('#cantCienAtm').value;
//     var arqueo = getElementById('#cantCienArqueo').value;
//     var bead = getElementById('#cantCienBeAd').value;
//     var dtad = getElementById('#cantCienDtAd').value;
//     var encad = getElementById('#cantCienEncAd').value;
//     valor = parseInt(valor); // Convertir el valor a un entero (número).
  
//     total = document.getElementById('spTotal').innerHTML;
  
//     // Aquí valido si hay un valor previo, si no hay datos, le pongo un cero "0".
//     total = (total == null || total == undefined || total == "") ? 0 : total;
  
//     /* Esta es la suma. */
//     total = (parseInt(benf) + parseInt(dtnf)+ parseInt(encnf)+ parseInt(encnf)+ parseInt(vonf)+ parseInt(atm)+ parseInt(arqueo)+
//     parseInt(bead)+ parseInt(dtad)+ parseInt(encad));
  
//     // Colocar el resultado de la suma en el control "span".
//     document.getElementById('spTotal').innerHTML = total;
//     document.getElementById('cant_cien').value = total;
// }

function sumar () {
  
  // Convertir el valor a un entero (número).
    
    var total = 0

    var cienBe = parseInt(document.getElementById('cantCienBeNf').value); 
    var cienDtnf = parseInt(document.getElementById('cantCienDtNf').value);
    var cienEncnf = parseInt(document.getElementById('cantCienEncNf').value);
    var cienVonf = parseInt(document.getElementById('cantCienVoNf').value);
    var cienAtm = parseInt(document.getElementById('cantCienAtm').value);
    var cienArqueo = parseInt(document.getElementById('cantCienArqueo').value);

    total = document.getElementById('spTotal').innerHTML;
    
    /* Esta es la suma. */
    total =(cienBe + cienDtnf + cienEncnf + cienVonf + cienArqueo + cienAtm);
    
    // Colocar el resultado de la suma en el control "span".
    document.getElementById('spTotal').innerHTML = parseInt(total);
    document.getElementById('cant_cien').value = total;
    
}

function sumarCincuenta () {
    // Convertir el valor a un entero (número).
    
    var cincuBe = parseInt(document.getElementById('cantCincuentaBeNf').value); 
    var cincuDtnf = parseInt(document.getElementById('cantCincuentaDtNf').value);
    var cincuEncnf = parseInt(document.getElementById('cantCincuentaEncNf').value);
    var cincuVonf = parseInt(document.getElementById('cantCincuentaVoNf').value);
    var cincuAtm = parseInt(document.getElementById('cantCincuentaAtm').value);
    var cincuArq = parseInt(document.getElementById('cantCincuentaArqueo').value);
    var cincuBeAd = parseInt(document.getElementById('cantCincuentaBeAd').value);
    var cincuDtAd = parseInt(document.getElementById('cantCincuentaDtAd').value);
    var cincuEncAd = parseInt(document.getElementById('cantCincuentaEncAd').value);

    
    /* Esta es la suma. */
    totalCincuenta =(cincuBe + cincuDtnf + cincuEncnf + cincuVonf + cincuAtm + cincuArq + cincuBeAd + cincuDtAd + cincuEncAd);
    
    // Colocar el resultado de la suma en el control "span".
    document.getElementById('spTotalCincuenta').innerHTML = parseInt(totalCincuenta);
    document.getElementById('cant_cincuenta').value = totalCincuenta;
    
}
function sumarVeinte (valor) {
    var totalVeinte = 0;	
    valor = parseInt(valor); // Convertir el valor a un entero (número).
    
    totalVeinte = document.getElementById('spTotalVeinte').innerHTML;
    
    // Aquí valido si hay un valor previo, si no hay datos, le pongo un cero "0".
    totalVeinte = (totalVeinte == null || totalVeinte == undefined || totalVeinte == "") ? 0 : totalVeinte;
    
    /* Esta es la suma. */
    totalVeinte = (parseInt(totalVeinte) + parseInt(valor));
    
    // Colocar el resultado de la suma en el control "span".
    document.getElementById('spTotalVeinte').innerHTML = parseInt(totalVeinte);
    document.getElementById('cant_veinte').value = totalVeinte;
}

function sumarDiez (valor) {
    var totalDiez = 0;	
    valor = parseInt(valor); // Convertir el valor a un entero (número).
    
    totalDiez = document.getElementById('spTotalDiez').innerHTML;
    
    // Aquí valido si hay un valor previo, si no hay datos, le pongo un cero "0".
    totalDiez = (totalDiez == null || totalDiez == undefined || totalDiez == "") ? 0 : totalDiez;
    
    /* Esta es la suma. */
    totalDiez = (parseInt(totalDiez) + parseInt(valor));
    
    // Colocar el resultado de la suma en el control "span".
    document.getElementById('spTotalDiez').innerHTML = parseInt(totalDiez);
    document.getElementById('cant_diez').value = totalDiez;
}

function sumarCinco (valor) {
    var totalCinco = 0;	
    valor = parseInt(valor); // Convertir el valor a un entero (número).
    
    totalCinco = document.getElementById('spTotalCinco').innerHTML;
    
    // Aquí valido si hay un valor previo, si no hay datos, le pongo un cero "0".
    totalCinco = (totalCinco == null || totalCinco == undefined || totalCinco == "") ? 0 : totalCinco;
    
    /* Esta es la suma. */
    totalCinco = (parseInt(totalCinco) + parseInt(valor));
    
    // Colocar el resultado de la suma en el control "span".
    document.getElementById('spTotalCinco').innerHTML = parseInt(totalCinco);
    document.getElementById('cant_cinco').value = totalCinco;
}

function sumarDos (valor) {
    var totalDos = 0;	
    valor = parseInt(valor); // Convertir el valor a un entero (número).
    
    totalDos = document.getElementById('spTotalDos').innerHTML;
    
    // Aquí valido si hay un valor previo, si no hay datos, le pongo un cero "0".
    totalDos = (totalDos == null || totalDos == undefined || totalDos == "") ? 0 : totalDos;
    
    /* Esta es la suma. */
    totalDos = (parseInt(totalDos) + parseInt(valor));
    
    // Colocar el resultado de la suma en el control "span".
    document.getElementById('spTotalDos').innerHTML = parseInt(totalDos);
    document.getElementById('cant_dos').value = totalDos;
}

function sumarMil (valor) {
    var totalMil = 0;	
    valor = parseInt(valor); // Convertir el valor a un entero (número).
    
    totalMil = document.getElementById('spTotalMil').innerHTML;
    
    // Aquí valido si hay un valor previo, si no hay datos, le pongo un cero "0".
    totalMil = (totalMil == null || totalMil == undefined || totalMil == "") ? 0 : totalMil;
    
    /* Esta es la suma. */
    totalMil = (parseInt(totalMil) + parseInt(valor));
    
    // Colocar el resultado de la suma en el control "span".
    document.getElementById('spTotalMil').innerHTML = parseInt(totalMil);
    document.getElementById('cant_mil').value = totalMil;
}
$(document).ready(function () {
   
    // loaddatosalumnos();
     metodosalones();
     $("#cuadrobajo").hide();
    });


    function metodosalones() {

        var datosOK = "";
        var strUrl = "getdatos/51";
    $.ajax({
        type: "post",
        url: strUrl,
        data:{},
        dataType: "html",
        success: function (response) {
            data = segdeNegocios(response);
            datosOK = data.message.toUpperCase();
         
            if (datosOK == "OK") {
                var datos = data.data;
                var html1 = "";
               // console.log(datos);
               var html1 = "<option value='msj'>Seleccione</option>";
               $.each(datos, function(index, value) { 
                var cadena11 =datos[index][2];
              
                var cadena22 = cadena11.slice(0,4); //separo fecha
                var cadena33 = cadena11.slice(4,5); // separo ciclo
                // console.log(datos[index][2]);
                html1 += "<option value='"+datos[index][1]+"->"+datos[index][0]+"->"+datos[index][3]+"->"+datos[index][4]+"'>"+ datos[index][2]+" - "+datos[index][1]+"</option>";
                   
             });
             $("#combosalon").html(html1);
    
           
            } else {
                viewMessage("divMessage", "Alerta", data.data, "danger", "ban");
            }
        }
    
    })
    
    
    }


    function loadinfo() {
        

        //var combosalon = partesalon.split('->');
           
   var parametro  = $("#combosalon").val();
   var porciones = parametro.split('->');

   var cadena22 = porciones[1].slice(0,4); //separo fecha
   var cadena33 = porciones[1].slice(4,5); // separo ciclo
 
   var ciclo=cadena22+"-"+cadena33
    
   $("#cciclo").html(ciclo);
   $("#llinea").html(porciones[2]);
     
    detalleareacont(porciones[3],porciones[0]);
    graficas(porciones[0]);
    barra(porciones[0]);

    }


    function detalleareacont(codlinea,codsalon) {
       // alert(codlinea+codsalon);

        var datosOK = "";
        var strUrl = "getdatos/52";
    $.ajax({
        type: "post",
        url: strUrl,
        data:{
            codlinea:codlinea,
            codsalon:codsalon

        },
        dataType: "html",
        success: function (response) {
            data = segdeNegocios(response);
            datosOK = data.message.toUpperCase();
         
            if (datosOK == "OK") {
                var datos = data.data;
                var html2 = "";
               // console.log(datos);
             var html2="";
             var html11="";

                if (datos[0][0]==9 || datos[0][0]=="C" || datos[0][0]=="L" || datos[0][0]=="Q") {
                    
                      //  console.log(datos[1][0]);
                      var c1=0;var c2=0;var c3=0;var c4=0;var c5=0;
                      $.each(datos, function(index, value) { 
                
                         c1+=parseInt(datos[index][1]);
                         c2+=parseInt(datos[index][2]);
                   
                                   
                                   });
                    var letras = c1;
                    var ciencias = c2;
                    var totaleslinea =  letras+ciencias;
                   // console.log(c2);

               
                   html11 +="<tr>"+
                    "<td style='border: 0px;padding-left: 20px;'>LETRAS</td >" +
                    "<td style='border: 0px;'>" + parseInt(letras, 10)+ "</td >" +     
                    "<td style='border: 0px;'>" + financial( letras*100/totaleslinea)+"%</td >" +                   
                  " </tr > ";

                  html11 +="<tr>"+
                  "<td style='border: 0px;padding-left: 20px;'>CIENCIAS</td >" +
                  "<td style='border: 0px;'>" + parseInt(ciencias, 10)+ "</td >" +     
                  "<td style='border: 0px;'>" + financial( ciencias*100/totaleslinea)+"%</td >" +                   
                " </tr > ";

                html11 +="<tr>"+
                "<td style='font-size: 16px; font-weight: bold;padding-left: 20px;color:#04043e;font-family: 'Source Sans Pro'; '>TOTAL</td >" +
                "<td style='font-size: 16px; font-weight: bold;color:#04043e;font-family: 'Source Sans Pro'; '>"+totaleslinea+"</td >" +   
                "<td style='font-size: 16px; font-weight: bold;color:#04043e;font-family: 'Source Sans Pro'; '>100%</td >" +                     
              " </tr > ";
                 
              $("#resareacarrera").html(html11);

                }
                else
                { 
                    var total=0;
                    $.each(datos, function(index, value) {  
                        total += parseInt(datos[index][1]);

                     });
                   
                    // console.log(total);
                    $.each(datos, function(index, value) { 
                     
                      
                        html2 +="<tr>"+
                        "<td style='border: 0px;padding-left: 20px;'>" + datos[index][0]+ "</td >" +
                        "<td style='border: 0px;'>" + parseInt(datos[index][1], 10)+ "</td >" +   
                        "<td style='border: 0px;'>" + financial( datos[index][1]*100/total)+"%</td >" +  
                        " </tr > ";
                 //console.log(datos[index][0]);
                    });

                    html2 +="<tr>"+
                    "<td style='    FONT-WEIGHT: BOLD;border: 0px;padding-left: 20px;'>TOTAL</td >" +
                    "<td style='    FONT-WEIGHT: BOLD;border: 0px;'>" + parseInt(total, 10)+ "</td >" +   
                    "<td style='    FONT-WEIGHT: BOLD;border: 0px;'>100%</td >" +  
                    " </tr > ";
                 
                    $("#resareacarrera").html(html2);
                }
                $("#cuadrobajo").show();
      
           
            } else {
                viewMessage("divMessage", "Alerta", data.data, "danger", "ban");
            }
        }
    
    })

        
    }



    function financial(x) {
        return Number.parseFloat(x).toFixed(1);
      }
      

      google.charts.load('current', {'packages':['corechart']});
google.charts.setOnLoadCallback(drawChart);


function graficas(codsalon){
    // alert(codsalon);
   
          var datosOK = "";
          var strUrl = "getdatos/53";
      $.ajax({
          type: "post",
          url: strUrl,
          data:{
              codsalon:codsalon
          },
          dataType: "html",
          success: function (response) {
              data = segdeNegocios(response);
              datosOK = data.message.toUpperCase();
           
              if (datosOK == "OK") {  
                  var datos = data.data;
                   
                var total="";
                
                
                 var regular=0;
                 var beca=0;
                 var semibeca= 0;

                  $.each(datos, function(index, value) { 
  
                          // console.log(datos[index][1]);
                   
                          if(datos[index][1]=="REGULAR"){
                           regular=regular+1;
                          } 
                          if(datos[index][1]=="BECA"){
                           beca=beca+1;
                          } 
                          if(datos[index][1]=="MEDIA BECA"){
                           semibeca=semibeca+1;
                          }
                           
                                });

                           $("#numerocantidad").html((regular+beca+semibeca));
                             drawChart(regular,beca,semibeca);
                               //$("#regular").val(regular);
                               //$("#media").val(semibeca);
                               //$("#beca").val(beca);
                                // console.log(regular);
              
              }  else {
                  viewMessage("divMessage", "Alerta", data.data, "danger", "ban");
              }
            }
      
      
         })         

       
}



function  drawChart(regular,beca,semibeca){

  var data = google.visualization.arrayToDataTable([
    ['Task', 'Hours per Day'],
    ['REGULAR',     regular],
    ['BECA',      beca],
    ['MEDIA BECA', semibeca]

  ]);

  var options = {
    title: ''
  };

  var chart = new google.visualization.PieChart(document.getElementById('piechart'));

  chart.draw(data, options);
}




function barra(codsalon) {
    alert(codsalon);

    var datosOK = "";
    var strUrl = "getdatos/54";
$.ajax({
    type: "post",
    url: strUrl,
    data:{
        codsalon:codsalon
    },
    dataType: "html",
    success: function (response) {
        data = segdeNegocios(response);
        datosOK = data.message.toUpperCase();
     
        if (datosOK == "OK") {
            var datos = data.data;
            
            var total = 0;
            var simprepa = 0;
            var meno6meses = 0;
            var sietedoce = 0;
            var masdedoce = 0;
            
            $.each(datos, function(index, value) { 
               

                if (datos[index][2] == 19) {
                    simprepa += 1;
                }
                if (datos[index][2] == 21) {
                    meno6meses += 1;
                }
                if (datos[index][2] == 26) {
                    sietedoce += 1;
                }

                if (datos[index][2] == 20) {
                    masdedoce += 1;
                }


                });
                total =simprepa+meno6meses+sietedoce+masdedoce;
                console.log(total);

            // var vData = data.data[0];
            // $.each(datos, function(index, value) {

                // console.log(datos[index][1]);

              
                var barra1 =financial (simprepa * 100 / total);
                var barra2 = financial(meno6meses * 100 / total);
                var barra3 =financial (sietedoce * 100 / total);
                var barra4 = financial(masdedoce * 100 / total);
 
                var bar1 = '<div>Sin preparación  </div><br>  <div class="progress" style=" border-radius: 1em;">' +
                    '<div class="progress-bar" role="progressbar" style="width:' + (barra1) + '%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">' +
                    '<span style="    position: absolute; left: 40px; padding-top: 5px; font-weight: bold;">' + (barra1) + '%</span>' +
                    '</div>' +
                    ' </div>';

                var bar2 = '<div>Menos de 6 meses  </div><br>  <div class="progress" style=" border-radius: 1em;">' +
                    '<div class="progress-bar" role="progressbar" style="width:' + (barra2) + '%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">' +
                    '<span style="    position: absolute; left: 40px; padding-top: 5px; font-weight: bold;">' + (barra2) + '%</span>' +
                    '</div>' +
                    ' </div>';
                var bar3 = '<div>De 7 a 12 meses </div><br>  <div class="progress" style=" border-radius: 1em;">' +
                    '<div class="progress-bar" role="progressbar" style="width:' + (barra3) + '%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">' +
                    '<span style="    position: absolute; left: 40px; padding-top: 5px; font-weight: bold;">' + (barra3) + '%</span>' +
                    '</div>' +
                    ' </div>';
                var bar4 = '<div>Más de 12 meses </div><br>  <div class="progress" style=" border-radius: 1em;">' +
                    '<div class="progress-bar" role="progressbar" style="width:' + (barra4) + '%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">' +
                    '<span style="    position: absolute; left: 40px; padding-top: 5px; font-weight: bold;">' + (barra4) + '%</span>' +
                    '</div>' +
                    ' </div>';

                $("#barra1").html(bar1);
                $("#barra2").html(bar2);
                $("#barra3").html(bar3);
                $("#barra4").html(bar4);

       //  $("#combosalon").html(html1);

       
        } else {
            viewMessage("divMessage", "Alerta", data.data, "danger", "ban");
        }
    }

})



}
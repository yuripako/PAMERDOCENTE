$(document).ready(function() {
	$('#verNotificacionesNuevas').click(function(){
		$("#notificacionesNuevas").show();
		$("#verNotificacionesNuevas").hide(10);
	});
	$('#verNotificacionesAnteriores').click(function(){
		$("#notificacionesAnteriores").show();
		$("#verNotificacionesAnteriores").hide(10);
	});
    $('.selectd').on('click','.placeholder',function(){
        var parent = $(this).closest('.selectd');
        if ( ! parent.hasClass('is-open')){
            parent.addClass('is-open');
            $('.selectd.is-open').not(parent).removeClass('is-open');
        }else{
            parent.removeClass('is-open');
        }
    }).on('click','ul>li',function(){
        var parent = $(this).closest('.selectd');
        parent.removeClass('is-open').find('.placeholder').html( $(this).html() );
    });
    // carga_inicial();
    cargalinea();
});

function cargalinea(){
    var datosOK = "";
    var aParam = '';
    var strUrl = "getdatos/1";
    aParam = segenNegocios(aParam);
    $.post(strUrl, { "objJSON": aParam }, null, "html")
        .done(function(data, textStatus, jqXHR) {
            data = segdeNegocios(data);
            datosOK = data.message.toUpperCase();
            if (datosOK == "OK") {
                var datos = data.data;
                var vHtml = '';
                $.each(datos, function(index, value) { 
                    vHtml += '<li    onclick=\'cargaciclo("' +datos[index][0]+ '", "' +datos[index][2]+ '","' +datos[index][1]+ '");\'   >'+ datos[index][1] +'</li>';
                });
                $("#selectLinea").html(vHtml);
                $("#loading").hide(10);
            } else {
                $("#loading").hide(10);
                viewMessage("divMessage", "Alerta", data.data, "danger", "ban");
            }
        })
        .fail(function(jqXHR, textStatus, errorThrown) {
            viewMessage("divMessage", "Alerta", "Error al obtener los materiales...", "warning", "warning");
        })
        .always(function() {
            reLogin(datosOK);
        });
}

function cargaciclo(param, param2, param3) {
	var datosOK = "";
	var strUrl = "getdatos/2";
	$.ajax({
		type: "post",
		url: strUrl,
		data: {
            codlinea:param2
        },
		dataType: "html",
		success: function (response) {
			data = segdeNegocios(response);
			datosOK = data.message.toUpperCase();
            if (datosOK == "OK") {
                var datos = data.data;
                var vHtml = '';
                $.each(datos, function(index, value) { 
                    vHtml += '<li    onclick=\'cargatemario("' +datos[index][0]+ '", "' +datos[index][4]+ '","' +datos[index][1]+ '");\'   >'+ datos[index][2] +'</li>';
                });
                $("#selectCiclo").html(vHtml);
                $("#loading").hide(10);
            } else {
                $("#loading").hide(10);
                viewMessage("divMessage", "Alerta", data.data, "danger", "ban");
            }
		},
	});
}

function cargatemario(param, param2, param3) {
	var datosOK = "";
	var strUrl = "getdatos/3";
	$.ajax({
		type: "post",
		url: strUrl,
		data: {
            codsalon:param3,
            codlinea:param2,
            codciclo:param
        },
		dataType: "html",
		success: function (response) {
			data = segdeNegocios(response);
			datosOK = data.message.toUpperCase();
            if (datosOK == "OK") {
                var enlaceurl = data.data.archivo;
                if(enlaceurl!==''){
                    $('#pdf-view').html('<iframe style="height: 600px;width:100%;" src="' + enlaceurl + '" frameborder="0" allowfullscreen></iframe>');
                }else{
                    $('#pdf-view').html('<div>No hay material disponible.</div>');
                }
            }else{
                $('#pdf-view').html('<div>No disponible</div>');
            } 
		},
	});
}


var pos1 = null; //posicion de cuadro de mensaje

$(document).ready(function(){//BUSCAR EL USUARIO DEPENDIENDO LA OPCION ELEGIDA
	
	$('#filtro').change(function () {
   		$("#filtro option:selected").each(function ()
		{
			elegido=$(this).val();
		});
		setMensaje();
		searchUsuario();
		$("#searchNombre").focus();
	    $('.xlink').live('click',function(e){
		e.preventDefault();
		});
	});
});

//FUNCIONES DE BUSQUEDA: BUSCAR LOS DATOS DE LA DOS FORMAS YA SEA INGRESANDO DATOS O HACIENDO CLICK
function searchUsuario(){
	$("#searchNombre").keyup(function(){
		switch (elegido){
			case "uno": foxBuscar1();break;
			case "dos": foxBuscar2();break;
			case "tres": foxBuscar3();break;
			case "cuatro": foxBuscar4();break;
			case "cinco": foxBuscar5();break;
		}
	});
	$('#searchUsuario').submit(function(e){
		e.preventDefault();
			
			switch (elegido){
			case "uno": foxBuscar1();break;
			case "dos": foxBuscar2();break;
			case "tres": foxBuscar3();break;
			case "cuatro": foxBuscar4();break;
			case "cinco": foxBuscar5();break;
		}
		});
}

// SI LA OPCION ES LA PRIMERA ENTONCES MANDA MENSAJE
function foxBuscar1(){
		$('#responseSearchUsuario').html("SELECCIONA OPCION");	
}
//BUSCA ORDENES DE TRABAJO
function foxBuscar2() {
	$.ajax({
		type: 'GET',
		url: 'php/BuscarOrden.php', 
      	data: ({id :$('#searchNombre').val()}), 
      	contentType: "application/json; charset=utf-8", 
      	dataType: "json",
		beforeSend: function(){
			$('#responseSearchUsuario').html(msearch);
		},
      	success: function(data){
			if(data == null)
				$('#responseSearchUsuario').html("NO SE ENCUENTRA LA ORDEN DE TRABAJO");
			else {
				$('#responseSearchUsuario').html("");
				for (var i = 0; i < data.length; i++) {
					$('#responseSearchUsuario').append("<tr><td>" + 
						data[i].Numero + "</td></tr>"); // NOMBRES: LO QUE SE VA MOSTRAR EN LA TABLA...
				}
				$('#responseSearchUsuario tr').each(function(i) {
					$(this).click(function() {
						$('#closeDialogo').click();
						$('#ajaxBuscar').html(mloading);
						$('#ajaxBuscar').load('php/VistaOrden.php', {id:data[i].Num_Orden});
					});
				});
			}
	  	}
		});
}

//BUSCA COTIZACIONES
function foxBuscar3() {
	$.ajax({
		type: 'GET',
		url: 'php/BuscarCotizacion.php', 
      	data: ({id :$('#searchNombre').val()}), 
      	contentType: "application/json; charset=utf-8", 
      	dataType: "json",
		beforeSend: function(){
			$('#responseSearchUsuario').html(msearch);
		},
      	success: function(data){
			if(data == null)
				$('#responseSearchUsuario').html("NO SE ENCUENTRA LA COTIZACION");
			else {
				$('#responseSearchUsuario').html("");
				for (var i = 0; i < data.length; i++) {
					$('#responseSearchUsuario').append("<tr><td>" + 
						data[i].Nombre + "</td></tr>"); // NOMBRES: LO QUE SE VA MOSTRAR EN LA TABLA...
				}
				$('#responseSearchUsuario tr').each(function(i) {
					$(this).click(function() {
						$('#closeDialogo').click();
						$('#ajaxBuscar').html(mloading);
						$('#ajaxBuscar').load('php/VistaCotizacion.php', {id:data[i].Numero});
					});
				});
			}
	  	}
		});
}
// BUSCAS CONDUCTORES
function foxBuscar4() {
	$.ajax({
		type: 'GET',
		url: 'php/BuscarConductor.php', 
      	data: ({id :$('#searchNombre').val()}), 
      	contentType: "application/json; charset=utf-8", 
      	dataType: "json",
		beforeSend: function(){
			$('#responseSearchUsuario').html(msearch);
		},
      	success: function(data){
			if(data == null)
				$('#responseSearchUsuario').html("NO SE ENCUENTRA EL CONDUCTOR");
			else {
				$('#responseSearchUsuario').html("");
				for (var i = 0; i < data.length; i++) {
					$('#responseSearchUsuario').append("<tr><td>" + 
						data[i].nombre + "</td></tr>"); // NOMBRES: LO QUE SE VA MOSTRAR EN LA TABLA...
				}
				$('#responseSearchUsuario tr').each(function(i) {
					$(this).click(function() {
						$('#closeDialogo').click();
						$('#ajaxBuscar').html(mloading);
						$('#ajaxBuscar').load('php/VistaTrabajador', {id:data[i].Codigo });
					});
				});
			}
	  	}
	});
}
//BUSCA UNIDADES VEHICULARES
function foxBuscar5() {
	$.ajax({
		type: 'GET',
		url: 'php/BuscarVehiculo.php', 
      	data: ({id :$('#searchNombre').val()}), 
      	contentType: "application/json; charset=utf-8", 
      	dataType: "json",
		beforeSend: function(){
			$('#responseSearchUsuario').html(msearch);
		},
      	success: function(data){
			if(data == null)
				$('#responseSearchUsuario').html("NO SE ENCUENTRA EL VEHICULOS");
			else {
				$('#responseSearchUsuario').html("");
				for (var i = 0; i < data.length; i++) {
					$('#responseSearchUsuario').append("<tr><td>" + 
						data[i].nombres + "</td></tr>"); // NOMBRES: LO QUE SE VA MOSTRAR EN LA TABLA...
				}
				$('#responseSearchUsuario tr').each(function(i) {
					$(this).click(function() {
						$('#closeDialogo').click();
						$('#ajaxBuscar').html(mloading);
						$('#ajaxBuscar').load('php/VistaVehiculo.php', {id:data[i].Cod_Unidad});
					});
				});
			}
	  	}
		});
}


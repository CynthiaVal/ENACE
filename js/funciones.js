// JavaScript Document
//nom y pro
$(document).ready(function(){
	cargar_nom();
	$("#nom").change(function(){dependencia_pro();});
	$("#pro").change(function(){activar_boton();});
	$("#pro").attr("disabled",true); 
	
function cargar_nom()
{
	$.get("php/cargar_nom.php", function(resultado){
		if(resultado == false)
		{
			alert("No hay facus");
		}
		else
		{
			$('#facultad').append(resultado);			
			
		}
	});	
}

function dependencia_pro()
{
	var code = $("#nom").val();
	$.get("php/dependencia_pro.php", { code: code },
		function(resultado)
		{
			if(resultado == false)
			{
				alert("No hay escuela");
			}
			else
			{
				$("#pro").attr("disabled",false);
				document.getElementById("pro").options.length=1;
				$('#pro').append(resultado);			
			}
		}

	);
}

function activar_boton()
{
	$("#Aceptar_filtro").attr("disabled",false); 
}
<?include ("Acceso/Seguridad.php");?> 
<?php session_start();?>
<?php
require_once("Acceso/conexion_db.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"><!-- InstanceBegin template="/Templates/planEscPublica.dwt.php" codeOutsideHTMLIsLocked="false" -->
<head>	
	<meta http-equiv="Content-Type" content="text/html;charset=utf-8" /> 
	<!-- InstanceBeginEditable name="doctitle" -->
	<title>Ingresar - ENACE</title>
    <style type="text/css">
<!--
.Estilo1 {
	font-size: 18px;
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-weight: bold;
}
-->
</style>
<link rel="stylesheet" type="text/css" href="css/jquery-ui-1.10.3.custom.css"/>
<script type="text/javascript" src="js/jquery-1.4.2.min.js"></script>
<script type="text/javascript" src="js/jquery-ui-1.8.14.custom.min.js"></script>
<script type="text/javascript" src="js/jquery-ui-1.8.5.custom.min.js"></script>
<script tipe="text/javascript">
	$(function(){
		$("#txtTipoesc").autocomplete({
			source: "busphp/muetipesc.php",
			minLength: 1
			});
		$('#txtANotario').autocomplete({
			source: "busphp/muenot.php",
			minLength: 1
			});
		$('#txtOtorgadoP').autocomplete({
			source: "busphp/mueotopor.php",
			minLength: 1
			});
		$('#txtAFavor').autocomplete({
			source: "busphp/muefavor.php",
			minLength: 1
			});
		});
</script>
<script language='javascript'>
function validarFecha(Fecha){ 
var Dia= new String(Fecha.substring(0,2)) 
var Mes= new String(Fecha.substring(3,5))  
var Ano= new String(Fecha.substring(6,10))  
var gu1= new String(Fecha.substring(2,3))  
var gu2= new String(Fecha.substring(5,6))  
//alert(Fecha)  
//alert(Ano)  
//alert(Mes)  
//alert(Dia)  
//alert(gu1)  
//alert(gu2)  
if (gu1 != '-' || gu2 != '-'){  
		alert('Formato de Fecha inválido')  
	return false  
}  
//Valido el año  
if (isNaN(Ano) || Ano.length<4 || parseFloat(Ano)<1800){  
		alert('Año inválido')  
	return false  
}  
//Valido el Mes  
if (isNaN(Mes) || parseFloat(Mes)<1 || parseFloat(Mes)>12){  
	alert('Mes inválido')  
	return false  
}  
//Valido el Dia  
if (isNaN(Dia) || parseInt(Dia, 10)<1 || parseInt(Dia, 10)>31){  
	alert('Día inválido')  
	return false  
}  
if (Mes==4 || Mes==6 || Mes==9 || Mes==11 || Mes==2) {  
	if (Mes==2 && Dia > 28 || Dia>30) {  
		alert('Día inválido')  
		return false  
	}  
}  
}
</script>
<!-- InstanceEndEditable -->
<!-- poshytip -->
<link rel="stylesheet" href="../../js/poshytip-1.0/src/tip-twitter/tip-twitter.css" type="text/css" />
<link rel="stylesheet" href="../../js/poshytip-1.0/src/tip-yellowsimple/tip-yellowsimple.css" type="text/css" />
<script type="text/javascript" src="../../js/poshytip-1.0/src/jquery.poshytip.min.js"></script>
		<!-- ENDS poshytip -->
<style type="text/css">
		@import url("../../css/style.css");
		@import url("../../css/forms.css");
		@import url("../../css/forms-btn.css");
		@import url("../../css/menu.css");
		@import url('../../css/style_text.css');
		@import url("../../css/datatables.css");
		@import url("../../css/fullcalendar.css");
		@import url("../../css/pirebox.css");
		@import url("../../css/modalwindow.css");
		@import url("../../css/statics.css");
		@import url("../../css/tabs-toggle.css");
		@import url("../../css/system-message.css");
		@import url("../../css/tooltip.css");
		@import url("../../css/wizard.css");
		@import url("../../css/wysiwyg.css");
		@import url("../../css/wysiwyg.modal.css");
		@import url("../../css/wysiwyg-editor.css");
</style>
	
	<!--[if lte IE 8]>
		<script type="text/javascript" src="../js/excanvas.min.js"></script>
	<![endif]-->
	
	<script type="text/javascript" src="../../js/jquery-1.7.1.min.js"></script>
	<script type="text/javascript" src="../../js/jquery.backgroundPosition.js"></script>
	<script type="text/javascript" src="../../js/jquery.placeholder.min.js"></script>
	<script type="text/javascript" src="../../js/jquery.ui.1.8.17.js"></script>
	<script type="text/javascript" src="../../js/jquery.ui.select.js"></script>
	<script type="text/javascript" src="../../js/jquery.ui.spinner.js"></script>
	<script type="text/javascript" src="../../js/superfish.js"></script>
	<script type="text/javascript" src="../../js/supersubs.js"></script>
	<script type="text/javascript" src="../../js/jquery.datatables.js"></script>
	<script type="text/javascript" src="../../js/fullcalendar.min.js"></script>
	<script type="text/javascript" src="../../js/jquery.smartwizard-2.0.min.js"></script>
	<script type="text/javascript" src="../../js/pirobox.extended.min.js"></script>
	<script type="text/javascript" src="../../js/jquery.tipsy.js"></script>
	<script type="text/javascript" src="../../js/jquery.elastic.source.js"></script>
	<script type="text/javascript" src="../../js/jquery.customInput.js"></script>
	<script type="text/javascript" src="../../js/jquery.validate.min.js"></script>
	<script type="text/javascript" src="../../js/jquery.metadata.js"></script>
	<script type="text/javascript" src="../../js/jquery.filestyle.mini.js"></script>
	<script type="text/javascript" src="../../js/jquery.filter.input.js"></script>
	<script type="text/javascript" src="../../js/jquery.flot.js"></script>
	<script type="text/javascript" src="../../js/jquery.flot.pie.min.js"></script>
	<script type="text/javascript" src="../../js/jquery.flot.resize.min.js"></script>
	<script type="text/javascript" src="../../js/jquery.graphtable-0.2.js"></script>
	<script type="text/javascript" src="../../js/jquery.wysiwyg.js"></script>
	<script type="text/javascript" src="../../js/controls/wysiwyg.image.js"></script>
	<script type="text/javascript" src="../../js/controls/wysiwyg.link.js"></script>
	<script type="text/javascript" src="../../js/controls/wysiwyg.table.js"></script>
	<script type="text/javascript" src="../../js/plugins/wysiwyg.rmFormat.js"></script>
	<script type="text/javascript" src="../../js/costum.js"></script>
	<!-- InstanceBeginEditable name="head" -->
	<!-- InstanceEndEditable -->
</head>
<body onload="document.frmIngresar.txtCaja.focus();" >
<div id="wrapper">
  <div id="container">
	
		<div class="hide-btn top"></div>
		<div class="hide-btn center"></div>
		<div class="hide-btn bottom"></div>
		
		<div id="top" >
			<h1 id="logoMenu"></h1>
			<div id="labels">
				<ul>
					<li><a 
						    <?php 
						 
						if (isset($_SESSION['k_username'])) {
						    
						    ?>                            
                            class="user"><span class="bar">
                            Bienvenido,
                            <?php
							echo ''.$_SESSION['k_username'].'.';
							?>
                             </span></a></li>
                            
                             <li><a href="Acceso/Salir.php" class="logout"></a></li>
                            <?php
						}else{
						     ?>
                            
                            <li><a href="Index.php" class="user"><span class="bar">
                            Bienvenido,
                             </span></a></li>
                             
                             <li><a href="Acceso/Salir.php" class="logout"></a></li>
                             
                            <?php
						}
						?>
					    
				</ul>
			</div>
			<div id="menu">
				<ul> 
					<li><a href="../../Menu.php">Archivo</a></li> 
					<li ><a href="">Registrar</a>
						<ul>
							<li><a href="ingresar_enace.php"> Expedientes ENACE</a></li>
							<li><a href="ingresar_pro.php"> Programas</a></li>
						</ul>	
						 
				    </li> 
					<li >
						<a href="">Mantenimiento</a>
						<ul>
							<li><a href="mant_enace.php">Expedientes ENACE</a></li>
							<li><a href="mant_programa.php">Programas</a></li>
						</ul>	
						 
					</li>
					<li><a href="imp_enace.php">Imprimir</a></li>
					<li><a href="cons_enace.php">Consultar</a></li>
					<li><a href="ayuda_enace.php">Ayuda</a></li> 
				</ul>
			</div>
		</div>
		  
		 <!-- InstanceBeginEditable name="EditRegion3" -->
<?php
error_reporting(E_ALL ^ E_NOTICE);
$enlace=Conec_db();
	$insertar = $_REQUEST['Enviar'];
	$Nro_caja = $_REQUEST['txt_ncaja'];
	$Nro_file = $_REQUEST['txt_nfile'];
	$Programa = $_REQUEST['txt_programa'];
	$Titular = utf8_decode($_REQUEST['txt_titular']);
	$Manzana = $_REQUEST['txt_mzn'];
	$Lote = $_REQUEST['txt_lote'];
	$Nro_folios = $_REQUEST['txt_nfolios'];	
	$error =false;	
	
	
	if (isset($insertar) )
		{ 		
		//tipo de programa
		include("../../Clases/clsPrograma.php");
		$ClsPrograma= new ClsPrograma;
		$Programa=$ClsPrograma->fncSelPrograma($Programa);

		
		//consulta de inserccion
		include("../../Clases/clsEnace.php");
		$ClsEnace = new ClsEnace;
		$ClsEnace->fncInsEnace($Nro_caja, $Nro_file, $Manzana, $Lote, $Nro_folios,strtoupper($Titular),$Programa[0]); 		
		
		}
		else
		{
		?>
			 <div id="right">
                <div class="section">
				<div class="box">
					<div class="title">
						<center>Ingreso de expedientes de la Empresa Nacional de Edificaciones </center> 
						<span class="hide"></span>
					</div>
					<div class="content">
                    
						<form name="frmIngresar" action="ingresar_enace.php" id="frmIngresar" method="post" class="valid" enctype="multipart/form-data">
						    
							<div class="row">
								<label>Nro. de Caja (*):</label>
								<div class="right">
									<input name="txt_ncaja" type="text" id="txt_ncaja" size="55" maxlength="5" class="{validate:{required:true, messages:{required:'Por favor ingrese este campo'}}}" 
													
				                  <?php
										if (isset($insertar))
											print ("VALUE='$Nro_caja' >");
										else
											print (">");
										 
									?>
									</div>
							</div>
							
							<div class="row">
								<label>Nro. File  (*):</label>
								<div class="right">
									<input name="txt_nfile" type="text" id="txt_nfile" size="55" maxlength="5" class="{validate:{required:true, messages:{required:'Por favor ingrese este campo'}}}" 
													
				                  <?php
										if (isset($insertar))
											print ("VALUE='$Nro_file' >");
										else
											print (">");
										 
									?>
								</div>
							</div>
							
							<div class="row">
								<label>Programa (*):</label>
								<div class="right">
									<input name="txt_programa" type="text" id="txt_programa"  class="{validate:{required:true, messages:{required:'Por favor ingrese este campo'}}}"> 
											 
									</div>
							</div>
							
							<div class="row">
								<label>Manzana  (*):</label>
								<div class="right">
									<input name="txt_mzn" type="text" id="txt_mzn"  maxlength="5"  class="{validate:{required:true, messages:{required:'Por favor ingrese este campo'}}}" 
													
				                  <?php
										if (isset($insertar))
											print ("VALUE='$Manzana' >");
										else
											print (">");
										 
									?>
									</div>
							</div>
							
							<div class="row">
								<label>Lote  (*):</label>
								<div class="right">
									<input name="txt_lote" type="text" id="txt_lote"  maxlength="150"  class="{validate:{required:true, messages:{required:'Por favor ingrese este campo'}}}" 
													
				                  <?php
										if (isset($insertar))
											print ("VALUE='$Lote' >");
										else
											print (">");
										 
									?>
									</div>
							</div>
							
							<div class="row">
								<label>Titular  (*):</label>
								<div class="right">
									<input name="txt_titular" type="text" id="txt_titular"  maxlength="150"  
													
				                  <?php
										if (isset($insertar))
											print ("VALUE='$Titular' >");
										else
											print (">");
										 
									?>
									</div>
							</div>
							
							
							
							<div class="row">
								<label>Nro. de folios:</label>
								<div class="right">
									<input name="txt_nfolios" type="text" id="txt_nfolios"  class="{validate:{required:true, messages:{required:'Por favor ingrese este campo'}}}" 
									<?php
									if (isset($insertar))
										print ("VALUE='$Nro_folios' >");
									else
										print (">");
									 
								?>        
									</div>
							</div>
							
							
							
							<div class="row">								 
								<div class="center">
									<center>
										<button type="submit" name="Enviar" id="Enviar" value="Guardar" class="red"><span>Insertar</span></button>
									<button type="reset" name="" id="" value="Limpiar" class="orange"><span>Limpiar</span></button>
									</center>
								</div>
							</div> 
							</form>
					</div>
				 </div> 
				 </div> 
				 </div>
              	         
      <?php
      }
      ?>
                      
	<!-- InstanceEndEditable -->					 					
 		  
	     <div id="footer"> 
                
                <center><h6>Archivo Regional de Tacna - Todos los derechos reservados</h6>
                </center>
		</div>	    
				                    
            
  </div>
</div>
</div>

</body>

<!-- InstanceEnd --></html> 
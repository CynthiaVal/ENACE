
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
	<title>Mantenimiento de Expedientes de ENACE</title>
<style type="text/css">
.paginate {
	font-family: Arial, Helvetica, sans-serif;
	font-size: .9em;
	position:relative;
 	top:-10px; 
}

a.paginate {
	border: 1px solid #FF9900;
	padding: 5px 6px 5px 6px;
	text-decoration: none;
	color: #FF9900;
	position:relative;
 	top:-10px; 
}


a.paginate:hover {
	background-color: #FF9900;
	color: #000;
	text-decoration: underline;
	position:relative;
 	top:-10px; 
}

a.current {
	border: 1px solid #FF9900;
	font: bold .9em Arial,Helvetica,sans-serif;
	padding: 5px 6px 5px 6px;
	cursor: default;
	background:#FF9900;
	color: #000;
	text-decoration: none;
	position:relative;
 	top:-10px; 
}

span.inactive {
	border: 1px solid #cccccc;
	font-family: Arial, Helvetica, sans-serif;
	font-size: .9em;
	padding: 5px 6px 5px 6px;
	color: #cccccc;
	cursor: default;
	position:relative;
 	top:-10px; 
}
 
</style>
<script>
function hilite(elem)
{
	elem.style.background = '#FFC';
}

function lowlite(elem)
{
	elem.style.background = '';
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
						 	error_reporting(E_ALL ^ E_NOTICE);
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
<div id="right">
    <div class="section"> 
     
	  <center>
     
	<div class="content">
		<div class="box">
<p align="center"><center><h1>Mantenimiento de Expedientes  ENACE </h1></center></p>   
<?php $enlace=Conec_db();?>
<?php
include('../../js/paginator.class.php');  
  
//consulta de inserccion
include("../../Clases/clsEnace.php");
$ClsEnace = new clsEnace;
$num_rows=$ClsEnace->fncSelEnaceTotal();
 
$pages = new Paginator;
$pages->items_total = (int)$num_rows[0];
$pages->mid_range = 9; // Number of pages to display. Must be odd and > 3
$pages->paginate();

echo "<center>".$pages->display_pages();
echo "<span class=\"\">".$pages->display_jump_menu().$pages->display_items_per_page()."</span></center>";
 
$row=$ClsEnace->fncSelEnace($pages->low,$pages->items_per_page); 
echo "<br><table>";
echo "<thead> <tr><th>Nro. Caja</th><th>Nro. File</th><th>Manzana</th><th>Lote</th><th>Titular</th><th>Programa</th><th>Folio</th><th>Accion</th></tr></thead> ";
 
$length = count($row); 
for ($i = 0; $i < $length; $i++) {
	$row[$i]=array_map('utf8_encode', $row[$i]);
	echo "<tr onmouseover=\"hilite(this)\" onmouseout=\"lowlite(this)\">
	<td>".$row[$i][1]."</td>
	<td width='60' >".$row[$i][2]."</td>
	<td  width='180'>".$row[$i][3]."</td>
	<td  width='180'>".$row[$i][4]."</td>
	<td width='25'>".$row[$i][5]."</td>
	<td width='120'>".$row[$i][7]."</td>
	<td>".$row[$i][8]."</td>
	
	<td width='35' ><a href='Editar_enace.php?id=".$row[$i][0]."'><img width='15' height='15' src='../../Imagen/edit.png' title='Editar'></a>
    <a href='Eliminar_enace.php?id=".$row[$i][0]."'><img width='15' height='15' src='../../Imagen/remove.png' title='Eliminar'></a></td></tr>\n";
}
echo "</table><p><br>";

echo "<center>".$pages->display_pages()."</center>";
echo "<p class=\"paginate\">Pagina: $pages->current_page de $pages->num_pages</p>\n";
echo "<p class=\"paginate\">Seleccionar de la tabla $pages->limit (retrieve records $pages->low-$pages->high de la tabla - $pages->items_total item total / $pages->items_per_page items por pagina)";
?>
</div>
		</div> 
     
      </center> 
	  
	  </div>
	  </div>
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
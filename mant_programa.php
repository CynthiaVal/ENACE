<?phpinclude ("Acceso/Seguridad.php");?> 
<?php session_start();?>
<?php
require_once("Acceso/conexion_db.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"><!-- InstanceBegin template="/Templates/planEscPublica.dwt.php" codeOutsideHTMLIsLocked="false" -->
<head>	
	<meta http-equiv="Content-Type" content="text/html;charset=utf-8" /> 
	<!-- InstanceBeginEditable name="doctitle" -->
	<title>Mantenimiento de Tipo de Escrituras</title>
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
			<h1 id="logoEscPub"></h1>
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
                            
                            href="Index.php" class="user"><span class="bar">
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
                 
<?php $enlace=Conec_db();?>


       <div id="right"> 
       		<div class="section">
				<div class="box">
					<div class="title">
						Mantenimiento de Programas
						<span class="hide"></span>
					</div>
					<div class="content">
						 <table cellspacing="0" cellpadding="0" border="0" class="pagesearch"> 
							<thead> 
								<tr>
									<th>Programa </th> 
									
									<th>Acci&oacute;n</th>
									
								</tr>
							</thead>
							<tbody>
								 <?php
									 include("../../Clases/clsPrograma.php");
							 
									// Create class instance
									$ClsPrograma = new clsPrograma; 
									// Call your class instance's method
									$rs = $ClsPrograma->fncSelProgra(); 
									 
								  while($campo=mysql_fetch_array($rs)){  
									$campo=array_map('utf8_encode', $campo);
								  ?>
								<tr>
 								  <td >&nbsp;<?php echo $campo[1]; ?></td>
			                       
			                      <td ><a href='editar_prog.php?id=<?php echo $campo['0']?>'>
			                      	<img width="15" height="15"  src='../../Imagen/edit.png' title='Editar'></a>
                                    </td>
			 					<?php } 
			 					?>
								</tr>
								  
							</tbody>
						</table>
					</div>
				</div>
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


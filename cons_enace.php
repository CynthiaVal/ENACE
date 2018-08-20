<?include ("Acceso/Seguridad.php");?> 
<?php session_start();?>
<?php
require_once("Acceso/conexion_db.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"><!-- InstanceBegin template="/Templates/planEscPublica.dwt.asp" codeOutsideHTMLIsLocked="false" -->
<head>	
	<meta http-equiv="Content-Type" content="text/html;charset=utf-8" /> 
	<!-- InstanceBeginEditable name="doctitle" -->
	<title>Consultas de expedientes ENACE</title>
    <link rel="stylesheet" type="text/css" href="css/jquery-ui-1.10.3.custom.css"/>
    <script type="text/javascript" src="js/jquery-1.4.2.min.js"></script>
<script type="text/javascript" src="js/jquery-ui-1.8.14.custom.min.js"></script>
<script type="text/javascript" src="js/jquery-ui-1.8.5.custom.min.js"></script>
<script tipe="text/javascript">
	$(function(){
		$(function(){
		$('#ANotario').autocomplete({
			source: "busphp/muenot.php",
			minLength: 1
			});
		$('#NroEscP').autocomplete({
			source: "busphp/muenumesc.php",
			minLength: 1
			});
		$('#OtorgadoP').autocomplete({
			source: "busphp/mueotopor.php",
			minLength: 1
			});
		$('#AFavor').autocomplete({
			source: "busphp/muefavor.php",
			minLength: 1
			});
		$('#Protocolo').autocomplete({
			source: "busphp/mueprot.php",
			minLength: 1
			});
		});
</script>

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
                            
                            <li> <A href="Index.php" class="user"><span class="bar">
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

	<form name="busquedap" action="cons_enace.php?page=resul_enace" method="post">
		<div class="box">
			
					<div class="title">
						Consulta de ENACE
						<span class="hide"></span>
					</div>
    	<div class="content">
               <table width="100%" height="100%" border="0">
							       
                   <?php
                 if(isset($_GET['page']))
				 {
					 $page=$_GET['page'];
					 include($page.".php");
				 }
				 else
                 {?>
                  <thead>
				  <tr>
					<th colspan="2"><h3>Ingrese los Datos</h3>  </th>  
				  </tr>
				  </thead>
                  <p>
                     <?php $enlace=Conec_db();?>
                   </p>  
                   		<tr>
                         <td>Programa :</td>
                         <td><div  >
                           <input name="Programa" type="text" id="Programa" size="100%"/>
                         </div></td>
                       </tr> 
                       <tr>
                         <td>Nro Manzana :</td>
                         <td><div >
                           <input name="Nro_man" type="text" id="Nro_man" size="100%"/>
                         </div></td>
                       </tr>
                       <tr>
                         <td>Nro Lote :</td>
                         <td><div  >
                           <input name="Nro_lote" type="text" id="Nro_lote" size="100%"/>
                         </div></td>
                       </tr>
                       <tr>
                         <td>Titular :</td>
                         <td><div  >
                           <input name="Titular" type="text" id="Titular" size="100%"/>
                         </div></td>
                       </tr>
                                              
                         <td>Lista Ordenada Por:</td>
                         <td><p>
                         	<label>
                             <input name="Orden" type="radio" value="1" checked="checked" />
                             Programa </label>
                           <br />

                           <label>
                             <input name="Orden" type="radio" value="2"  />
                             Nro Manzana </label>
                           <br />
                           <label>
                             <input type="radio" name="Orden" value="3" />
                             Nro Lote </label>
                           <br />
                           <label>
                             <input type="radio" name="Orden" value="4" />
                             Titular</label>
                           <br />
                          <br>
                         </p></td>
                       </tr>
                       <tr>
                         <td colspan="2"><center>
                         	<br>
                           <input name="Enviar" type="submit" id="Enviar" value="Buscar" />
                           <label>
                             <input type="checkbox" name="Todo" value="Todo" />
                             todo</label>
                             <br>
                         </center></td>
                       </tr> </table> 
                       </form>
                  <?php }?>   
		      	</div>
			</div>
		</div>
	</div> 
                  </form>
	<!-- InstanceEndEditable -->					 					
 		  
            <table>
            <tr>
              <th>
                <br>
                <center><h5>Archivo Regional de Tacna - Todos los derechos reservados
                		</h5>
                </center>
                <br>
              </th>
            </tr>            
            </table>
				                    
            
  </div>
</div>
</div>

</body>

<!-- InstanceEnd --></html> 
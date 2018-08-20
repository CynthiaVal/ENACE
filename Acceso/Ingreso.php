<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!-- saved from url=(0014)about:internet -->
<html xmlns="http://www.w3.org/1999/xhtml"><!-- InstanceBegin template="/Templates/plantilla.dwt.php" codeOutsideHTMLIsLocked="false" -->
<head>
<!-- InstanceBeginEditable name="doctitle" -->
<title>Documento sin t&iacute;tulo</title>
<!-- InstanceEndEditable -->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!--Fireworks 8 Dreamweaver 8 target.  Created Wed May 19 09:05:54 GMT-0500 2010-->
<script language="JavaScript1.2" type="text/javascript" src="../../../plantillas/mm_css_menu.js"></script>
<style type="text/css" media="screen">
	@import url("../../../plantillas/plantilla.css");
</style>
</head>
<body bgcolor="#ffffff">
<table width="810" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td>&nbsp;
      <div id="FWTableContainer510435656">
        <table width="800" border="0" align="center" cellpadding="0" cellspacing="0">
          <!-- fwtable fwsrc="plantilla.png" fwbase="plantilla.gif" fwstyle="Dreamweaver" fwdocid = "510435656" fwnested="0" -->
          <tr>
            <td><img src="../../../plantillas/spacer.gif" width="800" height="1" border="0" alt="" /></td>
            <td width="1"><img src="../../../plantillas/spacer.gif" width="1" height="1" border="0" alt="" /></td>
          </tr>
          <tr>
            <td bgcolor="#990000"><div align="center">
              <object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=7,0,19,0" width="550" height="120" title="banner">
                <param name="movie" value="../../../plantillas/banners.swf" />
                <param name="quality" value="high" />
                <embed src="../../../plantillas/banners.swf" quality="high" pluginspage="http://www.macromedia.com/go/getflashplayer" type="application/x-shockwave-flash" width="550" height="120"></embed>
              </object>
            </div>
		    <div align="center"></div></td>
            <td><img src="../../../plantillas/spacer.gif" width="1" height="122" border="0" alt="" /></td>
          </tr>
          <tr>
            <td><!-- InstanceBeginEditable name="EditRegion1" -->      <p>&nbsp;</p>
      <table width="700" border="1" align="center">
        <tr>
          <th scope="row">imagen</th>
        </tr>
        <tr>
          <th scope="row"><span class="Estilo1">D&iacute;a de la Madre </span></th>
        </tr>
        <tr>
          <th scope="row">
          	  <?php
	  $enlace=Conec_db(); ?>
	  <br/>
	  <center><H3>Ingreso al Sistema</H3></center>
	  <br>
	  <center>
        <form action="control.php" method="POST"> 
        <table align="center" width="225" cellspacing="2" cellpadding="2" border="0"> 
        <tr> 
        <td colspan="2" align="center" 
        <? if ($_GET["errorusuario"]=="si"){?> 
        bgcolor=red><span style="color:ffffff"><b>Datos incorrectos</b></span> 
        <?php
        }else{?> 
        bgcolor=#cccccc>Introduce tu clave de acceso 
        <?php
        }?></td> 
        </tr> 
        <tr> <td align="right">Usuario:</td> 
        <td><input type="Text" name="usuario" size="8" maxlength="50"></td> 
        </tr> 
        <tr> <td align="right">Password:</td> 
        <td><input type="password" name="contrasena" size="8" maxlength="50"></td> 
        </tr> 
        <tr> <td colspan="2" align="center"><input type="Submit" value="ENTRAR"></td> 
        </tr> 
        </table> 
        </form> 
	  </center>
          &nbsp;</th>
        </tr>
      </table>
      <p>&nbsp;</p><!-- InstanceEndEditable --></td>
            <td><img src="../../../plantillas/spacer.gif" width="1" height="382" border="0" alt="" /></td>
          </tr>
          <tr>
            <td><img name="base" src="../../../plantillas/base.gif" width="800" height="60" border="0" id="base" alt="" /></td>
            <td><img src="../../../plantillas/spacer.gif" width="1" height="60" border="0" alt="" /></td>
          </tr>

</table>
<p>&nbsp;</p>
<p>&nbsp;</p>
</body>
<!-- InstanceEnd --></html>

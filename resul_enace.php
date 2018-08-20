<?php 
error_reporting(E_ALL^E_NOTICE);
$enlace=Conec_db();
echo $Ord; 
$Nro_man 	= $_POST['Nro_man'];
$Nro_lote 	= $_POST['Nro_lote'];
$Titular	= $_POST['Titular'];
$Programa 	= $_POST['Programa'];		
$Orden 		= $_POST['Orden'];
$aux=0;	
$Titular=utf8_decode($Titular);

		switch ($Orden) 
		{ 
			case 1: $Ord = "CAST(`despro` AS SIGNED)"; break;
			case 2: $Ord = "numman"; break;
			case 3: $Ord = "numlot"; break;
			case 4: $Ord = "nomtit"; break;
			default: break; 
		}
		if(!empty($Programa)||!empty($Nro_man)||!empty($Nro_lote)||!empty($Titular))
		{
		  $sql= "SELECT * FROM orden_enace WHERE ";
		  if(!empty($Programa)&&!empty($Nro_man)&&!empty($Nro_lote)&&!empty($Titular)) // Si ninguno esta vacío 
		  { 
			$sql.="despro LIKE '%$Programa%' && numman = '".$Nro_man."' && numlot = '".$Nro_lote."' && nomtit LIKE '%$Titular%'";
		   }else if(empty($Nro_man)&&!empty($Nro_lote)) 
		  {
			$sql.="numlot = '".$Nro_lote."' && nomtit LIKE '%$Titular%' && despro LIKE '%$Programa%'";
		  } else if(!empty($Nro_man)&&empty($Nro_lote)) 
		  {
			$sql.="numman = '".$Nro_man."' && nomtit LIKE '%$Titular%' && despro LIKE '%$Programa%'";
		  } else if(empty($Nro_man)&&empty($Nro_lote)) 
		  {
			$sql.=" nomtit LIKE '%$Titular%' && despro LIKE '%$Programa%'";

		} else if(empty($Programa)&&!empty($Titular)) 
		  {
			$sql.="numman = '".$Nro_man."' && numlot = '".$Nro_lote."' && nomtit LIKE '%$Titular%'";
		  } else if(!empty($Programa)&&empty($Titular)) 
		  {
			$sql.="despro LIKE '%$Programa%' && numman = '".$Nro_man."' && numlot = '".$Nro_lote."'";
		  } else if(empty($Programa)&&empty($Titular)) 
		  {
			$sql.="numman = '".$Nro_man."' && numlot = '".$Nro_lote."'";
		  }

		  $sql.="ORDER BY ".$Ord." ASC";
		  $resultado = mysql_query($sql);
			if(mysql_num_rows($resultado)>0) 
			{ // Si es mayor a 0 se recuperaron al menos una fila (consulta exitosa)
			        ?>
 
               <table width="100%" height="100%" border="0">
                <thead> <tr><th>Nro Caja </th><th>Nro File.</th><th>Folios</th><th>Programa</th><th>Manzana</th><th>Lote</th><th>Titular</th><th>Accion</th></tr></thead> 				  					  					  
                <?php
				
		while($campo=mysql_fetch_array($resultado))
		{
		$campo = array_map('utf8_encode', $campo);?>			
                  <tr onmouseover=\"hilite(this)\" onmouseout=\"lowlite(this)\">
                  <td ><?php echo $campo["numcaj"]; ?></td>
                  <td ><?php echo $campo["numfil"]; ?></td>
                  <td ><?php echo $campo["numfol"]; ?></td>
                  <td width="180"><?php echo $campo["despro"]; ?></td>
                  <td width="25"><?php echo $campo["numman"]; ?></td>
                  <td width="25"><?php echo $campo["numlot"]; ?></td>
                  <td width="180"><?php echo $campo["nomtit"]; ?></td>
                  
                  <td width='35' ><a href='EditarEscPub.php?id=<?php echo $campo[0]; ?>'><img width='15' height='15' src='../../Imagen/edit.png' title='Editar'></a>
    			  <a href='EliminarEscPub.php?id=<?php echo $campo[0]; ?>'><img width='15' height='15' src='../../Imagen/remove.png' title='Eliminar'></a></td></tr>
                  </tr>
                  <?php
	 				}
	  
			} 
			else 
			{
				echo "<center><br /><br /><br />";
			  	echo 'No hay resultados';
				echo "</center><br />";
				$aux=1;
			}
		} else 
		{
			echo "<center><br /><br /><br /><br />";
		  echo 'POR FAVOR INGRESE ALGUN DATO PARA LA BUSQUEDA';
		  echo "</center><br />";
		  $aux=1;
		}
		?>
		</table>
      <?php	echo "<center><br /><a href=\"cons_enace.php\">Retornar</a></center>";
	  
	  if($aux==1){ echo "<!--";}
	  $Programa=str_replace('"','¬',$Programa);
	  $Titular=str_replace('"','¬',$Titular);
	  ?>
	          </p>
      
      <?php if($aux==1){ echo "-->";}?>
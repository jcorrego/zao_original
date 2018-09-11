<?php 
function cambiarFechaMysql($fechaMysql){

    $transf = strtotime($fechaMysql);     
    $dia = date("d", $transf); 
    $mes = date("F", $transf);
    if ($mes=="January") $mes="Enero";
    if ($mes=="February") $mes="Febrero";
    if ($mes=="March") $mes="Marzo";
    if ($mes=="April") $mes="Abril";
    if ($mes=="May") $mes="Mayo";
    if ($mes=="June") $mes="Junio";
    if ($mes=="July") $mes="Julio";
    if ($mes=="August") $mes="Agosto";
    if ($mes=="September") $mes="Septiembre";
    if ($mes=="October") $mes="Octubre";
    if ($mes=="November") $mes="Noviembre";
    if ($mes=="December") $mes="Diciembre"; 
    $ano = date("Y", $transf);  
	$hora = date("h:i:s A", $transf);
	$nombreDia = date("l", $transf);
	if ($nombreDia=="Monday") $nombreDia="Lunes";
	if ($nombreDia=="Tuesday") $nombreDia="Martes";
	if ($nombreDia=="Wednesday") $nombreDia="Miércoles";
	if ($nombreDia=="Thursday") $nombreDia="Jueves";
	if ($nombreDia=="Friday") $nombreDia="Viernes";
	if ($nombreDia=="Saturday") $nombreDia="Sábado";
	if ($nombreDia=="Sunday") $nombreDia="Domingo";
	
	return $dia." de ".$mes." ".$ano;
	
}
?>
<?php
	session_start();
	
	$protocol = strpos(strtolower($_SERVER['SERVER_PROTOCOL']),'https') === FALSE ? 'http' : 'https';
	$host     = $_SERVER['HTTP_HOST'];
	$script   = $_SERVER['SCRIPT_NAME'];
	$params   = $_SERVER['QUERY_STRING'];
	$currentUrl = $protocol.'://'.$host.$script;
	$currentUrl .= ($params == '')? '' : '?'.$params;
	defined('ADDRESS_FROM') or define('ADDRESS_FROM', 'ventas@zaomakeup.com.co');	//
	defined('ADDRESS_WHO') or define('ADDRESS_WHO', 'ventas@zaomakeup.com.co');
	$mensaje = '';

	//if(isset($_POST['Form'])){
		if(!empty($_POST['nombre']) && !empty($_POST['tel_cel']) && !empty($_POST['email']) && !empty($_POST['mensaje'])){


			//$DATA_FORM = array($_POST['nombre'],);
			$DATA_FORM['Cpagina'] 	= $protocol.'://'.$host;
			$DATA_FORM['Cfecha']  	= date('Y-m-d');
			$DATA_FORM['redirect']	= $currentUrl;
			
			
	/*Mail 1*/		
			$M1_subject = "Tienes un nuevo contacto Cosmetica Villarosas S.A.S";
			$M1_body = '
				<style>
					table, tr, td{
						border:0px solid;
					}
					table{
						border-collapse: collapse !important;
					}
				</style>
				<div style="background-color:#DDDDDD; padding:20px;">
					<center>
						<div style="width:600px; background-color:#FFFFFF; border-radius:5px;font-size:14px; font-family:Arial, Helvetica, sans-serif;">
							<table width="600" border="0" cellspacing="0" cellpadding="20">
								<tr>
									<td>
										<div style="color:#579AD2;font-size:22px;font-weight:bold;">Contactos Efectivos</div>
										<div style="color:#C62126;padding-bottom: 5px;">
											'.cambiarFechaMysql(date("Y-m-d")).'
										</div>
										<div style="color:#A0A0A0;text-decoration:none;"><a href="http://www.zaomakeup.com.co/" target="_blank" style="color:#A0A0A0;text-decoration:none" >www.zaomakeup.com.co</a></div>
										
									</td>
									<td style="text-align: right;">
										<a href="http://www.paginaswebcali.com/" target="_blank">
											<img src="http://www.paginaswebcali.com/images/logo-paginas-web-cali-mail.jpg" />
										</a>
									</td>
								</tr>
							</table>
							
							<table width="600" border="0" cellspacing="0" cellpadding="20" style="background-color:#FDFDFD;">
								<tr>
									<td style="padding-bottom:0;" colspan="2">
										<div style="font-size:19px;color:#757474;font-weight:bold;">Hola Cosmetica Villarosas S.A.S </div>
										<p style="color:#A0A0A0;font-size: 14px;">
											Este es un mensaje enviado a través de <a href="http://www.zaomakeup.com.co/" style="color:#A0A0A0;text-decoration:none">www.zaomakeup.com.co</a> por una persona o empresa interesada en los servicios y/o productos que ofreces.
										</p>
									</td>
								</tr>
								<tr>
									<td  colspan="2">
										<table width="100%" border="0" cellspacing="0" cellpadding="10" style="border: 1px solid #dedede;background-color:#fdfdfd;border: 1px solid #dedede;border-radius:10px;-webkit-border-radius: 10px;-moz-border-radius: 10px;color:#079ace;">
											<tr>
												<td style="border-bottom: 1px solid #dedede;border-right: 1px solid #dedede;width: 40%;">
													Nombre
												</td>
												<td style="border-bottom: 1px solid #dedede;">
													'.$_POST['nombre'].'
												</td>
											</tr>
                                        <tr>
												<td style="border-bottom: 1px solid #dedede;border-right: 1px solid #dedede;">
													Telefono
												</td>
												<td style="border-bottom: 1px solid #dedede;">
													'.$_POST['tel_cel'].'
												</td>
											</tr>
											<tr>
												<td style="border-bottom: 1px solid #dedede;border-right: 1px solid #dedede;">
													Email
												</td>
												<td style="border-bottom: 1px solid #dedede;">
													'.$_POST['email'].'
												</td>
											</tr>
											<tr>
												<td style="border-right: 1px solid #dedede;">
													Mensaje
												</td>
												<td>
													'.$_POST['mensaje'].'
												</td>
											</tr>
										</table>
									</td>
								</tr>
							</table>	
							<table width="600" border="0" cellspacing="0" cellpadding="20" style="background-color:#FDFDFD;">
								<tr>
									<td colspan="2" style="background:url(\'http://www.paginaswebcali.co/images/clouds.png\');color:#FFFFFF;">
										<br><br><br>
										<a href="http://www.paginaswebcali.com" style="text-decoration:none;">	
											<span style="display:block;font-size:19px;color:#FFFFFF;font-weight:bold;padding-bottom:10px;">Este es el equipo que te acerca cada vez más al exito</span>
											<span style="font-size: 14px;color:#FFFFFF;display:block;padding-bottom:10px;">
												Somos una empresa de dise&ntilde;o y desarrollo web que se especializa en brindar soluciones a la medida de las necesidades de nuestros clientes, 
												poniendo a su disposici&oacute;n herramientas efectivas y eficaces para el alcance oportuno de metas y objetivos.
											</span>
											<img src="http://paginaswebcali.com/images/equipo.png" />
										</a>
									</td>
								</tr>
							</table>
							<table width="600" border="0" cellspacing="10" cellpadding="10" style="border-top:1px solid #D8E1E4;">
								<tr>
									<td style="text-align:right;border-right: 1px solid #E4E4E4;">
										<div style="color:#C52126;font-size:16px;">ZAO Makeup</div>
										<div style="color:#6D6D6D;font-size:14px;">Cosmetica Villarosas S.A.S</div>
									</td>
									<td style="text-align:right;border-right: 1px solid #E4E4E4;">
										<a href="mailto:ventas@zaomakeup.com.co" target="_blank" style="color:#579AD2;text-decoration:none;font-size:16px;">ventas@zaomakeup.com.co</a>
										<div style="color:#6D6D6D;font-size:14px;">Correo electr&oacute;nico</div>
									</td>
									<td style="text-align:right;">
										<div style="color:#579AD2;font-size:16px;">(57 2) 317 886 0827</div>
										<div style="color:#6D6D6D;font-size:14px;">Tel&eacute;fono</div>
									</td>
								</tr>
							</table>
						</div>
					</center>
				</div>';

			$M1_de 		= 'Contacto Cosmetica Villarosas S.A.S';
			$M1_de_mail = ADDRESS_WHO;
			
			$M1_cabeceras  = 'MIME-Version: 1.0' . "\r\n";
			$M1_cabeceras .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";	
			$M1_cabeceras .= 'From:'. $M1_de . "<".$M1_de_mail.">" . "\r\n".
							'Reply-To:'.$M1_de_mail . "\r\n";
			
			if(mail(ADDRESS_FROM,$M1_subject,$M1_body,$M1_cabeceras)){
	/*Mail 2*/			
				$M2_de 		= 'Contacto Cosmetica Villarosas S.A.S';
				$M2_de_mail = ADDRESS_WHO;
				
				$M2_address = $_POST['email'];
				
				$M2_subject = 'Gracias por comunicarse con Cosmetica Villarosas S.A.S';
				$M2_body = '
						<style>
							table, tr, td{
								border:0px solid;
							}
							table{
								border-collapse: collapse !important;
							}
						</style>
						<div style="background-color:#DDDDDD; padding:20px;">
							<center>
								<div style="width:600px; background-color:#FFFFFF; border-radius:5px;font-size:14px; font-family:Arial, Helvetica, sans-serif;overflow: hidden;">		
									<table width="600" border="0" cellspacing="0" cellpadding="20" style="background-color:#FDFDFD;">
										<tr>
											<td style="padding-bottom:0;" colspan="2">
												<div style="font-size:19px;color:#579ad2;font-weight:bold;">Hola '.$_POST['nombre'].'</div>
												<p style="color:#A0A0A0;font-size: 14px;">
													Su mensaje ha sido enviado satisfactoriamente,<br> nos pondremos en contacto con usted lo mas pronto posible.
												</p>
											</td>
										</tr>
										<tr>
											<td style="padding-bottom:0;padding-top:0;" colspan="2">
												<p style="color:#757474;font-size: 14px;"> 
													<span style="font-weight:bold">Att: Cosmetica Villarosas S.A.S</span>
												</p>
											</td>
										</tr>
									</table>		
								</div>
								<div style="text-align:center;color:#579ad2;font-weight: bold;">
								<a style="color:#579ad2;text-decoration:none;font-weight: bold;" href="http://www.zaomakeup.com.co">www.zaomakeup.com.co</a><br>
								Tel: (57 2) 317 886 0827
								</div>
							</center>
						</div>';
				
				$M2_cabeceras  = 'MIME-Version: 1.0' . "\r\n";
				$M2_cabeceras .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";	
				$M2_cabeceras .= 'From:'. $M2_de . "<".$M2_de_mail.">" . "\r\n".
					'Reply-To:' .$M2_de_mail. "\r\n";
				if(mail($M2_address,$M2_subject,$M2_body,$M2_cabeceras)){
						

					$pagina = "http://www.paginaswebcali.com/administrar/index.php?r=Form/create";
					$datos = "Cnombre=".urlencode($_POST['nombre']);
					$datos .="&Ctelefono=".urlencode($_POST['telefono']);
					$datos .="&Cciudad=".urlencode($_POST['ciudad']);
					$datos .="&Ccomentario=".  urlencode($_POST['mensaje']);
					$datos .="&Cemail=".urlencode($_POST['email']);
					$datos .="&Cpagina=".  urlencode($DATA_FORM['Cpagina']);
					$datos .="&Cfecha=".  urlencode($DATA_FORM['Cfecha']);
					$datos .="&redirect=".  urlencode($currentUrl);
					$datos .="&address=".  urlencode(ADDRESS_FROM);
					$datos .="&From=".  urlencode(ADDRESS_WHO);
					$ch = curl_init();
					curl_setopt($ch, CURLOPT_URL, $pagina);
					curl_setopt($ch, CURLOPT_POST, true);
					curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
					curl_setopt($ch, CURLOPT_POSTFIELDS, $datos);
					$response = curl_exec($ch);
					//header("Location: $currentUrl"); exit;

                                        $enviado = "enviado";
                                        echo json_encode( $enviado );
				}	
			}
		}
	//}
	$mensaje = (isset($_SESSION['mensaje']))? $_SESSION['mensaje'] : (($mensaje != '')? $mensaje : '');	?>
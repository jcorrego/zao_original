<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8" />
		<title>ACERCA DE TRADING & MARKETING</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link rel="stylesheet" href="http://www.pawecom.com/proyectos/zao/themes/ap_office/css/global.css" media="screen" />
		<!--<script>window.jQuery || document.write('<script src="js/jquery.min.js"><\/script>')</script>-->
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.js"></script>
                 <script>
		    $(function(){
			

                        $("form #submit_form").on("click",function(e){
	                   e.preventDefault();
						var nombre = $("form #nombre").val();
                           var email= $("form #email").val();
                           var tel_cel = $("form #tel_cel").val();
	                   var empresa = $("form #empresa").val();
                           var mensaje= $("form #mensaje").val();

                           if(nombre != ''){
                               //if(ciudad != ''){ 
                                    //if(curso != ''){ 
                                          if(mensaje != ''){ 
                                              //if(celular != ''){
                                                  if(tel_cel != ''){
                                                        if(tel_cel.match(/^[0-9\s]+$/) ){
                                                              if( email.match(/^[A-Za-z0-9-_.+%]+@[A-Za-z0-9-.]+\.[A-Za-z]{2,4}$/) ){
                                                                   var parametros = {
                                                                       "nombre" : nombre,
                                                                       "email" : email,
                                                                       "tel_cel" : tel_cel,
																	   "empresa" : empresa,
                                                                       "mensaje" : mensaje
                                                                   };

                                                                   $.ajax({
                                                                      data:  parametros,
                                                                      url:   'correo-interes.php',
                                                                      type:  'post',
                                                                      beforeSend: function () {
                                                                         $("form #submit_form").val("Enviando, espere por favor...");
                                                                      },
                                                                      success:  function (response) {
                                                                         $("form #submit_form").val("Enviar mensaje");
                                                                         $("form #nombre, form #email, form #tel_cel, form #mensaje").val("");
                                                                         $("#mensaje_form").slideDown();
                                                                      }
                                                                   });
                                                              }else{
                                                                   alert("Por favor ingresar un email valido");
                                                              }
                                                        }else{
                                                           alert("El Teléfono solo debe contener caracteres numéricos y espacios");
                                                        }
                                                   }else{
                                                         alert("Por favor ingresar numero de teléfono fijo");
                                                   }
		                              /*}else{
                                                  alert("Por favor ingresar numero de celular");
                                              }*/
		                          }else{
                                              alert("Por favor ingresar Mensaje");
                                          }
		                    /*}else{
                                         alert("Por favor ingresar Curso");
                                    } */
		                 /*}else{
                                   alert("Por favor ingresar Ciudad");
                               } */                       
	                   }else{
		                alert("Por favor ingresar Nombre");
	                   }
	                });
		    })
		</script>
                 <style>
                       body{padding-right:0 !important;padding-left:0 !important;background:none;font-family: 'Conv_GOTHIC' !important;}
                       
						.error{
							padding: 15px;
							margin-bottom: 20px;
							border: 1px solid transparent;
							border-radius: 4px;
							color: #a94442;
							background-color: #f2dede;
							border-color: #ebccd1;
						}
						label {
							color: #fff;
						    font-size: 15px;
							font-weight:normal;
						    cursor: pointer;
							font-family: "Century-Gothic";
							font-weight: normal;
			            }
                       	.row {
                            margin-bottom: 0;
                         }
                        .btn-enviar-mensaje{
                        	    background: #cb349d !important;
							    padding: 10px 12px !important;
							    border-radius: 8px !important;
							    font-size: 19px !important;
							    color: #fff !important;
							    text-transform: initial !important;
							    margin-top: 10px;
							    width: 100%;
							    border: 0;
								font-family: "Century-Gothic";
								font-weight:normal;
                         }
                        .btn-enviar-mensaje:hover, .btn-enviar-mensaje:focus, .btn-enviar-mensaje:active{
                         	background: #a33080 !important;
                         	color: #fff !important;
                         	outline: none !important;
                        }
                        #Form_Contacto{
	                       	background: #000;
    						padding: 10px 30px 15px;
    						-webkit-border-radius: 5px;
							-moz-border-radius: 5px;
							border-radius: 5px;
                        }
                        .icono-mensaje{
						    width: 61px;
						    height: 68px;
						    display: inline-block;
						    position: absolute;
						    top: -1px;
						    right: 30px;
                        }
                        .conent-text-contactanos h2{
                        	    color: #fff;
							    border-bottom: 1px solid #cb349d;
							    padding-bottom: 15px;
							    margin-bottom: 16px;
							    margin-top: 18px;
								font-family: "Century-Gothic";
								font-weight:normal;
                        }
                        @font-face {
							font-family: "Century-Gothic";
							font-weight:bold;
							src: 
								url("themes/ap_office/css/webfonts/Century-Gothic-Bold.ttf") format("truetype"),
								url("themes/ap_office/css/webfonts/Century-Gothic-Bold.svg") format("svg"),
								url("themes/ap_office/css/webfonts/Century-Gothic-Bold.eot") format("eot"),
								url("themes/ap_office/css/webfonts/Century-Gothic-Bold.woff") format("woff");
						} 
						@font-face {
							font-family: "Century-Gothic";
							font-weight:normal;
							src: 
								url("themes/ap_office/css/webfonts/Century-Gothic-Regular.ttf") format("truetype"),
								url("themes/ap_office/css/webfonts/Century-Gothic-Regular.svg") format("svg"),
								url("themes/ap_office/css/webfonts/Century-Gothic-Regular.eot") format("eot"),
								url("themes/ap_office/css/webfonts/Century-Gothic-Regular.woff") format("woff");
						}
						#nombre, #email, #tel_cel, #empresa{
							height: 32px;
    						border: 0;
    						box-shadow: none;
    						border-radius: 5px;
							font-family: "Century-Gothic";
							font-weight: normal;
						}
						#mensaje{
							border: 0;
    						box-shadow: none;
    						border-radius: 8px;
    						resize: none;
							font-family: "Century-Gothic";
							font-weight: normal;
						}
						.alert{
							font-family: "Century-Gothic";
							font-weight: normal;
							padding: 10px;
							-webkit-border-radius: 5px;
							-moz-border-radius: 5px;
							border-radius: 5px;
						}
                 </style>
	</head>
	<body>

<div class="container-fluid">
	<div id="mensaje_form" style="display:none;"><div class="alert alert-success" role="alert">Su mensaje ha sido enviado exitosamente.</div></div>
	<div id="mensaje_form"></div>
	<form action="" method="post" id="Form_Contacto" enctype="multipart/form-data" target="_blank" >
		<div class="conent-text-contactanos">
			<h2>Contáctanos Ahora</h2><i class="icono-mensaje"></i>
		</div>
		<div class="row">
			<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
				<div class="form-group">
					<label for="nombre" >Nombre Completo:</label> 
					<input type="text" class="form-control" name="nombre" id="nombre"  value="<?php echo @$_POST['nombre']?>">
				</div>
			</div>
			<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
				<div class="form-group">
					<label for="telefono">Teléfono / Celular:</label>
					<input type="text" class="form-control" id="tel_cel" name="tel_cel" value="<?php echo @$_POST['tel_cel']?>"  />
				</div>	
			</div>
		</div>
		
		<div class="row">
			<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
				<div class="form-group">
					<label for="empresa" >Empresa:</label> 
					<input type="text" class="form-control" name="empresa" id="empresa"  value="<?php echo @$_POST['empresa']?>">
				</div>
			</div>
			<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
				<div class="form-group">
					<label for="email">Correo Electrónico:</label>
					<input type="email" class="form-control" id="email" name="email"  value="<?php echo @$_POST['email']?>"  />
				</div>	
			</div>
		</div>
		
		<div class="form-group">	
			<label for="mensaje">Mensaje:</label><br>
			<textarea rows="3" name="mensaje"  id="mensaje" class="form-control" <?php echo @$_POST['mensaje']?>></textarea>
		</div>
		
		<div class="form-group">
			<input type="submit" value="Enviar Mensaje" class="btn btn-primary btn-lg btn-enviar-mensaje" id="submit_form">
		</div>
		
	</form>
</div>
</body>
</html>
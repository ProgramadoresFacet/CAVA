<!DOCTYPE html>
<html lang="es"> <!--ACCESIBILIDAD // lang="es"-->
  <head>
    <title>CAVA 2017</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="<?=base_url('assets/template/')?>bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- styles -->
    <link href="<?=base_url('assets/template/')?>css/styles.css" rel="stylesheet">
    <link href="<?=base_url('assets/font-awesome/')?>css/font-awesome.min.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <!-- { MENU } -->
  	<div class="header">
	     <div class="container">
	        <div class="row">
	           <div class="col-md-5">
	              <!-- Logo -->
	              <div class="logo">
	              	 <!--ACCESIBILIDAD // el atributo ALT reemplaza las imagenes por el texto definido cuando no son cargadas-->
	                 <a href="<?=base_url('participantes')?>"><img class="headerimg" src="<?=base_url('docs/logocava.png')?>" width="27%" height="27%" alt="CAVA"></a>                 
	              </div>
	           </div>
	           <div class="col-md-5">
	              <div class="row">
	                <div class="col-lg-12">
	                </div>
	              </div>
	           </div>
	           <div class="col-md-2">
	              <div class="navbar navbar-inverse" role="banner">
	                  <nav class="collapse navbar-collapse bs-navbar-collapse navbar-right" role="navigation">
	                  </nav>
	              </div>
	           </div>
	        </div>
	     </div>
	</div>
	<!-- { FIN MENU } -->

	<!-- { CONTENIDO PRINCIPAL } -->
    <div class="page-content">
    	<div class="row">
	    	<div class="col-md-2">
			  	<div class="sidebar content-box" style="display: block;">
	                <ul class="nav">
	                    <!-- Main menu -->
	                    <li class="<?=(isset($participantes_menu)) ? 'current' : '' ?>"><a href="<?=base_url('participantes')?>"><span class="glyphicon glyphicon-user"></span> Participantes</a></li>
	                    <li class="<?=(isset($registro_menu)) ? 'current' : '' ?>"><a href="<?=base_url('registro')?>"><span class="glyphicon glyphicon-list-alt"></span> Registrar</a></li>
	                    <li class="<?=(isset($trabajos_menu)) ? 'current' : '' ?>"><a href="<?=base_url('trabajos')?>"><span class="glyphicon glyphicon-book"></span> Trabajos</a></li>
	                    <li class="<?=(isset($ticket_menu)) ? 'current' : '' ?>"><a href="<?=base_url('ticket')?>"><span class="glyphicon glyphicon-barcode"></span> Ticket</a></li>
	                    <li class="<?=(isset($informe_menu)) ? 'current' : '' ?>"><a href="<?=base_url('informe')?>"><span class="glyphicon glyphicon-stats"></span> Informe</a></li>
	                </ul>
	             </div>
			  </div>
			  <!-- { CONTENIDO } -->
			  <div class="col-md-10">
    		
    	

	
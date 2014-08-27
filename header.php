<?php 
// require_once("./inc/Usuario.class.php"); 
// $usuario = new Usuario();
?>              
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/style.css" rel="stylesheet" type="text/css" />
    <title>Smash Magazine</title>

    <link rel="stylesheet" href="fonts/font-awesome/css/font-awesome.min.css" />    
    <link rel="stylesheet" href="//code.jquery.com/ui/1.11.0/themes/smoothness/jquery-ui.css">

    <!-- Bootstrap -->
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">
    

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>
    <!-- <header> -->

    <?php 
      // $menuItems = array();
      // $menuItems[] = "<a href=\"./index.php\"><i class=\"fa fa-home\"></i></a>"; 
      // if($usuario->isLogged()){        
      //   // $menuItems[] = "<a href=\"#\">Perfil</a>";
      //   $menuItems[] = "<a href=\"./logout.php\">Cerrar sesión</a>";        
      // } else {                
      //   $menuItems[] = "<a href=\"./crearCuenta.php\">Crear cuenta</a>";
      //   $menuItems[] = "<a href=\"./login.php\">Iniciar sesión</a>";        
      // }
      // $menuItems[] = "<a href=\"https://twitter.com/wikiac\" target=\"_blank\"><i class=\"fa fa-twitter\"></i></a>";
      // $menuItems[] = "<a href=\"https://www.facebook.com/wikiac\" target=\"_blank\"><i class=\"fa fa-facebook\"></i></a>";        
      
    ?>
    
    <!-- <nav id="menu">
      <ul>          
        <?php
        // foreach ($menuItems as $key => $value) {          
        //   echo "<li>\n";
        //   echo "  ".$value."\n";
        //   echo "</li>\n";
        //}
        ?>        
      </ul> 
    </nav> -->
     <!-- Fixed navbar -->
      <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#"><i>Smash Magazine</i></a>
          </div>
          <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav navbar-right">
              <li class="active"><a href="#">Portada</a></li>              
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Colecciones<span class="caret"></span></a>
                <ul class="dropdown-menu" role="menu">
                  <li><a href="crear.php">Crear</a></li>
                  <li><a href="#">Mis Colecciones</a></li>
                </ul>
              </li>              
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Perfil<span class="caret"></span></a>
                <ul class="dropdown-menu" role="menu">
                  <!-- <li class="divider"></li>
                  <li class="dropdown-header">Configuración</li> -->
                  <li><a href="#">Editar perfil</a></li>
                  <li><a href="#">Cerrar sesión</a></li>
                </ul>
              </li>
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </div>

    <!-- </header> -->
  
    
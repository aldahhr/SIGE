<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	
  	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  	<link rel="stylesheet" href="Estilos/completo2.css">
    <link rel="stylesheet" href="Estilos/formularios.css">
    

</head>
<body>
    
    <header>
    
		<div id="main-menu">
        
			<nav id="menu-area">
                      
				<ul>
                <div class="logo">
                    <img src="img/becas3.png" alt="Logo">
                </div>  
					<li><a href="#">Inicio</a></li>
					<li><a href="#">Horarios</a>
                    <li><a href="#">Consultar Calificaciones</a>
						<ul class="submenu-1">
								<li><a href="#">Becas</a></li>
								
						</ul>
					</li>
                    
					<li><a href="/SistemaBecados/index?clase=controladorlogin&metodo=Acceso">Login</a></li>
					
				</ul>
			</nav>
		</div>
	</header>  

     <!-- Este es el cuerpo -->
     <?php include_once($vista); ?> 


<!-- Este es el pie de la pagina -->
<br></br>
<footer>
    
        <p> &copy; Sitio desarrollado por GRH-Gadiel Ramos 2023 - <?php date('d-m-Y H:i') ?> </p>
    
</footer>

</body>
</html>
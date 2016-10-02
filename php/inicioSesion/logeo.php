<!DOCTYPE html>
<!--[if lt IE 7 ]> <html lang="en" class="no-js ie6 lt8"> <![endif]-->
<!--[if IE 7 ]>    <html lang="en" class="no-js ie7 lt8"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en" class="no-js ie8 lt8"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en" class="no-js ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> 
<html lang="es" class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="UTF-8" />
        <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">  -->
        <title>Inicio de Sesión y Registración</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <meta name="description" content="Login and Registration Form with HTML5 and CSS3" />
        <meta name="keywords" content="html5, css3, form, switch, animation, :target, pseudo-class" />
        <link rel="shortcut icon" href="../favicon.ico"> 
        <!-- Estilos -->
        <link rel="stylesheet" type="text/css" href="../../css/inicioSesion/demo.css" />
        <link rel="stylesheet" type="text/css" href="../../css/inicioSesion/style.css" />
		<link rel="stylesheet" type="text/css" href="../../css/inicioSesion/animate-custom.css" />
    </head>
    <body>      
        <div class="container">
            <header>
                <h1>Inicio Sesión Y Registración <span>Servicio Técnico Arwan Computación</span></h1>
            </header>
            <section>
                <!-- Inicio Sesion -->				
                <div id="container_demo" >
                    <a class="hiddenanchor" id="toregister"></a>
                    <a class="hiddenanchor" id="tologin"></a>
                    <div id="wrapper">
                        <div id="login" class="animate form">
                            <form  action="login.php" autocomplete="on" method="post"> 
                                <h1>Iniciar Sesión</h1> 
                                <p> 
                                    <label for="username" class="uname" data-icon="u" > Nombre Usuario </label>
                                    <input id="username" name="nombreUsuario" required="required" type="text" placeholder="serviciotecnico"/>
                                </p>
                                <p> 
                                    <label for="password" class="youpasswd" data-icon="p"> Contraseña </label>
                                    <input id="password" name="contraseniaUsuario" required="required" type="password" placeholder="serviciotecnico@rwan.com" /> 
                                </p>
                                <p class="keeplogin"> 
									<input type="checkbox" name="loginkeeping" id="loginkeeping" value="loginkeeping" /> 
									<label for="loginkeeping">Mantenerte conectado</label>
								</p>
                                <p class="login button"> 
                                    <input type="submit" name="botonLogin" value="Iniciar" >  
								</p>
                                <p class="change_link">
									No eres miembro todavía ?
									<a href="#toregister" class="to_register">Únete a nosotros</a>
								</p>
                            </form>
                        </div>
                        <!-- REGISTRACION -->
                        <div id="register" class="animate form">
                            <form  action="mysuperscript.php" autocomplete="on"> 
                                <h1> Registrarse </h1> 
                                <p> 
                                    <label for="usernamesignup" class="uname" data-icon="u">Nombre Usuario</label>
                                    <input id="usernamesignup" name="usernamesignup" required="required" type="text" placeholder="serviciotecnico" />
                                </p>
                                <p> 
                                    <label for="emailsignup" class="youmail" data-icon="e" > Tu Correo Electrónico</label>
                                    <input id="emailsignup" name="emailsignup" required="required" type="email" placeholder="serviciotecnico@arwan.com"/> 
                                </p>
                                <p> 
                                    <label for="passwordsignup" class="youpasswd" data-icon="p"> Tu Contraseña </label>
                                    <input id="passwordsignup" name="passwordsignup" required="required" type="password" placeholder="serviciotecnico@rwan.com"/>
                                </p>
                                <p> 
                                    <label for="passwordsignup_confirm" class="youpasswd" data-icon="p">Por favor, confirme su contraseña </label>
                                    <input id="passwordsignup_confirm" name="passwordsignup_confirm" required="required" type="password" placeholder="serviciotecnico@rwan.com"/>
                                </p>
                                <p class="signin button"> 
									<input type="submit" value="Registrarse"/> 
								</p>
                                <p class="change_link">  
									Ya eres usuario ?
									<a href="#tologin" class="to_register"> Ir e ingrese </a>
								</p>
                            </form>
                        </div>
						
                    </div>
                </div>  
            </section>
        </div>
    </body>
</html>
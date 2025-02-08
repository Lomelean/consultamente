<html>
	<head>
		<title>Log in</title>
	<script src='JS/jquery.js'></script>
	<script> 
		function valida(){
			var usuario=document.formulario.usuario.value;
			var password=document.formulario.password.value;		
				if(password!='' && usuario!=''){
					$.ajax({
                    url      : 'Funciones/validarUsuario.php',
                    type     : 'post',
                    dataType : 'text',
                    data     : 'usuario='+usuario+'&password='+password,
                    success  : function(res){
						if(res!=1){
                            $('#mensaje').html("El usuarios no existe");
                            setTimeout("$('#mensaje').html('');",5000);
                            return false;
                        }
                        else{
                            window.location.href = 'bienvenido.php';
                        }
                    },
                    error : function(){
                        alert('ERROR: Archivo no encontrado...');
                    }
                });
				}
				else{
					$('#mensaje').html('Datos incompletos');
					setTimeout("$('#mensaje').html('');",5000);
					return;
				}
		}
	</script>
		<style>
		#consulta {
            position: absolute;
            top: 45%;
            right: 15%;
            transform: translateY(-50%);
        }
        #fondo {
            background-color: #1293C7;
            height: 100vh;
            position: relative;
        }
        #encabezado {
            display: block;
            position: relative;
            width: 550px;
            margin: 0 auto;
            text-align: center;
        }
        #mensaje {
            background: white;
            text-align: center;
            color: #FF0000;
            height: 20px;
            width: 300px;
            margin: 0 auto;
        }
        #centrar {
            position: absolute;
            top: 50%;
            left: 40%;
            transform: translate(-50%, -50%);
            text-align: center;
        }
	</style>
	</head>
	<body id="fondo">
		<div id="centrar">
		<div id="encabezado">
		<form name="formulario">
		<br><h3>Ingresar</h3>
		</div>
		<input type="text" name="usuario" id="usuario" placeholder="Correo"/><br>
		<br>
		<input type="text" name="password" id="password" placeholder="Contraseña"/><br><br>
		<input onclick="valida(); return false;" type="submit" value="Enviar"/>
		<br><br>
		<div id="mensaje"></div>
		<br>¿No tienes una cuenta? <a href="registro.php">Registrate aquí</a>
		</div>
		<div id="consulta"><img id="image" src="Imagenes/consul.png"></div>
		</form>
	</body>
</html>
<html>
	<head>
		<title>Registro</title>
	<script src='JS/jquery.js'></script>
	<script>
		function valida(){
			var nombre=document.forma01.nombre.value;
			var correo=document.forma01.correo.value;
			var pass=document.forma01.pass.value;

				if(nombre=="" || correo=="" || pass==""){
					$('#msjcampos').html('Faltan campos por llenar');
                	setTimeout("$('#msjcampos').html('');",5000);
				}
				else{
					document.forma01.submit();
				}
		}
		function verifica(){
			var correo=$("#correo").val();
			if(correo){
				$.ajax({
                	url      : 'Funciones/verifica.php',
                	type     : 'post',
                	dataType : 'text',
                	data     : 'correo='+correo,
                	success  : function(res){
                    	if(res==1){
                        	$('#msjcorreo').html("El correo "+correo+" ya existe");
							setTimeout("$('#msjcorreo').html('');",5000);
							$('#correo').val(' ');
                    	}
						else{
                    	}
                	},
					error : function(){
                    	alert('Error: archivo no encontrado...');
                	}
            	});
			}
        }
	</script>
	<style>
		#fondo{
        	background-color: #1293C7;
   		}
		#encabezado{
			display: block;
			text-align: center;
			margin: 0;
			width: 550px;
		}
		#celda{

			position: absolute;
  			width: 550px;
		}
		#msjcorreo{
			display: inline-block;
			position: absolute;
			background: white;
			text-align: center;
			color: #FF0000;
			height: 20px;
			width: 300px;
			top: 50%;
			right: -200px;
			transform: translateY(-50%);
		}
		#msjcampos{
			text-align: center;
			color: #FF0000;
        	background: white;
			height: 20px;
        	width: 550px;
		}
		#centrar{
			position: absolute;
            top: 30%;
            left: 50%;
            transform: translate(-50%, -50%);
            text-align: center;
		}
	</style>
	</head>
	<body id="fondo">
		<div id="centrar">
        <div id="encabezado">
		<form name="forma01" enctype="multipart/form-data" action="administradores_salva.php" method="POST">
		<h3><br>Registro</h3>
		</div>
			<label>
				Nombre:
				<input id="nombre" type="text" name="nombre" placeholder="Escribe tu nombre" required>
			</label>
			<br><br>
			<div id="celda">
			<label>Correo:</label>
			<input onblur="verifica();" id="correo" type="email" name="correo" placeholder="Escribe tu correo"><div id="msjcorreo"></div>
			</div>
			<br><br>
			<label for="pass">Contraseña:</label>
			<input type="password" name="pass">
			<br><br>
			<input onClick="valida(); return false;" type="submit" value="Salvar">
			<br><br><br>
			<div id="msjcampos"></div>
		</form>
		</div>
	</body>
</html>
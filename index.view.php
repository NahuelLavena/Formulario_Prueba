<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Formulario de contacto</title>
	<link rel="stylesheet" href="styles.css">
	<link href="https://fonts.googleapis.com/css2?family=Oswald&display=swap" rel="stylesheet">
</head>
<body>
	<div class="wrap">
		 <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'])?>" method="post">

			<input type="text" class="form-control"  id="nombre" name="nombre" placeholder="Nombre:" value="<?php if (!$enviado && isset($nombre)) echo $nombre ?>">
				
			<input type="email" class="form-control" id="nombre" name="correo" placeholder="Correo:" value="<?php if (!$enviado && isset($correo)) echo $correo ?>">

			<textarea name="mensaje" class="form-control" id="mensaje" placeholder="Mensaje"></textarea>


			<?php if (!empty($errores)):?>
				<div class="alert error">
					<?php echo $errores; ?>
				</div>
			<?php elseif($enviado): ?>
				<div class="alert success">
					<p>Envido correctamente</p>
				</div>
			<?php endif ?>




			<input type="submit" name="submit" class="btn-primary" value="Enviar correo">


		
		 </form>
	</div>
</body>
</html>
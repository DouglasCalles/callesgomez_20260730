<?php
if(isset($_REQUEST["token"])){

$token = $_REQUEST["token"];
$fecha = base64_decode($token);
//Validar dentro de la base de datos que el token exista y que esté activo, y de ser correcto, entonces, dejar pasar al usuario
?>
<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="UTF-8">
		<title>BIENVENIDO/A</title>
		<!--
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
		-->
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="css/style.css">
		<script src="js/jquery-3.7.1.min.js"></script>
		<script src="js/bootstrap.bundle.min.js"></script>
	</head>
	<body>
		<a href="https://www.google.com" target="_top">Salir</a>
		<p class="parrafo_justificado w-75 p-3">Este es el contenido del sistema o sitio web:</p>
		<p class="parrafo_justificado w-75 p-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam placerat, enim in aliquam commodo, urna tortor mollis tortor, vitae pellentesque dolor ante nec turpis. Duis ullamcorper imperdiet rhoncus. Morbi nec urna sed odio fermentum pellentesque ac id eros. Quisque vel mi eu elit vestibulum molestie eget in lacus. Morbi blandit purus nec metus aliquam semper. Maecenas consectetur diam quis ante blandit, a posuere lorem sollicitudin. Phasellus aliquet sit amet erat a ultrices. Fusce ultricies fringilla ante, vel aliquam justo vestibulum nec. Suspendisse congue mauris vitae ipsum placerat malesuada. Vivamus libero diam, consequat ut dui vel, tristique iaculis ex. Cras at accumsan neque. Vestibulum vulputate gravida felis. Vestibulum molestie ultricies orci vitae varius. Maecenas sed arcu ut odio malesuada cursus.</p>
		<p class="parrafo_justificado w-75 p-3">Nulla aliquam sed arcu quis dictum. Donec id condimentum est. Proin vehicula risus sed lorem ullamcorper, vel vulputate elit euismod. Vestibulum sagittis eget felis nec consequat. In scelerisque cursus nisl, et vestibulum libero molestie id. Cras ullamcorper at purus cursus mollis. Mauris est augue, vestibulum at mattis et, ornare ac orci. Integer fermentum sem et urna condimentum pharetra. In elementum vel orci viverra rhoncus. Vivamus a dapibus felis, a vulputate metus. Ut pretium nisi sit amet tortor maximus, sit amet feugiat nunc ultrices. Aenean gravida massa eu ante placerat, vel iaculis mauris pulvinar. Aenean metus lacus, malesuada non rhoncus id, vehicula ut velit. Mauris hendrerit, ipsum non tempor porta, diam ex laoreet tortor, non gravida enim lectus quis risus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Etiam scelerisque ipsum arcu, in commodo velit fringilla sed.</p>
		<p class="parrafo_justificado w-75 p-3">Aenean sed rutrum lacus. Curabitur pulvinar metus erat, vel luctus massa suscipit vitae. Nam eget sem non urna feugiat iaculis. Proin faucibus ex semper, feugiat risus sit amet, auctor est. Curabitur blandit massa vitae elementum tincidunt. Duis maximus mi sed justo tristique, et cursus dolor vestibulum. Morbi a tortor convallis, suscipit neque et, rhoncus turpis. Ut placerat vitae nisi eget iaculis. Proin finibus lacus quis sapien pellentesque, sit amet scelerisque diam condimentum. Vivamus in arcu ligula.</p>
		<p class="parrafo_justificado w-75 p-3">Vestibulum quis dictum est, vel aliquet est. Vivamus dignissim cursus libero nec fermentum. Nunc placerat augue lorem, ut ultrices risus egestas non. Fusce ullamcorper urna sit amet dui pulvinar, ac fermentum eros rutrum. Curabitur blandit fermentum arcu a congue. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Nunc fermentum commodo libero, vitae faucibus dui sollicitudin et. Donec fringilla diam ut felis feugiat congue. Nunc a consequat nibh. Ut et vehicula odio. Maecenas dictum, ante id auctor rhoncus, nisl lacus efficitur est, nec iaculis lorem purus non quam. Nam eu dui nec justo ullamcorper vulputate. Ut vitae placerat lorem. Vestibulum malesuada nisl in semper consectetur. Maecenas eget elementum purus, ut aliquam lorem.</p>
		<p class="parrafo_justificado w-75 p-3">Nulla ultrices, tortor at sollicitudin iaculis, augue lacus aliquet elit, non commodo quam dolor a arcu. Pellentesque eleifend nulla a lacus porta, sed venenatis sem dictum. In commodo, quam at posuere euismod, erat justo egestas tellus, sed tempor tortor augue vitae enim. Vestibulum tempor tincidunt purus, eu blandit lacus accumsan sed. Pellentesque sagittis ante nec massa pulvinar volutpat. Morbi varius finibus urna ac ullamcorper. Phasellus malesuada nulla eget egestas fermentum. Nam sed dui id ante faucibus feugiat vel vel diam. Donec id facilisis urna. Cras gravida, libero at dapibus tempor, odio quam pharetra sapien, non egestas erat massa sed sem. Suspendisse et euismod ipsum. </p>
	</body>

</html>
<?php
}else{
	header( "Refresh:5; url=./index.php", true, 303);
	echo("Es necesario un Token	");
}
?>
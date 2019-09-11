<!DOCTYPE html>
<html>
<head>
	<title>Plantilla</title>


	<style type="text/css">
		
		.contenedor{
			background-color: #F00;
			text-align: center;
		}

		.inforGeneral{
			background-color: #00F;
			margin: 200px 0;
			color: #FFF;
		}

		.pie{
			background-color: #FF0;

		}



	</style>
</head>
<body>


<div class="contenedor">
	@yield("cabecera")

</div>


<div class="inforGeneral">
	@yield("infoGeneral")

</div>



<div class="pie">
	@yield("pie")
	Aqui va el pie de pagina
</div>


</body>
</html>
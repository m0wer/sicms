<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="stylesheet" href="css/style.css" type="text/css" media="screen" charset="utf-8">
	<title>Site Title</title>
		
</head>
<body>
<?php

	$imgdir = "img/";
	$imgs = scandir($imgdir);
	$nimgs = count($imgs);

	for ($i=2;$i<$nimgs;$i++) {
			$file = explode(".",$imgs[$i],2)[0].".md";
			if (file_exists($file)) {
				print "<div class=\"square\">
					<a href=\"$file\"><img src=\"$imgdir$imgs[$i]\" alt=\"TODO\" class=\"img\"/></a>
			</div>";

			}else {
				print "<div class=\"square\">
					<img src=\"$imgdir$imgs[$i]\" alt=\"TODO\" class=\"img\"/>
			</div>";

			}
	}

?>

<!--
	<div class="square">
			<img src="img/lentejas.jpg" alt="Lentejas con Arroz" class="img"/>
	</div>
	<div class="square">
			<img src="img/lentejas.jpg" alt="Lentejas con Arroz" class="img"/>
	</div>
	<div class="square">
			<img src="img/lentejas.jpg" alt="Lentejas con Arroz" class="img"/>
	</div>
	<div class="square">
			<img src="img/lentejas.jpg" alt="Lentejas con Arroz" class="img"/>
	</div>
	<div class="square">
			<img src="img/lentejas.jpg" alt="Lentejas con Arroz" class="img"/>
	</div>
	<div class="square">
			<img src="img/lentejas.jpg" alt="Lentejas con Arroz" class="img"/>
	</div>
-->
</body>
</html>

<!DOCTYPE HTML>
<html>
<head>
	<meta charset="utf-8" />
	<title>Farhad-rs [zp] Gallery</title>
	<link href="../../reset.css" rel="stylesheet" type="text/css" />
	<link href="style.css" rel="stylesheet" type="text/css" />
	<script type="text/javascript" src="../../zepto.js"></script>
	<script type="text/javascript" src="script.js"></script>
</head>
<body>
	<div class="container">
		<div class="pic">
			<?php
				$image_path = "../../images";
				$image = scandir($image_path);
				foreach($image as $pic){
					$pic_arr = explode('.',$pic);
					$pic_type = strtolower(end($pic_arr));
					if ($pic_type == "jpg"){
						echo "<a href=\"$image_path/$pic\"><img src=\"$image_path/farhad-image/gallery/small/$pic\" alt=\"New and nice pictures of 2012\" /></a>";	
					}
				}
			?>
		</div>
	</div>
</body>
</html>
<html>
	<head>
		<title>sistem informasi </title>
	</head>
	
	<body>
		<h3> surdiandi</h3>
		<h3> 195610087</h3>
		<ul>
			<?php
			
			$json = file_get_contents('http://product-service/');
			$obj = json_decode($json);
			
			$products = $obj->products;
			
			foreach ($products as $product) {
				echo "<li>$product</li>";
			}
			
			?>
		</ul>
	</body>
</html>
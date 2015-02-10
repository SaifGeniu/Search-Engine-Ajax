<html>
	<head>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
		<script type="text/javascript">
			function getKeyword(value) {
				$.past("getKeyword.php",{partialKeyword:value},function(data)
					$("#results").html(data);
					});
			}
	</head>
	<body>
		<input type="text" onkeyup="getKeyword(this.value)"/>
		<br>
		<div id="results"></div>
	</body>
</html>
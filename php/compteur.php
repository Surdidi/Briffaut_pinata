

<?php
    include "header.php"; 
?>
<link rel="stylesheet" href="../css/header.css"/>

<body>
	<button class="btn btn-danger center-block" id="btnClick" style="margin-top: 50px;">Ne pas cliquer</button>
</body>
<script src="boodstrap/dist/js/jquery.js"></script>
<script type="text/javascript">
	var test = 0;
	$("#btnClick").mousedown(function() {
		test++;
		if(test == 10) {
			alert("l'indice est : I")
			test = 0;
		}
	});
	
</script>
</html>


<input type="button" onclick="maFunction()"  value="Solution!" class="btn btn-success">
	<script type="text/javascript">
		function maFunction(){
			alert("INDICE : I");
		}
	</script>

    

<?php $Ano = 2022; ?>

<!DOCTYPE HTML>
<html lang="pt-br">  
  <head>  
    <meta charset="utf-8">
    <title>PAINEL D R E CHIAPERINI</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
			<h3 style="margin-bottom: 25px; padding: 25px;">
      <center><img style="vertical-align:middle" src="LOGO/logochiap.png" width="240px"> </img><font face="COMIC">PAINEL DEMONSTRATIVO DE RESULTADOS 2023</font> <a href="index2.php" class="btn22" style="background-color: #f72e0a; border-radius: 50%; color: white; padding: 15px; text-align: center; text-decoration: none; display: inline-block; font-size: 16px;">DRE 2022</a>
    </h3>
  </head>
  <body>
	<center><div class="container" style="max-width: 1950px;">
			<span id="conteudo"></span>
	</center></div>
		<script>
			$(document).ready(function () {
				$.post('resultados2023.php', function(retorna){
					//Subtitui o valor no seletor id="conteudo"
					$("#conteudo").html(retorna);
				});
			});
		</script>
  </body>
</html>
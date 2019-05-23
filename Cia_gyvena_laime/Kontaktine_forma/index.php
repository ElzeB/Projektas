<?php
    require __DIR__ . '/src/app.php';
?>
<!DOCTYPE html>
<html lang="lt">
<head>
	<meta charset="utf-8">
	<meta content="width=device-width, initial-scale=1.0" name="viewport">
	<meta content="PHP forma" name="description">
	<title>Forma</title>
    <!--<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">-->
	<link href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet" type="text/css">
	<script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.4.0.min.js"></script>
	<script>

	                  $(function(){
	                      $( ".fa-bars" ).click(function(){
	                          $(".navigation").toggleClass("nav_visible");
	                      });
	                  });
	                  $(function(){
	                      $( ".fa-bars" ).click(function(){
	                          $(".container-fluid").toggleClass("body_nav_visible");
	                          
	                      });
	                  });
	                  $(function(){
	                      $( ".fa-search" ).click(function(){
	                          $(".header_search").toggleClass("header_search_visible");    
	                      });
	                  }); 
	                  $(function(){
	                      $( ".fa-search" ).click(function(){
	                          $(".container-fluid").toggleClass("body_nav_visible");

	                      });
	                  });
	                                         
	</script>
</head>
<body>
	<div id="header">
		<a><i class="fas fa-bars"></i></a> <a href="../index.php" id="logo">Čia gyvena laimė</a> <a><i class="fas fa-search"></i></a>
	</div>
	<div class="header_search">
		<input autofocus="" id="search_aerea" name="search_value" placeholder="Įveskite tekstą ir paspauskite ENTER" type="text"> <a class="fas fa-times" href=""></a>
	</div>
	<main>
		<div class="container">
			<form action="index.php" id="contact" method="post" name="contact">
				<div>Parašykite man</div>
				<p><input autofocus="" name="vardas" placeholder="Jūsų vardas" required="" type="text"></p>
				<p><input name="email" placeholder="Jūsų el. pašto adresas" required="" type="text"></p>
				<p>
				<textarea name="message" placeholder="Jūsų žinutė" required=""></textarea></p>
				<p><button id="contact-submit" name="submit" type="submit">Siųsti</button></p>
			</form>
		</div>
		<div id="footer">
			<table>
				<tr>
					<td>
						<a class="fab fa-facebook-f" href="https://www.facebook.com/" target="_blank"></a>
					</td>
					<td>
						<a class="fab fa-instagram" href="https://www.instagram.com/" target="_blank"></a>
					</td>
					<td>
						<a class="fab fa-pinterest" href="https://www.pinterest.com/" target="_blank"></a>
					</td>
					<td>
						<a class="fab fa-github" href="https://github.com/" target="_blank"></a>
					</td>
				</tr>
			</table>
		</div>
		<div class="navigation">
			<ul class="navigation_list">
				<li>
					<a class="fas fa-times" href=""></a>
				</li>
				<li>
					<a class="list_item" href="">Receptai</a>
				</li>
				<li>
					<a class="list_item" href="">Gėlės</a>
				</li>
				<li>
					<a class="list_item" href="">Vaikai</a>
				</li>
				<li>
					<a class="list_item" href="">Laisvalaikis</a>
				</li>
				<li>
					<a class="list_item" href="">Parašykite man</a>
				</li>
			</ul>
		</div>
	</main>
</body>
</html>
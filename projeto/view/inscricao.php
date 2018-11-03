<!DOCTYPE html>
<html lang="en">
<head>
<title>SGU-Inscrição</title>
<!-- custom-theme -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Course Register Form Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //custom-theme -->
<!-- css files -->
<link href="//fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&amp;subset=devanagari,latin-ext" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese" rel="stylesheet">
<link href="content/css/Inscricao.css" type="text/css" rel="stylesheet" media="all">   
<!-- //css files -->

<link rel="stylesheet" href="content/css/font-awesomeInsc.css"> <!-- Font-Awesome-Icons-CSS -->

</head>
<!-- body starts -->
<body>
<!-- section -->
<section class="register">
	<div class="register-full">
		<div class="register-left">
			<div class="register">
				<div class="logo">
					<a href="#"><span class="fa fa-graduation-cap" aria-hidden="true"></span></a>
				</div>
				<h1>Inscreva-se No Seu Curso Dos Sonhos</h1>
				<p>Donec ipsum lorem, sodales a sagittis ut, tristique purus. Aenean in est pretium lectus euismod facilisis.
				 Aliquam dapibus rhoncus ex quis fringilla. Proin interdum eros mauris,hendrerit suscipit lectus cursus et.</p>
			</div>
		</div>
		<div class="register-right">
			<div class="register-in">
				<h2><span class="fa fa-pencil"></span> Inscreva-se Aqui...</h2>
				<div class="register-form">
                                    
					<form action="#" method="post">
						<div class="fields-grid">
							<div class="styled-input agile-styled-input-top">
								<input type="text" name="NomeCompleto" required=""> 
								<label>Nome Completo</label>
								<span></span>
							</div>
							<div class="styled-input">
								<input type="email" name="Email" required="">
								<label>Email</label>
								<span></span>
							</div>
							<div class="styled-input">
								<input type="tel" name="Telefone" required="">
								<label>Telefone</label>
								<span></span>
							</div>
							<div class="styled-input">
                                                                <input type="text" name="Bi" required="">
								<label>Número de B.I</label>
								<span></span>
							</div>
							<div class="styled-input agile-styled-input-top">
                                                            <select id="cursos" required="" name="Cursos">
                                                                <option value="" selected="selected">    ----- </option>
                                                                <?php foreach($cursos as $curso) {?>
                                                                    <option value="<?php echo $curso->getId() ?>"><?php echo $curso->getNome(); ?></option>
                                                                <?php } ?>
                                                            </select>
                                                            <span></span>   
							</div>
                                                    </div>
						<input name="submit-inscricao" type="submit" value="Inscrever">
					</form>
				</div>
			</div>
			<div class="clear"> </div>
		</div>
	<div class="clear"> </div>
	</div>
	<!-- copyright -->
	<p class="agile-copyright">© 2018 Course Register Form. All Rights Reserved</p>
	<!-- //copyright -->
</section>
<!-- //section -->
</body>	
<!-- //body ends -->
</html>

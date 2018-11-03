<!DOCTYPE HTML>
<html>

<head>
	<title>SGU-Sistema De Gestão Universitário</title>
	<!-- Meta-Tags -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8">
	<meta name="keywords" content="Spin Login Form a Responsive Web Template, Bootstrap Web Templates, Flat Web Templates, Android Compatible Web Template, Smartphone Compatible Web Template, Free Webdesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola Web Design">
	<script>
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!-- //Meta-Tags -->
	<!-- Stylesheets -->
        <link href="content/css/font-awesome.css.css" rel="stylesheet">
        <link href="content/css/login.css" rel='stylesheet' type='text/css' />
	<!--// Stylesheets -->
	<!--fonts-->
	<link href="//fonts.googleapis.com/css?family=Source+Sans+Pro:200,200i,300,300i,400,400i,600,600i,700,700i,900,900i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese" rel="stylesheet">
	<!--//fonts-->
</head>

<body>
    <h1>Sistema De Gestão Universitário</h1>
    <div class="clear-loading spinner">
	<span></span>
    </div>
    <div class="w3ls-login box box--big">
	<!-- form starts here -->
	<form action="perfilController.php" method="post">
            <div class="agile-field-txt">
		<label><i class="fa fa-user" aria-hidden="true"></i> Codigo ID</label>
		<input type="text" name="id" placeholder="Enter Codigo ID" required="" />
            </div>
            <div class="agile-field-txt">
		<label><i class="fa fa-unlock-alt" aria-hidden="true"></i> password </label>
		<input type="password" name="password" placeholder="Enter Password" required="" id="myInput" />
		<div class="agile_label">
                    <input id="check3" name="check3" type="checkbox" value="show password" onclick="myFunction()">
			<label class="check" for="check3">Show password</label>
		</div>
		<div class="agile-right">
                    <a href="#">forgot password?</a>
		</div>
            </div>
            <!-- script for show password -->
            <script>
		function myFunction() {
                    var x = document.getElementById("myInput");
                    if (x.type === "password") {
			x.type = "text";
                    } else {
			x.type = "password";
                    }
		}
            </script>
            <!-- //end script -->
            <input type="submit" name="login-submitted" value="LOGIN">
	</form>
	</div>
	<!-- //form ends here -->
	<!--copyright-->
	<div class="copy-wthree">
            <p>© 2018 Spin Login Form . All Rights Reserved</p>
	</div>
	<!--//copyright-->
    </body>
</html>

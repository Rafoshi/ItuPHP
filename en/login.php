<?php
session_start()
?>
<!DOCTYPE html>
<html lang="pt_br">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>Login - Infinity Tech</title>
		<link rel="icon" href="../images/logo-icon.svg" />
		<link rel="stylesheet" href="../styles/vendors/reset.css" />
		<link rel="stylesheet" href="../styles/vendors/bootstrap.css" />
		<link rel="stylesheet" href="../styles/partials/login.css" />
		<link
			href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;800&display=swap"
			rel="stylesheet"
		/>
		<script src="../scripts/main.js" defer></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
		<script src="https://unpkg.com/feather-icons"></script>
	</head>
	<body>
		<picture>
			<source
				srcset="../images/arrow-left-white.svg"
				media="(prefers-color-scheme: dark)"
				ondragstart="return false;"
				alt="Seta para voltar"
				class="arrow-icon"
				onclick="window.location.href='./index.html'"
			/>
			<img
				src="../images/arrow-left.svg"
				ondragstart="return false;"
				alt="Seta para voltar"
				class="arrow-icon"
				onclick="window.location.href='./index.html'"
			/>
		</picture>
		
		<div class="container-form-image">
			<div class="form">
				<h1>Hello, sign in</h1>
				
				<form name="login" method="POST" action="/ituphp/php/userValidationEn.php">
				<?php
					if(isset($_SESSION['not_authenticated'])):
				?>
				<p id="error-message">Error : incorrect credentials</p>
				<?php
				endif;
				unset($_SESSION['not_authenticated']);
				?>
					<div class="form-group">
						<div class="form-group">
							<label for="email">Email</label>
							<input type="email" class="form-control login-input" id="email" name="email" required />	
						</div>

						<div class="form-group">
							<label for="pwd">Password</label>
							<input type="password" class="form-control login-input" id="pwd" name="pwd" minlength="6" required />	
						</div>

						<input type="submit" id="login-button" value="Log in" onsubmit="window.location.href='./home-logged-admin.html'" ></input>
				</form>


				</div>
				<img
					src="../images/login-blue.svg"
					alt="Login icone"
					class="img-login"
					onclick="window.location.href='./register.html'"
					ondragstart="return false;"
				/>
				<small id="account"
					>Don't have an account?<u
						><a href="./register.html">Click here</a></u
					></small
				>
			</div>

			<div class="image">
				<img
					src="../images/jigsaw-group.svg"
					alt="Um grupo de pessoals montando quebra cabeça"
					class="img-fluid"
					id="jigsaw"
					ondragstart="return false;"
				/>
			</div>
		</div>

		<script>
			feather.replace();
		</script>

		<script src="https://cdn.jsdelivr.net/npm/typeit@7.0.4/dist/typeit.min.js"></script>
		<script>
			new TypeIt("#account", {
				speed: 50,
			})
				.go()
				.reset();
		</script>
	</body>
</html>

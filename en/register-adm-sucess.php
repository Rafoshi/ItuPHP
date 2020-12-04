<!DOCTYPE html>
<html lang="pt_br">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>Register - Infinity Tech</title>
		<link rel="icon" href="./images/logo-icon.svg" />
		<link rel="stylesheet" href="../styles/vendors/reset.css" />
		<link rel="stylesheet" href="../styles/vendors/bootstrap.css" />
		<link rel="stylesheet" href="../styles/partials/register.css" />
		<link
			href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;800&display=swap"
			rel="stylesheet"
		/>
		<script src="../scripts/main.js" defer></script>
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
				onclick="window.location.href='./home-logged-admin.php'"
			/>
			<img
				src="../images/arrow-left.svg"
				ondragstart="return false;"
				alt="Seta para voltar"
				class="arrow-icon"
				onclick="window.location.href='./home-logged-admin.php'"
			/>
		</picture>

		<div id="greenAlert" class="conf ">
				<div id="greenCircle" class="circle-green ">
					<span id="greenCheck" class="fas fa-check-circle"></span>
				</div>
				<span id="greenTitle" class="msg-title ">
					Done!<br
                /></span>
				<span id="greenMessage" class="msg">
					Registration successfully Complete!</span
                >
			</div> 
	

		<div class="container-form-image">
			<div class="form">
				<h1>Register an administrator</h1>

				<form name="formRegister" action="../php/registerNewAdmEn.php" method="POST" >

					<div class="form-group">

						<label for="name">Name</label>
						<input type="text" class="form-control" id="name" name="name" minlength="7" required />
		
					</div>

					<div class="form-group">
						<label for="email">Email</label>
						<input type="email" class="form-control" id="email" name="email" required />	
					</div>

					<div class="form-group">
						<label for="pwd">Password</label>
						<input type="password" class="form-control" id="pwd" name="pwd" minlength="6" required />	
					</div>

					<input type="submit" id="login-button" value="Cadastrar" class="cad-button"></input>

			</div>
			
			<div class="image">
				<img
					src="../images/321.svg"
					alt="Uma mulher voando com um netbook"
					class="img-fluid"
					id="netbook"
					ondragstart="return false;"
				/>
			</div>
		</div>
		
		<script>
			feather.replace();
		</script>

		<script src="https://cdn.jsdelivr.net/npm/typeit@7.0.4/dist/typeit.min.js"></script>
		<script>
			new TypeIt("#register", {
				speed: 20,
			})
				.go()
				.reset();
		</script>
	</body>
</html>

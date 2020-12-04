<!DOCTYPE html>
<html lang="pt_br">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>Web & Mobile - Infinity Tech</title>
		<link rel="icon" href="../images/logo-icon.svg" />
		<link rel="stylesheet" href="../styles/vendors/reset.css" />
		<link rel="stylesheet" href="../styles/vendors/bootstrap.css" />
		<link rel="stylesheet" href="../styles/partials/forms.css" />
		<link
			href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;800&display=swap"
			rel="stylesheet"
		/>
		<script src="../scripts/main.js" defer></script>
		<script src="https://unpkg.com/feather-icons"></script>
		<link
			rel="stylesheet prefetch"
			href="https://npmcdn.com/basscss@8.0.0/css/basscss.min.css"
		/>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
		<script src="https://kit.fontawesome.com/a076d05399.js"></script>
	</head>
	<body>
		<div class="icon-back">
			<picture>
				<source
					srcset="../images/arrow-left-white.svg"
					media="(prefers-color-scheme: dark)"
					ondragstart="return false;"
					alt="Seta para voltar"
					class="arrow-icon"
					onclick="window.location.href='./home-logged.php'"
				/>
				<img
					src="../images/arrow-left.svg"
					ondragstart="return false;"
					alt="Seta para voltar"
					class="arrow-icon"
					onclick="window.location.href='./home-logged.php'"
				/>
			</picture>
		</div>

		<div class="container-form">
			<div class="prelog">
				Contract information

				<p id="title">Web & Mobile</p>
			</div>

			<div class="text">
				<p class="price">in <b>12x R$200</b> ( or R$ 1.000 in cash)</p>
			</div>

			<div class="container-text">
				<p class="txt">
				Get the best experience of packages and services complete as well
				enabling a better of both worlds. It will bring what your
				customer prefers, and it will also be easier to find
				in all devices. With the support 12 months in every working day after
				finalization of the app and website.
				</p>
			</div>

			<form name="webmobile" method="POST" action="/ituphp/php/orderRegisterEn.php">
				<div class="form-group">
					<label for="inputEmail">Order description:</label>

					<div class="input-group">
						<textarea id="desc" class="form-control area-text" name="desc" class="font-size: 1.8rem;" required ></textarea>
					</div>

					<button type="submit" id="login-button">Submit</button>
					<input type="hidden" name="type" value="Web&Mobile">
				</div>
			</form>

			<div class="tiny-message">
				<picture>
					<source
						srcset="../images/mail-white.svg"
						media="(prefers-color-scheme: dark)"
					/>
					<img
						src="../images/mail.svg"
						onclick="window.location.href='mailto:itu.etec@gmail.com'"
						class="img-footer"
						ondragstart="return false;"
						alt="Seta para voltar"
					/>
				</picture>
				<p class="tiny">
				For future contact with us, and possible changes.
				</p>
			</div>

			<script>
				feather.replace();
			</script>
		</div>
	</body>
</html>

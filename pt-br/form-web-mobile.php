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
				Informações do contrato

				<p id="title">Web & Mobile</p>
			</div>

			<div class="text">
				<p class="price">até <b>12x R$200</b> ( ou R$ 1.000 à vista)</p>
			</div>

			<div class="container-text">
				<p class="txt">
					Tenha a melhor experiência dos pacote completo, assim
					possibitando a melhor dos dois mundos. Trará o que seu
					cliente preferir, e também estará mais fácil de achar seja
					aonde for Com suporte de 12 meses todos os dias úteis após a
					finalização do app e site.
				</p>
			</div>

			<form name="webmobile" method="POST" action="/ituphp/php/orderRegisterBr.php">
				<div class="form-group">
					<label for="inputEmail">Descrição do pedido:</label>

					<div class="input-group">
						<textarea id="desc" class="form-control area-text" name="desc" class="font-size: 1.8rem;" required ></textarea>
					</div>

					<button type="submit" id="login-button">Enviar</button>
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
					Para futuro contato conosco, e possíveis alterações.
				</p>
			</div>

			<script>
				feather.replace();
			</script>
		</div>
	</body>
</html>

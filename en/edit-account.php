<!DOCTYPE html>
<html lang="pt_br">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>Edit account - Infinity Tech</title>
		<link rel="icon" href="../images/logo-icon.svg" />
		<link rel="stylesheet" href="../styles/vendors/reset.css" />
		<link rel="stylesheet" href="../styles/vendors/bootstrap.css" />
		<link rel="stylesheet" href="../styles/partials/edit-account.css" />
		<link
			href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;800&display=swap"
			rel="stylesheet"
		/>
		<script src="../scripts/main.js" defer></script>
		<script src="../scripts/partials/passwordCheck.js" defer></script>
		<script src="https://unpkg.com/feather-icons"></script>
		<link
			rel="stylesheet prefetch"
			href="https://npmcdn.com/basscss@8.0.0/css/basscss.min.css"
		/>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
		<script src="https://kit.fontawesome.com/a076d05399.js"></script>
	</head>
	<body>
		<picture>
			<source
				srcset="../images/arrow-left-white.svg"
				media="(prefers-color-scheme: dark)"
				ondragstart="return false;"
				alt="Seta para voltar"
				class="arrow-icon"
				<?php
					session_start();
					$userID = $_SESSION['ID'];
					if($userID == '1' || $userID = 1){
						echo `onclick="window.location.href='./home-logged-admin.php'"`;
					}
					else{
						echo `onclick="window.location.href='./home-logged.php'"`;
					}
				?>
			/>
			<img
				src="../images/arrow-left.svg"
				ondragstart="return false;"
				alt="Seta para voltar"
				class="arrow-icon"
				onclick="window.location.href='./home-logged-admin.php'"
			/>
		</picture>

		<div class="container-form-image">
			<div id="greenAlert" class="conf hide">
				<div id="greenCircle" class="circle-green hide">
					<span
						id="greenCheck"
						class="fas fa-check-circle hide"
					></span>
				</div>
				<span id="greenTitle" class="msg-title hide">
					Done!<br
				/></span>
				<span id="greenMessage" class="msg hide">
					Registration successfully Complete!</span
				>
			</div>

			<div name="edit-account">
				<h1 id="title" style="font-size: 4rem;">
					Set your new password
				</h1>

				<form
					name="form"
					action="../php/newPasswordEn.php"
					onsubmit="validateForm();return false"
				>
					<div class="form-group">
						<label for="password">New password</label>
						<input
							type="password"
							class="form-control"
							id="password"
							name="password"
							minlength="6"
							required
						/>
					</div>

					<div class="form-group">
						<label for="repassword">Confirm your password</label>
						<input
							type="password"
							class="form-control"
							id="repassword"
							name="repassword"
							minlength="6"
							required
						/>

						<input
							type="submit"
							id="login-button"
							value="Alterar"
						/>
					</div>
				</form>
			</div>

			<div class="image">
				<img
					src="../images/edit.png"
					id="netbook"
					alt="Homem com terno e engrenagem"
					class="img-fluid img"
					ondragstart="return false;"
				/>
			</div>
		</div>

		<script>
			feather.replace();
		</script>
		<script src="scripts.js"></script>
	</body>
</html>

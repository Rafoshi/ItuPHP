<!DOCTYPE html>
<html lang="pt_br">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>Home | User - Infinity Tech</title>
		<link rel="icon" href="../images/logo-icon.svg" />
		<script src="jquery-3.5.1.min.js"></script>
		<link rel="stylesheet" href="../styles/vendors/reset.css" />
		<link rel="stylesheet" href="../styles/vendors/bootstrap.css" />
		<link rel="stylesheet" href="../styles/partials/home-looged-admin.css" />
		<link rel="stylesheet" href="../styles/partials/responsive-nav.css">
		<link
			href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;800&display=swap"
			rel="stylesheet"
		/>
		<script src="https://unpkg.com/feather-icons"></script>
		<link
			rel="stylesheet prefetch"
			href="https://npmcdn.com/basscss@8.0.0/css/basscss.min.css"
		/>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
		<script src="https://kit.fontawesome.com/a076d05399.js"></script>
	</head>
	<body>
		<div id="mySidenav" class="sidenav-language">
			<a href="javascript:void(0)" class="closebtn" onclick="closeNav()"
				>&times;</a
			>
			<a onclick="window.location.href='../index.html'"
				>Portugues</a
			>
			<hr />
			<a href="#"
				>ingles<i data-feather="check-circle" id="check-icon"></i
			></a>
			<hr />
			<a onclick="window.location.href='../../Pages-FR/Home/index.html'"
				>Français</a
			>
			<hr />
			<a>Nederlands</a>
			<hr />
		</div>
		<div id="main">
		<header>
				<div class="container">
					<span
						style="font-size: 30px; cursor: pointer;"
						onclick="openNav()"
					>
						<button class="btn-language">
							<i data-feather="globe" id="globe-icon"></i>
						</button>
					</span>

					<picture>
						<source
							srcset="../images/logo-white.png"
							class="img-fluid"
							media="(prefers-color-scheme: dark)"
						/>
						<img
							src="../images/logo.png"
							alt="linkedin"
							class="img-fluid"
							ondragstart="return false;"
						/>
					</picture>
					<div class="menu-section">
						<div class="menu-toggle">
							<div class="one"></div>
							<div class="two"></div>
							<div class="three"></div>
						</div>
						<nav>
							<ul>
								<li>
									<a onclick="linkClicked();" href="#home">Home</a>
								</li>
								<li>
									<a 
									onclick="linkClicked();" href="#business">Prices</a>
								</li>
								<li>
									<a onclick="linkClicked();" href="#title-port">Portifolio</a>
								</li>
								<li>
									<a onclick="linkClicked();" href="#history">About us</a>
								</li>
								<li>		
									<div class="drop-btn">
										<span
											class="fas fa-chevron-down"
											id="chevron-down"
											onclick="dropBox()"
										></span>
										<i
											data-feather="settings"
											id="settings-icon"
										></i>
									</div>
								</li>
							</ul>
						</nav>
						
						<div id="combo-box" class="combo-box">
							<ul class="menu-bar">
								<?php
									include '../php/connection.php';

									session_start();
									$userID = $_SESSION['ID'];

									$query = $cn -> query("SELECT user_name FROM tbl_user where user_id = $userID ");

									$show = $query -> fetch(PDO::FETCH_ASSOC);
								?>
								<li class="person-name">
									Hello, <?php echo $show['user_name'] ?>
								</li>

								<hr />
								<li
									class="clipbord"
									onclick="window.location.href='./my-orders.php'"
								>
									<a
										onclick="window.location.href='./my-orders.php'"
									>
										<div
											class="icon"
											onclick="window.location.href='./my-orders.php'"
										>
											<span
												class="far fa-clipboard"
												onclick="window.location.href='./my-orders.php'"
											></span>
										</div>
										Track order
									</a>
								</li>
								<li
									class="setting-item"
									onclick="window.location.href='./edit-account.php'"
								>
									<a
										onclick="window.location.href='./edit-account.php'"
									>
										<div
											class="icon"
											onclick="window.location.href='./edit-account.php'"
										>
											<span
												class="far fa-user"
												onclick="window.location.href='./edit-account.php'"
											></span>
										</div>
										Change password
									</a>
								</li>
								<li
									class="help-item"
									onclick="window.location.href='./index.html'"
								>
									<a
										onclick="window.location.href='./index.html'"
									>
										<div
											class="icon"
											onclick="window.location.href='./index.html'"
										>
											<span
												data-feather="log-out"
												id="log-out"
												onclick="window.location.href='../php/logout.php'"
											></span>
										</div>
										Logoff
									</a>
								</li>
							
								<li class="trash">
									<a onclick="deleteAccount()">
										<div class="icon">
											<span
												class="far fa-trash-alt"
											></span>
										</div>
										Delete account
									</a>
								</li>
							</ul>
					</div>
				</div>
			</header>

					<p class="title">
						The system you need,<br />
						for what you need.
					</p>
					<p id="subtitle" class="subtitle">
						We will make the system for your trade,<br />
						with your needs.
					</p>

					<div class="container-button">
						<button class="hire-button">
							<a class="read-button-a" href="#title-port">
								Contact us
							</a>
						</button>
						<button class="read-button">
							<a class="read-button-a see-more" href="#title-port"
								>See More
							</a>
						</button>
					</div>
				</div>

			<main>
				<div id="delete-account" class="delete-card hide-delete">
					<div class="delete">
						<div class="delete-group">
							<div class="delete-icon">
								<img
									src="../images/Group 20.svg"
									alt="smartphone"
									id="icon-delete"
								/>
							</div>
							<h3>Delete account?</h3>
							<div class="title-delete">
								You will permanently lose:
							</div>
							<p class="info-delete">- Your profile</p>
							<p class="info-delete">- Requests</p>
							<div class="bnt-delete">
								<button id="btn-white">
									Cancel
								</button>
								<button
									id="delete-account-button"
									onclick="window.location.href='../php/deleteAccount.php'"
								>
									Delete Account
								</button>
							</div>
						</div>
					</div>
				</div>

				<img
					class="content-img img-fluid"
					src="../images/main-content.svg"
					id="img-main"
					alt="Homem usando computador"
					ondragstart="return false;"
				/>
			</main>

			<div id="business" class="business">
				<p class="title-option">
					Select the best option for <br />
					your business
				</p>

				<div id="orangeAlert" class="alert hide">
					<div id="orangeCircle" class="circle hide">
						<span
							id="orangeCheck"
							class="fas fa-exclamation-circle hide"
						></span>
					</div>
					<span id="orangeTitle" class="msg-title hide">
						Alert!<br
					/></span>
					<span id="orangeMessage" class="msg hide">
						You must be logged to complete the action
						previous</span>
					>
				</div>
				<div class="wrapper">
					<div class="card-grup">
						<div class="card">
							<div class="avatar">
								<img
									src="../images/smartphone.svg"
									alt="smartphone"
								/>
							</div>
							<h3>Mobile</h3>
							<div class="value">
								12x
								<p class="reverse-title">R$499</p>
							</div>
							<p class="price-text">in cash R$ 5500</p>
							<p class="info-text">
								Have a unique mobile experience, increasing
								sales of your business.
							</p>
							<button
								onclick="window.location.href='./form-mobile.html'"
							>
								Contact Us
							</button>
						</div>
						<div class="card-bigger">
							<div class="card">
								<div class="avatar">
									<img
										src="../images/monitorsmartphone.svg"
										alt="monitorsmartphone"
									/>
								</div>
								<h3>Web & <br />Mobile</h3>
								<div class="value">
									12x
									<p class="reverse-title">R$700</p>
								</div>
								<p class="price-text">in cash R$ 8300</p>
								<p class="info-text">
									Join your web and mobile experience in one
									package, boosting your sales.
								</p>
								<button
									class="btn-blue"
									onclick="window.location.href='./form-web-mobile.php'"
								>
									Contact Us
								</button>
							</div>
						</div>
						<div class="card">
							<div class="avatar">
								<img src="../images/monitor.svg" alt="monitor" />
							</div>
							<h3>Web</h3>
							<div class="value">
								12x
								<p class="reverse-title">R$299</p>
							</div>
							<p class="price-text">in cash R$ 3200</p>
							<p class="info-text">
								Get your website and show a
								professional service for your customers.
							</p>
							<button
								onclick="window.location.href='./form-web.html'"
							>
								Contact
							</button>
						</div>
					</div>
				</div>

				<h1 id="title-port" class="title-port">Our projects</h1>
				<div class="toolbar mb2 mt2">
					<button class="btn fil-cat" href="" data-rel="all">
						all
					</button>
					<button class="btn fil-cat" data-rel="web">Web</button>
					<button class="btn fil-cat" data-rel="flyers">
						Mobile
					</button>
				</div>

				<div id="portfolio">
					<div class="tile scale-anm web all">
						<img src="../images/HomeBe-the-hero.png" alt="" />
					</div>
					<div class="tile scale-anm bcards all">
						<img src="" alt="" />
					</div>
					<div class="tile scale-anm web all">
						<img src="../images/HomeEcolata.png" alt="" />
					</div>
					<div class="tile scale-anm web all">
						<img src="../images/HomeProffy.png" alt="" />
					</div>
					<div class="tile scale-anm flyers all">
						<img src="../images/mobileEcoleta.png" alt="" />
					</div>
					<div class="tile scale-anm bcards all">
						<img src="" alt="" />
					</div>
					<div class="tile scale-anm flyers all">
						<img src="../images/MobileBe-thehoro.png" alt="" />
					</div>
					<div class="tile scale-anm flyers all">
						<img src="../images/flyeritu.png" alt="" />
					</div>
					<div class="tile scale-anm web all">
						<img src="" alt="" />
					</div>
					<div class="tile scale-anm flyers all">
						<img src="" alt="" />
					</div>
					<div class="tile scale-anm web all">
						<img src="" alt="" />
					</div>
				</div>
				<div style="clear: both;"></div>

				<p id="history" class="title-history">
					A little more about the history of <br />
					our company
				</p>
				<p class="about-history">
					Founded in 2019, Infinity Tech Us is dedicated to the
					development of web, mobile and desktop applications. Our
					philosophy is to enable customers to use technology at
					favor of their businesses, thus providing better
					results and with less effort, through automation.
					We seek to offer our customers a lot of performance
					and tranquility when closing a deal with us.
				</p>

				<img
					class="about-image img-fluid"
					src="../images/person.svg"
					alt="pessoinhas"
					ondragstart="return false;"
				/>

				<footer class="page-footer">
					<div class="container" id="footer">
						<div
							class="row text-center d-flex justify-content-center pt-5 mb-3"
						>
							<div class="grow col-md-3 mb-2">
								<h6 class="text-uppercase">
									<a href="#navigation-sticky">Home</a>
								</h6>
							</div>

							<div class="grow col-md-3 mb-2">
								<h6 class="text-uppercase">
									<a href="#business">Prices</a>
								</h6>
							</div>

							<div class="grow col-md-3 mb-2">
								<h6 class="text-uppercase">
									<a href="#title-port">Portifolio</a>
								</h6>
							</div>

							<div class="grow col-md-3 mb-2">
								<h6 class="text-uppercase">
									<a id="about-a" href="#history">About us</a>
								</h6>
							</div>
						</div>

						<hr class="rgba-white-light" style="margin: 10 100%;" />

						<br />

						<div class="row text-center justify-content-center">
							<a
								class="fb-ic grow col-md-2 mb-2"
								href="https://www.facebook.com/Infinity-Tech-Us-105581197550643
									"
								target="_blank"
							>
								<picture>
									<source
										srcset="../images/facebook-white.svg"
										media="(prefers-color-scheme: dark)"
									/>
									<img
										src="../images/facebook-icon.svg"
										alt="facebook"
										ondragstart="return false;"
									/>
								</picture>
							</a>

							<a
								class="Em-ic grow col-md-2 mb-2"
								href="mailto:itu.etec@gmail.com"
								target="_blank"
							>
								<picture>
									<source
										srcset="../images/mail-white.svg"
										media="(prefers-color-scheme: dark)"
									/>
									<img
										src="../images/email-icon.svg"
										alt="email"
										ondragstart="return false;"
									/>
								</picture>
							</a>

							<a
								class="li-ic grow col-md-2 mb-2"
								href="https://www.linkedin.com/in/infinity-tech-us-266980195/
									"
								target="_blank"
							>
								<picture>
									<source
										srcset="../images/linkedin-white.svg"
										media="(prefers-color-scheme: dark)"
									/>
									<img
										src="../images/linkedin-icon.svg"
										alt="linkedin"
										ondragstart="return false;"
									/>
								</picture>
							</a>

							<a
								class="ins-ic grow col-md-2 mb-2"
								href="https://www.instagram.com/itu_it/?hl=sr"
								target="_blank"
							>
								<picture>
									<source
										srcset="../images/instagram-white.svg"
										media="(prefers-color-scheme: dark)"
									/>
									<img
										src="../images/instagram-icon.svg"
										alt="instagram"
										ondragstart="return false;"
									/>
								</picture>
							</a>
						</div>

						<br />

						<div class="footer-copyright text-center py-1">
							<a>Copyright © 2020 - All Rights Reserved </a>
						</div>

						<script>
							feather.replace();
						</script>

						<script src="../scripts/main.js"></script>
						<script src="../scripts/partials/navbar.js"></script>
						<script src="https://cdn.jsdelivr.net/npm/typeit@7.0.4/dist/typeit.min.js"></script>
						<script>
							new TypeIt("#subtitle", {
								speed: 30
							})
								.go()
								.reset();
						</script>
					</div>
				</footer>
			</div>
		</div>
	</body>
</html>

<!DOCTYPE html>
<html lang="pt_br">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>Track Orders - Infinity Tech</title>
		<link rel="icon" href="../images/logo-icon.svg" />
		<link rel="stylesheet" href="../styles/vendors/reset.css" />
		<link rel="stylesheet" href="../styles/vendors/bootstrap.css" />
		<link rel="stylesheet" href="../styles/partials/orders.css" />
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
	<body >
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

		<main>
			<div class="search">
				<h2>Track Orders</h2>
				<div class="search-container">
					<i data-feather="search" id="search-icon"></i>
					<form class="form-group" role="search" method="get" action="my-orders.php">
						<input
							class="form-control"
							type="text"
							id="search"
							name="busca"
							value=""
						/>
					</form>
				</div>
			</div> 

			<div class="data-grid">
				<table class="table">
					<thead class="thead-dark">
						<tr>
						<th scope="col"> </th>
						<th scope="col">Type</th>
						<th scope="col">Description</th>
						<th scope="col">Status</th>
						</tr>
					</thead>
					<tbody>
					<?php
							session_start();
							include '../php/connection.php';
							
							$userID = $_SESSION['ID'];
							$keyword = $_GET['busca'];
							$result = getConnection() -> query("SELECT order_type, order_desc, order_status, fk_user_id, order_id FROM infityphp.tbl_order where order_type like concat ('%','$keyword','%') or order_desc like concat ('%', '$keyword', '%') or order_status like concat('%','$keyword','%');");
							while ($row = $result -> fetch(PDO::FETCH_ASSOC)) {
								echo '<tr>'.'<th scope="row">'.'</th>'."<td>".$row['order_type']."</td><td>".$row['order_desc']."</td><td>".$row['order_status']."</td></tr>";
							}
						?>
					</tbody>
				</table>
			</div>

		</main>

		<script>
			feather.replace();
		</script>
	</body>
</html>

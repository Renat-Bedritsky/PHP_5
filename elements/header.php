<?php require_once $_SERVER["DOCUMENT_ROOT"].'/treehouse/data/pageData.php'; ?>

<!DOCTYPE html>
<html lang="ru">
<head>

	<meta charset="UTF-8">
	<title>Treehouse</title>
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Encode+Sans:wght@400;700;900&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="/treehouse/css/style.css">
	<link rel="stylesheet" href="/treehouse/css/media.css">
   
</head>
<body>

<div class="window">

	<header class="header">
		<div class="container">
			<div class="header_wrapper">
	
				<div class="header_logo">
					<a class="logo" href="#"><img src="/treehouse/img/logo.png" alt="logo"></a>
					<p>Treehouse</p>
				</div>
		
				<div class="header_nav">
					<button class="header_nav_toggle"><label for="header_nav_toggle"></label></button>
					<input type="checkbox" id="header_nav_toggle">
					<ul>
						<?php if (!empty($arrNav)):

						foreach($arrNav as $key => $value): ?>
						<li><a href="/treehouse/<?= $key ?>"><?= $value ?></a></li>
						<?php endforeach;
						
						endif; ?>
					</ul>
				</div>
			</div>
		</div>
	</header>
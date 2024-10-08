<!DOCTYPE html>
<html lang="ru">
<head>
	<title><?php echo $title?></title>
	<meta charset="UTF-8">
	<meta name="format-detection" content="telephone=no">
	<link rel="stylesheet" href="/public/css/style.min.css">
	<script src="/public/js/vendors.min.js"></script>
	<script src="/public/js/jquery.maskedinput.min.js"></script>
	<script src="/public/js/jquery.validate.min.js"></script>
	
	<link rel="shortcut icon" href="favicon.ico">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
	
	<div class="wrapper">
		<header class="header">
			<div class="header__content -container">
				<div class="header__logo -desktop">
					<a href="/">Admin &lt;/&gt;</a>
				</div>

				<div class="header__menu -mobile">
					<span></span>
					<span></span>
					<span></span>
				</div>
				<div class="header__account">
					<div class="header__photo">
						<picture>
							<source srcset="/public/img/user.webp" type="image/webp"><img src="/public/img/user.png" alt="">
							</picture>
						</div>
<!-- 						<div class="header__logout">
							<h3>Sign Out</h3>
						</div>
					-->					</div>
				</div>
			</header>
			<div class="sidebar">
				<div class="sidebar__logo -mobile -container">
					<a href="/">Admin &lt;/&gt;</a>
				</div>
				<div class="sidebar__close -mobile -container">
					<picture><source srcset="/public/img/icons/left.webp" type="image/webp"><img src="/public/img/icons/left.png" alt=""></picture>
					</div>

					<div class="sidebar__content">
						<div class="sidebar__box">
							<div class="sidebar__title -container">
								<picture><source srcset="/public/img/icons/leads.webp" type="image/webp"><img class="sidebar__icon" src="/public/img/icons/leads.png" alt=""></picture>
									<p>Leads</p>
								</div>
								<div class="sidebar__items">
									<a class="sidebar__item <?php if( $title ==='leads/alkostop'){echo '-active';} ?>" href="/leads/alkostop">alkostop</a>
									<a class="sidebar__item <?php if( $title ==='leads/alkozeroks'){echo '-active';} ?>" href="/leads/alkozeroks">alkozeroks</a>
									<a class="sidebar__item <?php if( $title ==='leads/artonin'){echo '-active';} ?>" href="/leads/artonin">artonin</a>
									<a class="sidebar__item <?php if( $title ==='leads/artroforce'){echo '-active';} ?>" href="/leads/artroforce">artroforce</a>
									<a class="sidebar__item <?php if( $title ==='leads/articulat'){echo '-active';} ?>" href="/leads/articulat">articulat</a>
									<a class="sidebar__item <?php if( $title ==='leads/imosteon'){echo '-active';} ?>" href="/leads/imosteon">imosteon</a>
									<a class="sidebar__item <?php if( $title ==='leads/ketodieta'){echo '-active';} ?>" href="/leads/ketodieta">ketodieta</a>
									<a class="sidebar__item <?php if( $title ==='leads/ketoform'){echo '-active';} ?>" href="/leads/ketoform">ketoform</a>
									<a class="sidebar__item <?php if( $title ==='leads/ketogenetic'){echo '-active';} ?>" href="/leads/ketogenetic">ketogenetic</a>
									<a class="sidebar__item <?php if( $title ==='leads/ketolight'){echo '-active';} ?>" href="/leads/ketolight">ketolight</a>
									<a class="sidebar__item <?php if( $title ==='leads/extraslim'){echo '-active';} ?>" href="/leads/extraslim">extraslim</a>
									<a class="sidebar__item <?php if( $title ==='leads/neyrosistema'){echo '-active';} ?>" href="/leads/neyrosistema">neyrosistema</a>
									<!-- new -->
									<a class="sidebar__item <?php if( $title ==='leads/ketoform2'){echo '-active';} ?>" href="/leads/ketoform2">ketoform2</a>
									<a class="sidebar__item <?php if( $title ==='leads/ketopills'){echo '-active';} ?>" href="/leads/ketopills">ketopills</a>
									<a class="sidebar__item <?php if( $title ==='leads/ketoburn'){echo '-active';} ?>" href="/leads/ketoburn">ketoburn</a>
									<a class="sidebar__item <?php if( $title ==='leads/lipozene'){echo '-active';} ?>" href="/leads/lipozene">lipozene</a>
									<a class="sidebar__item <?php if( $title ==='leads/garcinia'){echo '-active';} ?>" href="/leads/garcinia">garcinia</a>
									<a class="sidebar__item <?php if( $title ==='leads/ketobhb'){echo '-active';} ?>" href="/leads/ketobhb">ketobhb</a>
									<a class="sidebar__item <?php if( $title ==='leads/ketodetox'){echo '-active';} ?>" href="/leads/ketodetox">ketodetox</a>
									<a class="sidebar__item <?php if( $title ==='leads/ketogeneticultra'){echo '-active';} ?>" href="/leads/ketogeneticultra">ketogeneticultra</a>
									<a class="sidebar__item <?php if( $title ==='leads/ketodietaplus'){echo '-active';} ?>" href="/leads/ketodietaplus">ketodietaplus</a>
									<a class="sidebar__item <?php if( $title ==='leads/extraslim2'){echo '-active';} ?>" href="/leads/extraslim2">extraslim2</a>

								</div>
							</div>
							<div class="sidebar__box">
								<div class="sidebar__title -container">
									<picture><source srcset="/public/img/icons/search.svg" type="image/webp"><img class="sidebar__icon" src="/public/img/icons/search.svg" alt=""></picture>
										<p>Codes</p>
									</div>
									<div class="sidebar__items">
										<a class="sidebar__item <?php if( $title ==='codes/alkostop'){echo '-active';} ?>" href="/codes/alkostop">alkostop</a>
										<a class="sidebar__item <?php if( $title ==='codes/alkozeroks'){echo '-active';} ?>" href="/codes/alkozeroks">alkozeroks</a>
										<a class="sidebar__item <?php if( $title ==='codes/artonin'){echo '-active';} ?>" href="/codes/artonin">artonin</a>
										<a class="sidebar__item <?php if( $title ==='codes/artroforce'){echo '-active';} ?>" href="/codes/artroforce">artroforce</a>
										<a class="sidebar__item <?php if( $title ==='codes/articulat'){echo '-active';} ?>" href="/codes/articulat">articulat</a>
										<a class="sidebar__item <?php if( $title ==='codes/imosteon'){echo '-active';} ?>" href="/codes/imosteon">imosteon</a>
										<a class="sidebar__item <?php if( $title ==='codes/ketodieta'){echo '-active';} ?>" href="/codes/ketodieta">ketodieta</a>
										<a class="sidebar__item <?php if( $title ==='codes/ketoform'){echo '-active';} ?>" href="/codes/ketoform">ketoform</a>
										<a class="sidebar__item <?php if( $title ==='codes/ketogenetic'){echo '-active';} ?>" href="/codes/ketogenetic">ketogenetic</a>
										<a class="sidebar__item <?php if( $title ==='codes/ketolight'){echo '-active';} ?>" href="/codes/ketolight">ketolight</a>
										<a class="sidebar__item <?php if( $title ==='codes/extraslim'){echo '-active';} ?>" href="/codes/extraslim">extraslim</a>
										<a class="sidebar__item <?php if( $title ==='codes/neyrosistema'){echo '-active';} ?>" href="/codes/neyrosistema">neyrosistema</a>
										<!-- new -->
										<a class="sidebar__item <?php if( $title ==='codes/ketoform2'){echo '-active';} ?>" href="/codes/ketoform2">ketoform2</a>
										<a class="sidebar__item <?php if( $title ==='codes/ketopills'){echo '-active';} ?>" href="/codes/ketopills">ketopills</a>
										<a class="sidebar__item <?php if( $title ==='codes/ketoburn'){echo '-active';} ?>" href="/codes/ketoburn">ketoburn</a>
										<a class="sidebar__item <?php if( $title ==='codes/lipozene'){echo '-active';} ?>" href="/codes/lipozene">lipozene</a>
										<a class="sidebar__item <?php if( $title ==='codes/garcinia'){echo '-active';} ?>" href="/codes/garcinia">garcinia</a>
										<a class="sidebar__item <?php if( $title ==='codes/ketobhb'){echo '-active';} ?>" href="/codes/ketobhb">ketobhb</a>
										<a class="sidebar__item <?php if( $title ==='codes/ketodetox'){echo '-active';} ?>" href="/codes/ketodetox">ketodetox</a>
										<a class="sidebar__item <?php if( $title ==='codes/ketogeneticultra'){echo '-active';} ?>" href="/codes/ketogeneticultra">ketogeneticultra</a>
										<a class="sidebar__item <?php if( $title ==='codes/ketodietaplus'){echo '-active';} ?>" href="/codes/ketodietaplus">ketodietaplus</a>
										<a class="sidebar__item <?php if( $title ==='codes/extraslim2'){echo '-active';} ?>" href="/codes/extraslim2">extraslim2</a>
									</div>
								</div>
							</div>
						</div>
						<main class="page">
							<div class="page__content">

								<?php echo $content; ?>

							</div>
						</main>
						<div class="shadow">
						</div>
						<footer class="footer">
							<div class="footer__content _container">

							</div>
						</footer>
					</div>

					<script src="/public/js/app.min.js"></script>
				</body>
				</html>
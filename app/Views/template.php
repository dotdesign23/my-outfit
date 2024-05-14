<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="/css/style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" />
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=DM+Serif+Display:ital@0;1&family=Inria+Serif:ital,wght@0,300;0,400;0,700;1,300;1,400;1,700&family=Inter:wght@100..900&display=swap" rel="stylesheet">
	<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
	<title><?= $this->renderSection('page_title') ?></title>
</head>
<body>
	<header>
		<div class="logo">
			<img src="/img/logo.jpg" alt="Logo">
		</div>
		<nav>
			<a <?php if ($page_name == 'home'): ?> class="active" <?php endif; ?> href="/">BERANDA</a>
			<a <?php if ($page_name == 'recommendation'): ?> class="active" <?php endif; ?> href="/recommendation">REKOMENDASI</a>
		</nav>
		<form method="get" action="/collection" class="search_form">
			<input type="text" name="search">
			<button type="submit">
				<i class="fa fa-search"></i>
			</button>
		</form>
	</header>
	<main>
		<?= $this->renderSection('content'); ?>
	</main>
	<footer>
		<h4 class="contact-heading">CONTACT</h4>
		<div class="contact">
			<a href="#" class="contact-link">
				<i class="fa fa-phone"></i> +6282234678908
			</a>
			<a href="#" class="contact-link">
				<i class="fab fa-instagram"></i> my_outfit
			</a>
		</div>
	</footer>
</body>
</html>
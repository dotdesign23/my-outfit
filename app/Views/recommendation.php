<?= $this->extend('template') ?>

<?= $this->section('page_title') ?>
	RECOMMENDATION - MY OUTFIT
<?= $this->endsection() ?>

<?= $this->section('content') ?>
	<h2 class="heading">REKOMENDASI OUTFIT</h2>
	<div class="product1">
		<?php foreach($recommendations as $recommendation): ?>
			<div class="product1-box">
				<h4 class="product1-title"><?= $recommendation['color'] . ' ' . $recommendation['name'] ?></h4>
				<div class="product1-detail">
					<div class="product1-image">
						<img src="<?= $recommendation['image'] ?>" alt="Product">
					</div>
					<p class="product1-description"><?= $recommendation['description'] ?></p>
				</div>
			</div>
		<?php endforeach; ?>
	</div>
<?= $this->endsection() ?>

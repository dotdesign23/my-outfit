<?= $this->extend('template') ?>

<?= $this->section('page_title') ?>
	COLLECTION - MY OUTFIT
<?= $this->endsection() ?>

<?= $this->section('content') ?>
	<h2 class="display">Top Outfit</h2>
	<div class="product2 product2-nowrap">
		<?php foreach($products_top as $product): ?>
			<div class="product2-box">
				<div class="product2-image">
					<img src="<?= $product['image'] ?>" alt="Product">
				</div>
				<span class="product2-category"><?= $product['name'] ?></span>
				<h4 class="product2-title"><?= $product['color'] ?></h4>
			</div>
		<?php endforeach; ?>
	</div>
	<h2 class="display">New Outfit</h2>
	<div class="product2 product2-nowrap">
		<?php foreach($products_newest as $product): ?>
			<div class="product2-box">
				<div class="product2-image">
					<img src="<?= $product['image'] ?>" alt="Product">
				</div>
				<span class="product2-category"><?= $product['name'] ?></span>
				<h4 class="product2-title"><?= $product['color'] ?></h4>
			</div>
		<?php endforeach; ?>
	</div>
<?= $this->endsection() ?>

<?= $this->extend('template') ?>

<?= $this->section('page_title') ?>
	HOME - MY OUTFIT
<?= $this->endsection() ?>

<?= $this->section('content') ?>
	<div class="display-container">
		<h2 class="display">MY OUTFIT</h2>
		<p class="display-description">My Outfit adalah web yang merekomendasikan outfit-outfit para wanita yang formal, dimana outfit tersebut dapat mencerminkan kesan profesional sopan dan elegan</p>
	</div>
	<div class="showcase">
		<div class="showcase-image">
			<img src="/img/product/Rectangle 2.png" alt="">
		</div>
		<div class="showcase-image showcase-image-center">
			<img src="/img/product/Rectangle 4.png" alt="">
		</div>
		<div class="showcase-image">
			<img src="/img/product/Rectangle 3.png" alt="">
		</div>
	</div>
	<div class="display-container display-container-horizontal">
		<h2 class="display">TOP OUTFIT</h2>
		<p class="display-description">Top Outfit biasanya dapat  mencakup berbagai pilihan atasan yang dapat dipadukan dengan berbagai bawahan ,sepatu, dan aksesori yang tepat untuk menciptakan outfit yang sempurna <br><a href="/collection" class="display-link">See all collection <i class="fa fa-chevron-right"></i></a></p>
	</div>
	<div class="product2">
		<?php foreach($products_top as $product): ?>
			<div class="product2-box">
				<div class="product2-image">
					<img src="<?= $product['image'] ?>" alt="Product">
				</div>
				<h4 class="product2-title"><?= $product['color'] . ' ' . $product['name'] ?></h4>
			</div>
		<?php endforeach; ?>
	</div>
	<div class="display-container display-container-horizontal">
		<h2 class="display">NEW OUTFIT</h2>
		<p class="display-description">New Outfit adalah outfit outfit terkini yang dapat mencocokkan warna warna yang elegan sehingga dapat membuat kita menjadi percaya diri,dalam setiap waktu  <br><a href="/collection" class="display-link">See all collection <i class="fa fa-chevron-right"></i></a></p>
	</div>
	<div class="product2">
		<?php foreach($products_newest as $product): ?>
			<div class="product2-box">
				<div class="product2-image">
					<img src="<?= $product['image'] ?>" alt="Product">
				</div>
				<h4 class="product2-title product2-title-lg"><?= $product['color'] . ' ' . $product['name'] ?></h4>
			</div>
		<?php endforeach; ?>
	</div>
<?= $this->endsection() ?>

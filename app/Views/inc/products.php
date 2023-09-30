<section id="featuredProduct">
<h3 class="title"><span>Latest Products</span></h3>
<div id="myCarouselOne" class="carousel slide">
	<!-- Dot Indicators -->
	<div class="carousel-inner">
	<div class="item active">
		<div class="row">

            <?php foreach ($products as $product): ?>

			<div class="span3">
				<div class="well well-small">
					
					<span class="priceTag"> <br>
						<span class="newPrice"><small>$</small><?= $product['price']?></span>
					</span>
                    <span class="saleTag tagRight"></span>
					<a class="displayStyle" href="#"><img src="<?= $product['image']?>" alt="#"/></a>
					<h4><?= $product['name']?></h4>
                    <h5><?= $product['category']?></h5>
                    <h6><?= $product['description']?></h6>
                    <h6>Quantity:<?= $product['qty']?></h6>
					<p>
						<a class="btn btn-warning" href="#" > Add to <i class="icon-shopping-cart"></i></a> 
						<a class="btn" href="/detail">view details</a>
					</p>
					<p><span class="price"><small>$</small><?= $product['price']?></span></p>				
				</div>
			</div>
            <?php endforeach; ?>		
		</div>
	</div>
	</div>
		<a class="left carousel-control" href="#myCarouselOne" data-slide="prev">‹</a>
		<a class="right carousel-control" href="#myCarouselOne" data-slide="next">›</a>
</div>
<section id="mainBody">
<div class="container">
<h3 class="title"><span>ITEM DETAILS</span></h3>
<div class="row">
<div class="span6">
<div id="detailViewCarousel" class="carousel slide">
  <div class="displayStyle">
  <ol class="carousel-indicators">
    <li data-target="#detailViewCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#detailViewCarousel" data-slide-to="1"></li>
    <li data-target="#detailViewCarousel" data-slide-to="2"></li>
    <li data-target="#detailViewCarousel" data-slide-to="3"></li>
    <li data-target="#detailViewCarousel" data-slide-to="4"></li>
    <li data-target="#detailViewCarousel" data-slide-to="5"></li>
  </ol> 
  <!-- Carousel items -->
  <?php foreach ($products as $product): ?>
  <div class="carousel-inner">
    <div class="active item"><img src="<?= $product['image']?>" alt="#" /></div>
  </div>
  <!-- Carousel nav -->
  <a class="carousel-control left" href="#detailViewCarousel" data-slide="prev">&lsaquo;</a>
  <a class="carousel-control right" href="#detailViewCarousel" data-slide="next">&rsaquo;</a>
  </div>
</div>
</div>


<div class="span6">
	<div class="promoDetail">
	<h1><?= $product['name']?></h1>
	  <p><?= $product['category']?></p>
	  <br/>
	<ul>
        <h5>Product Description:</h5>
		<li><?= $product['description']?></li>
	</ul>
	<h3>Price: <?= $product['price']?> </h3>
    <h4>Quantity: <?= $product['qty']?></h4>
	<p><i class="icon-star"></i> <i class="icon-star"></i> <i class="icon-star"></i> <i class="icon-star-empty"></i></p>
	<form class="form-horizontal qtyFrm">
	  <div class="control-group">
		<div class="">
			<input type="number" class="span1" placeholder="Qty."> 
		</div>
	  </div>
	</form>
	  <a class="btn btn-warning" href="checkout.php"> ADD TO CART NOW </a>
	</div>
<?php endforeach; ?>		
	<br>
	<div class="">
		<strong>SHIPPING INFORMATIONS</strong>
		<p>If you are looking for upgrade your website for mobiles and tablets, Even if you do not have any website. </p> 
	</div>
</div>
<div class="span12">
<hr class="soften"/>
<h3 class="title"><span>Products Details</span></h3>
<h3>How do I send my items by  One-Day, Express or Evening Delivery?</h3>
<p>
Add the item to your Shopping Basket and proceed to the checkout<br>
Select an eligible address for the delivery option you've chosen. The delivery options available at checkout will be valid for your item and address.<br>
For your order to qualify for these delivery options, your credit card must be successfully charged before the deadline displayed on the item's product detail page and in the checkout.<br>
If your order contains items that aren't eligible for one of these delivery options, you won't be able to select it.
</p>
<br>
<h3>How does One-Day, Express or Evening Delivery work with 1-Click ordering?</h3>
The default delivery speed for 1-Click orders is First Class. However, if an item you've ordered via 1-Click is eligible for One-Day, Express or Evening delivery and the ordering deadline has not yet passed, you can change your delivery option after placing the 1-Click order.

<br>
<h3>What if I've chosen One-Day, Express or Evening delivery and my order doesn't arrive on time?</h3>
If you order eligible items before the order deadline and choose one of these delivery options at the checkout, we'll dispatch your items to ensure they arrive on or before the time or day (depending on the option chosen) advertised on the product's detail page and in the checkout process. If this doesn't happen we'll refund your delivery fee.
<br>

<h3>How do I qualify for a refund?</h3>
For your order to qualify for a refund of your delivery fee, your payment card must be successfully charged before the deadline displayed on the product detail page. During the checkout process, if for any reason your items no longer qualify for One-Day, Express or Evening delivery (for example, if the order deadline passes or if inventory runs out), you won't be eligible for a refund of your delivery fee if your order is late.
<br>
A signature may be required for some deliveries. If this is the case, an attempted delivery on or before the delivery date means we've delivered on time and you won't be eligible for a refund of your delivery fee.
<br>
A delivery appointment may be required for some deliveries. If this is the case, an offer by the carrier of a delivery appointment on or before the delivery date means we've delivered on time.
<br>
If your order contains other items that aren't eligible for the delivery option you selected, and you don't check the box indicating you'd like us to "dispatch items as they become available", you won't be eligible for a refund of your delivery fee if the order is late.
<br>

<h3>Terms and Conditions</h3>
The above applies only to items that include a message about One-Day, Express or Evening delivery below the availability information on their product detail page. If the item's product detail page doesn't include this message, the item isn't eligible for  a refund of your delivery fee if the order is late.
The above applies only to products sold by Amazon via our website www.amazon.co.uk. It doesn't apply to any products purchased at Amazon.com, Amazon.de, Amazon.fr, Amazon.co.jp, Amazon.ca, Amazon.it, Amazon.es or any other website operated by Amazon, its affiliates or third-party merchants accessible from our site (including, for example, Electronics featured merchants). The above doesn't apply to any products purchased through Amazon Marketplace.
We won't refund delivery costs in the event of service interruptions or failures caused by events beyond Amazon's control.
Amazon reserves the right to change or discontinue any delivery option at our discretion.

</div>
</div>
<!-- CEK LOGIN DULU -->
<?php 	
include 'process/koneksi.php';
session_start();
if (!isset($_SESSION['login'])) {
	header("Location: form-login.php");
}

$qmeja = mysqli_query($con, "SELECT * from tb_meja");
$qmakanan = mysqli_query($con, "SELECT * from tb_menu where kategori = 1");
$qminuman = mysqli_query($con, "SELECT * from tb_menu where kategori = 2");
$qcamilan = mysqli_query($con, "SELECT * from tb_menu where kategori = 3");
$qext = mysqli_query($con, "SELECT * from tb_menu where kategori = 4");

 ?>
	<!-- Disini bikin fitur cek login -->
<!-- END CEK LOGIN -->
<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Zulfa Restaurant</title>
	<link rel="stylesheet" type="text/css" href="asset/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="asset/css/manual.css">
	<script src="asset/js/jquery.js"></script>
	<script src="asset/js/bootstrap.js"></script>
	<style>

	</style>
</head>
<body>
	<main>
		<section id="navbar">
			<nav class="navbar navbar-default">
				<div class="container">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#MyNavBar">
							<span class="icon-bar"></span>
						</button>
						<a class="navbar-brand" href="">Warung Bebek Kemang</a>
					</div>
					<div class="collapse navbar-collapse" id="MyNavBar">
						<ul class="nav navbar-nav navbar-right">
							<li><a class="glyphicon glyphicon-user" href=""> User</a></li>
						</ul>
					</div>
				</div>
			</nav>
		</section>

		<!-- 
		Section 1
		 -->
		<section id="first-page">
			<div class="container">
				<div class="col-md-4">
					<h2>Please Choose the Table First</h2>
					<hr>
					<h3>Harap pilih meja terlebih dahulu</h3>
					<ul class="list-group">
					<?php 	
					while ($meja = mysqli_fetch_array($qmeja)) { ?>
						<a href="#" class="list-group-item list-group-item-action meja" data-id="<?php echo $meja['id_meja']?>" onclick="return false;" style="margin-bottom: 3px">
						    <?php echo $meja['nm_meja']?>
						</a>
					<?php 	} ?>
					</ul>

					 <input type="hidden" name="meja" id="id_meja" value=""> 

					<!-- <button class="btn btn-primary btn-lg select-tabel" onclick="return false;">Select Meja</button> -->
					<!-- <button name="select-tabel" value="meja-2" class="btn btn-primary btn-lg select-tabel" >Meja 02</button>
					<button name="select-tabel" value="meja-3" class="btn btn-primary btn-lg select-tabel" >Meja 03</button>
					<button name="select-tabel" value="meja-4" class="btn btn-primary btn-lg select-tabel" >Meja 04</button>	 -->			
				</div>
			</div>
		</section>
		
		<!-- 
		Section 2
		 -->
		<section id="second-page" style="display: none">
			<div class="container">
				<div class="nav text-right">
					<div style="cursor: pointer;">
				        <span class="glyphicon glyphicon-shopping-cart my-cart-icon">
				        	<span class="badge badge-notify my-cart-badge"></span>
				        </span>
				     </div>
				</div>
				<div class="col-md-12">
					<ul class="nav nav-tabs" id="myTab" role="tablist">
					 	<li class="nav-item">
					    	<a class="nav-link active" id="makanan-tab" data-toggle="tab" href="#makanan" role="tab" aria-controls="makanan" aria-selected="true">Makanan</a>
					  	</li>
					  	<li class="nav-item">
					    	<a class="nav-link" id="minuman-tab" data-toggle="tab" href="#minuman" role="tab" aria-controls="minuman" aria-selected="false">Minuman</a>
					  	</li>
					  	<li class="nav-item">
					    	<a class="nav-link" id="cemilan-tab" data-toggle="tab" href="#cemilan" role="tab" aria-controls="cemilan" aria-selected="false">Cemilan</a>
					  	</li>
					</ul>

					<div class="tab-content" id="myTabContent">
					  	<div class="tab-pane fade in active" id="makanan" role="tabpanel" aria-labelledby="makanan-tab" >
						<?php 	while ($makanan = mysqli_fetch_array($qmakanan)) { ?>
					  		<div class="col-xs-12" style="padding-top:5; margin-top: 5mm" >
					  			<div class="col-xs-4">	
					  				<img src="http://localhost/skripshit/cms/images/uploads/<?php echo $makanan['img_url'] ?>" class="img-responsive" src="#" alt="Contoh" style="width: 100%">
					  			</div>
					  			<div class="col-xs-8">
					  				<h4><?php echo $makanan['nm_menu'] ?></h4>	
					  				<h5>IDR <?php echo $makanan['harga'] ?></h5>
					  				<p><?php echo $makanan['desc_menu'] ?></p>
					  				<div class="col-xs-2" style="padding: 1px">
					  					<input type="number" id="<?php echo $makanan['id_menu'] ?>" name="qty" class="form-control qty">
					  				</div>
					  				<div class="col-xs-4" style="padding-left: 1px">
					  					<button class="btn btn-primary my-cart-btn" onclick="return false;" data-id="<?php echo $makanan['id_menu'] ?>" data-name="<?php echo $makanan['nm_menu'] ?>" data-summary="summary 1" data-price="<?php echo $makanan['harga'] ?>">Add</button>
					  				</div>
					  			</div>
					  		</div>
					  	<?php 	} ?>
					  	</div>

					  	<div class="tab-pane fade" id="minuman" role="tabpanel" aria-labelledby="minuman-tab">
					  		<?php 	while ($minuman = mysqli_fetch_array($qminuman)) { ?>
					  		<div class="col-xs-12" style="padding-top:5; margin-top: 5mm" >
					  			<div class="col-xs-4">	
					  				<img src="http://localhost/skripshit/cms/images/uploads/<?php echo $minuman['img_url'] ?>" class="img-responsive" src="#" alt="Contoh" style="width: 100%">
					  			</div>
					  			<div class="col-xs-8">
					  				<h4><?php echo $minuman['nm_menu'] ?></h4>	
					  				<h5>IDR <?php echo $minuman['harga'] ?></h5>
					  				<p><?php echo $minuman['desc_menu'] ?></p>
					  				<div class="col-xs-2" style="padding: 1px">
					  					<input type="number" id="<?php echo $minuman['id_menu'] ?>" name="qty" class="form-control qty">
					  				</div>
					  				<div class="col-xs-4" style="padding-left: 1px">
					  					<button class="btn btn-primary my-cart-btn" onclick="return false;" data-id="<?php echo $minuman['id_menu'] ?>" data-name="<?php echo $minuman['nm_menu'] ?>" data-summary="summary 1" data-price="<?php echo $minuman['harga'] ?>">Add</button>
					  				</div>
					  			</div>
					  		</div>
					  		<?php 	} ?>
					  	</div>
					  	<div class="tab-pane fade" id="cemilan" role="tabpanel" aria-labelledby="cemilan-tab">
					  		<?php 	while ($camilan = mysqli_fetch_array($qcamilan)) { ?>
					  		<div class="col-xs-12" style="padding-top:5; margin-top: 5mm" >
					  			<div class="col-xs-4">	
					  				<img src="http://localhost/skripshit/cms/images/uploads/<?php echo $camilan['img_url'] ?>" class="img-responsive" src="#" alt="Contoh" style="width: 100%">
					  			</div>
					  			<div class="col-xs-8">
					  				<h4><?php echo $camilan['nm_menu'] ?></h4>	
					  				<h5>IDR <?php echo $camilan['harga'] ?></h5>
					  				<p><?php echo $camilan['desc_menu'] ?></p>
					  				<div class="col-xs-2" style="padding: 1px">
					  					<input type="number" id="<?php echo $camilan['id_menu'] ?>" name="qty" class="form-control qty">
					  				</div>
					  				<div class="col-xs-4" style="padding-left: 1px">
					  					<button class="btn btn-primary my-cart-btn" onclick="return false;" data-id="<?php echo $camilan['id_menu'] ?>" data-name="<?php echo $camilan['nm_menu'] ?>" data-summary="summary 1" data-price="<?php echo $camilan['harga'] ?>">Add</button>
					  				</div>
					  			</div>
					  		</div>
					  		<?php 	} ?>
					  	</div>
					</div>		
				</div>
			</div>
		</section>
	</main>

	<script src="asset/js/jquery-2.2.3.min.js"></script>
	<script type='text/javascript' src="asset/js/bootstrap.min.js"></script>
	<script type='text/javascript' src="asset/js/jquery.mycart.js"></script>
	<script>
		var	data_meja = null;
		$(".meja").on('click', function() {
			data_meja = $(this).data('id');
			console.log(data_meja);

			$("#first-page").hide();
			$("#second-page").show();
		});

		$(".select-tabel").on('click', function() {
			// console.log(data_meja);
			$("#first-page").hide();
			$("#second-page").show();
		});

		$("#show-pesanan").on('click', function(e) {
			e.preventDefault();

		});

		$(".select-tabel").on('click', function() {
			console.log('hei');
		});

		// Fungsi pemilihan meja
		var selector = 'ul a';
		$(selector).on('click', function(){
		    $(selector).removeClass('active');
		    $(this).addClass('active');
		    var id_meja = $(this).data('id');
		    $("#id_meja").val(id_meja);
		});

		$(".add-menu").on('click', function() {
			var id = $(this).data('id');
			var qty = $('#'+id).val();
			var name = $(this).data('name');
			var summary = $(this).data('summary');
			var price = $(this).data('price');
			var total = qty*price;
			console.log('id: '+id+', qty: '+qty+', name: '+name+', summ: '+summary+', price: '+price+', total: '+total);
		});

		var goToCartIcon = function($addTocartBtn){
			var $cartIcon = $(".my-cart-icon");
			var $image = $('<img width="30px" height="30px" src=""/>').css({"position": "fixed", "z-index": "999"});
			$addTocartBtn.prepend($image);
			var position = $cartIcon.position();
			$image.animate({
				top: position.top,
				left: position.left
			}, 500 , "linear", function() {
				$image.remove();
			});
		}

		$('.my-cart-btn').myCart({
			currencySymbol: 'IDR',
			classCartIcon: 'my-cart-icon',
			classCartBadge: 'my-cart-badge',
			classProductQuantity: 'my-product-quantity',
			classProductRemove: 'my-product-remove',
			classCheckoutCart: 'my-cart-checkout',
			affixCartIcon: true,
			showCheckoutModal: true,
			numberOfDecimals: 2,
			cartItems: [
			// {id: 1, name: 'product 1', summary: 'summary 1', price: 10, quantity: 1, image: 'images/img_1.png'},
			// {id: 2, name: 'product 2', summary: 'summary 2', price: 20, quantity: 2, image: 'images/img_2.png'},
			// {id: 3, name: 'product 3', summary: 'summary 3', price: 30, quantity: 1, image: 'images/img_3.png'}
			],
			clickOnAddToCart: function($addTocart){
				goToCartIcon($addTocart);
			},
			afterAddOnCart: function(products, totalPrice, totalQuantity) {
				console.log("afterAddOnCart", products, totalPrice, totalQuantity);
			},
			clickOnCartIcon: function($cartIcon, products, totalPrice, totalQuantity) {
				console.log("cart icon clicked", $cartIcon, products, totalPrice, totalQuantity);
			},
			checkoutCart: function(products, totalPrice, totalQuantity) {
				var checkoutString = "Total Price: " + totalPrice + "\nTotal Quantity: " + totalQuantity;
				checkoutString += "\n\n id \t name \t summary \t price \t quantity";

				var id = [];
				var qty = [];
				var price = [];

				$.each(products, function(){
					checkoutString += ("\n " + this.id + " \t " + this.name + " \t " + this.summary + " \t " + this.price + " \t " + this.quantity );
					id.push(this.id);
					price.push(this.price);
					qty.push(this.quantity);
				});
				alert(checkoutString)

				$.post('process/checkout.php', { id:id, qty:qty, act:'simpan', price:price, meja:data_meja }, function(response){
	    				console.log(response);
		    	}, 'json')

				console.log("checking out", products, totalPrice, totalQuantity);
			},
			getDiscountPrice: function(products, totalPrice, totalQuantity) {
				console.log("calculating discount", products, totalPrice, totalQuantity);
				return totalPrice * 0.5;
			}
		});
	</script>

</body>
</html>






<?php include('stock.php'); ?>
<?php include('header.php'); ?>
<h1> JAPAN's GO</h1>
<link rel="stylesheet" href="shop.css">
<style>
    .shop-grid {
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        gap: 20px;
    }
    .shop-item {
        display: flex;
        flex-direction: column;
        align-items: center;
        text-align: center;
    }
    .shop-item img {
        max-width: 100%;
        height: auto;
    }
</style>

<div class="shop-grid">
    <?php foreach($items as $item) : ?>
        <div class="shop-item">
            <a href="order.php?item_id=<?php echo $item['item_id']; ?>" class="shop-link" target="_blank">
                <img src="image/<?php echo $item['image']; ?>" />
            </a>
            <a href="<?php echo $item['URL']; ?>" target="_blank">
                <img src="image/<?php echo $item['QR']; ?>" />
            </a>
            <p>名稱: <?php echo $item['name']; ?><br>價格: <?php echo $item['price']; ?></p>
        </div>
    <?php endforeach; ?>
</div>




































<!-- <!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Shopping Cart</title>
	<link rel="stylesheet" href="style.css">
	<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
	<script src="script.js"></script>
</head>
<body>
	<h1>購物網站</h1>
	<div class="container">	
		<div class="items">
			<div class="item">
				<div class="product" id="D1">
					<button class="add-to-cart">
						<img src="image\D1.JPG" alt="Product 1" data-price="100" data-qrcode="qrcode-1.jpg">
					</button>
					<div class="info">
						<div class="name">商品1</div>
						<div class="price" data-price="100">$100.00</div>
					</div>
				</div>
				<a href="" target="_blank">
					<img class="qrcode"  src="image\D1QR.jpg" alt="QR Code 1">
				</a>
			</div>
			
			 其他商品項目 
		</div>
		<div class="cart" >
			<h2>
			  <a href="cart.html" target="_blank" >
				<img src="C:\Users\jerem\OneDrive\桌面\HTML\image\cart.jpg" alt="Cart" >
			  </a>
			</h2>
			
			<ul id="cart"></ul>
<div id="total-price"></div>
<button id="clear_cart">清空購物車</button>
 <div class="total">總價錢：<span class="amount">$0.00</span></div>
 <ul class="cart-list"></ul>
</body>
</html>*/ -->
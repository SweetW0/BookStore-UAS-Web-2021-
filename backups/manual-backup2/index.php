<?php
	require 'list_function.php';
	$con = koneksi();
	echo "<script>console.log('Connected to DB!')</script>";

	$data_buku = retrive_query("SELECT * FROM perpustakaan");
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" type="text/css" href="style.php">

	<title>
		MAIN--
	</title>
</head>
<body>
	<div id="main-container">
		<div id="nav-container">
			<div id="nav-user">
				<div id="profile-pic">
					<img src="dum-img/user.png">
				</div>
				<div id="profile-desc">
					<span>
						Selamat Pagi,
					</span>
					<span>
						NAMA
					</span>
				</div>
			</div>
			<div id="nav-content">
				<div class="nav-inner-content">
					<span><h3>CONTENT</h3></span>
					<span><img src="dum-img/right_arrow.png"></span>
				</div>
				<div class="nav-inner-content">
					<span><h3>CONTENT</h3></span>
					<span><img src="dum-img/right_arrow.png"></span>
				</div>
				<div class="nav-inner-content">
					<span><h3>CONTENT</h3></span>
					<span><img src="dum-img/right_arrow.png"></span>
				</div>
				<div class="nav-inner-content">
					<span><h3>CONTENT</h3></span>
					<span><img src="dum-img/right_arrow.png"></span>
				</div>
			</div>
			<div id="nav-cart">
				<div id="cart-content-wrapper">
					<div class="cart-content">
						<img src="dum-img/book.jpg">
					</div>
				</div>
				<div id="cart-total-wrapper">
					<p>Total : 300.000.xxx</p>
				</div>
			</div>
		</div>
		<div id="menu-container">
			<div id="menu-header">
				<div class="menu-header-wrapper">
					<h1>Explore</h1>
				</div>
				<div class="menu-header-wrapper">
					<img src="dum-img/right_arrow.png">
					<input id="menu-search-input" type="text" name="" placeholder="Explore the Books!">
				</div>
			</div>
			<div id="menu-books">
				 <div id="menu-books-header">
				 	<h1>BOOKS SHELF!</h1>
				 </div>
				 <div id="menu-books-content-wrapper">
				 	<?php $i = 1; foreach($data_buku as $buku):?>
				 	<div class="book-content" id="<?= $buku['ISBN']; ?>">
				 		<div class="book-image">
				 			<img src="<?= $buku['PIC']; ?>">
				 		</div>
				 		<div class="book-name">
				 			<?= $buku['JUDUL']; ?>
				 		</div>
				 	</div>
				 	<?php endforeach;?>
				 </div>
			</div>
		</div>
	</div>
</body>
<?php 
	
?>

	<script type="text/javascript">
		
	</script>

</html>
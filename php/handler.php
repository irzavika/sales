<?php
	include "function.php";

	if (isset($_GET['act'])){
		$act = $_GET['act'];
		// $product_id = $_GET['product_id'];
		// $product = $_POST['product'] ?? '';
		// $qty = $_POST['qty'] ?? '';
		// $price = $_POST['price'] ?? '';

		if ($act=="addNewProduct") {
			// $function->addNewProduct($product, $qty, $price);
			$function->addNewProduct($_POST['product'], $_POST['qty'], $_POST['price']);
		}
		if ($act=="updateProduct"){
			// $function->updateProduct($product, $qty, $price);
			$function->updateProduct($_POST['product'], $_POST['qty'], $_POST['price']);
		}
		if($act=="deleteProduct"){
			// $function->deleteProduct($product_id);
			$function->deleteProduct($_GET['product_id']);
		}
	}
?>
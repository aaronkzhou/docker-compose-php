
<?php
header("Content-type:text/html;charset=utf-8");
// ######## please do not alter the following code ########

$products = array( array("name" => "Sledgehammer", "price" => 125.75), array("name" => "Axe", "price" => 190.50), array("name" => "Bandsaw", "price" => 562.13), array("name" => "Chisel", "price" => 12.9), array("name" => "Hacksaw", "price" => 18.45)
);
// ##################################################
?>

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<title>Cart Sample</title>
</head>
<body class="container">
<div class="col-md-12">
	<h2>Products</h2>
	<table class="table">
	<tr>
		<td><b>name</b></td>
		<td><b>price</b></td>
	</tr>
	<?php
	foreach($products as $key=>$product){
		$price=sprintf("%.2f", $product['price']);
		echo '
		<tr>
			<td>' . $product['name'] . '</td>
			<td>$' . $price . '</td>
			<td><a href="?action=add&name=' . $product['name'] . '">[ Add to cart ]</a></td>
		</tr>';
	}
	?>
	</table>
</div>

<div class="col-md-12">
	<h4>Shop Cart</h4>
	<?php
	require('shoppingCart.class.php');
	$cart = new ShoppingCart();
	$action = (isset($_GET['action'])) ? $_GET['action'] : '';
	$name = (isset($_GET['name'])) ? $_GET['name'] : 0;
	switch($action) {
		case 'add':
			foreach($products as $product) {
				if($product['name'] == $name) {
					$cart->add($name);
					break;
				}
			}
		break;
		case 'empty':
			$cart->clear();
		break;
		case 'remove':
			$cart->remove($name);
		break;
	}
	$items = $cart->getItems();
	if(!empty($items)){
		echo '
		<table class="table">
		<tr>
			<td><b>Product</b></td>
			<td><b>Price</b></td>
			<td><b>Qty</b></td>
			<td><b>Total</b></td>
			<td></td>
		</tr>';
		$total = 0;
		foreach($items as $name=>$qty) {
			foreach($products as $product) {
				if($product['name'] == $name)
					break;
			}
			if(!isset($product['name']))
				continue;
			$price=sprintf("%.2f", $product['price']);
			echo '
			<tr>
				<td>' . $product['name'] . '</td>
				<td>$' . $price. '</td>
				<td>' . $qty . '</td>
				<td>$' . sprintf("%.2f",$product['price'] * $qty) . '</td>
				<td><a href="?action=remove&name=' . $name . '">[ Remove ]</a></td>
			</tr>';
			$total += sprintf("%.2f",$product['price'] * $qty);
		}
		echo '
		<tr>
			<td><a href="?action=empty">[ Empty Cart ]</a></td>
			<td colspan="4" align="right"><b>Total: $' . sprintf("%.2f",$total) . '</b></td>
		</tr>
		</table>';
		echo $cart->getErrors();
	}
	else{
		echo '<div style="color:#900000;"> Your cart is empty </div>';
	}
	?>
	</div>
</body>
</html>
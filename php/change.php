<?php
include("./data.php");
for ($i = 0; $i < count($product); $i++) {
    if($_POST['order_type'] == $product[$i]){
		if(isset($_POST["add"])){
			setcookie($product[$i], $_COOKIE[$product[$i]] + 1, time()+(86400 * 30),'/');
			setcookie("notify", 1 , time()+(86400 * 30),'/');
		}
		else if(isset($_POST["minus"])){
			setcookie($product[$i], $_COOKIE[$product[$i]] - 1, time()+(86400 * 30),'/');
			setcookie("notify", 2 , time()+(86400 * 30),'/');
		}
		else{
			setcookie($product[$i], 0, time()+(86400 * 30),'/');
			setcookie("notify", 3 , time()+(86400 * 30),'/');
		}
    }
}
header("location: ../shoppingcart.php");
?>
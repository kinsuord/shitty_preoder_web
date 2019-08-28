<?php
include("./data.php");
for ($i = 0; $i < count($product); $i++) {
    if(isset($_POST[$product[$i]])){
        if($_POST[$product[$i]]!=0){
            setcookie($product[$i], $_POST[$product[$i]], time()+(86400 * 30),'/');
        }     
    }
}
//print_r(array_values($_COOKIE));
setcookie("notify", 3 , time()+(86400 * 30),'/');
header("location: ../index.php");
?>
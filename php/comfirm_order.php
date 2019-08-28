<?php
include("./data.php");
//print_r(array_values($_POST));
$picktime = $_POST['pick_time'];
//echo $picktime;
//total
    $sum = 0;
	$pudding_sum = 0;
	$cheese_sum = 0;
	$malt_sum = 0;
	$shrimp_sum = 0;
	$mango_sum = 0;
    for ($i = 0; $i < count($product); $i++) {
        if(isset($_COOKIE[$product[$i]])){           
            if($_COOKIE[$product[$i]] != 0){
				if($i <= 3){
					$pudding_sum = $pudding_sum + $_COOKIE[$product[$i]];
				}
				else if($i >= 4 && $i <= 8){
					$cheese_sum = $cheese_sum + $_COOKIE[$product[$i]];
				}
				else if($i == 18){
					$mango_sum = $mango_sum + $_COOKIE[$product[$i]];
				}
				else if($i == 18){
					$mango_sum = $mango_sum + $_COOKIE[$product[$i]];
				}
				else if($i >= 19 && $i <= 20){
					$malt_sum = $malt_sum + $_COOKIE[$product[$i]];
				}
				else if($i >= 21 && $i <= 24){
					$shrimp_sum = $shrimp_sum + $_COOKIE[$product[$i]];
				}
                $sum = $sum + $_COOKIE[$product[$i]]*$price[$product[$i]];
            }     
        }
    }
	$special_sum = 0;
	while($pudding_sum>=4 && $mango_sum >= 1 && $malt_sum >= 1 && $shrimp_sum >= 1){		
		$special_sum++;
		$pudding_sum-=4;
		$mango_sum-=1;
		$malt_sum-=1;
		$shrimp_sum-=1;
	}
	if($special_sum!=0){
		$sum += $special_sum*(-40);
	}
	if(floor( $pudding_sum/3) > 0){
		$sum += floor( $pudding_sum/3)*(-5);
	}
	if(floor( $cheese_sum/3) > 0){
		$sum += floor( $cheese_sum/3)*(-15);
	}
// end total

$dbhost = 'localhost';
$dbuser = 'id2653034_kinsuord';
$dbpasswd = '@9O925i6';
$dbname = 'id2653034_nanyo';
$dsn = "mysql:host=".$dbhost.";dbname=".$dbname;
try
{
    //注意，使用PDO方式連結，需要指定一個資料庫，否則將拋出異常
    $conn = new PDO($dsn,$dbuser,$dbpasswd);
    $conn->exec("SET CHARACTER SET utf8");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e)
{
}
//check if there is the same SchoolID
$sql = "SELECT `SchoolID` FROM `customer` WHERE `SchoolID` = :sid";
$sth = $conn -> prepare($sql);
$sth -> bindValue(':sid',$_POST['SchoolID']);
$sth -> execute();
$result = $sth -> fetchAll();
if(isset($result[0][0])){
	setcookie("notify", 3 , time()+(86400 * 30),'/');
	header("location: ../shoppingcart.php");
}

$sql = "INSERT INTO `customer`(`SchoolID`, `Name`, `PhoneNumber`, `PickTime`, `total`,";
for ($i = count($product)-1 ; $i >0 ; $i--) {
	$sql = $sql . "`" . $product[$i] . "`, ";
}
	$sql = $sql . "`" . $product[0] . "` ";
	$sql = $sql . ") VALUES (:sid, :name, :phone, '" . $picktime . "' , '" . $sum ."'";
for ($i = count($product)-1 ; $i >=0 ; $i--) {
	$sql = $sql . " ,  :" . $product[$i] . "";
}
	$sql = $sql . ")";

$sth = $conn -> prepare($sql);

$sth -> bindValue(':sid',$_POST['SchoolID']);
$sth->bindValue(':name',$_POST['Name']);
$sth->bindValue(':phone',$_POST['Phone']);
for ($i = count($product)-1 ; $i >=0 ; $i--) {
	if(isset($_COOKIE[$product[$i]])){
		$sth->bindValue(':' . $product[$i],$_COOKIE[$product[$i]], PDO::PARAM_INT);
	}
	else{
		$sth->bindValue(':' . $product[$i],0, PDO::PARAM_INT);
	}
}
$sth -> execute();
setcookie("notify", 2 , time()+(86400 * 30),'/');

//success and send Email
    $encoding = "utf-8";
	$from_name = "清大南友會府城周";
	$from_mail = "nthunanyoweek.tk";
	$mail_subject = "訂購確認";
	$mail_to = $_POST['Email'];
	$mail_message = "已收到您的訂單，下列是您訂購的物品 : <br>";
	
    for ($i = 0; $i < count($product); $i++) {
        if(isset($_COOKIE[$product[$i]])){           
            if($_COOKIE[$product[$i]] != 0){
			}
		}
	}
	
    // Preferences for Subject field
    $subject_preferences = array(
        "input-charset" => $encoding,
        "output-charset" => $encoding,
        "line-length" => 76,
        "line-break-chars" => "\r\n"
    );

    // Mail header
    $header = "Content-type: text/html; charset=".$encoding." \r\n";
    $header .= "From: ".$from_name." <".$from_mail."> \r\n";
    $header .= "MIME-Version: 1.0 \r\n";
    $header .= "Content-Transfer-Encoding: 8bit \r\n";
    $header .= "Date: ".date("r (T)")." \r\n";
    $header .= iconv_mime_encode("Subject", $mail_subject, $subject_preferences);

    // Send mail
    $success = mail($mail_to, $mail_subject, $mail_message, $header);
	if (!$success) {
		$errorMessage = error_get_last()['message'];
	}
	
header("location: ../index.php");
?>
<?php
	//notify
	$notify = 0;
	if(isset($_COOKIE["notify"])){
		if($_COOKIE["notify"]>0){
			
			if ($_COOKIE["notify"]==1){
				$notify = 1;
			}
			else if($_COOKIE["notify"]==2){
				$notify = 2;
			}
			else{
				$notify = 3;
			}
			setcookie("notify", 0 , time()+(86400 * 30),'/');
		}	
	}    
?>
<!DOCTYPE html>
<!-- ==============================
    Project:        Metronic "Aitonepage" Frontend Freebie - Responsive HTML Template Based On Twitter Bootstrap 3.3.4
    Version:        1.0
    Author:         KeenThemes
    Primary use:    Corporate, Business Themes.
    Email:          support@keenthemes.com
    Follow:         http://www.twitter.com/keenthemes
    Like:           http://www.facebook.com/keenthemes
    Website:        http://www.keenthemes.com
    Premium:        Premium Metronic Admin Theme: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
================================== -->
<html lang="zh-Hant-TW" class="no-js">
    <!-- BEGIN HEAD -->
    <head>
        <meta charset="utf-8"/>
        <title>2017清大府城週-南得友你府餵我心</title>
        <link rel="icon" href="./source/favicon.ico" type="image/x-icon">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1" name="viewport"/>
        <meta content="" name="description"/>
        <meta content="清大南友會" name="author"/>
        <meta content="清大南友會 府城週 南得友你府餵我心" name="keywords">
        
        <!-- Open Graph Meta Data -->
        <meta property="og:title" content="清大南友周"/>
        <meta property="og:type" content="website"/>
        <meta property="og:image" content="./source/icon.jpg"/>
        <meta property="og:url" content="http://www.nthunanyoweek.tk"/>
        <meta property="og:site_name" content="清大南友周"/>
        <meta property="og:description" content="想吃到來自「美食之都」台南的嗎 ?
            想輕鬆吃到來自「美食之都」台南的嗎 ?
            這些事情，府城週通通都能幫你做到!!!" />

        <!-- GLOBAL MANDATORY STYLES -->
        <link href="http://fonts.googleapis.com/css?family=Hind:300,400,500,600,700" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link href="./vendor/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css"/>
        <link href="./vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>

        <!-- PAGE LEVEL PLUGIN STYLES -->
        <link href="./css/animate.css" rel="stylesheet">
        <link href="./vendor/swiper/css/swiper.min.css" rel="stylesheet" type="text/css"/>
		<link rel="stylesheet" type="text/css" href="./css/notyf.min.css">

        <!-- THEME STYLES -->
        <link href="./css/layout.css" rel="stylesheet" type="text/css"/>
        <link href="./css/layout-cart.css" rel="stylesheet" type="text/css"/>

    </head>
    <!-- END HEAD -->

    <!-- BODY -->
    <body id="body" data-spy="scroll" data-target=".header" onload="start()">

        <!--========== HEADER ==========-->
        <header class="header navbar-fixed-top">
            <!-- Navbar -->
            <nav class="navbar" role="navigation">
                <div class="container">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="menu-container js_nav-item">
                        <div class="navbar-back"><a href="index.php" class=" nav-item-child-cart nav-item-hover" >回首頁</a>
                    </div>
                    <!-- End Navbar Collapse -->
                </div>
            </nav>
            <!-- Navbar -->
        </header>
        <!--========== END HEADER ==========-->

        <!--========== SLIDER ==========-->
        <!-- Order -->
        <div class="section-seperator">
            <div class="content-md container padding-cart form-content">
                <h2>購物車</h2>
                  <table class="table-cart table table-striped">
                    <thead>
                      <tr>
                        <th><p>商品名稱</p></th>
                        <th><p>數量</p></th>
                        <th><p>價錢</p></th>
                        <th></th>
                      </tr>
                    </thead>
                    <tbody>
<?php

    //var_dump($_COOKIE); 
    include("./php/data.php");    
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
                echo "
					<tr>
                    <td>" . $name[$product[$i]] . "</td>
                    <td>" . $_COOKIE[$product[$i]] ."</td>
                    <td>". $_COOKIE[$product[$i]]*$price[$product[$i]] ."</td> 
                    <td><form method='post' action='./php/change.php'>
						<input type='hidden' name = 'order_type' value='" . $product[$i] . "'>
                        <input type='submit' name = 'add' value='+'>
                        <input type='submit' name = 'minus' value='-'>
						<input type='submit' name = 'cancel' value='x'>
                    </form></td>
                    </tr>";
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
		echo "		<tr>
					<td><span class = 'text-danger'>網路預購優惠</span></td>
					<td>" . $special_sum ."</td>
					<td><span class = 'text-danger'>". $special_sum*(-40) ."</span></td>
					</tr>";		
	}
	if(floor( $pudding_sum/3) > 0){
		$sum += floor( $pudding_sum/3)*(-5);
		echo "		<tr>
					<td><span class = 'text-danger'>布丁優惠折扣</span></td>
					<td>" . floor( $pudding_sum/3) ."</td>
					<td><span class = 'text-danger'>". floor( $pudding_sum/3)*(-5) ."</span></td>
					</tr>";
	}
	if(floor( $cheese_sum/3) > 0){
		$sum += floor( $cheese_sum/3)*(-15);
		echo "		<tr>
					<td><span class = 'text-danger'>乳酪塔優惠折扣</span></td>
					<td>" . floor( $cheese_sum/3) ."</td>
					<td><span class = 'text-danger'>". floor( $cheese_sum/3)*(-15) ."</span></td>
					</tr>";
	}
	
?>
                    <!--
                      <tr>
                        <td>John</td>
                        <td>Doe</td>
                        <td>john@example.com</td>
                      
                      <tr>
                        <td>Mary</td>
                        <td>Moe</td>
                        <td>mary@example.com</td>
                      </tr>
                      <tr>
                        <td>July</td>
                        <td>Dooley</td>
                        <td>july@example.com</td>
                      </tr>
                    -->
                    </tbody>
                  </table>
<?php
	if($sum == 0){
		echo 		"
					<h3 class='mid'>目前購物車內沒有商品，<a href='../index.php'><u class='text-primary'>
					開始選購?</u></a><h3>
					";
	}
	else{
					echo "<div class = 'line'></div>";
					echo "<div class = 'order-tatal '>總計:". $sum ."</div>";
	}
?>
            </div>
            <div class="content-md container bg-color-sky-light form-content">
                <h2>個人資料填寫</h2>
                <form class="order-info" action=" " method="post">
                    <h4>姓名</h4>
                    <input class="form-control bg-color-white" type="text" required name="Name"><br>
                    <h4>學號</h4>
                    <input class="form-control bg-color-white" type="text" required name="SchoolID"><br>
                    <h4>電話</h4>
                    <input class="form-control bg-color-white" type="text" required name="Phone"><br>
					<h4>電子信箱</h4>
                    <input class="form-control bg-color-white" type="text" required name="Email"><br>
                    <h4>領貨時間</h4>
                    <div class="time-radio col-md-3">
                        <input type="radio" class="form-check-input " name="pick_time" value="4" checked>
                        10/24晚上
                    </div>
                    <div class="time-radio col-md-3">
                        <input type="radio" class="form-check-input " name="pick_time" value="5" >
                        10/25晚上
                    </div>
                    <div class="time-radio col-md-3">
                        <input type="radio" class="form-check-input " name="pick_time" value="6" >
                        10/26晚上
                    </div>
                    <div class="submit-cart">
                        <input class="btn-theme btn-theme-sm btn-white-bg text-uppercase " onclick='block()' value="確定">
                    </div>
                </form>
            </div>
        </div>
        <!-- End Order -->

        <!--========== END PAGE LAYOUT ==========-->

        <!--========== FOOTER ==========-->
        <footer class="footer">
            <!-- Copyright -->
            <div class="content container">
                <div class="row">               
                    <div class="text-right footer-padding-right">
                        <p class="margin-b-0">清大南友會製作</p>
                    </div>
                </div>
                <!--// end row -->
            </div>
            <!-- End Copyright -->
        </footer>
        <!--========== END FOOTER ==========-->

        <!-- Back To Top -->
        <a href="javascript:void(0);" class="js-back-to-top back-to-top">Top</a>

        <!-- JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
        <!-- CORE PLUGINS -->
        <script src="./vendor/jquery.min.js" type="text/javascript"></script>
        <script src="./vendor/jquery-migrate.min.js" type="text/javascript"></script>
        <script src="./vendor/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>

        <!-- PAGE LEVEL PLUGINS -->
        <script src="./vendor/jquery.easing.js" type="text/javascript"></script>
        <script src="./vendor/jquery.back-to-top.js" type="text/javascript"></script>
        <script src="./vendor/jquery.smooth-scroll.js" type="text/javascript"></script>
        <script src="./vendor/jquery.wow.min.js" type="text/javascript"></script>
        <script src="./vendor/swiper/js/swiper.jquery.min.js" type="text/javascript"></script>
        <script src="./vendor/masonry/jquery.masonry.pkgd.min.js" type="text/javascript"></script>
        <script src="./vendor/masonry/imagesloaded.pkgd.min.js" type="text/javascript"></script>
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBsXUGTFS09pLVdsYEE9YrO2y4IAncAO2U"></script>

        <!-- PAGE LEVEL SCRIPTS -->
        <script src="./js/layout.js" type="text/javascript"></script>
		<script src="./js/notyf.min.js" type="text/javascript"></script>
        <script src="./js/components/wow.min.js" type="text/javascript"></script>
        <script src="./js/components/swiper.min.js" type="text/javascript"></script>
        <script src="./js/components/masonry.min.js" type="text/javascript"></script>

    </body>
    <!-- END BODY -->
</html>
<script>
function start() {
    //alert("10/8~10/14才會正式開放網路預購，目前僅供測試使用，謝謝您的諒解0.0");
<?php
	if($notify>0){
		echo "var notyf = new Notyf();";
		if ($notify==1){
			echo "notyf.confirm('已增加~');";
		}
		else if($notify==2){
			echo "notyf.confirm('已減少~');";
		}
		else if($notify==3){
			echo "notyf.alert('抱歉，同一個學號只能訂購一次');";
		}		
		else{
			echo "notyf.confirm('已刪除~');";
		}
		
	}	

?>
}
function block(){
	var notyf = new Notyf();
	notyf.alert('很抱歉，網路預購已經截止');
}
</script>
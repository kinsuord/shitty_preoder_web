<?php
$noti = 0;
if(isset($_COOKIE['notify'])){
	if($_COOKIE['notify']==1)
		$noti = 1;
	else if($_COOKIE['notify']==2)
		$noti = 2;
	else if($_COOKIE['notify']==3)
		$noti = 3;
	setcookie("notify", 0 , time()+(86400 * 30),'/');
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
        <meta property="og:type" content="product"/>
        <meta property="og:image" content="http://www.nthunanyoweek.tk/source/icon.jpg"/>
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
		<link rel="stylesheet" type="text/css" href="./css/notyf.min.css">
        <link href="./css/animate.css" rel="stylesheet">
        <link href="./vendor/swiper/css/swiper.min.css" rel="stylesheet" type="text/css"/>

        <!-- THEME STYLES -->
        <link href="./css/layout.css" rel="stylesheet" type="text/css"/>

    </head>
    <!-- END HEAD -->

    <!-- BODY -->
    <body id="body" data-spy="scroll" data-target=".header" class="bg-color" onload="notify()">
        <!-- FB PLUGIN -->
        <div id="fb-root"></div>
        <script>(function(d, s, id) {
          var js, fjs = d.getElementsByTagName(s)[0];
          if (d.getElementById(id)) return;
          js = d.createElement(s); js.id = id;
          js.src = "//connect.facebook.net/zh_TW/sdk.js#xfbml=1&version=v2.10";
          fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));</script>

        <!--========== HEADER ==========-->
        <header class="header navbar-fixed-top">
            <!-- Navbar -->
            <nav class="navbar" role="navigation">
                <div class="container">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="menu-container js_nav-item">
                        <button type="button" class=" navbar-toggle navbar-shopping-cart">
                        <a href="shoppingcart.php">
                            <i class="material-icons">shopping_cart</i>
                        </a>
                        </button>
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".nav-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="toggle-icon"></span>
                        </button>
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse nav-collapse">
                        <div class="menu-container">
                            <ul class="nav navbar-nav navbar-nav-right">
                                <li class="js_nav-item nav-item"><a class="nav-item-child nav-item-hover" href="#body">首頁</a></li>
                                <li class="js_nav-item nav-item"><a class="nav-item-child nav-item-hover" href="#about">關於</a></li>
								<li class="js_nav-item nav-item"><a class="nav-item-child nav-item-hover" href="#special">優惠</a></li>
                                <li class="js_nav-item nav-item">
                                    <a class="nav-item-child nav-item-dropdown" href="#pre-order">預購</a>
                                    <div class="nav-dropdown-content ">
                                        <a class="nav-dropdown-child" href="#pudding">伊蕾特布丁</a>
                                        <a class="nav-dropdown-child" href="#cake">里夫蛋糕</a>
                                        <a class="nav-dropdown-child" href="#luwei">西井村滷味</a>
                                        <a class="nav-dropdown-child" href="#mango">玉井芒果乾</a>
                                        <a class="nav-dropdown-child" href="#malt">章成麥芽餅</a>
                                        <a class="nav-dropdown-child" href="#shrimp">蝦到爆蝦餅</a>
                                        <a class="nav-dropdown-child" href="#cookie">連德堂煎餅</a>
                                    </div>
                                </li>
                                <!--<li class="js_nav-item nav-item"><a class="nav-item-child nav-item-hover" href="#products">熟食</a></li>-->
                                <li class="js_nav-item nav-item"><a class="nav-item-child nav-item-hover" href="#order">訂單</a></li>
                                <li class="js_nav-item nav-item"><a class="nav-item-child nav-shopping-cart" href="#" title="購物車" onclick = 'lock()'><i class="material-icons">shopping_cart</i></a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- End Navbar Collapse -->
                </div>
            </nav>
            <!-- Navbar -->
        </header>
        <!--========== END HEADER ==========-->

        <!--========== SLIDER ==========-->
        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
            <div class="container">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                </ol>
            </div>

            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
                <div class="item active ">
                    <img class="img-responsive " src="./source/cover1.jpg" alt="Slider Image">
                    <div class="container">
                        <div class="carousel-centered">
							<!--
                            <div class="margin-b-40">
                                <h1 class="carousel-title">2017清大府城週</h1>
                                <h3 class="color-white">南得友你，府餵我心<br/></h3>
                            </div>    -->                       
                            <!--<a href="#" class="btn-theme btn-theme-sm btn-white-brd text-uppercase">==按鈕==</a>-->
                        </div>
                    </div>
                </div>
                <div class="item">
                    <img class="img-responsive" src="./source/cover2.jpg" alt="Slider Image">
                    <div class="container">
                        <div class="carousel-centered">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--========== SLIDER ==========-->

        <!--========== PAGE LAYOUT ==========-->
        <!-- About -->
        <div id="about">
            <div class="content-lg container ">
                <div class="row container">
                    <div class="col-md-8 md-margin-b-60">
                        <div class="margin-t-50 margin-b-30 margin-l-20">
                            <h2>關於</h2>
                            <p>多少個夜深人靜，總是一人擁抱空虛飢餓<br>
                                多少次秉燭夜讀，總是與空洞的腹胃相伴<br>
                                在美食沙漠的風沙中，讓「府城週」成為你的綠洲吧!<br>
                                感受來自台南的溫暖<br>
                                讓美食伴你入眠<br>
                                孤獨的朋友啊! 飢腸轆轆的朋友啊!<br>
                                就讓南友，撫慰你飢渴的心<br><br>
								10/8  ~ 10/14 : 網路預購<br>
								10/16 ~ 10/20 : 野台預購<br>
								10/24 ~ 10/26 : 水木熟食展<br>
                            </p>
                        </div>
                        <a href="https://www.facebook.com/2017nthunanyo/" class="btn-theme btn-theme-sm btn-white-bg text-uppercase">造訪粉專</a>
                    </div>
                    <div class="margin-t-50 col-md-4 float-right">
                        <div class="fb-page" data-href="https://www.facebook.com/2017nthunanyo/" data-tabs="timeline" 
                        data-height="350" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" 
                        data-show-facepile="true"><blockquote cite="https://www.facebook.com/2017nthunanyo/" class="fb-xfbml-parse-ignore">
                        <a href="https://www.facebook.com/2017nthunanyo/">2017清大府城週『南得友你，府餵我心』</a></blockquote>
                        </div>
                    </div>
                </div>
                <!--// end row -->
            </div>
		</div>
        
        <!-- End About -->
        <div id="special">
            <div class="content-lg container bg-color-sub">
                <div class="row container">
                    <div class="md-margin-b-60 padding-l">
                        <div class=" margin-b-30 margin-l-20">
                            <h2>優惠</h2>
                            <p class = "padding-l">不論野台預購或網路預購，只要<b class = "text-danger">滿300</b>即可到野台抽獎一次，買越多優惠越多~<br>
                            </p>
							<h3>網路預購專屬優惠 : 室友組合包</h3>
							<p class = "padding-l">內含 : <br>
								依蕾特布丁 : 4個<br>
								蝦餅 : 1包<br>
								章成麥芽餅 : 1罐<br>
								玉井芒果乾 : 1包<br>
								只要 400元，一人一百，簡單不用找<br>
								<b class = "text-danger">直接選取足夠數量，會自動幫您打折</b>
							</p>
                        </div>
                    </div>
                </div>
                <!--// end row -->
            </div>
		</div>
        <!-- pre-order -->
        <div id="pre-order">
            <div class="container">          
                <div class="row margin-b-40 order-title">
                    <h1>預購</h1>
                    <p>野台預購期間(10/16 ~ 10/20)，
					需要來野台繳網路預購的錢，<br>也可以直接在野台填單預購付款，
					並且在熟食展期間(10/24二~10/26四)領貨(重要!)    
                    </p>
                </div>
                <!-- 依蕾特布丁 -->
                <div id="pudding" class="order-company">
                    <h2>依蕾特布丁</h2>
					<p>南方來的少女，那麼清新脫俗。溫柔的甜，總令人難以忘懷。</p>
                    <div class="row order-item">                      
                        <div class="col-sm-5 margin-b-20">
                            <img class="img-responsive" src="./source/pudding.jpg" alt="布丁">
                        </div>  
                        <div class="col-sm-7 margin-b-50 order-context">                      
                            <h4>布丁奶酪 :  35元/個</h4>
                            <p>保存注意事項 : 冷藏14天<br>
                            <span class="text-danger">特別優惠 : 任選3個布丁奶酪$100</span><br>
                            </p>
                            <form class="order-form" action="./php/addtocart.php" method="post">
                            <input type="hidden" name="order_type" value="pudding">
                            <label><p>鮮奶</p></label>
                              <select name="pudding_milk" class="order-select">
                                <option>0</option>
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                                <option>6</option>
                                <option>7</option>
                                <option>8</option>
                                <option>9</option>
                                <option>10</option>
                                <option>11</option>
                                <option>12</option>
                                <option>13</option>
                                <option>14</option>
                              </select>
                              <label><p>可可</p></label>
                              <select name="pudding_co" class="order-select">
                                <option>0</option>
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                                <option>6</option>
                                <option>7</option>
                                <option>8</option>
                                <option>9</option>
                                <option>10</option>
                                <option>11</option>
                                <option>12</option>
                                <option>13</option>
                                <option>14</option>
                              </select>
                              <label><p>芒果</p></label>
                              <select name="pudding_mango" class="order-select">
                                <option>0</option>
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                                <option>6</option>
                                <option>7</option>
                                <option>8</option>
                                <option>9</option>
                                <option>10</option>
                                <option>11</option>
                                <option>12</option>
                                <option>13</option>
                                <option>14</option>
                              </select>
                              <label><p>芝麻</p></label>
                              <select name="pudding_sesame" class="order-select">
                                <option>0</option>
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                                <option>6</option>
                                <option>7</option>
                                <option>8</option>
                                <option>9</option>
                                <option>10</option>
                                <option>11</option>
                                <option>12</option>
                                <option>13</option>
                                <option>14</option>
                              </select>  

                              <input type="submit" class="btn btn-info" value="加入購物車">
                            </form>           
                        </div>
                    </div>
                    <div class="row order-item">                      
                        <div class="col-sm-5 margin-b-20">
                            <img class="img-responsive" src="./source/cheese.jpg" alt="乳酪塔">
                        </div>  
                        <div class="col-sm-7 margin-b-50 order-context">                      
                            <h4>乳酪塔 :  65元/個</h4>
                            <p>保存注意事項 : 冷凍14天<br>
                            <span class="text-danger">特別優惠 : 任選3個乳酪塔$180</span>
                            </p>
                            
                            <form class="order-form" action="./php/addtocart.php" method="post">
                              <input type="hidden" name="order_type" value="cheese">
                              <label><p>檸檬</p></label>
                              <select name="cheese_lemon" class="order-select">
                                <option>0</option>
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                                <option>6</option>
                                <option>7</option>
                                <option>8</option>
                                <option>9</option>
                                <option>10</option>
                              </select>
                              <label><p>草莓</p></label>
                              <select name="cheese_strawberry" class="order-select">
                                <option>0</option>
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                                <option>6</option>
                                <option>7</option>
                                <option>8</option>
                                <option>9</option>
                                <option>10</option>
                              </select>
                              <label><p>經典可可</p></label>
                              <select name="cheese_coco" class="order-select">
                                <option>0</option>
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                                <option>6</option>
                                <option>7</option>
                                <option>8</option>
                                <option>9</option>
                                <option>10</option>
                              </select>
                              <label><p>抹茶紅豆</p></label>
                              <select name="cheese_greentea" class="order-select">
                                <option>0</option>
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                                <option>6</option>
                                <option>7</option>
                                <option>8</option>
                                <option>9</option>
                                <option>10</option>
                              </select> 
                              <label><p>雪藏原味</p></label>
                              <select name="cheese_origin" class="order-select">
                                <option>0</option>
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                                <option>6</option>
                                <option>7</option>
                                <option>8</option>
                                <option>9</option>
                                <option>10</option>
                              </select>                              
                              <input type="submit" class="btn btn-info" value="加入購物車">
                            </form>           
                        </div>
                    </div>                    
                </div>
                <div id="cake" class="order-company bg-color-sub">
                    <h2>里夫蛋糕</h2>
					<p>伸出了十指，我交出全部，而你是否願意，帶我走?</p>
                    <div class="row order-item">                      
                        <div class="col-sm-5 margin-b-20">
                            <img class="img-responsive" src="./source/cake.jpg" alt="手指泡芙">
                        </div>  
                        <div class="col-sm-7 margin-b-50 order-context">                      
                            <h4>手指泡芙 :  250元/盒</h4>
                            <p>一盒有10個，泡芙內含香草籽、卡仕達餡<br>
                            保存注意事項 : 冷藏5天，冷凍21天<br>
                            </p>
                            <form class="order-form" action="./php/addtocart.php" method="post">
                            <input type="hidden" name="order_type" value="puffs">
                              <label><p>數量</p></label>
                              <select name="puffs" class="order-select">
                                <option>0</option>
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                              </select>
                              <input type="submit" class="btn btn-info" value="加入購物車">
                            </form>           
                        </div>                        
                    </div>                    
                </div>
                <div id="luwei" class="order-company">
                    <h2>西井村滷味</h2>
                    <p>魔法師的學徒，二十來年的淬鍊。「滷」是我們都懂的品味。
					<br>不含防腐劑，保存注意事項 : 冷藏2天、冷凍6個月、常溫可放6~8個小時(所有滷味都是)
                    </p>
                    <div class="row order-item">
                    
                        <div class="col-sm-4 margin-b-20 order-item">
                            <img class="img-responsive" src="./source/claw.jpg" alt="雞爪">
                            <h4>雞爪 :  40元/包</h4>
                            <form class="order-form" action="./php/addtocart.php" method="post">
                                <input type="hidden" name="order_type" value="luwei">
                                <label><p>數量</p></label>
                                <select name="luwei_claw" class="order-select">
                                    <option>0</option>
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                    <option>6</option>
                                </select>
                              <input type="submit" class="btn btn-info" value="加入購物車">
                            </form>  
                        </div>     
                        
                        <div class="col-sm-4 margin-b-20 order-item">
                            <img class="img-responsive" src="./source/wing.jpg" alt="Latest Products Image">
                            <h4>雞翅 :  40元/包</h4>
                            <form class="order-form" action="./php/addtocart.php" method="post">
                                <input type="hidden" name="order_type" value="luwei">
                                <label><p>數量</p></label>
                                <select name="luwei_wing" class="order-select">
                                    <option>0</option>
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                    <option>6</option>
                                </select>
                              <input type="submit" class="btn btn-info" value="加入購物車">
                            </form>  
                        </div>                         
                   
                        <div class="col-sm-4 margin-b-20 order-item">
                            <img class="img-responsive" src="./source/smallwing.jpg" alt="Latest Products Image">
                            <h4>翅小腿 :  40元/包</h4>
                            <form class="order-form" action="./php/addtocart.php" method="post">
                                <input type="hidden" name="order_type" value="luwei">
                                <label ><p>數量</p></label>
                                <select name="luwei_smallwing" class="order-select">
                                    <option>0</option>
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                    <option>6</option>
                                </select>
                              <input type="submit" class="btn btn-info" value="加入購物車">
                            </form>  
                        </div>                                                 
                     
                        <div class="col-sm-4 margin-b-20 order-item">
                            <img class="img-responsive" src="./source/gizzard.jpg" alt="Latest Products Image">
                            <h4>雞胗 :  40元/包</h4>
                            <form class="order-form" action="./php/addtocart.php" method="post">
                                <input type="hidden" name="order_type" value="luwei">
                                <label ><p>數量</p></label>
                                <select name="luwei_gizzard" class="order-select">
                                    <option>0</option>
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                    <option>6</option>
                                </select>
                              <input type="submit" class="btn btn-info" value="加入購物車">
                            </form>  
                        </div>   
                        <div class="col-sm-4 margin-b-20 order-item">
                            <img class="img-responsive" src="./source/drybean.jpg" alt="豆干">
                            <h4>豆干 :  40元/包</h4>
                            <form class="order-form" action="./php/addtocart.php" method="post">
                                <input type="hidden" name="order_type" value="luwei">
                                <label><p>數量</p></label>
                                <select name="luwei_drybean" class="order-select">
                                    <option>0</option>
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                    <option>6</option>
                                </select>
                              <input type="submit" class="btn btn-info" value="加入購物車">
                            </form>  
                        </div>  
                        <div class="col-sm-4 margin-b-20 order-item">
                            <img class="img-responsive" src="./source/bubble.jpg" alt="泡泡糖">
                            <h4>泡泡糖 :  45元/包</h4>
							<p>這是鴨胗頭，叫泡泡糖是因為很有嚼勁~</p>
                            <form class="order-form" action="./php/addtocart.php" method="post">
                                <input type="hidden" name="order_type" value="luwei">
                                <label ><p>數量</p></label>
                                <select name="luwei_bubble" class="order-select">
                                    <option>0</option>
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                    <option>6</option>
                                </select>
                              <input type="submit" class="btn btn-info" value="加入購物車">
                            </form>  
                        </div> 
                        <div class="col-sm-4 margin-b-20 order-item">
                            <img class="img-responsive" src="./source/duckwing.jpg" alt="鴨翅">
                            <h4>鴨翅 :  60元/包</h4>
                            <form class="order-form" action="./php/addtocart.php" method="post">
                                <label ><p>數量</p></label>
                                <select name="luwei_duckwing" class="order-select">
                                    <option>0</option>
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                    <option>6</option>
                                </select>
                              <input type="submit" class="btn btn-info" value="加入購物車">
                            </form>  
                        </div> 
                        <div class="col-sm-4 margin-b-20 order-item">
                            <img class="img-responsive" src="./source/conbine.jpg" alt="組合包">
                            <h4>組合包 :  220元/包</h4>
                            <p>除了鴨翅以外都各一包(雞爪.雞翅.翅小腿.雞胗.豆干.泡泡糖)</p>
                            <form class="order-form" action="./php/addtocart.php" method="post">
                                <label ><p>數量</p></label>
                                <select name="luwei_combine" class="order-select">
                                    <option>0</option>
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                    <option>6</option>
                                </select>
                              <input type="submit" class="btn btn-info" value="加入購物車">
                            </form>  
                        </div>                          
                    </div>                     
                </div>
                <div id="mango" class="order-company bg-color-sub">
                <h2>玉井芒果乾 :  100元/包</h2>
				<p>歷經風霜，我已身心交瘁。但我獲得的全部，仍是甜。</p>
                    <div class="row order-item">                      
                        <div class="col-sm-5 margin-b-20">
                            <img class="img-responsive" src="./source/mango.jpg" alt="芒果乾">
                        </div>  
                        <div class="col-sm-7 margin-b-50 order-context">
                            <p>每包約100g</p>
                            <form class="order-form" action="./php/addtocart.php" method="post">
                              <label ><p>數量</p></label>                           
                              <select name="mango">
                                <option>0</option>
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                                <option>6</option>
                                <option>7</option>
                                <option>8</option>
                              </select>
                              <input type="submit" class="btn btn-info" value="加入購物車">
                            </form>           
                        </div>                        
                    </div>                  
                </div>
                <div id="malt" class="order-company">
                <h2>章成麥芽餅 :  120元/罐</h2>
				<p>纏綿悱惻，悱惻纏綿。青春期的煩惱，咬不斷，理還亂。</p>
                    <div class="row order-item">                      
                        <div class="col-sm-5 margin-b-20">
                            <img class="img-responsive" src="./source/malt.jpg" alt="章成麥芽餅">
                        </div>  
                        <div class="col-sm-7 margin-b-50 order-context"> 
                            <p>一罐560g，保存注意事項 : 最佳黃金賞味期7天，保存期限30天</p>
                            <form class="order-form" action="./php/addtocart.php" method="post">
                              <label><p>原味</p></label>
                              <select name="malt_origin">
                                <option>0</option>
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                              </select>
                              <label ><p>黑糖</p></label>
                              <select name="malt_blacksuger">
                                <option>0</option>
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                              </select>
                              <input type="submit" class="btn btn-info" value="加入購物車">
                            </form>           
                        </div>                        
                    </div>                  
                </div>
                
                <div id="shrimp" class="order-company bg-color-sub">
                <h2>蝦到爆蝦餅 :  80元/包</h2>
				<p>生活如此爆炸，人生如此瞎。但即便瞎到爆，我們仍舊追尋。</p>
                    <div class="row order-item">                      
                        <div class="col-sm-5 margin-b-20">
                            <img class="img-responsive" src="./source/shrimp.jpg" alt="蝦餅">
                        </div>  
                        <div class="col-sm-7 margin-b-50 order-context"> 
                            <p>約80g，包裝差不多A4紙大小，不含防腐劑，保存注意事項 : 賞味期約10日，保存期限15日
                            (打開之後只能放10天的意思)</p>
                            <form class="order-form" action="./php/addtocart.php" method="post">
                              <label ><p>鹽味</p></label>
                              <select  name="shrimp_salt">
                                <option>0</option>
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                                <option>6</option>
                              </select>
                              <label ><p>海苔</p></label>
                              <select  name="shrimp_seaweed">
                                <option>0</option>
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                                <option>6</option>
                              </select>
                              <label ><p>黑胡椒</p></label>
                              <select  name="shrimp_pepper">
                                <option>0</option>
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                                <option>6</option>
                              </select>
                              <label ><p>辣味</p></label>
                              <select  name="shrimp_hot">
                                <option>0</option>
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                                <option>6</option>
                              </select>
                              <input type="submit" class="btn btn-info" value="加入購物車">
                            </form>           
                        </div>                        
                    </div>                  
                </div>
                
                <div id="cookie" class="order-company ">
                <h2>連德堂煎餅 - 雞蛋口味 :  45元/包</h2>
				<p>在這混亂的大染缸，也不隨波逐流。堅硬，是我為你保留的溫柔。</p>
                    <div class="row order-item">                      
                        <div class="col-sm-5 margin-b-20">
                            <img class="img-responsive" src="./source/cookie.jpg" alt="Latest Products Image">
                        </div>  
                        <div class="col-sm-7 margin-b-50 order-context"> 
                            <p>這次府城週限量180包，需要的話請前往野台預購。一包大概一個手掌大，<br>
                            有6片，去台南現場排一人只能買2包唷</p>
                            <a href="#about" class="btn-theme btn-theme-sm btn-white-bg text-uppercase">什麼時候野台預購?</a>
                        </div>                        
                    </div>                  
                </div>
                
            </div>
        </div>
        <!-- End pre-order -->

        <!-- Order -->
        <div id="order">
            <div class="section-seperator">
                <div class="content-md container bg-color-sub">
                    <div class="row margin-b-40">
                        <div class="col-sm-6">
                            <h2>訂單查詢與修改</h2>
                            <p>想確認自己訂甚麼和修改嗎</p>
                            <a href="https://www.facebook.com/2017nthunanyo/" class="btn-theme btn-theme-sm btn-white-bg text-uppercase">先私訊粉專</a>
                        </div>
                    </div>
                    <!--// end row -->


                    <!-- End Masonry Grid -->
                </div>
            </div>
            
        </div>
        <!-- End Order -->

        <!--========== END PAGE LAYOUT ==========-->

        <!--========== FOOTER ==========-->
        <footer class="footer">
            <!-- Copyright -->
            <div class="content container">
                <div class="row">               
                    <div class="text-right">
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
		<script src="./js/notyf.min.js" type="text/javascript"></script>

        <!-- PAGE LEVEL SCRIPTS -->
        <script src="./js/layout.js" type="text/javascript"></script>
        <script src="./js/components/wow.min.js" type="text/javascript"></script>
        <script src="./js/components/swiper.min.js" type="text/javascript"></script>
        <script src="./js/components/masonry.min.js" type="text/javascript"></script>

    </body>
    <!-- END BODY -->
</html>
<script>
function notify() {
	var notyf = new Notyf();
	<?php
		if($noti==1)
			echo "notyf.confirm('已加入購物車~');";
		else if ($noti==2)
			echo "notyf.confirm('已收到您的訂單~');";
		else if ($noti==3)
			echo "notyf.alert('很抱歉，網路預購已經截止');";
	?>
}
function lock(){
	var notyf = new Notyf();
	notyf.alert('很抱歉，網路預購已經截止');
}
</script>
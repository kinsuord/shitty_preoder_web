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
        <title>清大南友周</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1" name="viewport"/>
        <meta content="=========網頁簡短描述=========" name="description"/>
        <meta content="清大南友會" name="author"/>
        <meta content="=========關鍵字=========" name="keywords">
        
        <!-- Open Graph Meta Data -->
        <meta property="og:title" content="清大南友周"/>
        <meta property="og:type" content="website"/>
        <meta property="og:image" content="========主要封面圖片========"/>
        <meta property="og:url" content="https://nthunanyoweek.000webhostapp.com/"/>
        <meta property="og:site_name" content="清大南友周"/>
        <meta property="og:description" content="=========網頁簡短描述=========" />

        <!-- GLOBAL MANDATORY STYLES -->
        <link href="http://fonts.googleapis.com/css?family=Hind:300,400,500,600,700" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link href="vendor/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css"/>
        <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>

        <!-- PAGE LEVEL PLUGIN STYLES -->
        <link href="css/animate.css" rel="stylesheet">
        <link href="vendor/swiper/css/swiper.min.css" rel="stylesheet" type="text/css"/>

        <!-- THEME STYLES -->
        <link href="css/layout.css" rel="stylesheet" type="text/css"/>

    </head>
    <!-- END HEAD -->

    <!-- BODY -->
    <body id="body" data-spy="scroll" data-target=".header">

        <!--========== HEADER ==========-->
        <header class="header navbar-fixed-top">
            <!-- Navbar -->
            <nav class="navbar" role="navigation">
                <div class="container">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="menu-container js_nav-item">
                        <button type="button" class=" navbar-toggle navbar-shopping-cart">
                            <i class="material-icons">shopping_cart</i>
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
                                <li class="js_nav-item nav-item">
                                    <a class="nav-item-child nav-item-dropdown" href="#pre-order">預購</a>
                                    <div class="nav-dropdown-content ">
                                        <a class="nav-dropdown-child" href="#pudding">伊蕾特布丁</a>
                                        <a class="nav-dropdown-child" href="#cake">里夫蛋糕</a>
                                        <a class="nav-dropdown-child" href="#luwei">西井村滷味</a>
                                        <a class="nav-dropdown-child" href="#mango">玉井芒果乾</a>
                                        <a class="nav-dropdown-child" href="#malt">章成麥芽餅</a>
                                        <a class="nav-dropdown-child" href="#cookie">連德堂煎餅</a>
                                    </div>
                                </li>
                                <li class="js_nav-item nav-item"><a class="nav-item-child nav-item-hover" href="#products">熟食</a></li>
                                <li class="js_nav-item nav-item"><a class="nav-item-child nav-item-hover" href="#order">訂單</a></li>
                                <li class="js_nav-item nav-item"><a class="nav-item-child nav-shopping-cart" href="#pricing" title="購物車"><i class="material-icons">shopping_cart</i></a></li>
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
                <div class="item active">
                    <img class="img-responsive" src="img/1920x1080/01.jpg" alt="Slider Image">
                    <div class="container">
                        <div class="carousel-centered">
                            <div class="margin-b-40">
                                <h1 class="carousel-title">===這裡放標題===</h1>
                                <p class="color-white">==============相關說明1============== <br/> ==============相關說明2==============</p>
                            </div>                           
                            <a href="#" class="btn-theme btn-theme-sm btn-white-brd text-uppercase">==按鈕==</a>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <img class="img-responsive" src="img/1920x1080/02.jpg" alt="Slider Image">
                    <div class="container">
                        <div class="carousel-centered">
                            <div class="margin-b-40">
                                <h2 class="carousel-title">=====第二張圖=====</h2>
                                <p class="color-white">======看要放多少圖======== <br/> =====說明======</p>
                            </div>
                            <a href="#" class="btn-theme btn-theme-sm btn-white-brd text-uppercase">==按鈕==</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--========== SLIDER ==========-->

        <!--========== PAGE LAYOUT ==========-->
        <!-- About -->
        <div id="about">
            
            <div class="content-lg container">
                <div class="row">
                    <div class="col-md-5 col-sm-5 md-margin-b-60">
                        <div class="margin-t-50 margin-b-30">
                            <h2>關於</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                        </div>
                        <a href="#" class="btn-theme btn-theme-sm btn-white-bg text-uppercase">Explore</a>
                    </div>
                    <div class="col-md-5 col-sm-7 col-md-offset-2">
                        <!-- Accordion -->
                        <div class="accordion">
                            <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="headingOne">
                                        <h4 class="panel-title">
                                            <a class="panel-title-child" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                聯絡我們
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                                        <div class="panel-body">
                                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch.
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="headingTwo">
                                        <h4 class="panel-title">
                                            <a class="collapsed panel-title-child" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                Modern Design Trends
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                                        <div class="panel-body">
                                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch.
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="headingThree">
                                        <h4 class="panel-title">
                                            <a class="collapsed panel-title-child" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                Beatifully Crafted Code
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                                        <div class="panel-body">
                                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Accodrion -->
                    </div>
                </div>
                <!--// end row -->
            </div>
            
            <div class="bg-color-sky-light">
                <div id="time-line" class="content-lg container">
                    <!-- Masonry Grid -->
                    <h1>時間表</h1>
                    <div class="masonry-grid row">
                        <div class="masonry-grid-sizer col-xs-6 col-sm-6 col-md-1"></div>
                        <div class="masonry-grid-item col-xs-12 col-sm-6 col-md-4 sm-margin-b-30">
                            <div class="margin-b-60">
                                <h2>網路預購</h2>
                                <!-- <p>Lorem ipsum dolor sit amet consectetur adipiscing elit sed tempor incididunt ut laboret dolore magna ut consequat siad esqudiat dolor</p> -->
                            </div>
                            <img class="full-width img-responsive wow fadeInUp" src="img/500x500/01.jpg" alt="Portfolio Image" data-wow-duration=".3" data-wow-delay=".2s">
                        </div>
                        <div class="masonry-grid-item col-xs-12 col-sm-6 col-md-4">
                            <div class="margin-b-60">
                                <img class="full-width img-responsive wow fadeInUp" src="img/500x500/02.jpg" alt="Portfolio Image" data-wow-duration=".3" data-wow-delay=".3s">
                            </div>
                            <h2>野台擺攤</h2>
                            <!-- <p>Lorem ipsum dolor sit amet consectetur adipiscing elit sed tempor incididunt ut laboret dolore magna ut consequat siad esqudiat dolor</p> -->
                        </div>
                        <div class="masonry-grid-item col-xs-12 col-sm-6 col-md-4">
                            <div class="margin-t-60 margin-b-60">
                                <h2>熟食展</h2>
                                <!-- <p>Lorem ipsum dolor sit amet consectetur adipiscing elit sed tempor incididunt ut laboret dolore magna ut consequat siad esqudiat dolor</p> -->
                            </div>
                            <img class="full-width img-responsive wow fadeInUp" src="img/500x500/03.jpg" alt="Portfolio Image" data-wow-duration=".3" data-wow-delay=".4s">
                        </div>
                    </div>
                    <!-- End Masonry Grid -->
                </div>
            </div>

        </div>
        <!-- End About -->

        <!-- pre-order -->
        <div id="pre-order">
            <div class="content-lg container">          
                <div class="row margin-b-40">
                    <h1>預購</h1>
                    <p> ====預購相關說明====</p>
                </div>
                <!-- 依雷特布丁 -->
                <div id="pudding" class="order-company">
                    <h2>依雷特布丁</h2>
                    <div class="row order-item">                      
                        <div class="col-sm-5 margin-b-20">
                            <img class="img-responsive" src="img/970x647/01.jpg" alt="Latest Products Image">
                        </div>  
                        <div class="col-sm-7 margin-b-50 order-context">                      
                            <h4>布丁奶酪</h4>
                            <p>====說明====</p>
                            <form class="order-form">
                              <label for="sel1"><p>鮮奶</p></label>
                              <select id="sel1" class="order-select">
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                              </select>
                              <label for="sel1"><p>可可</p></label>
                              <select id="sel1" class="order-select">
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                              </select>
                              <label for="sel1"><p>芒果</p></label>
                              <select id="sel1" class="order-select">
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                              </select>
                              <label for="sel1"><p>芝麻</p></label>
                              <select id="sel1" class="order-select">
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                              </select>  
                              <input type="submit" value="加入購物車">
                            </form>           
                        </div>
                    </div>
                    <div class="row order-item">                      
                        <div class="col-sm-5 margin-b-20">
                            <img class="img-responsive" src="img/970x647/01.jpg" alt="Latest Products Image">
                        </div>  
                        <div class="col-sm-7 margin-b-50 order-context">                      
                            <h4>乳酪塔</h4>
                            <p>====說明====</p>
                            <form class="order-form">
                              <label for="sel1"><p>檸檬</p></label>
                              <select id="sel1" class="order-select">
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                              </select>
                              <label for="sel1"><p>草莓</p></label>
                              <select id="sel1" class="order-select">
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                              </select>
                              <label for="sel1"><p>經典可可</p></label>
                              <select id="sel1" class="order-select">
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                              </select>
                              <label for="sel1"><p>抹茶紅豆</p></label>
                              <select id="sel1" class="order-select">
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                              </select> 
                              <label for="sel1"><p>雪藏原味</p></label>
                              <select id="sel1" class="order-select">
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                              </select>                              
                              <input type="submit" value="加入購物車">
                            </form>           
                        </div>
                    </div>                    
                </div>
                <div id="cake" class="order-company">
                    <h2>里夫蛋糕</h2>
                    <div class="row order-item">                      
                        <div class="col-sm-5 margin-b-20">
                            <img class="img-responsive" src="img/970x647/01.jpg" alt="Latest Products Image">
                        </div>  
                        <div class="col-sm-7 margin-b-50 order-context">                      
                            <h4>手指泡芙</h4>
                            <p>====說明====</p>
                            <form class="order-form">
                              <label for="sel1"><p>數量</p></label>
                              <select id="sel1" class="order-select">
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                              </select>
                              <input type="submit" value="加入購物車">
                            </form>           
                        </div>                        
                    </div>                    
                </div>
                <div id="luwei" class="order-company">
                    <h2>西井村滷味</h2>
                    <div class="row order-item">                      
                        <div class="col-sm-4 margin-b-20 order-item">
                            <img class="img-responsive" src="img/970x647/01.jpg" alt="Latest Products Image">
                            <h4>雞翅</h4>
                            <form class="order-form">
                                <label for="sel1"><p>數量</p></label>
                                <select id="sel1" class="order-select">
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                </select>
                              <input type="submit" value="加入購物車">
                            </form>  
                        </div>                         
                   
                        <div class="col-sm-4 margin-b-20 order-item">
                            <img class="img-responsive" src="img/970x647/01.jpg" alt="Latest Products Image">
                            <h4>翅小腿</h4>
                            <form class="order-form">
                                <label for="sel1"><p>數量</p></label>
                                <select id="sel1" class="order-select">
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                </select>
                              <input type="submit" value="加入購物車">
                            </form>  
                        </div>                         
                  
                        <div class="col-sm-4 margin-b-20 order-item">
                            <img class="img-responsive" src="img/970x647/01.jpg" alt="Latest Products Image">
                            <h4>雞爪</h4>
                            <form class="order-form">
                                <label for="sel1"><p>數量</p></label>
                                <select id="sel1" class="order-select">
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                </select>
                              <input type="submit" value="加入購物車">
                            </form>  
                        </div>                         
                     
                        <div class="col-sm-4 margin-b-20 order-item">
                            <img class="img-responsive" src="img/970x647/01.jpg" alt="Latest Products Image">
                            <h4>雞胗</h4>
                            <form class="order-form">
                                <label for="sel1"><p>數量</p></label>
                                <select id="sel1" class="order-select">
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                </select>
                              <input type="submit" value="加入購物車">
                            </form>  
                        </div>   
                        <div class="col-sm-4 margin-b-20 order-item">
                            <img class="img-responsive" src="img/970x647/01.jpg" alt="Latest Products Image">
                            <h4>豆干</h4>
                            <form class="order-form">
                                <label for="sel1"><p>數量</p></label>
                                <select id="sel1" class="order-select">
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                </select>
                              <input type="submit" value="加入購物車">
                            </form>  
                        </div>  
                        <div class="col-sm-4 margin-b-20 order-item">
                            <img class="img-responsive" src="img/970x647/01.jpg" alt="Latest Products Image">
                            <h4>泡泡糖</h4>
                            <form class="order-form">
                                <label for="sel1"><p>數量</p></label>
                                <select id="sel1" class="order-select">
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                </select>
                              <input type="submit" value="加入購物車">
                            </form>  
                        </div> 
                        <div class="col-sm-4 margin-b-20 order-item">
                            <img class="img-responsive" src="img/970x647/01.jpg" alt="Latest Products Image">
                            <h4>鴨翅</h4>
                            <form class="order-form">
                                <label for="sel1"><p>數量</p></label>
                                <select id="sel1" class="order-select">
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                </select>
                              <input type="submit" value="加入購物車">
                            </form>  
                        </div> 
                        <div class="col-sm-4 margin-b-20 order-item">
                            <img class="img-responsive" src="img/970x647/01.jpg" alt="Latest Products Image">
                            <h4>組合包</h4>
                            <form class="order-form">
                                <label for="sel1"><p>數量</p></label>
                                <select id="sel1" class="order-select">
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                </select>
                              <input type="submit" value="加入購物車">
                            </form>  
                        </div>                          
                    </div>                     
                </div>
                <div id="mango" class="order-company">
                <h2>玉井芒果乾</h2>
                    <div class="row order-item">                      
                        <div class="col-sm-5 margin-b-20">
                            <img class="img-responsive" src="img/970x647/01.jpg" alt="Latest Products Image">
                        </div>  
                        <div class="col-sm-7 margin-b-50 order-context">                      
                            <p>====說明====</p>
                            <form class="order-form">
                              <label for="sel1"><p>數量</p></label>
                              <select id="sel1" class="order-select">
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                              </select>
                              <input type="submit" value="加入購物車">
                            </form>           
                        </div>                        
                    </div>                  
                </div>
                <div id="malt" class="order-company">
                <h2>章成麥芽餅</h2>
                    <div class="row order-item">                      
                        <div class="col-sm-5 margin-b-20">
                            <img class="img-responsive" src="img/970x647/01.jpg" alt="Latest Products Image">
                        </div>  
                        <div class="col-sm-7 margin-b-50 order-context"> 
                            <p>====說明====</p>
                            <form class="order-form">
                              <label for="sel1"><p>原味</p></label>
                              <select id="sel1" class="order-select">
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                              </select>
                              <label for="sel1"><p>黑糖</p></label>
                              <select id="sel1" class="order-select">
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                              </select>
                              <input type="submit" value="加入購物車">
                            </form>           
                        </div>                        
                    </div>                  
                </div>
                <div id="cookie" class="order-company">
                <h2>連德堂煎餅</h2>
                    <div class="row order-item">                      
                        <div class="col-sm-5 margin-b-20">
                            <img class="img-responsive" src="img/970x647/01.jpg" alt="Latest Products Image">
                        </div>  
                        <div class="col-sm-7 margin-b-50 order-context"> 
                            <p>====說明====</p>
                            <a href="#time-line" class="btn-theme btn-theme-sm btn-white-bg text-uppercase">什麼時候野台預購?</a>
                        </div>                        
                    </div>                  
                </div>
            </div>
        </div>
        <!-- End pre-order -->

        <!-- Order -->
        <div id="order">
            <div class="section-seperator">
                <div class="content-md container">
                    <div class="row margin-b-40">
                        <div class="col-sm-6">
                            <h2>訂單查詢與修改</h2>
                            <p>想確認自己訂甚麼和修改嗎</p><a href="#" >案這裡</a>
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
                    <div class="col-xs-6">
                        <img class="footer-logo" src="img/logo-dark.png" alt="Aitonepage Logo">
                    </div>
                    <div class="col-xs-6 text-right">
                        <p class="margin-b-0"><a class="fweight-700" href="http://keenthemes.com/preview/aitonepage/">Aitonepage</a> Theme Powered by: <a class="fweight-700" href="http://www.keenthemes.com/">KeenThemes.com</a></p>
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
        <script src="vendor/jquery.min.js" type="text/javascript"></script>
        <script src="vendor/jquery-migrate.min.js" type="text/javascript"></script>
        <script src="vendor/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>

        <!-- PAGE LEVEL PLUGINS -->
        <script src="vendor/jquery.easing.js" type="text/javascript"></script>
        <script src="vendor/jquery.back-to-top.js" type="text/javascript"></script>
        <script src="vendor/jquery.smooth-scroll.js" type="text/javascript"></script>
        <script src="vendor/jquery.wow.min.js" type="text/javascript"></script>
        <script src="vendor/swiper/js/swiper.jquery.min.js" type="text/javascript"></script>
        <script src="vendor/masonry/jquery.masonry.pkgd.min.js" type="text/javascript"></script>
        <script src="vendor/masonry/imagesloaded.pkgd.min.js" type="text/javascript"></script>
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBsXUGTFS09pLVdsYEE9YrO2y4IAncAO2U"></script>

        <!-- PAGE LEVEL SCRIPTS -->
        <script src="js/layout.min.js" type="text/javascript"></script>
        <script src="js/components/wow.min.js" type="text/javascript"></script>
        <script src="js/components/swiper.min.js" type="text/javascript"></script>
        <script src="js/components/masonry.min.js" type="text/javascript"></script>
        <script src="js/components/google-map.min.js" type="text/javascript"></script>

    </body>
    <!-- END BODY -->
</html>
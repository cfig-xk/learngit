<?php  
use yii\helpers\Html;
use yii\helpers\Url;
?>

<!DOCTYPE html>
<html lang="zxx">

<head>
    <title>轮播图</title>
    <style>
        .slider-info{
            width:100px;
            height:300px;
        }
    </style>
    <!--meta tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="" />
    <script>
        addEventListener("load", function () { setTimeout(hideURLbar, 0); }, false);
        function hideURLbar() { window.scrollTo(0, 1); }
    </script>
	<!--//meta tags ends here-->

	<!--booststrap-->

	<link href="../web/statics/css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
	<!--//booststrap end-->

	<!-- font-awesome icons -->
	<link href="../web/statics/css/font-awesome.css" rel="stylesheet">
	<!-- //font-awesome icons -->
	<!--stylesheets-->
	<link href="../web/statics/css/style.css" rel='stylesheet' type='text/css' media="all">
	<!--//stylesheets-->
	<link href="http://fonts.googleapis.com/css?family=Raleway:300,400,500,600" rel="stylesheet">

</head>

<body onload ="init()">
    <!--header-->
    <div class="header-top">
        <div class="header-bar">
            <nav class="navbar navbar-default">
                <div class="navbar-header navbar-left">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <style>
                        span {
                            color: yellow;
                            font-size: 20px;
                        }
                    </style>
                    <h1><a class="navbar-brand" href="../web/index.php"><span>南开大学建校100周年</span></a></h1>
                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
                    <nav>
                        <ul class="nav navbar-nav">
                            <li class="active"><a href="../web/index.php">首页</a></li>
                            <li><a href="#about" class="scroll">人物南开</a></li>
                            <li><a href="#services" class="scroll">活动预告</a></li>
                            <li><a href="#gallery" class="scroll">校庆新闻</a></li>
                            <li><a href="#team" class="scroll">开发人员</a></li>
                            <li><a href="#contact" class="scroll">捐款致谢</a></li>
                            <li><a href="#newsletter" class="scroll">登录(注册)</a></li>
                        </ul>

                    </nav>
                </div>
            </nav>
        </div>
        <div class="clearfix"> </div>
    </div>
    
	<!--//header-->
    <!-- Slideshow 4 -->
    <div class="slider">
        <div class="callbacks_container">
            <ul class="rslides" id="slider4">
                <li>
                    <img id = "luobotu" src ="../web/statics/images/c1.jpg" width = "100%" height = "100%"/>       
                </li>
                <li>
                    <img id = "luobotu" src ="../web/statics/images/c2.jpg" width = "100%" height = "100%"/>   
                </li>
                <li>
                    <div class="slider-img wthree-threeimg">
                        <div class="container">
                            <div class="slider-info">
                            <img id = "luobotu" src ="../web/statics/images/c3.jpg" width = "100%" height = "100%"/>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <img id = "luobotu" src ="../web/statics/images/c4.jpg" width = "100%" height = "100%"/>   
                </li>
            </ul>
        </div>
        <div class="clearfix"> </div>
        <!-- This is here just to demonstrate the callbacks -->
        <!-- <ul class="events">
      <li>Example 4 callback events</li>
    </ul>-->
    </div>
    

    <!-- //banner -->
    <!--about -->
    <div class="about" id="about">
        <div class="container">
            <h3 class="title">人物南开</h3>
            <div class="about-top-grids">
                <div class="col-md-6 about-top-grid">
                    <h2>记忆中的南开人
                    </h2>
                    <p>自1919年以来，南开大学孕育了祖国一大批高精尖人才，他们长时间奋斗在祖国建设的第一线，
                    为祖国的建设和发展奠定了良好的基础。张伯苓、周恩来、陈省身，一个个响亮的名字必将永远铭刻
                    在南开大学的光荣历史中，也必将于历史的洪流中永垂不朽！
                    </p>
                    <div class="w3layouts_more-buttn ser-buttn">
                        <a href="../web/index.php?r=yii-person%2Findex" class="scroll">详情</a>
                    </div>
                </div>
                <div class="col-md-6 about-top-image">
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
    </div>
    <!--//about -->
	<!--services-->
	<div class="services" id="services" style="background:#922b7b;background-position:top;background-repeat: no-repeat;">
		<div class="container">
			<h3 class="title clr">
                <?= Html::a('校庆活动',['yii-activity/index']) ?>
                <a href="<?= Url::to(['yii-activity/index']) ?>"></a>
            </h3>
			<div class="banner-bottom-girds ">
				<div class="col-md-3  col-sm-6 col-xs-6  its-banner-grid">
					<div class="w3-services-clr">
						<div class=" left-icon-grid">
							<!-- <span class="fa fa-briefcase banner-icon" aria-hidden="true"></span> -->
							<h4 style="color:#922b7b">总结与宣传</h4>
							<p>南开允公能•风华更日新</p>
							<div class="clearfix"> </div>
						</div>
					</div>
				</div>
				<div class="col-md-3  col-sm-6 col-xs-6  its-banner-grid">
					<div class="w3-services-clr">
						<div class=" left-icon-grid">
							<!-- <span class="fa fa-thumbs-o-up  banner-icon" aria-hidden="true"></span> -->
							<h4 style="color:#922b7b">学术与交流</h4>
							<p>追求卓越•争创一流</p>
							<div class="clearfix"> </div>
						</div>
					</div>
				</div>
				<div class="col-md-3  col-sm-6 col-xs-6  its-banner-grid">
					<div class="w3-services-clr">
						<div class=" left-icon-grid">
							<!-- <span class="fa fa-users banner-icon" aria-hidden="true"></span> -->
							<h4 style="color:#922b7b">文化与纪念</h4>
							<p>繁荣校园文化•共建美好家园</p>
							<div class="clearfix"> </div>
						</div>
					</div>
				</div>
				<div class="col-md-3 col-sm-6 col-xs-6  its-banner-grid">
					<div class="w3-services-clr">
						<div class=" left-icon-grid">
							<!-- <span class="fa fa-line-chart banner-icon" aria-hidden="true"></span> -->
							<h4 style="color:#922b7b">校友与发展</h4>
							<p>凝聚校友力量•助力南开发展</p>
						</div>
						<div class="clearfix"> </div>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!--//services-->
	<!-- <div class="tlinks">Collect from <a href="http://www.cssmoban.com/"  title="网站模板">网站模板</a></div> -->
	<!--gallery-->
	<div class="gallery" id="gallery">
		<h3 class="title" >
            <?= Html::a('校庆新闻',['yii-activity/index'],['style'=>'color:#922b7b'])?>
        </h3>
        <hr style="margin:10px 0 20px 0">
		<div class="container">
			<div class="col-md-12">
                <p>
                    <a class="item-title" href="/2019/0117/c10880a118518/page.htm" style="color:#000000"> · 习近平总书记视察南开大学</a>
                    <p style="float:right;padding-right:10px;">2019-01-17</p>
                </p>
                </br>
			</div>
			<div class="col-md-12">
                <p>
                    <a class="item-title" href="/2019/0117/c10880a118518/page.htm" style="color:#000000"> · 习近平总书记视察南开大学</a>
                    <p style="float:right;padding-right:10px;">2019-01-17</p>
                </p>
                </br>
            </div>
			<div class="col-md-12">
                <p>
                    <a class="item-title" href="/2019/0117/c10880a118518/page.htm" style="color:#000000"> · 习近平总书记视察南开大学</a>
                    <p style="float:right;padding-right:10px;">2019-01-17</p>
                </p>
                </br>
            </div>
			<div class="col-md-12">
                <p>
                    <a class="item-title" href="/2019/0117/c10880a118518/page.htm" style="color:#000000"> · 习近平总书记视察南开大学</a>
                    <p style="float:right;padding-right:10px;">2019-01-17</p>
                </p>
                </br>
            </div>
			<!-- <div class="col-md-4 col-sm-4 col-xs-6 agileinfo_portfolio_grid project">
				<a href="images/g6.jpg" class="lsb-preview" data-lsb-group="header">
					<div class="agileits_portfolio_grid project_icon">
						<img src="images/g6.jpg" alt=" " class="img-responsive">
					</div>
				</a>
			</div> -->
			<div class="clearfix"> </div>

		</div>
	</div>
	<!--//gallery-->
	<!--team-->
    <div class="team" id="team">
        <div class="container">
            <h3 class="title clr">开发团队</h3>
            <div class="team-us">
                <div class="col-sm-4 col-xs-4 team-grid">
                    <div class="team-members">
                        <div class="team-avatar">
                            <img src="../web/statics/images/tm1.jpg" class="img-responsive" alt="">
                        </div>
                        <div class="team-desc">
                            <h4>John Doe</h4>
                            <span>Marketing</span>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 col-xs-4 team-grid">
                    <div class="team-members">
                        <div class="team-avatar">
                            <img src="../web/statics/images/tm2.jpg" class="img-responsive" alt="">
                        </div>
                        <div class="team-desc">
                            <h4>Melisa Doe</h4>
                            <span>Founder</span>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 col-xs-4 team-grid">
                    <div class="team-members">
                        <div class="team-avatar">
                            <img src="../web/statics/images/tm3.jpg" class="img-responsive " alt="">
                        </div>
                        <div class="team-desc">
                            <h4>Alex Atkinson</h4>
                            <span>Director</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--//team-->
    
    <!--//news letter-->
    <div class="contact" id="contact">
        <div class="container">
            <h3 class="title clr">捐款致谢</h3>
            <div class="agileinfo-contact-two-grids">

                <div class="col-md-7 contact-us">
                    <form action="#" method="post">
                        <div class="col-md-6 col-sm-6 col-xs-6 styled-input">
                            <input type="text" name="Name" placeholder="Name" required="">
                        </div>

                        <div class="col-md-6 col-sm-6 col-xs-6 styled-input">
                            <input type="text" name="Last Name" placeholder="Last Name" required="">
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-6 styled-input">
                            <input type="email" name="Email" placeholder="Email" required="">

                        </div>

                        <div class="col-md-6 col-sm-6 col-xs-6 styled-input">

                            <input type="text" name="phone" placeholder="phone" required="">
                        </div>
                        <div class="clearfix">
                        </div>
                        <div class="styled-input">

                            <textarea name="Message" placeholder="Message" required></textarea>
                        </div>
                        <div>
                            <div class="contact-buttn">
                                <input type="submit" value="SEND">
                            </div>
                        </div>
                    </form>
                </div>
                <div class=" col-md-5 col-sm-8 col-xs-7 contact-map">
                    <div class="map-grid">
                        <iframe src=""></iframe>

                    </div>
                    <div class="contact-icons">
                        <div class="footer_grid_left">
                            <h5>Address</h5>
                            <p>1234k Avenue, 4th block,<br> New York, USA
                            </p>
                        </div>
                        <div class="footer_grid_left">
                            <h5> Contact Us</h5>
                            <p>+(000) 123 4565 32</p>
                        </div>
                        <div class="footer_grid_left">
                            <h5>Email Us</h5>
                            <a href="mailto:info@example.com">info@example1.com</a>

                        </div>

                    </div>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
    </div>

    <!--news letter-->
    <div class="newsletter" id = "newsletter">
        <div class="container">
            <div class="subscribe">
                <h3 class="title">登录</h3>
                <form action="#" method="post">
                    <div class="col-md-6 col-sm-6 col-xs-6 sub-letter">

                        <input type="text" name="Name" placeholder="Name" required="">
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-6 sub-letter">
                        <input type="email" name="Email" placeholder="Email" required="">
                    </div>
                    <div class="clearfix"> </div>
                    <div class="w3-agile-click">
                        <input type="submit" value="SEND">
                    </div>
                </form>
            </div>
        </div>
    </div>

	<!-- footer -->
	<footer>
		<div class="container">
			<div class="col-md-3 wls-bottom-head">
				<p><a href="index.php" style="margin: 0px 0px 0px;font-size: 15px;">南开大学建校100周年</a></p>
			</div>
			<div class="col-md-6 header-side">
				<p>• 津ICP备05003116号 | Copyright 2018 © All Right Reserved</p>
			</div>
			<!-- <div class="col-md-3 header-side">
				<div class="buttom-social-grids">
					<ul>
						<li><a href="#"><span class="fa fa-facebook"></span></a></li>
						<li><a href="#"><span class="fa fa-twitter"></span></a></li>
						<li><a href="#"><span class="fa fa-rss"></span></a></li>
						<li><a href="#"><span class="fa fa-vk"></span></a></li>
					</ul>
				</div>
			</div> -->
		</div>
	</footer>
	<!-- //footer  -->

	<!--js working-->
	<script src='../web/statics/js/jquery-2.2.3.min.js'></script>

	<!-- //js  working-->
	<script src="../web/statics/js/responsiveslides.min.js"></script>

	<script>
		// You can also use "$(window).load(function() {"
		$(function () {
			// Slideshow 4
			$("#slider4").responsiveSlides({
				auto: true,
				pager: true,
				nav: false,
				speed: 900,
				namespace: "callbacks",
				before: function () {
					$('.events').append("<li>before event fired.</li>");
				},
				after: function () {
					$('.events').append("<li>after event fired.</li>");
				}
			});

		});
	</script>
	<!--// banner-->
	<!-- gallery-pop-up -->
	<script src="../web/statics/js/jquery.chocolat.js"></script>
	<link rel="stylesheet" href="../web/statics/css/chocolat.css" type="text/css" media="screen">
	<!--light-box-files -->
	<script>
		$(function () {
			$('.agileinfo_portfolio_grid a').Chocolat();
		});
	</script>
	<!-- //gallery-pop-up -->
	<!-- start-smoth-scrolling -->
	<script src="../web/statics/js/move-top.js"></script>
	<script src="../web/statics/js/easing.js"></script>
	<script>
		jQuery(document).ready(function ($) {
			$(".scroll").click(function (event) {
				event.preventDefault();
				$('html,body').animate({ scrollTop: $(this.hash).offset().top }, 1000);
			});
		});
	</script>
	<!-- start-smoth-scrolling -->

	<!-- here stars scrolling icon -->
	<script>
		$(document).ready(function () {
			
			// var defaults = {
			// containerID: 'toTop', // fading element id
			// containerHoverID: 'toTopHover', // fading element hover id
			// scrollSpeed: 1200,
			// easingType: 'linear' 
			// };
			

			$().UItoTop({ easingType: 'easeOutQuart' });

		});
	</script>
	<!-- //here ends scrolling icon -->

	<!--bootstrap-->
	<script src="../web/statics/js/bootstrap.js"></script>
	<!--// bootstrap-->
</body>
<script>
        function init(){
            setInterval("changeImg()",3000);
        }
        var i=1;
        function changeImg(){
            i++;
            document.getElementById("luobotu").src="../web/statics/images/c"+i+".jpg";
            if(i==4){
                i=0;
            }
        }
    </script>
</html>
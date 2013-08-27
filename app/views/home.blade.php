<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
    <head>
        <title>Quick Hits</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
        <meta name="description" content="Elegant Accordion with jQuery and CSS3" />
        <meta name="keywords" content="jquery, slide out,accordion, css3, fadeout, fadein, elegant, fancy, box shadow"/>

		
		@foreach($styles as $style)
			<link href="{{ URL::asset('css/'.$style) }}" rel="stylesheet">
		@endforeach	
        

		<link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300|Playfair+Display:400italic' rel='stylesheet' type='text/css' />
		
        <link rel="stylesheet" href="css/style.css" type="text/css" media="screen"/>
        <style>
            {
                margin:0;
                padding:0;
            }
            body{
                font-family:Arial;
                background-image: URL('images/bg.png');
				background-repeat:repeat-y repeat-x;
            }
            a{
                color:#444;
            }
            a:hover{
                color:#999;
            }
            .title{
                width:350px;
                height:152px;
                position:absolute;
                top:10px;
                background:transparent url(images/Logo.png) no-repeat top left;
            }
            
            #content{
                margin:0 auto;
            }
            .reference{
                clear:both;
                top:180px;
                left:10px;
                position:absolute;
                text-align:left;
                width:500px;
                padding:20px;
                background-color:#fff;
                -moz-box-shadow:1px 3px 15px #ddd;
                -webkit-box-shadow:1px 3px 15px #ddd;
                box-shadow:1px 3px 15px #ddd;
            }
			.navigation{
                top:15px;
                right:10px;
                position:absolute;
                text-align:right;
                width:400px;
                padding:20px;
                background-color:#fff;
                -moz-box-shadow:1px 3px 15px #ddd;
                -webkit-box-shadow:1px 3px 15px #ddd;
                box-shadow:1px 3px 15px #ddd;								
            }
            .reference p a{
                text-transform:uppercase;
                text-shadow:1px 1px 1px #fff;
                color:#666;
                text-decoration:none;
                font-size:10px;
            }
            .reference p a:hover{
                color:#333;
            }
			.navigation li{
				float: right;
				list-style: none;
				padding: 0 23px 0 23px;
			}

        </style>
		
		<noscript>
			<link rel="stylesheet" type="text/css" href="css/noscript.css" />
		</noscript>
    </head>

    <body>

	<div>
		
			<div class="title" style = "margin-left:5%"></div>	
			<div class="navigation" style = "margin-right:5%;margin-top:6%">				
                <ul style="list-style:none;display: block; top:0px;">
					<li><a href="#">Contacts</a></li>
					<li><a href="#">Projects</a></li>
					<li><a href="#">About</a></li>
					<li><a href="#">Home</a></li>
				</ul>
            </div>	
	</div>
	
	
	<div>
       <div class="reference" style="height: 440px; width: 600px;">
                <div class="wrapper" style="top:10px;">
                <div id="ei-slider" class="ei-slider">
                    <ul class="ei-slider-large">
                        <li>

                            <img src="images/large/1.jpg" alt="image01" />
                            <div class="ei-title">
                                <h2>Creative</h2>
                                <h3>Styles</h3>
                            </div>
                        </li>
                        <li>
                            <img src="images/large/2.jpg" alt="image02" />
                            <div class="ei-title">
                                <h2>Innovative</h2>
                                <h3>User Friendly</h3>
                            </div>
                        </li>
                        <li>
                            <img src="images/large/3.jpg" alt="image03"/>
                            <div class="ei-title">
                                <h2>Professional</h2>
                                <h3>Best Hire</h3>
                            </div>
                        </li>
                        <li>
                            <img src="images/large/4.jpg" alt="image04"/>
                            <div class="ei-title">
                                <h2>Dedicated</h2>
                                <h3>Best Delivery</h3>
                            </div>
                        </li>
                        <li>
                            <img src="images/large/5.jpg" alt="image05"/>
                            <div class="ei-title">
                                <h2>Quick</h2>
                                <h3>Hits</h3>
                            </div>
                        </li>

                    </ul><!-- ei-slider-large -->
                    <ul class="ei-slider-thumbs">
                        <li class="ei-slider-element">Current</li>
                        <li><a href="#">Slide 1</a><img src="images/large/1.jpg" alt="thumb01" /></li>
                        <li><a href="#">Slide 2</a><img src="images/large/2.jpg" alt="thumb02" /></li>
                        <li><a href="#">Slide 3</a><img src="images/large/3.jpg" alt="thumb03" /></li>
                        <li><a href="#">Slide 4</a><img src="images/large/4.jpg" alt="thumb04" /></li>
                        <li><a href="#">Slide 5</a><img src="images/large/5.jpg" alt="thumb05" /></li>											
                    </ul><!-- ei-slider-thumbs -->
                </div><!-- ei-slider -->

            </div>
		</div>		
			<div style = "margin-top:50%;margin-left:1%">
				<span style = "font-weight:bold">&copy Quick Hits 2013</span>
			</div>	
           <ul class="accordion" id="accordion" style="z-index: 3000; top:180px; height:500px; margin-right:5%">
                <li class="bg1">
                    <div class="heading">Lance Zaldua</div>
                    <div class="bgDescription"></div>
                    <div class="description">
                        <h3>Lance Patrick C. Zaldua</h3>
                        <ul>
							<ol>Expertise: PHP, JAVA, Ruby</ol>
						</ul>
                        <a href="#">more &rarr;</a>
                    </div>
                </li>
                <li class="bg2">
                    <div class="heading">Mark Torrano</div>
                    <div class="bgDescription"></div>
                    <div class="description">
                        <h3>Mark Jester A. Torrano</h3>
                        <ul>
							<ol>Expertise: PHP, JAVA, Ruby</ol>
						</ul>
                        <a href="#">more &rarr;</a>
                    </div>

                </li>
                <li class="bg3">
                    <div class="heading">Luis <br/> Robles</div>
                    <div class="bgDescription"></div>
                    <div class="description">
                        <h3>Cesario Luis P. Robles Jr.</h3>
                        <ul>
							<ol>Expertise: PHP, JAVA, Ruby</ol>
						</ul>
                        <a href="#">more &rarr;</a>
                    </div>

                </li>
                <li class="bg4 bleft">
                    <div class="heading">Axel <br/>Felipe</div>
                    <div class="bgDescription"></div>
                    <div class="description">
                        <h3>Axel Mikael M. Felipe</h3>
                        <ul>
							<ol>Expertise: PHP, JAVA, Ruby</ol>
						</ul>
                        <a href="#">more &rarr;</a>
                    </div>

                </li>
					<li class="bg5 bleft">
                    <div class="heading">Mark Chavez</div>
                    <div class="bgDescription"></div>
                    <div class="description">
                        <h3>Mark Joel Chavez</h3>
                        <ul>
							<ol>Expertise: PHP, JAVA, Ruby</ol>
						</ul>
                        <a href="#">more &rarr;</a>
                    </div>

                </li>
            </ul>		

	</div>
	

        <!-- The JavaScript -->
		@foreach($scripts as $script)
			<script type = "text/javascript" src = "{{ URL::asset('js/'.$script) }}" ></script>
		@endforeach

		<script type="text/javascript">
		<!-- Corousel -->
			$(function() {
                $('#ei-slider').eislideshow({
					animation			: 'center',
					autoplay			: true,
					slideshow_interval	: 3000,
					titlesFactor		: 0
                });
            });			
			
		<!-- End Corousel -->
            $(function() {
                $('#accordion > li').hover(
                    function () {
                        var $this = $(this);
                        $this.stop().animate({'width':'480px'},500);
                        $('.heading',$this).stop(true,true).fadeOut();
                        $('.bgDescription',$this).stop(true,true).slideDown(500);
                        $('.description',$this).stop(true,true).fadeIn();
                    },
                    function () {
                        var $this = $(this);
                        $this.stop().animate({'width':'85px'},1000);
                        $('.heading',$this).stop(true,true).fadeIn();
                        $('.description',$this).stop(true,true).fadeOut(500);
                        $('.bgDescription',$this).stop(true,true).slideUp(700);
                    }
                );
            });
        </script>
    </body>
</html>
@extends('layouts.master')

@section('content')
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
@stop
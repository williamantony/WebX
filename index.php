<!DOCTYPE html>
<html lang="en-US">
<head>
	
<?php
	
	function getUrlPrefix(){
		$uri = $_SERVER["REQUEST_URI"];
		$len = count(explode("/", $uri)) - 4;
		return str_repeat("../", $len);
	}
	
	include_once(getUrlPrefix()."config.php");
	
	$META	= array(
		"title"			=> "Willsquad Corporation - Homepage",
		"description"	=> "",
		"keywords"		=> ""
	);
	
	include_once(getUrlPrefix()."head.php");

?>	

<link rel="stylesheet" type="text/css" href="files/css/external/swiper.min.css" />

<link rel="stylesheet" type="text/css" href="files/css/homepage/homepage-main.css" />	
<link rel="stylesheet" type="text/css" href="files/css/homepage/cover.css" />
<link rel="stylesheet" type="text/css" href="files/css/homepage/introduction.css" />
<link rel="stylesheet" type="text/css" href="files/css/homepage/servicesoffered.css" />
<link rel="stylesheet" type="text/css" href="files/css/homepage/servicesummary.css" />
<link rel="stylesheet" type="text/css" href="files/css/homepage/whychooseus.css" />
<link rel="stylesheet" type="text/css" href="files/css/homepage/fromourblog.css" />
<link rel="stylesheet" type="text/css" href="files/css/homepage/followupdates.css" />
<link rel="stylesheet" type="text/css" href="files/css/homepage/footernavigation.css" />
	

	
</head>
<body>
	
<div class="website page_homepage unselectable" id="website">
	<div class="wrapper">
	
		<?
			// Include Header Module
			include_once($_SERVER["DOCUMENT_ROOT"].$url_prefix."files/php/modules/header.php");
		?>
		
		<div class="content" id="content">
			<div class="wrapper">
				<div class="holder">
					
					<section class="cover">
						<div class="wrapper">
							<div class="holder" id="homepage_coverholder">
								
								<div class="abs bgtexture"></div>
								<div class="abs whitegradient"></div>
								<div class="abs worldmap"></div>
								
								<div class="textcontent">
									<div class="full_height_ib"></div><!--
									--><div class="holder">
									
										<div class="text">
											<div class="worldmap"></div>
											<h1>
												we are a <span class="strong">creative&nbsp;agency</span>
												<br/>
												<span class="desc">passionate&nbsp;about delivering 
													<span class="new_line">affordable&nbsp;services</span>
												</span>
											</h1>
										</div>
									
										<div class="services">
											<div class="wrapper">
											
												<div class="arrow_controls">
													<div class="arrow leftarrow swiper-button-prev">
														<div class="full_height_ib"></div><!--
														--><div class="icon">
															<div class="img"></div>
														</div>
													</div><!--
													
													--><div class="full_height_ib"></div><!--
													
													--><div class="arrow_spacer"></div><!--
													
													--><div class="arrow rightarrow swiper-button-next">
														<div class="full_height_ib"></div><!--
														--><div class="icon">
															<div class="img"></div>
														</div>
													</div>
												</div>
												
												<div class="holder  swiper-container">
													<div class="overflow swiper-wrapper">
													
														<div class="item swiper-slide">
															<div class="holder">
																<div class="content">
																	<div class="icon webdesign">
																		<div class="img"></div>
																	</div><!--
																	--><div class="text">
																		<div class="holder">
																			<div class="head">Website</div>
																			Development
																		</div>
																	</div>
																</div>
															</div>
														</div><!--
														--><div class="item swiper-slide">
															<div class="holder">
																<div class="content">
																	<div class="icon branding">
																		<div class="img"></div>
																	</div><!--
																	--><div class="text">
																		<div class="holder">
																			<div class="head">Brand</div>
																			Management
																		</div>
																	</div>
																</div>
															</div>
														</div><!--
														--><div class="item swiper-slide">
															<div class="holder">
																<div class="content">
																	<div class="icon seo">
																		<div class="img"></div>
																	</div><!--
																	--><div class="text">
																		<div class="holder">
																			<div class="head">Search Engine</div>
																			Optimization
																		</div>
																	</div>
																</div>
															</div>
														</div><!--
														--><div class="item swiper-slide">
															<div class="holder">
																<div class="content">
																	<div class="icon printdesign">
																		<div class="img"></div>
																	</div><!--
																	--><div class="text">
																		<div class="holder">
																			<div class="head">Print & Graphic</div>
																			Design
																		</div>
																	</div>
																</div>
															</div>
														</div><!--
														-->

													</div>											
												</div>
												
											</div>
										</div>
									
										<div class="action">
											<div class="holder">
												
												<a href="#">
													<button class="dark nostyle">
														<div class="bg"></div>
														<div class="text">Explore Services</div>
													</button>
												</a><!--
												
												--><a href="#">
													<button class="red nostyle">
														<div class="bg"></div>
														<div class="text">Get Instant Quote</div>
													</button>
												</a>
												
											</div>
										</div>
									
									</div>
								</div>
								
							</div>
						</div>
					</section>
					
					
					<section class="contentsection servicesummary">
						<div class="wrapper">
							<div class="image"></div>	
							<div class="abs bg"></div>	
							<div class="holder">
								
								<div class="full_height_ib"></div><!--
								--><div class="content">
								
									<div class="summary">
										<div class="content">
											<div class="wrapper">
												<div class="holder">

													<h3><span class="highlight">Website</span> Design</h3>

													<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>


													<a href="#">
<!--														<button class="small transparent white outlineblack">-->
														<button class="small blue nostyle">
															<div class="bg"></div>
															<div class="text">learn More</div>
														</button>
													</a>

												</div>
											</div>
										</div>
									</div>
										
								</div>
								
							</div>
						</div>
					</section>
								
					
					
					<section class="contentsection servicefeatures">
						<div class="wrapper">
							<div class="holder">
								
								<div class="full_height_ib"></div><!--
								--><div class="content">																
									<div class="wrapper">
										
										<div class="features">
											<div class="holder">
											
												<div class="featureslist">

													<div class="item">
														<div class="holder">

															<div class="head">
																<div class="full_height_ib"></div><!--

																--><div class="icon responsive_icon">
																	<div class="img"></div>
																</div><!--

																--><div class="feature_name">
																	<div class="text">Mobile Friendly</div>
																</div>
															</div>
															<div class="feature_desc">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever.</div>

														</div>
													</div><!--

													--><div class="item">
														<div class="holder">

															<div class="head">
																<div class="full_height_ib"></div><!--

																--><div class="icon cms_icon">
																	<div class="img"></div>
																</div><!--

																--><div class="feature_name">
																	<div class="text">CMS Integration</div>
																</div>
															</div>
															<div class="feature_desc">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever.</div>

														</div>
													</div><!--

													--><div class="item">
														<div class="holder">

															<div class="head">
																<div class="full_height_ib"></div><!--

																--><div class="icon ecommerce_icon">
																	<div class="img"></div>
																</div><!--

																--><div class="feature_name">
																	<div class="text">E-Commerce</div>
																</div>
															</div>
															<div class="feature_desc">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever.</div>

														</div>
													</div>

												</div>
												
											</div>
										</div>
										
									
									</div>									
									<div class="morefeatureslink">See more available features &#129034;</div>
								</div>
								
							</div>
						</div>
					</section>
								
					
					<section class="contentsection serviceotherservices">
						<div class="wrapper">
							<div class="holder">
								
								<div class="full_height_ib"></div><!--
								--><div class="content">																
									<div class="wrapper">
										
										
									
									</div>
								</div>
								
							</div>
						</div>
					</section>
								
					
					<section class="contentsection servicesoffered hide">
						<div class="wrapper">
							<div class="holder">
								
								<div class="full_height_ib"></div><!--
								--><div class="content">
									<div class="wrapper">

										<div class="row headrow">
											<div class="holder">

												<h2>Services</h2>

											</div>
										</div>

										<div class="row">
											<div class="holder" id="services_list">

												<div class="column">
													<div class="holder">
													
														<div class="block">

															<div class="serviceimage serviceimage_big">
																<div class="image"></div>
															</div>

															<div class="links">

																<li class="head">
																	<a href="#">
																		Website Design
																	</a>
																</li>

																<li>
																	<a href="#">
																		Responsive Design
																	</a>
																</li>
																<li>
																	<a href="#">
																		UI/UX Oriented Design
																	</a>
																</li>
																<li>
																	<a href="#">
																		Ecommerce Development
																	</a>
																</li>
																<li>
																	<a href="#">
																		WordPress Development
																	</a>
																</li>
																<li>
																	<a href="#">
																		CMS Integration
																	</a>
																</li>
																<li>
																	<a href="#">
																		Web App Development
																	</a>
																</li>
																<li>
																	<a href="#">
																		Landing Page Design
																	</a>
																</li>

															</div>
															
														</div>
														
													</div>
												</div><!--

												--><div class="column">
													<div class="holder">

														<div class="block">
														
															<div class="serviceimage serviceimage_big">
																<div class="image"></div>
															</div>
														
															<div class="links">
																													
																<li class="head">
																	<a href="#">
																		Print Design
																	</a>
																</li>

																<li>
																	<a href="#">
																		Business Cards
																	</a>
																</li>
																<li>
																	<a href="#">
																		Postcards
																	</a>
																</li>
																<li>
																	<a href="#">
																		Flyers & Brochures
																	</a>
																</li>
																<li>
																	<a href="#">
																		Invoices & Forms
																	</a>
																</li>
																<li>
																	<a href="#">
																		Posters & Banners
																	</a>
																</li>
																<li>
																	<a href="#">
																		Corporate Branding Kit
																	</a>
																</li>
																<li>
																	<a href="#">
																		Custom Graphics
																	</a>
																</li>
																
															</div>
															
														</div>

													</div>
												</div><!--

												--><div class="column">
													<div class="holder">

														<div class="block">
													
															<div class="serviceimage">
																<div class="image"></div>
															</div>

															<div class="links">
															
																<li class="head">
																	<a href="#">
																		Branding
																	</a>
																</li>

																<li>
																	<a href="#">
																		Logo Design
																	</a>
																</li>
																<li>
																	<a href="#">
																		Reputation Management
																	</a>
																</li>
																
															</div>	
															
														</div>	
														
														<div class="block">
															
															<div class="serviceimage">
																<div class="image"></div>
															</div>
															
															<div class="links">
															
																<li class="head">
																	<a href="#">
																		Marketing
																	</a>
																</li>											
																<li>
																	<a href="#">
																		Online Advertising
																	</a>
																</li>											
																<li>
																	<a href="#">
																		Search Engine Optimization
																	</a>
																</li>	
																<li>
																	<a href="#">
																		Social Media Management
																	</a>
																</li>										
																<li>
																	<a href="#">
																		Content Writing
																	</a>
																</li>
																
															</div>
															
														</div>

													</div>
												</div>

											</div>
										</div>

										<div class="row userlookingfor" id="userlookingfor">
											<div class="holder">

												<div class="text">
													Looking for something&nbsp;else ?
												</div>

												<a href="#">
													<button class="dark outlineblack">
														<div class="bg"></div>
														<div class="text">Let's Talk</div>
													</button>
												</a>

											</div>
										</div>

									</div>
								</div>
								
							</div>
						</div>
					</section>
					
					
					<section class="contentsection fromourblog">
						<div class="wrapper">
							<div class="holder">
								
								<div class="full_height_ib"></div><!--
								--><div class="content">
									<div class="wrapper">

										<div class="row headrow">
											<div class="holder">

												<h2>
													Updates
												</h2>

											</div>
										</div>

										<div class="row">
											<div class="holder">

												<div class="blogposts" id="blogposts">

													<div class="item">
														<div class="holder">

															<div class="image">
																<img src="https://images.unsplash.com/photo-1477777404980-710a373f2d7e?dpr=1&auto=compress,format&fit=crop&w=376&h=251&q=80&cs=tinysrgb&crop=&bg=" />
																<div class="bg"></div>
															</div>

															<div class="text">
																<div class="bg"></div>
																<div class="holder">

																	<h6>What is the average website lifespan? 10 Factors In Website Life Expectancy.</h6>

																</div>
																<div class="clicktoread">Click to read</div>
															</div>

														</div>
													</div><!--

													--><div class="item">
														<div class="holder">

															<div class="image">
																<img src="https://images.unsplash.com/photo-1486312338219-ce68d2c6f44d?dpr=1&auto=compress,format&fit=crop&w=376&h=250&q=80&cs=tinysrgb&crop=&bg=" />
																<div class="bg"></div>
															</div>

															<div class="text">
																<div class="bg"></div>
																<div class="holder">

																	<h6>What is Google Tag Manager and why use it? The truth about Google Tag Manager.</h6>

																</div>
																<div class="clicktoread">Click to read</div>
															</div>

														</div>
													</div><!--

													--><div class="item">
														<div class="holder">

															<div class="image">
																<img src="https://images.unsplash.com/photo-1485988412941-77a35537dae4?dpr=1&auto=compress,format&fit=crop&w=376&h=244&q=80&cs=tinysrgb&crop=&bg=" />
																<div class="bg"></div>
															</div>

															<div class="text">
																<div class="bg"></div>
																<div class="holder">

																	<h6>Keyword Targeting: A Simple SEO Trick When You Have Two Closely Related Topics.</h6>

																</div>
																<div class="clicktoread">Click to read</div>
															</div>

														</div>
													</div>

												</div>

											</div>
										</div>
										
									</div>
								</div>
								
							</div>
						</div>
					</section>
					
					
					<section class="contentsection followupdates">
						<div class="wrapper">
							<div class="holder">
								
								<div class="full_height_ib"></div><!--
								--><div class="content">
									<div class="wrapper">

										<div class="row newslettersignup" id="newslettersignup">
											<div class="holder">
												
												<div class="col icon_column">
													<div class="holder">
													
														<div class="icon newsletter_icon">
															<div class="img"></div>
														</div>
													
													</div>
												</div><!--
												
												--><div class="col signup_column">
													<div class="holder">

														<h6>
															Receive <span class="highlight">updates</span> in your inbox.
														</h6>

														<div class="form">
															<div class="holder">

																<div class="input">
																	<div class="holder">
																		<input type="text" placeholder="Enter your Email Address" />
																	</div>
																</div><!--

																--><a href="#">
																	<button class="blue nostyle">
																		<div class="bg"></div>
																		<div class="text">Subscribe</div>
																	</button>
																</a>

															</div>
														</div>

													</div>
												</div>

											</div>
										</div>
										
										
									</div>
								</div>
								
							</div>
						</div>
					</section>
					
					
					
					
				</div>
			</div>
		</div>
		
		<?
			// Include Footer Module
			include_once($_SERVER["DOCUMENT_ROOT"].$url_prefix."files/php/modules/footer.php");
		?>
		
	</div>	
</div>

<script src="files/js/swiper.min.js"></script>
<script type="text/javascript" src="<? echo getUrlPrefix(); ?>files/js/main.js"></script>
</body>
</html>




const returnArray = [];
  const allArgs = elements.push(args);
  let remainingItems = allArgs.length;

  while (remainingItems > 0) {

    for(let i = 0; i <= remainingItems - 1; i++) {
      
      const thisItem = allArgs[i];
      
      if (Array.isArray(thisItem)) {
        remainingItems += thisItem.length;
      }

    }

  }
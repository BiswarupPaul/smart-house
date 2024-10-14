<?php
ob_start();
include('includes/header.php');
include("includes/conn.php");
?>
	
	<!-- banner -->
	<div class="banner">
		<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
		  <div class="carousel-inner">
			<div class="carousel-item active">
			  <img src="images/slider-1.jpg" class="d-block w-100" alt="...">
					<div class="carousel-caption wow zoomIn">
					<h1>Lorem Ipsum is simply
						<div class="slidingVertical">
						<span class="quotes">First</span>
						<span class="quotes">Second</span>
						<span class="quotes">Third</span>
						<span class="quotes">Fourth</span>
						<span class="quotes">Fifth</span>
						</div>
					</h1>
					<p>Some representative placeholder content for the first slide.</p>
					 <a href="" class="custom-btn btn-primary"><span>Read More <i class="fa fa-angle-right"></i></span></a>
					 <a href="" class="custom-btn btn-primary"><span>Read More <i class="fa fa-angle-right"></i></span></a>
					 <a href="" class="custom-btn btn-primary"><span>Read More <i class="fa fa-angle-right"></i></span></a>
					 <a href="" class="custom-btn btn-primary"><span>Read More <i class="fa fa-angle-right"></i></span></a>
					 <div class="clearfix"></div>
					 <a href="contact.php" class="btn btn-secondary mt-3 pulseit"><span>Get Free Consultant <i class="fa fa-angle-right"></i></span></a>
				 
					</div>
			</div>
		  </div> 
		</div>
	</div>
	<!-- /banner -->
	
	
	<!-- about -->
	<div class="sectiongap">
		<div class="container">
			<div class="row">
				<div class="col-md-6 wow fadeInDown">
					<img class="img-fluid" src="images/about.jpg">
				</div>	
				<div class="col-md-6 wow fadeInUp">
					<div class="mb-3" data-aos="fade-up">
						<h1>Lorem Ipsum is simply dummy</h1>
						<p>
						Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not
						</p>
						<ul class="tick">
							<li>Lorem Ipsum is simply dummy text</li>
							<li>Lorem Ipsum is simply dummy text</li>
							<li>Lorem Ipsum is simply dummy text</li>
							<li>Lorem Ipsum is simply dummy text</li>
							<li>Lorem Ipsum is simply dummy text</li>
						</ul>
						<a href="about.php" class="custom-btn btn-primary"><span>Read More <i class="fa fa-angle-right"></i></span></a>
					</div>	
				</div>	
			</div>
		</div>
	</div>
	<!-- /about -->
	
	
	

	<!-- Presenting products -->
	<div class="sectiongap">
		<div class="container">
			<div class="section-title text-center wow zoomIn">
				<h1>Lorem Ipsum is simply dummy text</h1>
				<p>
				Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever
				</p>
			</div>
			<div class="row">
				<div class="col-md-6 wow fadeInUp">
					<div class="row">
						<div class="col-md-6 col-6">
							<div class="grid">
								<figure class="effect-steve">
									<img src="images/SIP.jpg" alt="img33"/>
									<figcaption>
										<h2 class="align-middle">SIP Planning</h2>
										<p><a href="service.php" class="custom-btn btn-primary"><span>Know More <i class="fa fa-angle-right"></i></span></a></p>
									</figcaption>			
								</figure>
							</div>
						</div>
						<div class="col-md-6 col-6">
							<div class="grid">
								<figure class="effect-steve">
									<img src="images/Retirement-Plan.jpg" alt="img33"/>
									<figcaption>
										<h2>Retirement Planning</h2>
										<p><a href="service.php" class="custom-btn btn-primary"><span>Know More <i class="fa fa-angle-right"></i></span></a></p>
									</figcaption>			
								</figure>
							</div>
						</div>
						<div class="col-md-6 col-6">
							<div class="grid">
								<figure class="effect-steve">
									<img src="images/Child-Plan.jpg" alt="img33"/>
									<figcaption>
										<h2>Child Investment Planning</h2>
										<p><a href="service.php" class="custom-btn btn-primary"><span>Know More <i class="fa fa-angle-right"></i></span></a></p>
									</figcaption>			
								</figure>
							</div>
						</div>
						<div class="col-md-6 col-6">
							<div class="grid">
								<figure class="effect-steve">
									<img src="images/Lumsum.jpg" alt="img33"/>
									<figcaption>
										<h2>Lumpsum Investment Planning</h2>
										<p><a href="service.php" class="custom-btn btn-primary"><span>Know More <i class="fa fa-angle-right"></i></span></a></p>
									</figcaption>			
								</figure>
							</div>
						</div>
						
					</div>
				</div>	
				
				<div class="col-md-6 wow fadeInDown">
				<div class="bluebg">
					<div class="section-title text-center">
						<h3 style="color:#fff;">Lorem Ipsum is simply dummy text</h3>
						<p style="color:#fff;">Lorem Ipsum is simply dummy text of the printing and.</p>
					</div>
						<form name="confrm" method="post" action="">
							<div class="row">
							<div class="group form-group col-md-6">			
								<input type="text" class="form-control" id="name" required="" placeholder="Name *">
							</div>
						
							<div class="group form-group col-md-6"> 
								<input type="mail" class="form-control" id="email" required="" placeholder="Email *">
							</div>
						
							<div class="group form-group col-md-6"> 
								<input type="mail" class="form-control" id="phone" required="" placeholder="Phone *">	
							</div>
							<div class="group form-group col-md-6"> 
								<select class="form-select form-select-sm">
								  <option selected>Services looking for</option>
								  <option value="1">Mutual Fund</option>
								  <option value="2">Equity & Advisory</option>
								  <option value="3">Insurance</option>
								  <option value="4">Corporate FD</option>
								</select>
							</div>
							</div>
							<div class="text-group mb-3">
								<textarea required="required" class="form-control" rows="5"  placeholder="Submit your quiry here *"></textarea>
							</div>  

							<div class="text-center">
								<input type="submit" value="Enquiry" class="custom-btn btn-primary" name="" placeholder="Send Message">
							</div>							   
						</form>
									
						
					</div>	
				</div>	
			</div>
		</div>
	</div>
	<!-- /Presenting products -->
	
	
	
	

	<!-- Goal Calculator -->
	<div class="sectiongap">
		<div class="container">
			<div class="section-title text-center wow zoomIn">
				<h1>Lorem Ipsum is simply</h1>
				<p>
				Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever
				</p>
			</div>
			<div class="row">
				<div class="col-md-4 mb-3 wow fadeInUp">
				<a href="calculator.php">
				  <div class="box">
					<div class="icon pulseit"><i class="fa fa-calendar-check"></i></div>
					<div class="content equalheight" style="height: 88px;">
					  <h3>SIP Calculator</h3>
					  <p>Post text, link, image, video on Facebook &amp; Instagram automatically.</p>
					</div>
				  </div>
				  </a>
				</div>
				
				<div class="col-md-4 mb-3 wow fadeInDown">
				<a href="calculator.php">
				  <div class="box">
					<div class="icon pulseit"><i class="fa fa-calculator"></i></div>
					<div class="content equalheight" style="height: 88px;">
					  <h3>Retirement Calculator</h3>
					  <p>Post text, link, image, video on Facebook &amp; Instagram automatically.</p>
					</div>
				  </div>
				  </a>
				</div>
				
				<div class="col-md-4 mb-3 wow fadeInUp">
				<a href="calculator.php">
				  <div class="box">
					<div class="icon pulseit"><i class="fa fa-crosshairs"></i></div>
					<div class="content equalheight" style="height: 88px;">
					  <h3>Goal Calculator</h3>
					  <p>Post text, link, image, video on Facebook &amp; Instagram automatically.</p>
					</div>
				  </div>
				  </a>
				</div>
			</div>
		</div>
	</div>
	<!-- /Goal Calculator -->
	
	
	
	
	

	<!-- Plan Your Investment -->
	<div class="sectiongap logos">
		<div class="container">
			<div class="section-title text-center wow zoomIn">
				<h1>Plan Your Investment</h1>
				<p>
				Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever
				</p>
			</div>


			<div class="row seven-cols row row-cols-3 row-cols-sm-5   wow fadeInUp">
				<div class="col-md-1 logobox">
					<section class="hover-div"> 
						<img class="img-fluid" src="images/Birla_Logo.png">
						<a href="contact.php">Enquire Now</a>
					</section>
				</div>
				<div class="col-md-1 logobox">
					<section class="hover-div"> 
						<img class="img-fluid" src="images/Birla_Logo.png">
						<a href="contact.php">Enquire Now</a>
					</section>
				</div>
				<div class="col-md-1 logobox">
					<section class="hover-div"> 
						<img class="img-fluid" src="images/Birla_Logo.png">
						<a href="contact.php">Enquire Now</a>
					</section>
				</div>
				<div class="col-md-1 logobox">
					<section class="hover-div"> 
						<img class="img-fluid" src="images/Birla_Logo.png">
						<a href="contact.php">Enquire Now</a>
					</section>
				</div>
				<div class="col-md-1 logobox">
					<section class="hover-div"> 
						<img class="img-fluid" src="images/Birla_Logo.png">
						<a href="contact.php">Enquire Now</a>
					</section>
				</div>
				<div class="col-md-1 logobox">
					<section class="hover-div"> 
						<img class="img-fluid" src="images/Birla_Logo.png">
						<a href="contact.php">Enquire Now</a>
					</section>
				</div>
				<div class="col-md-1 logobox">
					<section class="hover-div"> 
						<img class="img-fluid" src="images/Birla_Logo.png">
						<a href="contact.php">Enquire Now</a>
					</section>
				</div>
				<div class="col-md-1 logobox">
					<section class="hover-div"> 
						<img class="img-fluid" src="images/Birla_Logo.png">
						<a href="contact.php">Enquire Now</a>
					</section>
				</div>
				<div class="col-md-1 logobox">
					<section class="hover-div"> 
						<img class="img-fluid" src="images/Birla_Logo.png">
						<a href="contact.php">Enquire Now</a>
					</section>
				</div>
				<div class="col-md-1 logobox">
					<section class="hover-div"> 
						<img class="img-fluid" src="images/Birla_Logo.png">
						<a href="contact.php">Enquire Now</a>
					</section>
				</div>
				<div class="col-md-1 logobox">
					<section class="hover-div"> 
						<img class="img-fluid" src="images/Birla_Logo.png">
						<a href="contact.php">Enquire Now</a>
					</section>
				</div>
				<div class="col-md-1 logobox">
					<section class="hover-div"> 
						<img class="img-fluid" src="images/Birla_Logo.png">
						<a href="contact.php">Enquire Now</a>
					</section>
				</div>
				<div class="col-md-1 logobox">
					<section class="hover-div"> 
						<img class="img-fluid" src="images/Birla_Logo.png">
						<a href="contact.php">Enquire Now</a>
					</section>
				</div>
				<div class="col-md-1 logobox">
					<section class="hover-div"> 
						<img class="img-fluid" src="images/Birla_Logo.png">
						<a href="contact.php">Enquire Now</a>
					</section>
				</div>
				<div class="col-md-1 logobox">
					<section class="hover-div"> 
						<img class="img-fluid" src="images/Birla_Logo.png">
						<a href="contact.php">Enquire Now</a>
					</section>
				</div>
				<div class="col-md-1 logobox">
					<section class="hover-div"> 
						<img class="img-fluid" src="images/Birla_Logo.png">
						<a href="contact.php">Enquire Now</a>
					</section>
				</div>
				<div class="col-md-1 logobox">
					<section class="hover-div"> 
						<img class="img-fluid" src="images/Birla_Logo.png">
						<a href="contact.php">Enquire Now</a>
					</section>
				</div>
				<div class="col-md-1 logobox">
					<section class="hover-div"> 
						<img class="img-fluid" src="images/Birla_Logo.png">
						<a href="contact.php">Enquire Now</a>
					</section>
				</div>
				<div class="col-md-1 logobox">
					<section class="hover-div"> 
						<img class="img-fluid" src="images/Birla_Logo.png">
						<a href="contact.php">Enquire Now</a>
					</section>
				</div>
				<div class="col-md-1 logobox">
					<section class="hover-div"> 
						<img class="img-fluid" src="images/Birla_Logo.png">
						<a href="contact.php">Enquire Now</a>
					</section>
				</div>
				<div class="col-md-1 logobox">
					<section class="hover-div"> 
						<img class="img-fluid" src="images/Birla_Logo.png">
						<a href="contact.php">Enquire Now</a>
					</section>
				</div>
			</div>
		</div>
	</div>
	<!-- /Plan Your Investment -->
	


<!-- Why Choose Us  -->
<div class="sectiongap">
	<div class="container">
		<div class="container">
			<div class="conainer">
				<div class="row">
				
				<div class="col-md-6 mb-2">
						<div class="section-title text-left wow zoomIn">
							<h2>Why Choose Us?</h2>
							<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
						</div>
						<div class="row wow fadeInUp">
							<div class="col-md-6 col-6 block">
								<i class="hovicon effect-1 sub-a pulseit">90%</i>
								<p>Quality of Work</p>
							</div>	
							
							<div class="col-md-6 col-6 block">
								<i class="hovicon effect-1 sub-a pulseit">90%</i>
								<p>Quality of Work</p>
							</div>

							<div class="col-md-6 col-6 block">
								<i class="hovicon effect-1 sub-a pulseit">90%</i>
								<p>Quality of Work</p>
							</div>

							<div class="col-md-6 col-6 block">
								<i class="hovicon effect-1 sub-a pulseit">90%</i>
								<p>Quality of Work</p>
							</div>			
						</div>
					</div>
				<div class="col-md-6 mb-2">
						<div class="section-title text-left wow zoomIn">
							<h2>Get Every Answer From Here</h2>
							<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
						</div>
						<div class="accordion wow fadeInDown" id="accordionExample">
						  <div class="accordion-item">
							<h2 class="accordion-header" id="headingOne">
							  <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
								Lorem Ipsum is simply dummy text
							  </button>
							</h2>
							<div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
							  <div class="accordion-body">
								Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.										
							  </div>
							</div>
						  </div>
						  <div class="accordion-item">
							<h2 class="accordion-header" id="headingTwo">
							  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
								Lorem Ipsum is simply dummy text
							  </button>
							</h2>
							<div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
							  <div class="accordion-body">
								Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.										
							  </div>
							</div>
						  </div>
						  
						  <div class="accordion-item">
							<h2 class="accordion-header" id="headingThree">
							  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
								Lorem Ipsum is simply dummy text
							  </button>
							</h2>
							<div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
							  <div class="accordion-body">
							   Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.	
							  </div>
							</div>
						  </div>
						  
						  <div class="accordion-item">
							<h2 class="accordion-header" id="headingFour">
							  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
								Lorem Ipsum is simply dummy text
							  </button>
							</h2>
							<div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
							  <div class="accordion-body">
							   Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.	
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
<!-- /Why Choose Us  -->




<!-- Happy Customer  -->
<div class="sectiongap bg1">
	<div class="container">
		<div class="container">
			<div class="counter">
				<div class="row text-center row-cols-3 justify-content-center">
					<div class="col-lg-3 col-6 mb-2 text-center">
					<div class="counter_img wow zoomIn"><img src="images/happy_client.png"></div>
					 <span id="count1" class="counter_txt">1500</span><span class="plus">+</span>
					 <div class="head2">Happy Clients</div>
					</div>
					
					<div class="col-lg-3 col-6 mb-2 aos-init">
					<div class="counter_img wow zoomIn"><img src="images/happy_client.png"></div>
					 <span id="count2" class="counter_txt">75</span><span class="plus">+</span>
					 <div class="head2">Happy Clients</div>
					</div>
					
					<div class="col-lg-3 col-6 mb-2 aos-init">
					<div class="counter_img wow zoomIn"><img src="images/happy_client.png"></div>
					 <span id="count3" class="counter_txt">100</span><span class="plus">+</span>
					 <div class="head2">Happy Clients</div>
					</div>
					
					<div class="col-lg-3 col-6 mb-2 aos-init">
					<div class="counter_img wow zoomIn"><img src="images/happy_client.png"></div>
					 <span id="count4" class="counter_txt">100</span><span class="plus">+</span>
					 <div class="head2">Happy Clients</div>
					</div>  
			   </div>
			</div>
		</div>
	</div>
</div>
<!-- /Happy Customer  -->




	<!-- blog --> 
	<section class="sectiongap" id="blog">
		<div class="container">
			<div class="section-title text-center wow zoomIn">
				<h2>Popular Blogs</h2>
				<div class="text">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat <br> nulla pariatur Duis aute irure dolor in reprehenderit in</div>
			</div>
			
			
			<div class="owl-carousel owl-blog wow fadeInUp">
				<div class="item">
					<div class="blog-box">
						<a href="#">
						<div class="team-box">
							<figure><img class="img-fluid card-img-top" src="images/blog1.jpg" alt="..."></figure>
							<div class="team-overlay">
								<div class="team-details">
									<div class="team-header">
										<div class="heading">Lorem Ipsum is simply dummy text</div>
										<div class="date"><i class="far fa-clock"></i> 17 Sep, 2021</div>
									</div>
								   <p>
									Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries,
									</p>
									<div class="more">Read More <i class="fas fa-plus"></i></div>	
								</div>
							</div>
						</div>
						</a>
					</div>		
				</div>		
			
				<div class="item">
					<div class="blog-box">
						<a href="#">
						<div class="team-box">
							<figure><img class="img-fluid card-img-top" src="images/blog2.jpg" alt="..."></figure>
							<div class="team-overlay">
								<div class="team-details">
									<div class="team-header">
										<div class="heading">Lorem Ipsum is simply dummy text</div>
										<div class="date"><i class="far fa-clock"></i> 17 Sep, 2021</div>
									</div>
								   <p>
									Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, 

									</p>									
									<div class="more">Read More <i class="fas fa-plus"></i></div>
								</div>
							</div>
						</div>
						</a>
					</div>		
				</div>		
			
				<div class="item">
					<div class="blog-box">
						<a href="#">
						<div class="team-box">
							<figure><img class="img-fluid card-img-top" src="images/blog1.jpg" alt="..."></figure>
							<div class="team-overlay">
								<div class="team-details">
									<div class="team-header">
										<div class="heading">Lorem Ipsum is simply dummy text</div>
										<div class="date"><i class="far fa-clock"></i> 17 Sep, 2021</div>
									</div>
								   <p>
									Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, 

									</p>									
									<div class="more">Read More <i class="fas fa-plus"></i></div>
								</div>
							</div>
						</div>
						</a>
					</div>		
				</div>		
			
				<div class="item">
					<div class="blog-box">
						<a href="#">
						<div class="team-box">
							<figure><img class="img-fluid card-img-top" src="images/blog2.jpg" alt="..."></figure>
							<div class="team-overlay">
								<div class="team-details">
									<div class="team-header">
										<div class="heading">Lorem Ipsum is simply dummy text</div>
										<div class="date"><i class="far fa-clock"></i> 17 Sep, 2021</div>
									</div>
								   <p>
									Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, 

									</p>									
									<div class="more">Read More <i class="fas fa-plus"></i></div>
								</div>
							</div>
						</div>
						</a>
					</div>		
				</div>		
			
			</div>
		</div>
	</section>
	<!-- /blog --> 
	

	<!-- testimonial -->	
		<section class="sectiongap testimonialbg" style="background-image: linear-gradient(to right, #4abee18a, #007fa58a, #0000008a, #0000008a),url(images/testimonialbg.jpg);-webkit-background-size: cover;background-size: cover;">
				<div class="container">

					<div class="row">
						<div class="col-md-7 mb-3">
							<div class="row">
								<div class="col-md-6 mb-3">
									<div class="testimonial_box mt-4 wow zoomIn">
										<div class="ticon"><img src="images/m.png"></div>
										<p>
											Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, 
										</p>
										<div class="cname">Somnath Chatterjee</div>
									</div>
								</div>
								<div class="col-md-6 mb-3">
									<div class="testimonial_box wow zoomIn">
										<div class="ticon"><img src="images/f.png"></div>
										<p>
											Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500sbook. 
										</p>
										<div class="cname">Somnath Chatterjee</div>
									</div>
								</div>
								<div class="col-md-6 mb-3">
									<div class="testimonial_box mt-4 wow zoomIn">
										<div class="ticon"><img src="images/m.png"></div>
										<p>
											Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, book. 
										</p>
										<div class="cname">Somnath Chatterjee</div>
									</div>
								</div>
								<div class="col-md-6 mb-3">
									<div class="testimonial_box wow zoomIn">
										<div class="ticon"><img src="images/f.png"></div>
										<p>
											Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, 
										</p>
										<div class="cname">Somnath Chatterjee</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-5">
							<div class="heading_section text-leftx">
								<h1 style="color:#fff;">Testimonial heading</h1>
								<p>
									Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, 
								</p>
								<ul class="tick2">
									<li><span>Lorem Ipsum is simply dummy text </span>
										<p>
										Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum 	has been the industry's standard dummy text ever since the 1500s, 
										</p>
									</li>

									<li><span>Lorem Ipsum is simply dummy text </span>
										<p>
										Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum 	has been the industry's standard dummy text ever since the 1500s, 
										</p>
									</li>
									
									<li><span>Lorem Ipsum is simply dummy text </span>
										<p>
										Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum 	has been the industry's standard dummy text ever since the 1500s, 
										</p>
									</li>
								</ul>
								<a href="contact.php" class="custom-btn btn-primary"><span>Enquire Now <i class="fa fa-angle-right"></i></span></a>
							</div>
						</div>
					</div>
				</div>
		</section>
	<!-- /testimonial --> 
	
	
	
	
	


<!-- contact -->
	<section class="sectiongap contactbg">

		<div class="container text-center">
		<div class="page_title wow fadeInUp">
			<h3>Get in Touch</h3>
			<p style="color:#000;">
			Lorem Ipsum is simply dummy text of the printing and typesetting industry.
			</p>
		</div>

		<div class="col-md-10 offset-md-1">
		<div class="row mt-2">
			<div class="col-md-4 mb-2">
			<div class="box_border wow flipInX">
				<div class="row">
					<div class="col-md-4 col-3"><div class="icon_circle2"><img src="images/phone_icon.png"></div></div>
					<div class="col-md-8 col-9">
						<div class="sub_heading_white">Call Us :</div>
						<p>033 2432 1920</p>
					</div>
				</div>
			</div>
			</div>	

			<div class="col-md-4 mb-2">
			<div class="box_border wow flipInX">
				<div class="row">
					<div class="col-md-4 col-3"><div class="icon_circle2"><img src="images/whatsapp_icon.png"></div></div>
					<div class="col-md-8 col-9">
						<div class="sub_heading_white">Whatsapp Us :</div>
						<p>+91 90073 77588</p>
					</div>
				</div>
			</div>
			</div>

			<div class="col-md-4 mb-2">
			<div class="box_border wow flipInX">
				<div class="row">
					<div class="col-md-4 col-3"><div class="icon_circle2"><img src="images/envelop_icon.png"></div></div>
					<div class="col-md-8 col-9">
						<div class="sub_heading_white">Email Us :</div>
						<p>info@info.com</p>
					</div> 
				</div>
			</div>
			</div>
		</div>
		</div>
		<div class="text-center mt-3"><a href="contact.php" class="custom-btn btn-primary wow fadeInUp"><span>Schedule a Meeting <i class="fas fa-paper-plane"></i></span></a></div>
		</div>
	</section>	
	<!-- contact -->

	
	
	
	

<!-- 
<div class="sectiongap bg2 popular_mf">
	<div class="container">
		<div class="container wow bounceIn">
			<h4 style="color:#f28422;">Most Popular Mutul Funds Companies:</h4>
			<ul class="">
				<li><a href="#">ABSL</a></li>
				<li><a href="#">ICICI PRU</a></li>
				<li><a href="#">DSP</a></li>
				<li><a href="#">HDFC</a></li>
				<li><a href="#">SBI</a></li>
				<li><a href="#">AXIS</a></li>
				<li><a href="#">KOTAK</a></li>
				<li><a href="#">TATA</a></li>
				<li><a href="#">L&T</a></li>
				<li><a href="#">IDFC</a></li>
				<li><a href="#">UTI</a></li>
				<li><a href="#">PRINCIPAL</a></li>
				<li><a href="#">SUNDARAM</a></li>
				<li><a href="#">PGIM</a></li>
				<li><a href="#">MOTILAL OSWAL</a></li>
				<li><a href="#">BNP PARIBAS</a></li>
				<li><a href="#">MIRAE ASSET</a></li>
				<li><a href="#">PRINCIPAL</a></li>
				<li><a href="#">FRANKLIN TEMPELETON</a></li>
				<li><a href="#">CANARA ROBECO</a></li>
			</ul>

		</div>
	</div>
</div>
 -->


 <?php include('includes/footer.php'); ?>
	

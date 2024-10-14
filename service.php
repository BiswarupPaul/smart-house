<?php
ob_start();
include('includes/header.php');
include("includes/conn.php");
?>
	
		
	
<div><!-- inner banner -->	

	<section class="inner-banner" style="background-image:url(images/services_inner_banner.jpg);">
			<div class="container">
				<div class="innerbanner-text">
					<h1 class="wow bounceInUp">Services</h1>
				</div>
			</div>
			
	</section>
</div><!-- /inner banner --> 
  
	
	
	<!-- services -->
	<div class="sectiongap">
		<div class="container">
			<div class="row d-flex align-items-start left_nav">
			<div class="col-md-3 wow fadeInUp sticky_div hash_area">
			  <div class="nav flex-column nav-pills mb-2" id="v-pills-tab" role="tablist" aria-orientation="vertical">

				<button class="nav-link active" id="v-pills-t1-tab" data-bs-toggle="pill" data-bs-target="#v-pills-t1" type="button" role="tab" aria-controls="v-pills-t1" aria-selected="true">SIP Planning</button>

				<button class="nav-link" id="v-pills-t2-tab" data-bs-toggle="pill" data-bs-target="#v-pills-t2" type="button" role="tab" aria-controls="v-pills-t2" aria-selected="false">Retirement Planning</button>
				
				<button class="nav-link" id="v-pills-t3-tab" data-bs-toggle="pill" data-bs-target="#v-pills-t3" type="button" role="tab" aria-controls="v-pills-t3" aria-selected="false">Child Investment Planning</button>
				
				<button class="nav-link" id="v-pills-t4-tab" data-bs-toggle="pill" data-bs-target="#v-pills-t4" type="button" role="tab" aria-controls="v-pills-t4" aria-selected="false">Lumpsum Investment Planning</button>
			  </div>
			  
			  
			   <div class="d-none d-sm-block">
				<div class="d-grid gap-2 mx-auto">
					<img class="img-fluid rounded " src="images/investment.jpg">
					<a href="#plan" class="btn btn-secondary pulseit hash"><span>Plan Your Investment <i class="fa fa-thumbs-up"></i></span></a>
				</div>
			  </div>
			  </div>
		  
		  <div class="col-md-9 wow fadeInDown">
			
			  <div class="tab-content" id="v-pills-tabContent">
				<!-- SIP -->
				<div class="tab-pane fade show active" id="v-pills-t1" role="tabpanel" aria-labelledby="v-pills-t1-tab">
				<h3>Tab Heading-1</h3>
				<p>
				Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
				</p>
				
				<div class="row mt-3">
					<div class="col-md-6">
					<div class="heading"><span>Lorem Ipsum is simply dummy text</span></div>
					<ul class="tick">
						<li>Lorem Ipsum is simply dummy text</li>
						<li>Lorem Ipsum is simply dummy text</li>
						<li>Lorem Ipsum is simply dummy text</li>
						<li>Lorem Ipsum is simply dummy text</li>
						<li>Lorem Ipsum is simply dummy text</li>
					</ul>
					<a href="contact.php" class="custom-btn btn-primary mb-3"><span>Get Free Consultant <i class="fa fa-angle-right"></i></span></a>
					</div>
					<div class="col-md-6"><img class="img-fluid" src="images/SIP.jpg"></div>
				</div>
				</div>
				<!-- /SIP -->
				
				<!-- Retirement-Plan -->
				<div class="tab-pane fade" id="v-pills-t2" role="tabpanel" aria-labelledby="v-pills-t2-tab">
				<h3>Tab Heading-2</h3>
				<p>
				Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
				</p>
				<div class="row mt-3">
					<div class="col-md-6">
					<div class="heading"><span>Lorem Ipsum is simply dummy text</span></div>
					<ul class="tick">
						<li>Lorem Ipsum is simply dummy text</li>
						<li>Lorem Ipsum is simply dummy text</li>
						<li>Lorem Ipsum is simply dummy text</li>
						<li>Lorem Ipsum is simply dummy text</li>
						<li>Lorem Ipsum is simply dummy text</li>
					</ul>
					<a href="contact.php" class="custom-btn btn-primary mb-3"><span>Get Free Consultant <i class="fa fa-angle-right"></i></span></a>
					</div>
					<div class="col-md-6"><img class="img-fluid" src="images/Retirement-Plan.jpg"></div>
				</div>
				
				</div>
				<!-- /Retirement-Plan -->
				
				<!-- Child-Plan -->
				<div class="tab-pane fade" id="v-pills-t3" role="tabpanel" aria-labelledby="v-pills-t3-tab">
				<h3>Tab Heading-3</h3>
				<p>
				Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
				</p>
				<div class="row mt-3">
					<div class="col-md-6">
					<div class="heading"><span>Lorem Ipsum is simply dummy text</span></div>
					<ul class="tick">
						<li>Lorem Ipsum is simply dummy text</li>
						<li>Lorem Ipsum is simply dummy text</li>
						<li>Lorem Ipsum is simply dummy text</li>
						<li>Lorem Ipsum is simply dummy text</li>
						<li>Lorem Ipsum is simply dummy text</li>
					</ul>
					<a href="contact.php" class="custom-btn btn-primary mb-3"><span>Get Free Consultant <i class="fa fa-angle-right"></i></span></a>
					</div>
					<div class="col-md-6"><img class="img-fluid" src="images/Child-Plan.jpg"></div>
				</div>
				</div>
				<!-- /Child-Plan -->
				
				<!-- Lumsum -->
				<div class="tab-pane fade" id="v-pills-t4" role="tabpanel" aria-labelledby="v-pills-t4-tab">
				<h3>Tab Heading-4</h3>
				<p>
				Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
				</p>
				<div class="row mt-3">
					<div class="col-md-6">
					<div class="heading"><span>Lorem Ipsum is simply dummy text</span></div>
					<ul class="tick">
						<li>Lorem Ipsum is simply dummy text</li>
						<li>Lorem Ipsum is simply dummy text</li>
						<li>Lorem Ipsum is simply dummy text</li>
						<li>Lorem Ipsum is simply dummy text</li>
						<li>Lorem Ipsum is simply dummy text</li>
					</ul>
					<a href="contact.php" class="custom-btn btn-primary mb-3"><span>Get Free Consultant <i class="fa fa-angle-right"></i></span></a>
					</div>
					<div class="col-md-6"><img class="img-fluid" src="images/Lumsum.jpg"></div>
				</div>
				</div>
				<!-- /Lumsum -->
			  </div>
			  </div>
			</div>
		</div>
	</div>
	<!-- /services -->
	
	
	
	
	
	
	<!-- Plan Your Investment -->
	<div id="plan"></div>
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

	
<?php include('includes/footer.php'); ?>
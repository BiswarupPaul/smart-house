<?php
ob_start();
include('includes/header.php');
include("includes/conn.php");
?>
	
	
<div><!-- inner banner -->	
	<section class="inner-banner" style="background-image:url(images/calculator_inner_banner.jpg);">
		<div class="container">
			<div class="innerbanner-text">
				<h1 class="wow bounceInUp"> SIP Calculator</h1>
			</div>
		</div>
	</section>
</div><!-- /inner banner --> 

	

	
	
	
	
	<!-- calculator -->
	<div class="sectiongap">
		<div class="container">
			<div class="mb-3" data-aos="fade-up">
				<h1>Advantages of SIP Return Calculator</h1>
				<p>
				Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not
				</p>
				<ul class="tick tick_double">
					<li>Lorem Ipsum is simply dummy text</li>
					<li>Lorem Ipsum is simply dummy text</li>
					<li>Lorem Ipsum is simply dummy text</li>
					<li>Lorem Ipsum is simply dummy text</li>
					<li>Lorem Ipsum is simply dummy text</li>
					<li>Lorem Ipsum is simply dummy text</li>
				</ul>
			</div>
		</div>
	</div>
	
	
	
	
	
	
	<!-- services -->
	<div class="sectiongap">
		<div class="container">
			<div class="row d-flex align-items-start left_nav">
			<div class="col-md-3 wow fadeInUp sticky_div hash_area">
			  <div class="nav flex-column nav-pills mb-2" id="v-pills-tab" role="tablist" aria-orientation="vertical">

				<button class="nav-link active" id="v-pills-t1-tab" data-bs-toggle="pill" data-bs-target="#v-pills-t1" type="button" role="tab" aria-controls="v-pills-t1" aria-selected="true">SIP Calculator</button>

				<button class="nav-link" id="v-pills-t2-tab" data-bs-toggle="pill" data-bs-target="#v-pills-t2" type="button" role="tab" aria-controls="v-pills-t2" aria-selected="false">Retirement Calculator</button>
				
				<button class="nav-link" id="v-pills-t3-tab" data-bs-toggle="pill" data-bs-target="#v-pills-t3" type="button" role="tab" aria-controls="v-pills-t3" aria-selected="false">Goal Calculator</button>
			  </div>
			  
			   <div class="d-none d-sm-block">
				<div class="d-grid gap-2 mx-auto">
					<img class="img-fluid rounded " src="images/expert.jpg">
					<a href="contact.php" class="btn btn-secondary pulseit"><span>Talk to an Expert <i class="fa fa-thumbs-up"></i></span></a>
				</div>
			  </div>
			  </div>
		  
		  <div class="col-md-9 wow fadeInDown">
			
			  <div class="tab-content" id="v-pills-tabContent">
				<!-- SIP Calculator -->
				<div class="tab-pane fade show active" id="v-pills-t1" role="tabpanel" aria-labelledby="v-pills-t1-tab">	
					<div class="col-md-8 offset-md-2">
					<div class="cal_frm_bg">
					<form name="confrm" method="post" action="">
						<div class="group form-group">			
						<input type="text" class="form-control" id="name" required="" placeholder="Enter SIP Amount Per Month ">
						</div>
						
						<div class="group form-group">			
							<input type="text" class="form-control" id="name" required="" placeholder="Enter Expected Interest Rate (%)">
						</div>
						<div class="group form-group">			
							<input type="text" class="form-control" id="name" required="" placeholder="Enter Number of Instalments (months)">
						</div> 

						<div class="text-center">
							<input type="submit" class="btn btn-secondary mb-3" name="" value="Calculate" placeholder="Send Message">
						</div>
					</form>
					</div>
					</div>
					<p>
					Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
					</p>
						<div class="heading"><span>Your SIP calculation is :</span></div>

						<div class="row">
							<div class="col-md-4">
								<div class="calculation_box">
									<h1>Total Earnings (₹)</h1>
									<h3></h3>
								</div>	
							</div>
							<div class="col-md-4">
								<div class="calculation_box">
									<h1>Total Earnings (₹)</h1>
									<h3></h3>
								</div>	
							</div>
							<div class="col-md-4">
								<div class="calculation_box">
									<h1>Total Earnings (₹)</h1>
									<h3></h3>
								</div>	
							</div>
						</div>
						<div class="text-center">
						<a href="#" class="btn btn-secondary mt-3 pulseit"><span>Invest Now <i class="fa fa-thumbs-up"></i></a>
						</div>
					
				</div>
				<!-- /SIP Calculator -->
				
				<!-- Retirement Calculator -->
				<div class="tab-pane fade" id="v-pills-t2" role="tabpanel" aria-labelledby="v-pills-t2-tab">
				<div class="col-md-8 offset-md-2">
					<div class="cal_frm_bg">
					<form name="confrm" method="post" action="">
						<div class="group form-group">			
						<input type="text" class="form-control" id="name" required="" placeholder="Enter SIP Amount Per Month ">
						</div>
						
						<div class="group form-group">			
							<input type="text" class="form-control" id="name" required="" placeholder="Enter Expected Interest Rate (%)">
						</div>
						<div class="group form-group">			
							<input type="text" class="form-control" id="name" required="" placeholder="Enter Number of Instalments (months)">
						</div> 

						<div class="text-center">
							<input type="submit" class="btn btn-secondary mb-3" name="" value="Calculate" placeholder="Send Message">
						</div>
					</form>
					</div>
					</div>
					<p>
					Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
					</p>
						
						<div class="heading"><span>Your SIP calculation is :</span></div>
						<div class="row">
							<div class="col-md-4">
								<div class="calculation_box">
									<h1>Total Earnings (₹)</h1>
									<h3></h3>
								</div>	
							</div>
							<div class="col-md-4">
								<div class="calculation_box">
									<h1>Total Earnings (₹)</h1>
									<h3></h3>
								</div>	
							</div>
							<div class="col-md-4">
								<div class="calculation_box">
									<h1>Total Earnings (₹)</h1>
									<h3></h3>
								</div>	
							</div>
						</div>
						<div class="text-center">
						<a href="#" class="btn btn-secondary mt-3 pulseit"><span>Invest Now <i class="fa fa-thumbs-up"></i></a>
						</div>
				</div>
				<!-- /Retirement Calculator -->
				
				<!-- Goal Calculator -->
				<div class="tab-pane fade" id="v-pills-t3" role="tabpanel" aria-labelledby="v-pills-t3-tab">
				<div class="col-md-8 offset-md-2">
					<div class="cal_frm_bg">
					<form name="confrm" method="post" action="">
						<div class="group form-group">			
						<input type="text" class="form-control" id="name" required="" placeholder="Enter SIP Amount Per Month ">
						</div>
						
						<div class="group form-group">			
							<input type="text" class="form-control" id="name" required="" placeholder="Enter Expected Interest Rate (%)">
						</div>
						<div class="group form-group">			
							<input type="text" class="form-control" id="name" required="" placeholder="Enter Number of Instalments (months)">
						</div> 

						<div class="text-center">
							<input type="submit" class="btn btn-secondary mb-3" name="" value="Calculate" placeholder="Send Message">
						</div>
					</form>
					</div>
					</div>
					<p>
					Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
					</p>
						
						<div class="heading"><span>Your SIP calculation is :</span></div>
						<div class="row">
							<div class="col-md-4">
								<div class="calculation_box">
									<h1>Total Earnings (₹)</h1>
									<h3></h3>
								</div>	
							</div>
							<div class="col-md-4">
								<div class="calculation_box">
									<h1>Total Earnings (₹)</h1>
									<h3></h3>
								</div>	
							</div>
							<div class="col-md-4">
								<div class="calculation_box">
									<h1>Total Earnings (₹)</h1>
									<h3></h3>
								</div>	
							</div>
						</div>
						<div class="text-center">
						<a href="#" class="btn btn-secondary mt-3 pulseit"><span>Invest Now <i class="fa fa-thumbs-up"></i></a>
						</div>
						</div>
				</div>
				<!-- /Goal Calculator -->
			  </div>
			  </div>
			</div>
		</div>
	</div>
	<!-- /services -->
	
	
	
	<!-- /calculator -->
	
	
	
	
<?php include('includes/footer.php'); ?>
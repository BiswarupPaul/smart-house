<?php
ob_start();
include('includes/header.php');
include("includes/conn.php");
?>
	
	
		
<div><!-- inner banner -->	
	<section class="inner-banner" style="background-image:url(images/blog_inner_banner.jpg);">
		<div class="container">
			<div class="innerbanner-text">
				<h1 class="wow bounceInUp">Blog Details</h1>
			</div>
		</div>
	</section>
</div><!-- /inner banner --> 

	
	
	

		<!-- blog details -->
		<section class="sectiongap cms-wrap" id="blog_details">
			<div class="container">

		<h4>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</h4>
		<ul class="list-inline mb-4">
			<li class="list-inline-item"><i class="far fa-clock"></i> 11 December, 2021</li>
			<li class="list-inline-item"><i class="far fa-user"></i> Lorem Ipsum is simply</li>
			<li class="list-inline-item"><i class="fas fa-tags"></i> <a href="#" rel="category tag">Dust Brush</a></li>
		</ul>
		
		<div class="cms-wrap">
		<div class="row">
			<div class="col-md-6">
				<div class="cms-wrap-main-img"><img class="img-fluid" src="images/about.jpg"></div>
			</div>
			<div class="col-md-6">
				<h3>Lorem Ipsum is simply dummy text of the.</h3>
				<p>
				Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
				</p>
				<p>
				Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
				</p>
			</div>
		</div>

			<ul class="tick">
				<li>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</li> 
				<li>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</li> 
				<li>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</li> 
				<li>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</li> 
			</ul>	

			<p>
			Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
			</p>

		<h3>Leave a comment <small><a rel="nofollow" id="cancel-comment-reply-link" href="/keep-your-home-dust-free-with-these-easy-steps/#respond" style="display:none;">Cancel reply</a></small></h3>
		Your email address will not be published. Required fields are marked *
		
		<div class="col-md-8 mt-3">
			<div class="cms-wrap-Comment-box">
				<form name="confrm" method="post" action="">
					<div class="group form-group text-group">
						<textarea required="required" class="form-control" rows="6"  placeholder="Comment"></textarea>
					</div>
					<div class="row">
					<div class="group form-group col-md-6">			
						<input type="text" class="form-control" id="name" required="" placeholder="First Name">
					</div>
					
					<div class="group form-group col-md-6">			
						<input type="text" class="form-control" id="name" required="" placeholder="Last Name">
					</div>
				
					<div class="group form-group col-md-6"> 
						<input type="mail" class="form-control" id="email" required="" placeholder="Email">
					</div>
				
					<div class="group form-group col-md-6"> 
						<input type="mail" class="form-control" id="phone" required="" placeholder="Phone">	
					</div> 
					</div>
					
					<div class="group form-group form-check col-md-12">
						<input type="checkbox" class="form-check-input" id="exampleCheck1">
						<label class="form-check-label" for="exampleCheck1">Check me Save my name, email, and website in this browser for the next time I comment.</label>
					</div>
					<div class="text-center">
						<input type="submit" class="custom-btn btn-primary" name="" placeholder="Send Message">
					</div>							   
				</form>
	
			</div>
		</div>

		</div>
		</div>
		</section>
		<!-- /blog details -->
		 
<?php include('includes/footer.php'); ?>
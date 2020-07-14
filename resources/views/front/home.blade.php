

<!-- Slider Start -->
@extends('app')
@section('content')

<section class="slider" id="slider">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-8 col-md-8 col-12">
				<div class="banner-content text-center">
					 <h1 class="cd-headline clip is-full-width mb-4 ">
					 	I provide <br>
	                    <span class="cd-words-wrapper text-color">
	                        <b class="is-visible">Hey, this me KIRAN. </b>
	                        <b>UI - Designer.</b>
	                    </span>
	                </h1>
					<p class="font-weight-normal lead mt-3 mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellat dolor pariatur, distinctio doloribus aliquid recusandae soluta tempore.</p>
					<ul class="list-inline socials-icon mb-4">
						<li class="list-inline-item"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
						<li class="list-inline-item"><a href="#"><i class="fab fa-twitter"></i></a></li>
						<li class="list-inline-item"><a href="#"><i class="fab fa-dribbble"></i></a></li>
						<li class="list-inline-item"><a href="#"><i class="fab fa-behance"></i></a></li>
						<li class="list-inline-item"><a href="#"><i class="fab fa-linkedin"></i></a></li>
					</ul>

					<a href="#about" class="btn btn-main btn-rounded smoth-scroll">Learn More <i class="fa fa-angle-right ml-2"></i></a>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="intro section">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 pr-lg-5">
				<div class="intro-img">
					<img src="{{ asset('assets/images/01.jpg')}}" alt="" class="img-fluid">
				</div>
			</div>
			<div class="col-lg-6">
				<div class="intro-content mt-5 mt-lg-0">
					<h2 class="text-lg mb-4">Designing with passion Thats work for you</h2>

					<p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Debitis aliquid accusamus veritatis quasi vero id libero, itaque et sequi, ipsa tempore officia delectus laudantium modi error nihil. Voluptatum</p>

					<ul class="list-unstyled ">
						<li><h5><i class="ti-check mr-3"></i>Quality Assurance</h5></li>
						<li><h5><i class="ti-check mr-3"></i>Interective Design </h5></li>
						<li><h5><i class="ti-check mr-3"></i>Easy to Use</h5></li>
					</ul>

					<a href="#services" class="btn btn-main mt-4 btn-rounded smoth-scroll">Services<i class="fa fa-angle-right ml-2"></i></a>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="section-bottom experience">
	<div class="container">
		<div class="row">
			<div class="col-lg-6">
				<div class="title">
					<h2>Specialized Area</h2>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-6 col-md-6">
				<div class="skill-bar mb-2 mb-lg-0">
					<div class="mb-4 text-right"><h4 class="font-weight-normal">Html/Css </h4></div>
					<div class="progress">
						<div class="progress-bar" data-percent="80">
							<span class="percent-text"><span class="count">80</span>%</span>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-6 col-md-6">
				<div class="skill-bar mb-2 mb-lg-0">
					<div class="mb-4 text-right"><h4 class="font-weight-normal">WordPress/PHP</h4></div>
					<div class="progress">
						<div class="progress-bar" data-percent="95">
							<span class="percent-text"><span class="count">95</span>%</span>
						</div>
					</div>
				</div>
			</div>

			<div class="col-lg-6 col-md-6">
				<div class="skill-bar mb-2 mb-lg-0">
					<div class="mb-4 text-right"><h4 class="font-weight-normal">Graphics Design </h4></div>
					<div class="progress">
						<div class="progress-bar" data-percent="70">
							<span class="percent-text"><span class="count">70</span>%</span>
						</div>
					</div>
				</div>
			</div>

			<div class="col-lg-6 col-md-6">
				<div class="skill-bar mb-2 mb-lg-0">
					<div class="mb-4 text-right"><h4 class="font-weight-normal">Marketing</h4></div>
					<div class="progress">
						<div class="progress-bar" data-percent="85">
							<span class="percent-text"><span class="count">85</span>%</span>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-6 col-md-6">
				<div class="skill-bar mb-4 mb-lg-0">
					<div class=" mb-4 text-right"><h4 class="font-weight-normal">Branding</h4></div>
					<div class="progress">
						<div class="progress-bar" data-percent="60">
							<span class="percent-text"><span class="count">60</span>%</span>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-6 col-md-6">
				<div class="skill-bar mb-4 mb-lg-0">
					<div class=" mb-4 text-right"><h4 class="font-weight-normal">Woo-Commerce</h4></div>
					<div class="progress">
						<div class="progress-bar" data-percent="82">
							<span class="percent-text"><span class="count">82</span>%</span>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="section secondary-bg" id="services">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-6">
				<div class="section-title text-center">
					<h2 class="mb-4 text-lg">My services</h2>
					<p>Omnis est dolores commodi ullam tempora sequi asperiores ipsum autem ex aliquam. Voluptatibus unde</p>
				</div>
			</div>
		</div>
		<div class="row no-gutters">
			<div class="col-lg-4 col-md-6">
				<div class="service-item">
					<div class="d-flex align-items-center mb-4">
						<i class="ti-microphone mr-3"></i>
						<h4>Branding</h4>
					</div>
					<p>Lorem ipsum dolor sit amet, consect etur adipisicing elit, sed.</p>

					<a href="service-single.html" class="read-more">Learn More <i class="fa fa-angle-right"></i></a>
				</div>
			</div>
			<div class="col-lg-4 col-md-6">
				<div class="service-item">
					<div class="d-flex align-items-center mb-4">
						<i class="ti-html5 mr-3"></i>
						<h4>Web Development</h4>
					</div>
					<p>Lorem ipsum dolor sit amet, consect etur adipisicing elit, sed.</p>

					<a href="service-single.html" class="read-more">Learn More <i class="fa fa-angle-right"></i></a>
				</div>
			</div>
			<div class="col-lg-4 col-md-6">
				<div class="service-item">
					<div class="d-flex align-items-center mb-4">
						<i class="ti-video-camera mr-3"></i>
						<h4>Digital Marketing</h4>
					</div>
					<p>Lorem ipsum dolor sit amet, consect etur adipisicing elit, sed.</p>

					<a href="service-single.html" class="read-more">Learn More <i class="fa fa-angle-right"></i></a>
				</div>
			</div>

			<div class="col-lg-4 col-md-6">
				<div class="service-item">
					<div class="d-flex align-items-center mb-4">
						<i class="ti-desktop mr-3"></i>
						<h4>Web Design</h4>
					</div>
					<p>Lorem ipsum dolor sit amet, consect etur adipisicing elit, sed.</p>

					<a href="service-single.html" class="read-more">Learn More <i class="fa fa-angle-right"></i></a>
				</div>
			</div>

			<div class="col-lg-4 col-md-6">
				<div class="service-item">
					<div class="d-flex align-items-center mb-4">
						<i class="ti-layers mr-3"></i>
						<h4>Graphics Design</h4>
					</div>
					<p>Lorem ipsum dolor sit amet, consect etur adipisicing elit, sed.</p>

					<a href="service-single.html" class="read-more">Learn More <i class="fa fa-angle-right"></i></a>
				</div>
			</div>
			<div class="col-lg-4 col-md-6">
				<div class="service-item">
					<div class="d-flex align-items-center mb-4">
						<i class="ti-wordpress mr-3"></i>
						<h4>WordPress</h4>
					</div>
					<p>Lorem ipsum dolor sit amet, consect etur adipisicing elit, sed.</p>

					<a href="service-single.html" class="read-more">Learn More <i class="fa fa-angle-right"></i></a>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- portfolio -->
<section class="section portfolio" id="portfolio">
  <div class="container">
  	 <div class="row justify-content-center">
		<div class="col-lg-6">
			<div class="section-title text-center">
				<h2 class="mb-4 text-lg">Work Portfolio</h2>
				<p>Omnis est dolores commodi ullam tempora sequi asperiores ipsum autem ex aliquam. Voluptatibus unde</p>
			</div>
		</div>
	</div>

      <div class="col-12 text-center  mb-5">
        <div class="btn-group btn-group-toggle " data-toggle="buttons">
          <label class="btn active ">
            <input type="radio" name="shuffle-filter" value="all" checked="checked" />All
          </label>
          <label class="btn ">
            <input type="radio" name="shuffle-filter" value="design" />UI/UX Design
          </label>
          <label class="btn">
            <input type="radio" name="shuffle-filter" value="branding" />BRANDING
          </label>
          <label class="btn">
            <input type="radio" name="shuffle-filter" value="illustration" />ILLUSTRATION
          </label>
        </div>
      </div>

    <div class="row shuffle-wrapper portfolio-gallery">
      	<div class="col-lg-4 col-md-6 col-12 mb-4 shuffle-item" data-groups="[&quot;design&quot;,&quot;illustration&quot;]">
	      	<div class="portfolio-item mb-4">
				<img src="{{ asset('assets/images/pc1.jpg')}}" alt="" class="img-fluid">
				<div class="overlay-content">
					<h5>Minimal Portfolio Theme</h5>
					<a href="{{ asset('assets/images/pc1.jpg')}}" class="portfolio-image popup-gallery"><i class="ti-zoom-in"></i></a>
					<a href="portfolio-single.html"><i class="ti-link"></i></a>
				</div>
			</div>
      	</div>

	      <div class="col-lg-4 col-md-6 col-12  mb-4 shuffle-item" data-groups="[&quot;branding&quot;]">
	        <div class="portfolio-item mb-4">
				<img src="{{ asset('assets/images/pc2.jpg')}}" alt="" class="img-fluid">
				<div class="overlay-content">
					<h5>Minimal Portfolio Theme</h5>
					<a href="{{ asset('assets/images/pc2.jpg')}}" class="portfolio-image popup-gallery"><i class="ti-zoom-in"></i></a>
					<a href="portfolio-single.html"><i class="ti-link"></i></a>
				</div>
			</div>
	      </div>

      	<div class="col-lg-4 col-md-6 col-12  mb-4 shuffle-item" data-groups="[&quot;illustration&quot;]">
       		<div class="portfolio-item mb-4">
				<img src="{{ asset('assets/images/pc3.jpg')}}" alt="" class="img-fluid">
				<div class="overlay-content">
					<h5>Minimal Portfolio Theme</h5>
					<a href="{{ asset('assets/images/pc3.jpg')}}" class="portfolio-image popup-gallery"><i class="ti-zoom-in"></i></a>
					<a href="portfolio-single.html"><i class="ti-link"></i></a>
				</div>
			</div>
      	</div>

      	<div class="col-lg-4 col-md-6 col-12  mb-4 shuffle-item" data-groups="[&quot;design&quot;,&quot;branding&quot;]">
        	<div class="portfolio-item mb-4">
				<img src="{{ asset('assets/images/pc4.jpg')}}" alt="" class="img-fluid">
				<div class="overlay-content">
					<h5>Minimal Portfolio Theme</h5>
					<a href="{{ asset('assets/images/pc4.jpg')}}" class="portfolio-image popup-gallery"><i class="ti-zoom-in"></i></a>
					<a href="portfolio-single.html"><i class="ti-link"></i></a>
				</div>
			</div>
      	</div>

      	<div class="col-lg-4 col-md-6 col-12  mb-4 shuffle-item" data-groups="[&quot;illustration&quot;]">
       		 <div class="portfolio-item mb-4">
				<img src="{{ asset('assets/images/pc5.jpg')}}" alt="" class="img-fluid">
				<div class="overlay-content">
					<h5>Minimal Portfolio Theme</h5>
					<a href="{{ asset('assets/images/pc1.jpg')}}" class="portfolio-image popup-gallery"><i class="ti-zoom-in"></i></a>
					<a href="portfolio-single.html"><i class="ti-link"></i></a>
				</div>
			</div>
      	</div>

      	<div class="col-lg-4 col-md-6 col-12  mb-4 shuffle-item" data-groups="[&quot;design&quot;]">
       		<div class="portfolio-item mb-4">
				<img src="{{ asset('assets/images/pc6.jpg')}}" alt="" class="img-fluid">
				<div class="overlay-content">
					<h5>Minimal Portfolio Theme</h5>
					<a href="{{ asset('assets/images/pc6.jpg')}}" class="portfolio-image popup-gallery"><i class="ti-zoom-in"></i></a>
					<a href="portfolio-single.html"><i class="ti-link"></i></a>
				</div>
			</div>
      </div>
    </div>

    <div class="row justify-content-center">
    	<div class="col-lg-8">
    		<div class="text-center mt-5">
    			<a href="#testimonial" class="btn btn-main btn-rounded smoth-scroll">Read Success Story</a>
    		</div>
    	</div>
    </div>
  </div>
</section>
<!-- /portfolio -->
<section class="section experience" id="skills">
	<div class="container">
		<div class="row">
			<div class="col-lg-6">
				<div class="title">
					<h2>Work Experience</h2>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-lg-6">
				<div class="content mb-4">
					<h4>UX Designer</h4>
					<span class="text-color">Googl inc[2000-2004]</span>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore.</p>
				</div>
				<div class="content mb-4">
					<h4>Developer</h4>
					<span class="text-color">Googl inc[2000-2004]</span>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore.</p>
				</div>
			</div>
			<div class="col-lg-6">
				<div class="content mb-4">
					<h4>Marketer</h4>
					<span class="text-color">Googl inc[2000-2004]</span>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore.</p>
				</div>
				<div class="content mb-4">
					<h4>Marketer</h4>
					<span class="text-color">Googl inc[2000-2004]</span>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore.</p>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="counter-wrap section-bottom">
	<div class="container">
		<div class="row">
			<div class="col-lg-3 col-md-6">
				<div class="counter-item mb-5 mb-lg-0">
					<i class="ti-user"></i>
					<span class="counter">785</span>
					<h5>Happy Clients</h5>
				</div>
			</div>
			<div class="col-lg-3 col-md-6">
				<div class="counter-item mb-5 mb-lg-0">
					<i class="ti-thumb-up"></i>
					<span class="counter">385</span>
					<h5>project done</h5>
				</div>
			</div>
			<div class="col-lg-3 col-md-6">
				<div class="counter-item mb-5 mb-lg-0">
					<i class="ti-face-smile"></i>
					<span class="counter">845</span>
					<h5>Cup of tea</h5>
				</div>
			</div>
			<div class="col-lg-3 col-md-6">
				<div class="counter-item">
					<i class="ti-cup"></i>
					<span class="counter">225</span>
					<h5>awards won</h5>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="section bg-light" id="team">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-6">
				<div class="section-title text-center">
					<h2 class="mb-4 text-lg">Our Team</h2>
					<p>Omnis est dolores commodi ullam tempora sequi asperiores ipsum autem ex aliquam. Voluptatibus unde</p>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-4 col-md-6">
				<div class="team-block mb-5 mb-lg-0">
					<img src="assets/images/03-1.jpg" alt="" class="img-fluid">
					<div class="team-content">
						<span class="mt-4 d-block">Founder</span>
						<h4 class="mb-4">Richard William</h4>
					</div>

					<div class="overlay-content">
						<span class="mt-4 d-block">Founder</span>
						<h4 class="mb-4">Richard William</h4>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloremque, molestiae.</p>

						<ul class="list-inline">
							<li class="list-inline-item"><a href="#"><i class="ti-facebook"></i></a></li>
							<li class="list-inline-item"><a href="#"><i class="ti-twitter"></i></a></li>
							<li class="list-inline-item"><a href="#"><i class="ti-linkedin"></i></a></li>
						</ul>
					</div>
				</div>
			</div>

			<div class="col-lg-4 col-md-6">
				<div class="team-block mb-5 mb-lg-0">
					<img src="{{ asset('assets/images/02-2.jpg')}}" alt="" class="img-fluid">
					<div class="team-content">
						<span class="mt-4 d-block">Founder</span>
						<h4 class="mb-4">Richard William</h4>
					</div>

					<div class="overlay-content">
						<span class="mt-4 d-block">Founder</span>
						<h4 class="mb-4">Richard William</h4>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloremque, molestiae.</p>

						<ul class="list-inline">
							<li class="list-inline-item"><a href="#"><i class="ti-facebook"></i></a></li>
							<li class="list-inline-item"><a href="#"><i class="ti-twitter"></i></a></li>
							<li class="list-inline-item"><a href="#"><i class="ti-linkedin"></i></a></li>
						</ul>
					</div>
				</div>
			</div>

			<div class="col-lg-4 col-md-6">
				<div class="team-block">
					<img src="{{ asset('assets/images/01-3.jpg')}}" alt="" class="img-fluid">
					<div class="team-content">
						<span class="mt-4 d-block">Founder</span>
						<h4 class="mb-4">Richard William</h4>
					</div>

					<div class="overlay-content">
						<span class="mt-4 d-block">Founder</span>
						<h4 class="mb-4">Richard William</h4>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloremque, molestiae.</p>

						<ul class="list-inline">
							<li class="list-inline-item"><a href="#"><i class="ti-facebook"></i></a></li>
							<li class="list-inline-item"><a href="#"><i class="ti-twitter"></i></a></li>
							<li class="list-inline-item"><a href="#"><i class="ti-linkedin"></i></a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="cta">
	<div class="container">
		<div class="cta-wrap box-shadow">
			<div class="row align-items-center justify-content-between">
				<div class="col-lg-8">
					<div class="cta-content">
						<span class="text-color">All in one Solution</span>
						<h2 class="text-lg">Have any Project on mind?</h2>
					</div>
				</div>
				<div class="col-lg-3 ">
					<div class="text-lg-right mt-5 mt-lg-0">
						<a href="#contact" class="btn btn-main btn-rounded smoth-scroll">Contact me<i class="fa fa-angle-right ml-2"></i></a>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="section" id="testimonial">
	<div class="container">
		<div class="row">
			<div class="col-lg-5">
				<div class="title">
					<h2 class="mb-5 text-lg">Clients says</h2>
					<p class="mb-5 ">Reiciendis, reprehenderit, quas impedit ea repudiandae non quibusdam nulla pariatur rerum numquam ipsum corporis, dignissimos aliquid, neque. Recusandae voluptas, inventore error amet.</p>
					<a href="#contact" class="btn btn-main btn-rounded smoth-scroll">Get start<i class="fa fa-angle-right ml-2"></i></a>
				</div>
			</div>


			<div class="col-lg-7">
				<div class="main-slider ">
					<div class="testimonial-item d-flex align-items-center">
						<div class="testimonial-content ">
							<i class="ti-quote-left "></i>
							<h4 class="mb-3 text-color mt-2">Code Quality!</h4>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis architecto vel nesciunt accusamus quidem fugiat molestiae doloribus .</p>
							<div class="info">
								<h5 class="mb-1">Khalid Farhan</h5>
								<p class="text-sm">Themeturn</p>
							</div>
						</div>
						<div class="testimonial-image">
							<img src="{{ asset('assets/images/test-1.jpg')}}" alt="" class="img-fluid">
						</div>
					</div>

					<div class="testimonial-item d-flex align-items-center">
						<div class="testimonial-content ">
							<i class="ti-quote-left "></i>
							<h4 class="mb-3 text-color mt-2">Design!</h4>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis architecto vel nesciunt accusamus quidem fugiat molestiae doloribus .</p>
							<div class="info">
								<h5 class="mb-1">Md.tanvir</h5>
								<p class="text-sm">Themeturn</p>
							</div>
						</div>
						<div class="testimonial-image">
							<img src="{{ asset('assets/images/test-2.jpg')}}" alt="" class="img-fluid">
						</div>
					</div>

					<div class="testimonial-item d-flex align-items-center">
						<div class="testimonial-content ">
							<i class="ti-quote-left "></i>
							<h4 class="mb-3 text-color mt-2">Development!</h4>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis architecto vel nesciunt accusamus quidem fugiat molestiae doloribus .</p>
							<div class="info">
								<h5 class="mb-1">Rayhan Masud</h5>
								<p class="text-sm">Themeturn</p>
							</div>
						</div>
						<div class="testimonial-image">
							<img src="{{ asset('assets/images/test-3.jpg')}}" alt="" class="img-fluid">
						</div>
					</div>

					<div class="testimonial-item d-flex align-items-center">
						<div class="testimonial-content ">
							<i class="ti-quote-left "></i>
							<h4 class="mb-3 text-color mt-2">Development!</h4>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis architecto vel nesciunt accusamus quidem fugiat molestiae doloribus .</p>
							<div class="info">
								<h5 class="mb-1">Jabed Hossain</h5>
								<p class="text-sm">Themeturn</p>
							</div>
						</div>
						<div class="testimonial-image">
							<img src="assets/images/test-4.jpg" alt="" class="img-fluid">
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="section" id="contact">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-6">
				<div class="section-title text-center">
					<h2 class="mb-4 text-lg">Let's Get started</h2>
					<p>Omnis est dolores commodi ullam tempora sequi asperiores ipsum autem ex aliquam. Voluptatibus unde</p>
				</div>
			</div>
		</div>

		<div class="row justify-content-center">
			<div class="col-lg-8">
				<form class="contact__form form-row contact-form" method="post" action="#" id="contactForm">
					 <div class="row">
                        <div class="col-12">
                            <div class="alert alert-success contact__msg" style="display: none" role="alert">
                                Your message was sent successfully.
                            </div>
                        </div>
                    </div>

					<div class="row">
						<div class="col-lg-6">
							<div class="form-group">
								<label>Your Name</label>
								<input type="text" id="name" name="name" class="form-control" placeholder="Enter Your Name">
							</div>
						</div>
						<div class="col-lg-6">
							<div class="form-group">
								<label>Your Email</label>
								<input type="text" name="email" id="email" class="form-control" placeholder="Enter Your Email Address">
							</div>
						</div>
						<div class="col-lg-12">
							<div class="form-group">
								<label>Your Subject</label>
								<input type="text" name="subject" id="subject"  class="form-control" placeholder="Enter Your Subject">
							</div>
						</div>
						<div class="col-lg-12">
							<div class="form-group">
								<label>Your Message</label>
								<textarea id="message" name="message" cols="30" rows="8" class="form-control" placeholder="Your Message"></textarea>
							</div>
						</div>
					</div>

					<div class="col-lg-12">
						<div class="d-lg-flex justify-content-between mt-4">
							<p>* Rest assured.We will not spam at your inbox.</p>
							<input id="submit" name="submit" type="submit" class="btn btn-main btn-rounded" value="Send Message">
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</section>

@endsection



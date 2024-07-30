<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="keywords" content="Digital marketing agency, Digital marketing company, Digital marketing services">
		<meta name="author" content="creativegigs">
		<meta name="description" content="kode-kolektif creative multipurpose is a beautiful website template designed for SEO & Digital Agency websites.">
		<meta name='og:image' content='images/home/ogg.png'>
		<!-- For IE -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<!-- For Resposive Device -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<!-- For Window Tab Color -->
		<!-- Chrome, Firefox OS and Opera -->
		<meta name="theme-color" content="#fff">
		<!-- Windows Phone -->
		<meta name="msapplication-navbutton-color" content="#fff">
		<!-- iOS Safari -->
		<meta name="apple-mobile-web-app-status-bar-style" content="#fff">
		<title>Kode Kolektif - Business and Agency</title>
		<!-- Favicon -->
		<link rel="icon" type="image/png" sizes="56x56" href="{{ asset('images/fav-icon/fav.png') }}">
		<!-- Main style sheet -->
		<link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
		<!-- responsive style sheet -->
		<link rel="stylesheet" type="text/css" href="{{ asset('css/responsive.css') }}">

		<!-- Fix Internet Explorer ______________________________________-->
		<!--[if lt IE 9]>
			<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
			<script src="vendor/html5shiv.js"></script>
			<script src="vendor/respond.js"></script>
		<![endif]-->	
	</head>

	<body>
		<div class="main-page-wrapper">

			<!-- ===================================================
				Loading Transition
			==================================================== -->
			<!-- Preloader -->
			@include('home.preload')

			<!-- 
			=============================================
				Theme Main Menu
			============================================== 
			-->
			@include('partials.nav')
            <!-- /.theme-main-menu -->



			
			<!-- 
			=============================================
				Theme Main Banner One
			============================================== 
			-->
			@include('home.hero')
            <!-- /.rogan-hero-section -->

			
			
			<!-- 
			=============================================
				Our Core Feature
			============================================== 
			-->
			@include('home.feature')
            <!-- /.our-core-feature -->


			<!-- 
			=============================================
				About Us One
			============================================== 
			-->
			@include('home.about')
            <!-- /.about-us-block-one -->
			


			<!-- 
			=============================================
				Our Service One
			============================================== 
			-->
			@include('home.service')
            <!-- /.our-service-one -->




			<!--
			=====================================================
				Testimonial
			=====================================================
			-->
			@include('home.testimony')
            <!-- /.testimonial-section-classic -->



			<!--
			=====================================================
				Free Consultation
			=====================================================
			-->
			@include('home.consultant')
            <!-- /.consultation-section -->





			<!--
			=====================================================
				Our Blog
			=====================================================
			-->
			{{-- @include('home.blog') --}}
            <!-- /.home-blog-one -->



			<!-- 
			=============================================
				Newsletter Section
			============================================== 
			-->
		    @include('home.newsletter')
            <!-- /.newsletter-section -->


			<!--
			=====================================================
				Footer
			=====================================================
			-->
			@include('partials.footer')
            <!-- /.theme-footer-one -->
			

	        

	        <!-- Scroll Top Button -->
			<button class="scroll-top tran3s">
				<i class="fa fa-angle-up" aria-hidden="true"></i>
			</button>


			<div id="path-shape-wrapper">
				<div>
					<svg height="0" width="0">
						<defs>
						    <clipPath id="path-shape-one">
						     	<path fill-rule="evenodd"  fill="url(#PSgrad_0)"
 d="M205.167,7.943 C196.497,5.430 187.599,3.410 178.431,1.968 C128.511,-5.887 71.772,9.587 43.924,51.651 C19.381,88.722 21.921,137.016 28.728,180.915 C36.372,230.212 42.902,274.488 30.686,323.548 C22.073,358.142 10.514,392.042 3.990,427.142 C-9.427,499.346 8.748,558.050 93.045,555.629 C129.787,554.575 165.485,540.991 199.389,527.944 C222.170,519.186 249.687,504.720 274.747,508.015 C298.508,511.143 314.810,529.991 331.946,542.158 C360.484,562.425 393.173,576.700 432.090,577.905 C544.608,581.383 647.199,488.167 663.495,395.667 C683.050,284.674 584.750,212.456 485.909,166.645 C447.031,148.625 408.266,133.864 373.136,108.990 C319.781,71.209 268.682,26.354 205.167,7.943 "/>
						    </clipPath>
						</defs>
					</svg>
				</div>
			</div> <!-- /#path-shape-wrapper -->
			


		<!-- Optional JavaScript _____________________________  -->

    	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
    	<!-- jQuery -->
		<script src="{{ asset('vendor/jquery.2.2.3.min.js') }}"></script>
		<!-- Popper js -->
		<script src="{{ asset('vendor/popper.js/popper.min.js') }}"></script>
		<!-- Bootstrap JS -->
		<script src="{{ asset('vendor/bootstrap/js/bootstrap.min.js') }}"></script>
	    <!-- menu  -->
		<script src="{{ asset('vendor/mega-menu/assets/js/custom.js') }}"></script>
		<!-- AOS js -->
		<script src="{{ asset('vendor/aos-next/dist/aos.js') }}"></script>
		<!-- WOW js -->
		<script src="{{ asset('vendor/WOW-master/dist/wow.min.js') }}"></script>
		<!-- owl.carousel -->
		<script src="{{ asset('vendor/owl-carousel/owl.carousel.min.js') }}"></script>
		<!-- ajaxchimp -->
		<script src="{{ asset('vendor/ajaxchimp/jquery.ajaxchimp.min.js') }}"></script>
		<!-- Tilt js -->
		<script src="{{ asset('vendor/tilt.jquery.js') }}"></script>


		<!-- Theme js -->
		<script src="{{ asset('js/theme.js') }}"></script>
		</div> <!-- /.main-page-wrapper -->
	</body>
</html>
<!DOCTYPE html>
<html lang="zxx" class="no-js">
<head>
	<!-- Mobile Specific Meta -->
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- Favicon-->
	<link rel="shortcut icon" href="img/fav.png">
	<!-- Author Meta -->
	<meta name="author" content="CodePixar">
	<!-- Meta Description -->
	<meta name="description" content="">
	<!-- Meta Keyword -->
	<meta name="keywords" content="">
	<!-- meta character set -->
	<meta charset="UTF-8">
	<!-- Site Title -->
	<title>Multimedia Web Converter</title>

	<link href="https://fonts.googleapis.com/css?family=Poppins:300,500,600" rel="stylesheet">
		<!--
		CSS
		============================================= -->
		<link rel="stylesheet" href="{{url('css/linearicons.css')}}">
		<link rel="stylesheet" href="{{url('css/owl.carousel.css')}}">
		<link rel="stylesheet" href="{{url('css/font-awesome.min.css')}}">
		<link rel="stylesheet" href="{{url('css/animate.css')}}">
		<link rel="stylesheet" href="{{url('css/bootstrap.css')}}">
		<link rel="stylesheet" href="{{url('css/image/style.css')}}">
        <link rel="stylesheet" href="{{url('css/main.css')}}">
        
	</head>
	<body>
		<div id="top"></div>
		<!-- Start Header Area -->
		<header class="default-header">
			<div class="sticky-header">
				<div class="container">
					<div class="header-content d-flex justify-content-between align-items-center">
						<div class="logo">
						</div>
					</div>
				</div>
			</div>
		</header>
		<!-- End Header Area -->
		<!-- Start Banner Area -->
		<section class="">
			<div class="overlay overlay-bg"></div>
			<div class="container">
				<div class="row fullscreen justify-content-center align-items-center">
					<div class="col-lg-12">
						<div class="uploadWrapper">
                            <form id="imageUploadForm" class="imageUploadForm">
                              <span class="helpText" id="helpText">Upload an image</span>
                              <input type='file' id="file" class="uploadButton" accept="image/*" />
                              <div id="uploadedImg" class="uploadedImg">
                                <span class="unveil"></span>
                              </div>
                              {{-- <span class="pickFile">
                                <a href="#" class="pickFileButton">Pick file</a>
                              </span> --}}
							</form>
							<form id="myForm" action="mail.php" method="post" class="contact-form">
								<div class="single-input color-2 mb-10">
									<input type="text" name="fname" placeholder="Full Name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Full Name'" required>
								</div>
								<div class="single-input color-2 mb-10">
									<input type="email" name="email" placeholder="Email Address" pattern="[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{1,63}$" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email Address'" required>
								</div>
								<div class="single-input color-2 mb-10">
									<input type="text" name="subject" placeholder="Subject" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Subject'" required>
								</div>
	
								<div class="single-input color-2 mb-10">
									<textarea name="message" placeholder="Type your message here..." onfocus="this.placeholder = ''" onblur="this.placeholder = 'Type your message here...'" required></textarea>
								</div>
								<div class="d-flex justify-content-center"><button class="mt-10 primary-btn banner-btn d-inline-flex text-uppercase align-items-center">Convert</button></div>
								<div class="alert"></div>
							</form>
                          </div>
					</div>
				</div>
			</div>
		</section>
		<!-- End Banner Area -->

		<script src="js/jquery-2.2.4.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
		<script src="https:////cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/jquery.ajaxchimp.min.js"></script>
		<script src="js/jquery.sticky.js"></script>
		<script src="js/owl.carousel.min.js"></script>
		<script src="js/mixitup.min.js"></script>
		<script src="js/main.js"></script>
		<script src="js/image/app.js"></script>
	</body>
</html>

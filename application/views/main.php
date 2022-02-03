<!DOCTYPE html>
<html lang="tr">

<head>
	<meta charset="utf-8">
	<meta content="width=device-width, initial-scale=1.0" name="viewport">
	<title>HeroBiz Bootstrap Template - Index</title>
	<meta content="" name="description">
	<meta content="" name="keywords">
	<link href="assets/img/favicon.png" rel="icon">
	<link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Source+Sans+Pro:ital,wght@0,300;0,400;0,600;0,700;1,300;1,400;1,600;1,700&display=swap" rel="stylesheet">
	<link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
	<link href="assets/vendor/noty/lib/noty.css" rel="stylesheet">
	<link href="assets/vendor/noty/lib/themes/mint.css" rel="stylesheet">
	<link href="assets/css/variables.css" rel="stylesheet">
	<link href="assets/css/main.css" rel="stylesheet">
</head>

<body>
	<header id="header" class="header fixed-top" data-scrollto-offset="0">
		<div class="container d-flex align-items-center justify-content-between">
			<nav id="navbar" class="navbar">
				<ul>
					<li>
						<a class="nav-link scrollto" href="index.html#hero">Home</a>
					</li>
				</ul>
				<i class="bi bi-list mobile-nav-toggle d-none"></i>
			</nav>
			<a href="index.html" class="logo d-flex align-items-center scrollto me-auto me-lg-0">
				<h1>Logo Alanı</h1>
			</a>
			<a class="btn-getstarted scrollto d-none d-md-block" href="index.html#about">Get Started</a>
		</div>
	</header>
	<section id="hero" class="hero pb-0">
		<div class="container">
			<div class="row">
				<div class="col-md-3 d-none d-md-block">
					<img src="<?php echo base_url("assets/img/reklam_kare.png"); ?>" alt="" class="img-fluid w-100">
				</div>
				<div class="col-12 col-md-6">
					<div class="w-100 h-100 p-3 justify-content-center d-inline-flex flex-column" style="border: 4px dashed rgba(0, 0, 0, .5); border-radius:5px;">
						<h2 style="font-size:1.6rem; text-align:center;">Geçici E-posta Adresiniz</h2>
						<div class="flex-column flex-md-row input-group">
							<input id="mail-input" type="text" data-finish="<?php echo date("Y-m-d H:i:s", $this->session->userdata("lifetime") + 600); ?>" readonly="readonly" value="<?php echo $user_data["address"]; ?>" class="form-control w-auto">
							<button class="btn btn-primary" type="button" id="copy-button">Kopyala</button>
							<span id="clock" class="input-group-text">10:00</span>
						</div>
					</div>
				</div>
				<div class="col-md-3 d-none d-md-block">
					<img src="<?php echo base_url("assets/img/reklam_kare.png"); ?>" alt="" class="img-fluid w-100">
				</div>
			</div>
			<div class="row mt-3 d-none d-md-block">
				<img src="<?php echo base_url("assets/img/reklam_yatay.png"); ?>" class="img-fluid w-100" alt="">
			</div>
		</div>
	</section>
	<main id="main">
		<section id="mailbox" class="mailbox pt-0">
			<div class="container">
				<div class="row mt-3">
					<div class="col">
						<div class="buttons d-flex justify-content-center align-items-center gap-2 bg-dark py-3">
							<a href="#" class="btn btn-success text-white"><i class="bi bi-arrow-clockwise"></i> Yenile</a>
							<a href="#" class="btn btn-primary text-white"><i class="bi bi-pencil"></i> Değiştir</a>
							<a href="#" class="btn btn-danger text-white"><i class="bi bi-trash"></i> Sil</a>
						</div>
					</div>
				</div>
				<div class="row mt-3">
					<div class="col d-none d-md-block">
						<img src="<?php echo base_url("assets/img/reklam_dik.png"); ?>" class="w-100 img-fluid" alt="">
					</div>
					<div class="col-12 col-md-8">
						<div class="card">
							<div class="card-header bg-dark text-light">
								<h4 class="card-title p-0 m-0">Gelen Kutunuz</h4>
							</div>
							<div class="card-body faq">
								<div class="accordion accordion-flush" id="faqlist">
									<!-- <div class="accordion-item">
										<h3 class="accordion-header">
											<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-1">
												<i class="bi bi-envelope-fill question-icon"></i>
												Non consectetur a erat nam at lectus urna duis?
											</button>
										</h3>
										<div id="faq-content-1" class="accordion-collapse collapse" data-bs-parent="#faqlist">
											<div class="accordion-body">
												Feugiat pretium nibh ipsum consequat. Tempus iaculis urna id volutpat lacus laoreet non curabitur gravida. Venenatis lectus magna fringilla urna porttitor rhoncus dolor purus non.
											</div>
										</div>
									</div> -->
								</div>
								<div class="mails py-3">
									<span class="alert alert-info d-block">Gelen Kutusu boş gibi görünüyor.</span>
								</div>
							</div>
						</div>
						<div class="description mt-3">
							<h3>Neden Geçici E-posta Kullanmalıyım?</h3>
							<p>
								E-posta adresinizi kullanmak istemediğiniz durumlarda geçici e-postalar kullanabilirsiniz. Bu e-postalar kullan at metoduyla beraber kullanılmaktadır.
							</p>
						</div>
					</div>
					<div class="col d-none d-md-block">
						<img src="<?php echo base_url("assets/img/reklam_dik.png"); ?>" class="w-100 img-fluid" alt="">
					</div>
				</div>
			</div>
		</section>
		<section id="recent-blog-posts" class="recent-blog-posts">
			<div class="container">
				<div class="section-header">
					<h2>Bloglar</h2>
					<p>Son yazılan yazılarımız.</p>
				</div>
				<div class="row">
					<div class="col-lg-4">
						<div class="post-box">
							<div class="post-img"><img src="<?php echo base_url("assets/img/blog_gorseli.png"); ?>" class="img-fluid" alt=""></div>
							<h3 class="post-title">Eum ad dolor et. Autem aut fugiat debitis voluptatem consequuntur sit</h3>
							<p>Illum voluptas ab enim placeat. Adipisci enim velit nulla. Vel omnis laudantium. Asperiores eum ipsa est officiis. Modi cupiditate exercitationem qui magni est...</p>
							<a href="blog-details.html" class="readmore stretched-link">
								<span>Read More</span>
								<i class="bi bi-arrow-right"></i>
							</a>
						</div>
					</div>
					<div class="col-lg-4">
						<div class="post-box">
							<div class="post-img"><img src="<?php echo base_url("assets/img/blog_gorseli.png"); ?>" class="img-fluid" alt=""></div>
							<h3 class="post-title">Et repellendus molestiae qui est sed omnis voluptates magnam</h3>
							<p>Voluptatem nesciunt omnis libero autem tempora enim ut ipsam id. Odit quia ab eum assumenda. Quisquam omnis aliquid necessitatibus tempora consectetur doloribus...</p>
							<a href="blog-details.html" class="readmore stretched-link">
								<span>Read More</span>
								<i class="bi bi-arrow-right"></i>
							</a>
						</div>
					</div>
					<div class="col-lg-4">
						<div class="post-box">
							<div class="post-img"><img src="<?php echo base_url("assets/img/blog_gorseli.png"); ?>" class="img-fluid" alt=""></div>
							<h3 class="post-title">Quia assumenda est et veritatis aut quae</h3>
							<p>Quia nam eaque omnis explicabo similique eum quaerat similique laboriosam. Quis omnis repellat sed quae consectetur magnam veritatis dicta nihil...</p>
							<a href="blog-details.html" class="readmore stretched-link">
								<span>Read More</span>
								<i class="bi bi-arrow-right"></i>
							</a>
						</div>
					</div>

				</div>

			</div>

		</section>
		<!-- End Recent Blog Posts Section -->
	</main>
	<!-- End #main -->

	<!-- ======= Footer ======= -->
	<footer id="footer" class="footer">

		<div class="footer-content">
			<div class="container">
				<div class="row">

					<div class="col-lg-3 col-md-6">
						<div class="footer-info">
							<h3>HeroBiz</h3>
							<p>
								A108 Adam Street
								<br>
								NY 535022, USA<br><br>
								<strong>Phone:</strong>
								+1 5589 55488 55<br>
								<strong>Email:</strong>
								info@example.com<br>
							</p>
						</div>
					</div>

					<div class="col-lg-2 col-md-6 footer-links">
						<h4>Useful Links</h4>
						<ul>
							<li>
								<i class="bi bi-chevron-right"></i>
								<a href="#">Home</a>
							</li>
							<li>
								<i class="bi bi-chevron-right"></i>
								<a href="#">About us</a>
							</li>
							<li>
								<i class="bi bi-chevron-right"></i>
								<a href="#">Services</a>
							</li>
							<li>
								<i class="bi bi-chevron-right"></i>
								<a href="#">Terms of service</a>
							</li>
							<li>
								<i class="bi bi-chevron-right"></i>
								<a href="#">Privacy policy</a>
							</li>
						</ul>
					</div>

					<div class="col-lg-3 col-md-6 footer-links">
						<h4>Our Services</h4>
						<ul>
							<li>
								<i class="bi bi-chevron-right"></i>
								<a href="#">Web Design</a>
							</li>
							<li>
								<i class="bi bi-chevron-right"></i>
								<a href="#">Web Development</a>
							</li>
							<li>
								<i class="bi bi-chevron-right"></i>
								<a href="#">Product Management</a>
							</li>
							<li>
								<i class="bi bi-chevron-right"></i>
								<a href="#">Marketing</a>
							</li>
							<li>
								<i class="bi bi-chevron-right"></i>
								<a href="#">Graphic Design</a>
							</li>
						</ul>
					</div>

					<div class="col-lg-4 col-md-6 footer-newsletter">
						<h4>Our Newsletter</h4>
						<p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>
						<form action="" method="post">
							<input type="email" name="email"><input type="submit" value="Subscribe">
						</form>

					</div>

				</div>
			</div>
		</div>

		<div class="footer-legal text-center">
			<div class="container d-flex flex-column flex-lg-row justify-content-center justify-content-lg-between align-items-center">

				<div class="d-flex flex-column align-items-center align-items-lg-start">
					<div class="copyright">
						&copy; Copyright
						<strong>
							<span>HeroBiz</span>
						</strong>. All Rights Reserved
					</div>
					<div class="credits">
						<!-- All the links in the footer should remain intact. -->
						<!-- You can delete the links only if you purchased the pro version. -->
						<!-- Licensing information: https://bootstrapmade.com/license/ -->
						<!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/herobiz-bootstrap-business-template/ -->
						Designed by
						<a href="https://bootstrapmade.com/"> BootstrapMade</a>
					</div>
				</div>

				<div class="social-links order-first order-lg-last mb-3 mb-lg-0">
					<a href="#" class="twitter">
						<i class="bi bi-twitter"></i>
					</a>
					<a href="#" class="facebook">
						<i class="bi bi-facebook"></i>
					</a>
					<a href="#" class="instagram">
						<i class="bi bi-instagram"></i>
					</a>
					<a href="#" class="google-plus">
						<i class="bi bi-skype"></i>
					</a>
					<a href="#" class="linkedin">
						<i class="bi bi-linkedin"></i>
					</a>
				</div>

			</div>
		</div>

	</footer>
	<a href="#" class="scroll-top d-flex align-items-center justify-content-center">
		<i class="bi bi-arrow-up-short"></i>
	</a>
	<div id="preloader"></div>
	<script src="assets/js/jquery.js"></script>
	<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
	<script src="assets/vendor/noty/lib/noty.min.js"></script>
	<script src="assets/js/main.js"></script>
	<script>
		setInterval(() => {
			$.get("api/getStatus", function(data) {
				console.log(data)
			});
			$.get("api/getInbox", {
				address: $("#mail-input").val()
			}, function(data) {
				if (data.length) {
					$(".mails").empty();
					$.each(data, function(ind, val) {
						$(".mails").append(`<div class="accordion-item aos-init aos-animate"">
                <h3 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-${ind}">
                    <i class="bi bi-envelope-fill question-icon"></i>
                    ${val.fromName}(${val.fromAddress}) - ${val.subject}
                  </button>
                </h3>
                <div id="faq-content-${ind}" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                  <div class="accordion-body">${val.textHtml}</div>
                </div>
              </div>`)
					});
				}
			});
		}, 5000);
	</script>
</body>

</html>
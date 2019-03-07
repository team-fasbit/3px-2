<!DOCTYPE html>
<html lang="zxx" class="js">
<head>
	<meta charset="utf-8">
	<meta name="author" content="Softnio">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="3px is a decentralized escrow platform to allow seamless transactions between 2 or more parties, where trust and security are a necessity">
	<!-- Fav Icon  -->
	<link rel="shortcut icon" href="{{$settings->fav_ico}}">
	<!-- Site Title  -->
	<title>{{$settings->site_title}}</title>
	<!-- Vendor Bundle CSS -->
	<link rel="stylesheet" href="landing/assets/css/vendor.bundle.css?ver=122">
	<!-- Custom styles for this template -->
	<link rel="stylesheet" href="landing/assets/css/style.css?ver=122">
	<link rel="stylesheet" href="landing/assets/css/theme.css?ver=122">
	
</head>

<body class="theme-dark io-dark io-dark-light" data-spy="scroll" data-target="#mainnav" data-offset="80">

	<!-- Header --> 
	<header class="site-header is-sticky">

		<!-- Place Particle Js -->
		<div id="particles-js" class="particles-container particles-js"></div>

		<!-- Navbar -->
		<div class="navbar navbar-expand-lg is-transparent" id="mainnav">
			<nav class="container">

				<a class="navbar-brand" href="./">
					<img class="logo logo-dark" alt="logo" src="{{asset($settings->site_logo)}}" srcset="{{asset($settings->site_logo)}} 2x">
					<img class="logo logo-light" alt="logo" src="{{asset($settings->site_logo)}}" srcset="{{asset	($settings->site_logo)}} 2x">
				</a>

				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggle">
					<span class="navbar-toggler-icon">
						<span class="ti ti-align-justify"></span>
					</span>
				</button>

				<div class="collapse navbar-collapse justify-content-end" id="navbarToggle">
					<ul class="navbar-nav">
						<li class="nav-item"><a class="nav-link menu-link" href="#intro">How it Works<span class="sr-only">(current)</span></a></li>
						<li class="nav-item"><a class="nav-link menu-link" href="#tokenSale">Token Sale</a></li>
						<li class="nav-item"><a class="nav-link menu-link" href="#roadmap">Roadmap</a></li>
						<li class="nav-item"><a class="nav-link menu-link" href="#team">Team</a></li>
						<li class="nav-item"><a class="nav-link menu-link" href="#partners">Partners</a></li>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">MORE</a>
							<div class="dropdown-menu">
								<a class="dropdown-item menu-link" href="#media-partner">Media Partners</a>
								<a class="dropdown-item menu-link" href="#blogs">Blogs</a>
								<a class="dropdown-item menu-link" href="#faq">Faqs</a>
							</div>
						</li>
						<li class="nav-item"><a class="nav-link menu-link" href="#contact">Contact</a></li>
					</ul>
					<ul class="navbar-nav navbar-btns">
						<li class="nav-item"><a class="nav-link btn btn-sm btn-outline menu-link" href="/register">Register</a></li>
						<li class="nav-item"><a class="nav-link btn btn-sm btn-outline menu-link" href="/login">Login</a></li>
					</ul>
				</div>
			</nav>
		</div>
		<!-- End Navbar -->

		<!-- Banner/Slider -->
		<div id="header" class="banner banner-full banner-curb d-flex align-items-center">
			<div class="container">
				<div class="banner-content">
					<div class="row align-items-center mobile-center">
						<div class="col-lg-6 col-md-12 order-lg-first">
							<div class="header-txt">
								<h1>Start Protecting Your Transactions Today!</h1>
								<p class="lead color-secondary">A Fully Automated Digital Escrow <br> Service For Members Only</p>
								<ul class="btns">
									<li><a href="/register" class="btn">Sign up to Join</a></li>
									@if($settings->white_paper)
									<li><a target="_blank" href="{{$settings->white_paper}}" class="btn btn-alt">White Paper</a></li>
									@endif
								</ul>
								<ul class="social">
									<li><a href="javascript:void(0);"><em class="fa fa-facebook"></em></a></li>
									<li><a href="javascript:void(0);"><em class="fa fa-twitter"></em></a></li>
									<li><a href="javascript:void(0);"><em class="fa fa-youtube-play"></em></a></li>
									<li><a href="javascript:void(0);"><em class="fa fa-github"></em></a></li>
									<li><a href="javascript:void(0);"><em class="fa fa-bitcoin"></em></a></li>
									<li><a href="javascript:void(0);"><em class="fa fa-medium"></em></a></li>
								</ul>
							</div>
						</div><!-- .col  -->
						<div class="col-lg-5 offset-lg-1 col-md-12 order-first">
							<div class="countdown-box countdown-header text-center">
								<span class="extra-line"></span>
								<!--h6>Token Sale Opens In </h6>
								<div class="token-countdown d-flex align-content-stretch" data-date="{{$settings->date_to_be_launched}}"></div>
								<div class="token-status-bar">
									<div class="token-status-percent" style="width:75%;"></div>
									<span class="token-status-point token-status-point-1" style="left:25%;">Pre-Sale</span>
									<span class="token-status-point token-status-point-2" style="left:55%;">Soft Cap</span>
									<span class="token-status-point token-status-point-3" style="left:80%;">Bonus</span>
								</div-->
								<div class="mb-4">
									<img src="landing/images/3px-150-height.png" alt="3px logo">
								</div>
								<a href="/register" class="btn btn-alt btn-sm">Buy Credits Now</a>
								<ul class="icon-list">
									<li><em class="fa fa-bitcoin"></em></li>
									<li><em class="fa fa-won"></em></li>
									<li><em class="fa fa-cc-visa"></em></li>
									<li><em class="fa fa-cc-mastercard"></em></li>
								</ul>
							</div>
						</div><!-- .col  -->
					</div><!-- .row  -->
				</div><!-- .banner-content  -->
			</div><!-- .container  -->
		</div>
		<!-- End Banner/Slider -->
	</header>
	<!-- End Header -->


	<!-- Start Section -->
	<div class="section section-pad section-bg nopb section-light" id="intro">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-md-5 offset-md-1">
					<div class="res-m-btm">
						<img src="landing/images/graph-dark-a.png" alt="graph">
					</div>
				</div><!-- .col  -->
				<div class="col-md-6 order-md-first order-last">
					<div class="text-block">
						<h2>We’ve built a platform <br> to protect you in every financial transaction.</h2>
						<p class="lead">We’re reinventing online and face-to-face transactions. To make them more secure and to protect all of the participants: buyers, sellers and suppliers.</p>
						<a href="https://www.youtube.com/watch?v=SSo_EIwHSd4" class="play-btn video-play">
							<em class="play"><span></span></em>
							<span>Watch Video</span>
							<span>What and How it work</span>
						</a>
					</div>
				</div><!-- .col  -->
			</div><!-- .row  -->
		</div><!-- .conatiner  -->
	</div>
	<!-- Start Section -->


	<!-- Start Section -->
	<div class="section section-pad no-pb section-bg section-light">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-md-5">
					<div class="res-m-btm">
						<img src="landing/images/graph-dark-b.png" alt="graph">
					</div>
				</div><!-- .col  -->
				<div class="col-md-6 offset-md-1">
					<div class="text-block">
						<h4>What is Token Crypto?</h4>
						<p class="lead">Token Crypto is a platform for the future of funding that powering dat for the new equity blockchain.</p>
						<p>While existing solutions offer to solve just one problem at a time, our team is up to build a secure, useful, &amp; easy-to-use product based on private blockchain. It will include easy cryptocurrency payments integration, and even a digital arbitration system. </p>
						<p>At the end, Our aims to integrate all companies, employees, and business assets into a unified blockchain ecosystem, which will make business truly efficient, transparent, and reliable.</p>
					</div>
				</div><!-- .col  -->
			</div><!-- .row  -->
		</div><!-- .container  -->
	</div>
	<!-- Start Section -->


	<!-- Start Section -->
	<div class="section section-pad section-bg section-light" id="apps">
		<div class="container">

			<div class="row text-center">
				<div class="col-md-8 offset-md-2 col-lg-6 offset-lg-3">
					<div class="section-head">
						<div class="heading-animation">
							<span class="line-1"></span><span class="line-2"></span>
							<span class="line-3"></span><span class="line-4"></span>
							<span class="line-5"></span><span class="line-6"></span>
							<span class="line-7"></span><span class="line-8"></span>
						</div>
						<h2 class="section-title">The Token Offering App 
							<span>apps</span>
						</h2>
						<p>Once you’ve entered into our ecosystem, you can mange every thing. Anyone with a smartphone and an internet connection can partici pate in global marketplace.</p>
					</div>
				</div>
			</div>

			<div class="row align-items-center">
				<div class="col-md-6">
					<div class="res-m-btm">
						<img src="landing/images/graph-dark-c.png" alt="graph">
					</div>
				</div><!-- .col  -->

				<div class="col-md-5 offset-md-1">
					<div class="text-block">
						<p>Lorem ipsum dolor sit amet, consectetur adipis cing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exerc itation ullamco laboris nisi commodo consequat. </p>
						<ul>
							<li>Crypto-news curation</li>
							<li>Natural Language Understanding</li>
							<li>Wallet aggregation</li>
							<li>Professional Network</li>
							<li>No more expensive fees</li>
						</ul>
						<ul class="btns">
							<li><a href="javascript:void(0);" class="btn btn-sm">GET THE APP NOW</a></li>
							<li>
								<a href="javascript:void(0);"><em class="fa fa-apple"></em></a>
								<a href="javascript:void(0);"><em class="fa fa-android"></em></a>
								<a href="javascript:void(0);"><em class="fa fa-windows"></em></a>
							</li>
						</ul>
					</div>
				</div><!-- .col  -->
			</div><!-- .row  -->

		</div><!-- .container  -->
	</div>
	<!-- Start Section --> 


	<!-- Start Section -->
	<div class="section section-pad section-bg-alt" id="tokenSale">
		<div class="container">

			<div class="row text-center">
				<div class="col-md-8 offset-md-2 col-lg-6 offset-lg-3">
					<div class="section-head">
						<h2 class="section-title">TOKEN SALE
							<span>TOKEN</span>
						</h2>
						<p> Crypto token will be released on the basis of Ethereum and Bitocin platform. It’s compatibility of the token with third-party services wallets, exchanges etc, and provides easy-to-use integration.</p>
					</div>
				</div>
			</div>

			<div class="row align-items-center">
				<div class="col-lg-6 res-m-bttm">
					<div class="row event-info">
						<div class="col-sm-6">
							<div class="event-single-info">
								<h6>Start</h6>
								<p>Feb 8, 2018 (9:00AM GMT)</p>
							</div>
						</div><!-- .col  -->
						<div class="col-sm-6">
							<div class="event-single-info">
								<h6>Number of tokens for sale</h6>
								<p>900,000 ICC (9%)</p>
							</div>
						</div><!-- .col  -->
						<div class="col-sm-6">
							<div class="event-single-info">
								<h6>End</h6>
								<p>Feb 20, 2018 (11:00AM GMT)</p>
							</div>
						</div><!-- .col  -->
						<div class="col-sm-6">
							<div class="event-single-info">
								<h6>Tokens exchange rate</h6>
								<p>1 ETH = 650 ICC, 1 BTC = 1940 ICC</p>
							</div>
						</div><!-- .col  -->
						<div class="col-sm-6">
							<div class="event-single-info">
								<h6>Acceptable currencies</h6>
								<p>ETH, BTC, LTC</p>
							</div>
						</div><!-- .col  -->
						<div class="col-sm-6">
							<div class="event-single-info">
								<h6>Minimal transaction amount</h6>
								<p>1 ETH/ 1 BTC/ 1 LTC</p>
							</div>
						</div><!-- .col  -->
					</div><!-- .row  -->
				</div><!-- .col  -->
				<div class="col-lg-5 offset-lg-1">
					<div class="countdown-box text-center">
						<div class="token-countdown d-flex align-content-stretch" data-date="2018/09/05"></div>
						<a href="/register" class="btn btn-alt btn-sm">Join &amp; BUY TOKEN NOW</a>
						<ul class="icon-list">
							<li><em class="fa fa-bitcoin"></em></li>
							<li><em class="fa fa-won"></em></li>
							<li><em class="fa fa-cc-visa"></em></li>
							<li><em class="fa fa-cc-mastercard"></em></li>
						</ul>
					</div>
				</div><!-- .col  -->
			</div><!-- .row  -->

			<div class="gaps size-3x"></div><div class="gaps size-3x d-none d-md-block"></div><!-- .gaps  -->

			<div class="row text-center">
				<div class="col-md-6">
					<div class="single-chart res-m-btm">
						<h3 class="sub-heading">Distribution <br class="hidden-xs"> of tokens</h3>
						<div>
							<img src="landing/images/chart-dark-a.png" alt="chart">
						</div>
					</div>
				</div><!-- .col  -->

				<div class="col-md-6">
					<div class="single-chart">
						<h3 class="sub-heading">Use <br class="hidden-xs"> of proceeds</h3>
						<div>
							<img src="landing/images/chart-dark-b.png" alt="chart">
						</div>
					</div>
				</div><!-- .col  -->
			</div><!-- .row  -->

		</div><!-- .container  -->
	</div>
	<!-- Start Section -->


	<!-- Start Section -->
	<div class="section section-pad section-bg section-connect section-light" id="roadmap">
		<div class="container">

			<div class="row text-center">
				<div class="col">
					<div class="section-head">
						<h2 class="section-title">Our Roadmap
							<span>RoadMap</span>
						</h2>
					</div>
				</div>
			</div>

			<div class="row roadmap-list align-items-end">
				<div class="col-lg">
					<div class="single-roadmap roadmap-sm roadmap-done">
						<h6>March 2018</h6>
						<p>Start of the Token Crypto Platform Development.</p>
					</div>
				</div><!-- .col  -->
				<div class="col-lg width-0">
					<div class="single-roadmap roadmap-down roadmap-done">
						<h6>June 2018</h6>
						<p>Over 100 merchants on site</p>
					</div>
				</div><!-- .col  -->
				<div class="col-lg">
					<div class="single-roadmap roadmap-lg">
						<h6>June 2018</h6>
						<p>Launched of mobile Apps</p>
					</div>
				</div><!-- .col  -->
				<div class="col-lg width-0">
					<div class="single-roadmap roadmap-down">
						<h6>August 2018</h6>
						<p>Token Offering preparation &amp; Press Tour</p>
					</div>
				</div><!-- .col  -->
				<div class="col-lg">
					<div class="single-roadmap roadmap-sm">
						<h6>October 2018</h6>
						<p>Start Token Sale Round (1)</p>
					</div>
				</div><!-- .col  -->
				<div class="col-lg width-0">
					<div class="single-roadmap roadmap-down">
						<h6>December 2018</h6>
						<p>Partnership for the future EcoSystem</p>
					</div>
				</div><!-- .col  -->
				<div class="col-lg">
					<div class="single-roadmap roadmap-lg">
						<h6>January 2019</h6>
						<p>Our team set-up and commercial preparation</p>
					</div>
				</div><!-- .col  -->
				<div class="col-lg width-0">
					<div class="single-roadmap roadmap-down">
						<h6>May 2019</h6>
						<p>Priority opening for Token holder</p>
					</div>
				</div><!-- .col  -->
				<div class="col-lg">
					<div class="single-roadmap roadmap-sm">
						<h6>June 2019</h6>
						<p>Start Token Sale Round (2)</p>
					</div>
				</div><!-- .col  -->
				<div class="col-lg width-0">
					<div class="single-roadmap roadmap-down">
						<h6>Octorber 2019</h6>
						<p>Blockchain usage announcement for global Network</p>
					</div>
				</div><!-- .col  -->
				<div class="col-lg">
					<div class="single-roadmap roadmap-lg">
						<h6>December 2019</h6>
						<p>Operational Launch United States to general</p>
					</div>
				</div><!-- .col  -->
			</div><!-- .row  -->
		</div><!-- .container  -->
	</div>
	<!-- Start Section -->


	<!-- Start Section -->
	<div class="section section-pad section-bg-alt section-fix" id="team">
		<div class="container">

			<div class="row text-center">
				<div class="col-md-8 offset-md-2 col-lg-6 offset-lg-3">
					<div class="section-head">
						<h2 class="section-title">Powered by a Team
							<span>Team</span>
						</h2>
						<p>The Token Crypto Team combines a passion for esports, industry experise &amp; proven record in finance, development, marketing &amp;  licensing.</p>
					</div>
				</div>
			</div>

			<div class="row text-center">

				<div class="col-md-6 col-lg-3">
					<div class="team-circle">
						<div class="team-photo">
							<img src="landing/images/team-a-sq.jpg" alt="" />
							<a href="#team-profile-1" class="expand-trigger content-popup"></a>
						</div>
						<div class="team-info">
							<h5 class="team-name">Waylon Dalton</h5>
							<span class="team-title">CEO &amp; Lead Blockchain </span>
							<ul class="team-social">
								<li><a href="javascript:void(0);"><em class="fa fa-facebook"></em></a></li>
								<li><a href="javascript:void(0);"><em class="fa fa-linkedin"></em></a></li>
								<li><a href="javascript:void(0);"><em class="fa fa-twitter"></em></a></li>
							</ul>
						</div>

						<!-- Start .team-profile  -->
						<div id="team-profile-1" class="team-profile mfp-hide">
							<button title="Close" type="button" class="mfp-close">×</button>
							<div class="container-fluid">
								<div class="row no-mg">
									<div class="col-md-6">
										<div class="team-profile-photo">
											<img src="landing/images/team-a-lg.jpg" alt="" />
										</div>
									</div><!-- .col  -->

									<div class="col-md-6">
										<div class="team-profile-info">
											<h3 class="name">Waylon Dalton</h3>
											<p class="sub-title">CEO &amp; Lead Blockchain </p>
											<ul class="tpi-social">
												<li><a href="#"><em class="fa fa-facebook"></em></a></li>
												<li><a href="#"><em class="fa fa-twitter"></em></a></li>
												<li><a href="#"><em class="fa fa-google-plus"></em></a></li>
												<li><a href="#"><em class="fa fa-instagram"></em></a></li>
											</ul>
											<p>He is a great man to work Lorem ipsum dolor sit amet, consec tetur adipis icing elit. Simi lique, autem. </p>
											<p>Tenetur quos facere magnam volupt ates quas esse Sedrep ell endus mole stiae tates quas esse Sed repell endus molesti aela uda ntium quis quam iusto minima thanks.</p>
											<div class="skill-bars">
												<div class="single-skill-bar">
													<div class="row no-mg">
														<div class="col-8 no-pd"><span class="skill-title">HTML5</span></div>
														<div class="col-4 text-right no-pd"><span class="skill-percent">85%</span></div>
													</div>
													<div class="skill-bar">
														<div class="skill-bar-percent gradiant-background" style="width:85%"></div>
													</div>
												</div>
												<div class="single-skill-bar">
													<div class="row no-mg">
														<div class="col-8 no-pd"><span class="skill-title">CSS3</span></div>
														<div class="col-4 text-right no-pd"><span class="skill-percent">90%</span></div>
													</div>
													<div class="skill-bar">
														<div class="skill-bar-percent gradiant-background" style="width:90%"></div>
													</div>
												</div>
												<div class="single-skill-bar">
													<div class="row no-mg">
														<div class="col-8 no-pd"><span class="skill-title">Java</span></div>
														<div class="col-4 text-right no-pd"><span class="skill-percent">75%</span></div>
													</div>
													<div class="skill-bar">
														<div class="skill-bar-percent gradiant-background" style="width:75%"></div>
													</div>
												</div>
											</div>
										</div>
									</div><!-- .col  -->

								</div><!-- .row  -->
							</div><!-- .container  -->
						</div><!-- .team-profile  -->

					</div>
				</div><!-- .col  -->

				<div class="col-md-6 col-lg-3">
					<div class="team-circle">
						<div class="team-photo">
							<img src="landing/images/team-b-sq.jpg" alt="team">
							<a href="#team-profile-2" class="expand-trigger content-popup"></a>
						</div>
						<div class="team-info">
							<h5 class="team-name">Stefan Harary</h5>
							<span class="team-title">CTO &amp; Senior Developer</span>
							<ul class="team-social">
								<li><a href=""><em class="fa fa-facebook"></em></a></li>
								<li><a href=""><em class="fa fa-linkedin"></em></a></li>
								<li><a href=""><em class="fa fa-twitter"></em></a></li>
							</ul>
						</div>

						<!-- Start .team-profile  -->
						<div id="team-profile-2" class="team-profile mfp-hide">
							<button title="Close" type="button" class="mfp-close">×</button>
							<div class="container-fluid">
								<div class="row no-mg">
									<div class="col-md-6">
										<div class="team-profile-photo">
											<img src="landing/images/team-b-lg.jpg" alt="team" />
										</div>
									</div><!-- .col  -->

									<div class="col-md-6">
										<div class="team-profile-info">
											<h3 class="name">Stefan Harary</h3>
											<p class="sub-title">CTO &amp; Senior Developer</p>
											<ul class="tpi-social">
												<li><a href="#"><em class="fa fa-facebook"></em></a></li>
												<li><a href="#"><em class="fa fa-twitter"></em></a></li>
												<li><a href="#"><em class="fa fa-google-plus"></em></a></li>
												<li><a href="#"><em class="fa fa-instagram"></em></a></li>
											</ul>
											<p>He is a great man to work Lorem ipsum dolor sit amet, consec tetur adipis icing elit. Simi lique, autem. </p>
											<p>Tenetur quos facere magnam volupt ates quas esse Sedrep ell endus mole stiae tates quas esse Sed repell endus molesti aela uda ntium quis quam iusto minima thanks.</p>
											<div class="skill-bars">
												<div class="single-skill-bar">
													<div class="row no-mg">
														<div class="col-8 no-pd"><span class="skill-title">HTML5</span></div>
														<div class="col-4 text-right no-pd"><span class="skill-percent">85%</span></div>
													</div>
													<div class="skill-bar">
														<div class="skill-bar-percent gradiant-background" style="width:85%"></div>
													</div>
												</div>
												<div class="single-skill-bar">
													<div class="row no-mg">
														<div class="col-8 no-pd"><span class="skill-title">CSS3</span></div>
														<div class="col-4 text-right no-pd"><span class="skill-percent">90%</span></div>
													</div>
													<div class="skill-bar">
														<div class="skill-bar-percent gradiant-background" style="width:90%"></div>
													</div>
												</div>
												<div class="single-skill-bar">
													<div class="row no-mg">
														<div class="col-8 no-pd"><span class="skill-title">Java</span></div>
														<div class="col-4 text-right no-pd"><span class="skill-percent">75%</span></div>
													</div>
													<div class="skill-bar">
														<div class="skill-bar-percent gradiant-background" style="width:75%"></div>
													</div>
												</div>
											</div>
										</div>
									</div><!-- .col  -->

								</div><!-- .row  -->
							</div><!-- .container  -->
						</div><!-- .team-profile  -->

					</div>
				</div><!-- .col  -->

				<div class="col-md-6 col-lg-3">
					<div class="team-circle">
						<div class="team-photo">
							<img src="landing/images/team-c-sq.jpg" alt="team">
							<a href="#team-profile-3" class="expand-trigger content-popup"></a>
						</div>
						<div class="team-info">
							<h5 class="team-name">Moises Teare</h5>
							<span class="team-title">Blochain App Developer</span>
							<ul class="team-social">
								<li><a href=""><em class="fa fa-facebook"></em></a></li>
								<li><a href=""><em class="fa fa-linkedin"></em></a></li>
								<li><a href=""><em class="fa fa-twitter"></em></a></li>
							</ul>
						</div>

						<!-- Start .team-profile  -->
						<div id="team-profile-3" class="team-profile mfp-hide">
							<button title="Close" type="button" class="mfp-close">×</button>
							<div class="container-fluid">
								<div class="row no-mg">
									<div class="col-md-6">
										<div class="team-profile-photo">
											<img src="landing/images/team-c-lg.jpg" alt="team" />
										</div>
									</div><!-- .col  -->

									<div class="col-md-6">
										<div class="team-profile-info">
											<h3 class="name">Moises Teare</h3>
											<p class="sub-title">Blochain App Developer</p>
											<ul class="tpi-social">
												<li><a href="#"><em class="fa fa-facebook"></em></a></li>
												<li><a href="#"><em class="fa fa-twitter"></em></a></li>
												<li><a href="#"><em class="fa fa-google-plus"></em></a></li>
												<li><a href="#"><em class="fa fa-instagram"></em></a></li>
											</ul>
											<p>He is a great man to work Lorem ipsum dolor sit amet, consec tetur adipis icing elit. Simi lique, autem. </p>
											<p>Tenetur quos facere magnam volupt ates quas esse Sedrep ell endus mole stiae tates quas esse Sed repell endus molesti aela uda ntium quis quam iusto minima thanks.</p>
											<div class="skill-bars">
												<div class="single-skill-bar">
													<div class="row no-mg">
														<div class="col-8 no-pd"><span class="skill-title">HTML5</span></div>
														<div class="col-4 text-right no-pd"><span class="skill-percent">85%</span></div>
													</div>
													<div class="skill-bar">
														<div class="skill-bar-percent gradiant-background" style="width:85%"></div>
													</div>
												</div>
												<div class="single-skill-bar">
													<div class="row no-mg">
														<div class="col-8 no-pd"><span class="skill-title">CSS3</span></div>
														<div class="col-4 text-right no-pd"><span class="skill-percent">90%</span></div>
													</div>
													<div class="skill-bar">
														<div class="skill-bar-percent gradiant-background" style="width:90%"></div>
													</div>
												</div>
												<div class="single-skill-bar">
													<div class="row no-mg">
														<div class="col-8 no-pd"><span class="skill-title">Java</span></div>
														<div class="col-4 text-right no-pd"><span class="skill-percent">75%</span></div>
													</div>
													<div class="skill-bar">
														<div class="skill-bar-percent gradiant-background" style="width:75%"></div>
													</div>
												</div>
											</div>
										</div>
									</div><!-- .col  -->

								</div><!-- .row  -->
							</div><!-- .container  -->
						</div><!-- .team-profile  -->

					</div>
				</div><!-- .col  -->

				<div class="col-md-6 col-lg-3">
					<div class="team-circle">
						<div class="team-photo">
							<img src="landing/images/team-d-sq.jpg" alt="team">
							<a href="#team-profile-4" class="expand-trigger content-popup"></a>
						</div>
						<div class="team-info">
							<h5 class="team-name">Gabriel Bernal</h5>
							<span class="team-title">Community Management</span>
							<ul class="team-social">
								<li><a href=""><em class="fa fa-facebook"></em></a></li>
								<li><a href=""><em class="fa fa-linkedin"></em></a></li>
								<li><a href=""><em class="fa fa-twitter"></em></a></li>
							</ul>
						</div>

						<!-- Start .team-profile  -->
						<div id="team-profile-4" class="team-profile mfp-hide">
							<button title="Close" type="button" class="mfp-close">×</button>
							<div class="container-fluid">
								<div class="row no-mg">
									<div class="col-md-6">
										<div class="team-profile-photo">
											<img src="landing/images/team-d-lg.jpg" alt="team" />
										</div>
									</div><!-- .col  -->

									<div class="col-md-6">
										<div class="team-profile-info">
											<h3 class="name">Gabriel Bernal</h3>
											<p class="sub-title">Community Management</p>
											<ul class="tpi-social">
												<li><a href="#"><em class="fa fa-facebook"></em></a></li>
												<li><a href="#"><em class="fa fa-twitter"></em></a></li>
												<li><a href="#"><em class="fa fa-google-plus"></em></a></li>
												<li><a href="#"><em class="fa fa-instagram"></em></a></li>
											</ul>
											<p>He is a great man to work Lorem ipsum dolor sit amet, consec tetur adipis icing elit. Simi lique, autem. </p>
											<p>Tenetur quos facere magnam volupt ates quas esse Sedrep ell endus mole stiae tates quas esse Sed repell endus molesti aela uda ntium quis quam iusto minima thanks.</p>
											<div class="skill-bars">
												<div class="single-skill-bar">
													<div class="row no-mg">
														<div class="col-8 no-pd"><span class="skill-title">HTML5</span></div>
														<div class="col-4 text-right no-pd"><span class="skill-percent">85%</span></div>
													</div>
													<div class="skill-bar">
														<div class="skill-bar-percent gradiant-background" style="width:85%"></div>
													</div>
												</div>
												<div class="single-skill-bar">
													<div class="row no-mg">
														<div class="col-8 no-pd"><span class="skill-title">CSS3</span></div>
														<div class="col-4 text-right no-pd"><span class="skill-percent">90%</span></div>
													</div>
													<div class="skill-bar">
														<div class="skill-bar-percent gradiant-background" style="width:90%"></div>
													</div>
												</div>
												<div class="single-skill-bar">
													<div class="row no-mg">
														<div class="col-8 no-pd"><span class="skill-title">Java</span></div>
														<div class="col-4 text-right no-pd"><span class="skill-percent">75%</span></div>
													</div>
													<div class="skill-bar">
														<div class="skill-bar-percent gradiant-background" style="width:75%"></div>
													</div>
												</div>
											</div>
										</div>
									</div><!-- .col  -->

								</div><!-- .row  -->
							</div><!-- .container  -->
						</div><!-- .team-profile  -->

					</div>
				</div><!-- .col  -->
			</div><!-- .row  -->
			<div class="row">
				<div class="col-md-12">
					<div class="gaps size-2x"></div>
					<h3 class="sub-heading ucap">Advisors</h3>
					<div class="gaps size-2x"></div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-10 offset-md-1">
					<div class="row text-center">

						<div class="col-lg-4 col-md-6">
							<div class="team-circle">
								<div class="team-photo">
									<img src="landing/images/team-e-sq.jpg" alt="team">
									<a href="#team-profile-5" class="expand-trigger content-popup"></a>
								</div>
								<div class="team-info">
									<h5 class="team-name">Dylan Finch</h5>
									<span class="team-title">Board Advisor</span>
								</div>

								<!-- Start .team-profile  -->
								<div id="team-profile-5" class="team-profile mfp-hide">
									<button title="Close" type="button" class="mfp-close">×</button>
									<div class="container-fluid">
										<div class="row no-mg">
											<div class="col-md-6">
												<div class="team-profile-photo">
													<img src="landing/images/team-e-lg.jpg" alt="team" />
												</div>
											</div><!-- .col  -->

											<div class="col-md-6">
												<div class="team-profile-info">
													<h3 class="name">Dylan Finch</h3>
													<p class="sub-title">Board Advisor</p>
													<ul class="tpi-social">
														<li><a href="#"><em class="fa fa-facebook"></em></a></li>
														<li><a href="#"><em class="fa fa-twitter"></em></a></li>
														<li><a href="#"><em class="fa fa-google-plus"></em></a></li>
														<li><a href="#"><em class="fa fa-instagram"></em></a></li>
													</ul>
													<p>He is a great man to work Lorem ipsum dolor sit amet, consec tetur adipis icing elit. Simi lique, autem. </p>
													<p>Tenetur quos facere magnam volupt ates quas esse Sedrep ell endus mole stiae tates quas esse Sed repell endus molesti aela uda ntium quis quam iusto minima thanks.</p>
													<div class="skill-bars">
														<div class="single-skill-bar">
															<div class="row no-mg">
																<div class="col-8 no-pd"><span class="skill-title">HTML5</span></div>
																<div class="col-4 text-right no-pd"><span class="skill-percent">85%</span></div>
															</div>
															<div class="skill-bar">
																<div class="skill-bar-percent gradiant-background" style="width:85%"></div>
															</div>
														</div>
														<div class="single-skill-bar">
															<div class="row no-mg">
																<div class="col-8 no-pd"><span class="skill-title">CSS3</span></div>
																<div class="col-4 text-right no-pd"><span class="skill-percent">90%</span></div>
															</div>
															<div class="skill-bar">
																<div class="skill-bar-percent gradiant-background" style="width:90%"></div>
															</div>
														</div>
														<div class="single-skill-bar">
															<div class="row no-mg">
																<div class="col-8 no-pd"><span class="skill-title">Java</span></div>
																<div class="col-4 text-right no-pd"><span class="skill-percent">75%</span></div>
															</div>
															<div class="skill-bar">
																<div class="skill-bar-percent gradiant-background" style="width:75%"></div>
															</div>
														</div>
													</div>
												</div>
											</div><!-- .col  -->

										</div><!-- .row  -->
									</div><!-- .container  -->
								</div><!-- .team-profile  -->

							</div>
						</div><!-- .col  -->

						<div class="col-lg-4 col-md-6">
							<div class="team-circle">
								<div class="team-photo">
									<img src="landing/images/team-f-sq.jpg" alt="team">
									<a href="#team-profile-6" class="expand-trigger content-popup"></a>
								</div>
								<div class="team-info">
									<h5 class="team-name">Julian Paten</h5>
									<span class="team-title">Board Advisor</span>
								</div>

								<!-- Start .team-profile  -->
								<div id="team-profile-6" class="team-profile mfp-hide">
									<button title="Close" type="button" class="mfp-close">×</button>
									<div class="container-fluid">
										<div class="row no-mg">

											<div class="col-md-6">
												<div class="team-profile-photo">
													<img src="landing/images/team-f-lg.jpg" alt="team" />
												</div>
											</div><!-- .col  -->

											<div class="col-md-6">
												<div class="team-profile-info">
													<h3 class="name">Julian Paten</h3>
													<p class="sub-title">Board Advisor</p>
													<ul class="tpi-social">
														<li><a href="#"><em class="fa fa-facebook"></em></a></li>
														<li><a href="#"><em class="fa fa-twitter"></em></a></li>
														<li><a href="#"><em class="fa fa-google-plus"></em></a></li>
														<li><a href="#"><em class="fa fa-instagram"></em></a></li>
													</ul>
													<p>He is a great man to work Lorem ipsum dolor sit amet, consec tetur adipis icing elit. Simi lique, autem. </p>
													<p>Tenetur quos facere magnam volupt ates quas esse Sedrep ell endus mole stiae tates quas esse Sed repell endus molesti aela uda ntium quis quam iusto minima thanks.</p>
													<div class="skill-bars">
														<div class="single-skill-bar">
															<div class="row no-mg">
																<div class="col-8 no-pd"><span class="skill-title">HTML5</span></div>
																<div class="col-4 text-right no-pd"><span class="skill-percent">85%</span></div>
															</div>
															<div class="skill-bar">
																<div class="skill-bar-percent gradiant-background" style="width:85%"></div>
															</div>
														</div>
														<div class="single-skill-bar">
															<div class="row no-mg">
																<div class="col-8 no-pd"><span class="skill-title">CSS3</span></div>
																<div class="col-4 text-right no-pd"><span class="skill-percent">90%</span></div>
															</div>
															<div class="skill-bar">
																<div class="skill-bar-percent gradiant-background" style="width:90%"></div>
															</div>
														</div>
														<div class="single-skill-bar">
															<div class="row no-mg">
																<div class="col-8 no-pd"><span class="skill-title">Java</span></div>
																<div class="col-4 text-right no-pd"><span class="skill-percent">75%</span></div>
															</div>
															<div class="skill-bar">
																<div class="skill-bar-percent gradiant-background" style="width:75%"></div>
															</div>
														</div>
													</div>
												</div>
											</div><!-- .col  -->

										</div><!-- .row  -->
									</div><!-- .container  -->
								</div><!-- .team-profile  -->
							</div>
						</div><!-- .col  -->

						<div class="col-lg-4 col-md-6 offset-md-3 offset-lg-0">
							<div class="team-circle">
								<div class="team-photo">
									<img src="landing/images/team-g-sq.jpg" alt="team">
									<a href="#team-profile-7" class="expand-trigger content-popup"></a>
								</div>
								<div class="team-info">
									<h5 class="team-name">Jaxon Kilburn</h5>
									<span class="team-title">Board Advisor</span>
								</div>

								<!-- Start .team-profile  -->
								<div id="team-profile-7" class="team-profile mfp-hide">
									<button title="Close" type="button" class="mfp-close">×</button>
									<div class="container-fluid">
										<div class="row no-mg">

											<div class="col-md-6">
												<div class="team-profile-photo">
													<img src="landing/images/team-g-lg.jpg" alt="team" />
												</div>
											</div><!-- .col  -->

											<div class="col-md-6">
												<div class="team-profile-info">
													<h3 class="name">Jaxon Kilburn</h3>
													<p class="sub-title">Board Advisor</p>
													<ul class="tpi-social">
														<li><a href="#"><em class="fa fa-facebook"></em></a></li>
														<li><a href="#"><em class="fa fa-twitter"></em></a></li>
														<li><a href="#"><em class="fa fa-google-plus"></em></a></li>
														<li><a href="#"><em class="fa fa-instagram"></em></a></li>
													</ul>
													<p>He is a great man to work Lorem ipsum dolor sit amet, consec tetur adipis icing elit. Simi lique, autem. </p>
													<p>Tenetur quos facere magnam volupt ates quas esse Sedrep ell endus mole stiae tates quas esse Sed repell endus molesti aela uda ntium quis quam iusto minima thanks.</p>
													<div class="skill-bars">
														<div class="single-skill-bar">
															<div class="row no-mg">
																<div class="col-8 no-pd"><span class="skill-title">HTML5</span></div>
																<div class="col-4 text-right no-pd"><span class="skill-percent">85%</span></div>
															</div>
															<div class="skill-bar">
																<div class="skill-bar-percent gradiant-background" style="width:85%"></div>
															</div>
														</div>
														<div class="single-skill-bar">
															<div class="row no-mg">
																<div class="col-8 no-pd"><span class="skill-title">CSS3</span></div>
																<div class="col-4 text-right no-pd"><span class="skill-percent">90%</span></div>
															</div>
															<div class="skill-bar">
																<div class="skill-bar-percent gradiant-background" style="width:90%"></div>
															</div>
														</div>
														<div class="single-skill-bar">
															<div class="row no-mg">
																<div class="col-8 no-pd"><span class="skill-title">Java</span></div>
																<div class="col-4 text-right no-pd"><span class="skill-percent">75%</span></div>
															</div>
															<div class="skill-bar">
																<div class="skill-bar-percent gradiant-background" style="width:75%"></div>
															</div>
														</div>
													</div>
												</div>
											</div><!-- .col  -->

										</div><!-- .row  -->
									</div><!-- .container  -->
								</div><!-- .team-profile  -->

							</div>
						</div><!-- .col  -->
					</div><!-- .row  -->
				</div><!-- .col  -->
			</div><!-- .row  -->
		</div>
	</div>
	<!-- Start Section -->


	<!-- Start Section -->
	<div class="section section-pad section-bg-alt section-light" id="partners">
		<div class="container">
			<div class="row text-center">
				<div class="col">
					<div class="section-head">
						<h2 class="section-title">Token CRYPTO PARTNERS
							<span>Partners</span>
						</h2>
					</div>
				</div>
			</div>
			<div class="partner-list">
				<div class="row text-center">
					<div class="col-sm">
						<div class="single-partner">
							<img src="landing/images/partner-md-a.png" alt="partner">
						</div>
					</div>
					<div class="col-sm">
						<div class="single-partner">
							<img src="landing/images/partner-md-b.png" alt="partner">
						</div>
					</div>
					<div class="col-sm">
						<div class="single-partner">
							<img src="landing/images/partner-md-c.png" alt="partner">
						</div>
					</div>
				</div>
				<div class="row text-center">
					<div class="col-md-8 offset-md-2">
						<div class="row">
							<div class="col-sm">
								<div class="single-partner">
									<img src="landing/images/partner-md-d.png" alt="partner">
								</div>
							</div>
							<div class="col-sm">
								<div class="single-partner">
									<img src="landing/images/partner-md-e.png" alt="partner">
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Start Section -->


	<!-- Start Section -->
	<div class="section section-pad section-bg section-connect section-light-alt" id="media-partner">
		<div class="container">
			<div class="row text-center">
				<div class="col-md-6 offset-md-3">
					<div class="section-head">
						<h6 class="section-title-sm">As seen in</h6>
					</div>
				</div>
			</div>
			<div class="partner-list">
				<div class="row text-center">
					<div class="col-sm col-6">
						<div class="single-partner">
							<img src="landing/images/partner-xs-a.png" alt="partner">
						</div>
					</div>
					<div class="col-sm col-6">
						<div class="single-partner">
							<img src="landing/images/partner-xs-b.png" alt="partner">
						</div>
					</div>
					<div class="col-sm col-6">
						<div class="single-partner">
							<img src="landing/images/partner-xs-c.png" alt="partner">
						</div>
					</div>
					<div class="col-sm col-6">
						<div class="single-partner">
							<img src="landing/images/partner-xs-d.png" alt="partner">
						</div>
					</div>
					<div class="col-sm col-6">
						<div class="single-partner">
							<img src="landing/images/partner-xs-e.png" alt="partner">
						</div>
					</div>
					<div class="col-sm col-6">
						<div class="single-partner">
							<img src="landing/images/partner-xs-f.png" alt="partner">
						</div>
					</div>
				</div>
				<div class="row text-center">
					<div class="col-md-10 offset-md-1">
						<div class="row">
							<div class="col-sm col-6">
								<div class="single-partner">
									<img src="landing/images/partner-sm-a.png" alt="partner">
								</div>
							</div>
							<div class="col-sm col-6">
								<div class="single-partner">
									<img src="landing/images/partner-sm-b.png" alt="partner">
								</div>
							</div>
							<div class="col-sm col-6">
								<div class="single-partner">
									<img src="landing/images/partner-sm-c.png" alt="partner">
								</div>
							</div>
							<div class="col-sm col-6">
								<div class="single-partner">
									<img src="landing/images/partner-sm-d.png" alt="partner">
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- End Section -->


	<!-- Start Section -->
	<div class="section section-pad section-bg-dark blog-section" id="blogs">
		<div class="container">
			<div class="row text-center">
				<div class="col">
					<div class="section-head">
						<h2 class="section-title">Token Crypto NEWS
							<span>News</span>
						</h2>
					</div>
				</div>
			</div><!-- .row -->
			<div class="blog-list">
				<div class="row">
					<div class="col-lg-4 offset-lg-0 col-sm-8 offset-sm-2">
						<div class="blog-item">
							<div class="blog-photo"><a href="https://levelten.org/9-interesting-facts-about-blockchain-youve-probably-never-heard-about/" rel="no-follow" target="_blank"><img src="landing/images/blog-thumb-a.jpg" alt="blog-photo"></a></div>
							<div class="blog-texts">
								<ul class="blog-meta">
									<li><a href="">12 Mar, 2018</a></li>
									<li><a href="#">Blockchain</a></li>
								</ul>
								<h5 class="blog-title"><a href="https://levelten.org/9-interesting-facts-about-blockchain-youve-probably-never-heard-about/" rel="no-follow" target="_blank">The Intersection Where Blockchain Meets Energy</a></h5>
								<p>Blockchain Meets Energy Surplus of electrical energy is sometimes ut perspiciatis unde omnis iste natus...</p>
							</div>
						</div>
					</div><!-- .col -->
					<div class="col-lg-4 offset-lg-0 col-sm-8 offset-sm-2">
						<div class="blog-item">
							<div class="blog-photo"><a href="https://levelten.org/riding-on-its-initial-coin-offering-ico-zeto-hopes-to-raise-20-million/" rel="no-follow" target="_blank"><img src="landing/images/blog-thumb-b.jpg" alt="blog-photo"></a></div>
							<div class="blog-texts">
								<ul class="blog-meta">
									<li><a href="#">26 Feb, 2018</a></li>
									<li><a href="#">Cryptocurrency</a></li>
								</ul>
								<h5 class="blog-title"><a href="https://levelten.org/riding-on-its-initial-coin-offering-ico-zeto-hopes-to-raise-20-million/" rel="no-follow" target="_blank">Pros &amp; Cons of Premined Cryptocurrencies</a></h5>
								<p>Premine involves mining large quantities of the coin before the sed do eiusmod tempor incididunt ut ...</p>
							</div>
						</div>
					</div><!-- .col -->
					<div class="col-lg-4 offset-lg-0 col-sm-8 offset-sm-2">
						<div class="blog-item">
							<div class="blog-photo"><a href="https://levelten.org/to-increase-bitcoin-trading-remove-other-transactional-barriers-a-melbourne-based-exchange-raises-16m/" rel="no-follow" target="_blank"><img src="landing/images/blog-thumb-c.jpg" alt="blog-photo"></a></div>
							<div class="blog-texts">
								<ul class="blog-meta">
									<li><a href="#">08 Feb, 2018</a></li>
									<li><a href="#">Technology</a></li>
								</ul>
								<h5 class="blog-title"><a href="https://levelten.org/to-increase-bitcoin-trading-remove-other-transactional-barriers-a-melbourne-based-exchange-raises-16m/" rel="no-follow" target="_blank">How &amp; Where To Market Your Token Offering Startup</a></h5>
								<p>So you've got a business idea, and a nifty way to incorporate sunt in culpa qui officia deserunt...</p>
							</div>
						</div>
					</div><!-- .col -->
				</div><!-- .row -->
			</div><!-- .blog-list -->
			<div class="row text-center">
				<div class="col-md-12">
					<a href="https://levelten.org" rel="no-follow" target="_blank" class="btn btn-more">Read All News <em class="ti ti-angle-right"></em></a>
				</div>
			</div>
		</div><!-- .container -->
	</div>
	<!-- Start Section -->
	

	<!-- Start Section -->
	<div class="section section-pad no-pb section-bg-alt section-light" id="faq">
		<div class="container">
			<div class="row text-center">
				<div class="col-md-8 offset-md-2 col-lg-6 offset-lg-3">
					<div class="section-head">
						<h2 class="section-title">Frequently asked questions
							<span>FAQS</span>
						</h2>
						<p>Below we’ve provided a bit of Token, cryptocurrencies, and few others. If you have any other questions, please get in touch using the contact form below.</p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-8 offset-md-2">
					<div class="tab-custom">
						<!-- Nav tabs -->
						<ul class="nav nav-tabs text-center">
							<li class="nav-item">
								<a class="nav-link active" data-toggle="tab" href="#tab-1">General</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" data-toggle="tab" href="#tab-2">Pre-Token Offering &amp; Token Offering</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" data-toggle="tab" href="#tab-3">Tokens</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" data-toggle="tab" href="#tab-4">CLIENT</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" data-toggle="tab" href="#tab-5">Legal</a>
							</li>
						</ul>
						<!-- Tab panes -->
						<div class="tab-content">
							<div class="tab-pane fade show active" id="tab-1">
								<div class="accordion" id="accordion-1">
									<div class="card">
										<div class="card-header">
											<h5>
												<a data-toggle="collapse" data-target="#collapse-1-1">
													What is Token Crypto?<span class="plus-minus"><span class="ti ti-angle-up"></span></span>
												</a>
											</h5>
										</div>
										<div id="collapse-1-1" class="collapse show" data-parent="#accordion-1">
											<div class="card-body">
												<p>Token Crypto - is unique platform; that is secure, smart and easy-to-use platform, and completely disrupting the way businesses raise capital.</p>
											</div>
										</div>
									</div>
									<div class="card">
										<div class="card-header">
											<h5>
												<a class="collapsed" data-toggle="collapse" data-target="#collapse-1-2">
												  What cryptocurrencies can I use to purchase?<span class="plus-minus"><span class="ti ti-angle-up"></span></span>
												</a>
											</h5>
										</div>
										<div id="collapse-1-2" class="collapse" data-parent="#accordion-1">
											<div class="card-body">
												<p>Token Crypto - is unique platform; that is secure, smart and easy-to-use platform, and completely disrupting the way businesses raise capital.</p>
											</div>
										</div>
									</div>
									<div class="card">
										<div class="card-header">
											<h5>
												<a class="collapsed" data-toggle="collapse" data-target="#collapse-1-3">
												  How can I participate in the Token sale?<span class="plus-minus"><span class="ti ti-angle-up"></span></span>
												</a>
											</h5>
										</div>
										<div id="collapse-1-3" class="collapse" data-parent="#accordion-1">
											<div class="card-body">
												<p>Token Crypto - is unique platform; that is secure, smart and easy-to-use platform, and completely disrupting the way businesses raise capital.</p>
											</div>
										</div>
									</div>
									<div class="card">
										<div class="card-header">
											<h5>
												<a class="collapsed" data-toggle="collapse" data-target="#collapse-1-4">
												  How do I benefit from the Token?<span class="plus-minus"><span class="ti ti-angle-up"></span></span>
												</a>
											</h5>
										</div>
										<div id="collapse-1-4" class="collapse" data-parent="#accordion-1">
											<div class="card-body">
												<p>Token Crypto - is unique platform; that is secure, smart and easy-to-use platform, and completely disrupting the way businesses raise capital.</p>
											</div>
										</div>
									</div>
								</div>
							</div><!-- End tab-pane -->
							<div class="tab-pane fade" id="tab-2">
								<div class="accordion" id="accordion-2">
									<div class="card">
										<div class="card-header">
											<h5>
												<a data-toggle="collapse" data-target="#collapse-2-1">
												  Which of us ever undertakes laborious?<span class="plus-minus"><span class="ti ti-angle-up"></span></span>
												</a>
											</h5>
										</div>
										<div id="collapse-2-1" class="collapse show" data-parent="#accordion-2">
											<div class="card-body">
												<p>Token Crypto - is unique platform; that is secure, smart and easy-to-use platform, and completely disrupting the way businesses raise capital.</p>
											</div>
										</div>
									</div>
									<div class="card">
										<div class="card-header">
											<h5>
												<a class="collapsed" data-toggle="collapse" data-target="#collapse-2-2">
													Who do not know how to pursue rationally?<span class="plus-minus"><span class="ti ti-angle-up"></span></span>
												</a>
											</h5>
										</div>
										<div id="collapse-2-2" class="collapse" data-parent="#accordion-2">
											<div class="card-body">
												<p>Token Crypto - is unique platform; that is secure, smart and easy-to-use platform, and completely disrupting the way businesses raise capital.</p>
											</div>
										</div>
									</div>
									<div class="card">
										<div class="card-header">
											<h5>
												<a class="collapsed" data-toggle="collapse" data-target="#collapse-2-4">
												   Their separate existence is a myth?<span class="plus-minus"><span class="ti ti-angle-up"></span></span>
												</a>
											</h5>
										</div>
										<div id="collapse-2-4" class="collapse" data-parent="#accordion-2">
											<div class="card-body">
												<p>Token Crypto - is unique platform; that is secure, smart and easy-to-use platform, and completely disrupting the way businesses raise capital.</p>
											</div>
										</div>
									</div>
									<div class="card">
										<div class="card-header">
											<h5>
												<a class="collapsed" data-toggle="collapse" data-target="#collapse-2-3">
												  Pityful a rethoric question ran over her cheek?<span class="plus-minus"><span class="ti ti-angle-up"></span></span>
												</a>
											</h5>
										</div>
										<div id="collapse-2-3" class="collapse" data-parent="#accordion-2">
											<div class="card-body">
												<p>Token Crypto - is unique platform; that is secure, smart and easy-to-use platform, and completely disrupting the way businesses raise capital.</p>
											</div>
										</div>
									</div>
								</div>
							</div><!-- End tab-pane -->
							<div class="tab-pane fade" id="tab-3">
								<div class="accordion" id="accordion-3">
									<div class="card">
										<div class="card-header">
											<h5>
												<a data-toggle="collapse" data-target="#collapse-3-1">
													When she reached the first hills?<span class="plus-minus"><span class="ti ti-angle-up"></span></span>
												</a>
											</h5>
										</div>
										<div id="collapse-3-1" class="collapse show" data-parent="#accordion-3">
											<div class="card-body">
												<p>Token Crypto - is unique platform; that is secure, smart and easy-to-use platform, and completely disrupting the way businesses raise capital.</p>
											</div>
										</div>
									</div>
									<div class="card">
										<div class="card-header">
											<h5>
												<a class="collapsed" data-toggle="collapse" data-target="#collapse-3-2">
												  Big Oxmox advised her not to do?<span class="plus-minus"><span class="ti ti-angle-up"></span></span>
												</a>
											</h5>
										</div>
										<div id="collapse-3-2" class="collapse" data-parent="#accordion-3">
											<div class="card-body">
												<p>Token Crypto - is unique platform; that is secure, smart and easy-to-use platform, and completely disrupting the way businesses raise capital.</p>
											</div>
										</div>
									</div>
									<div class="card">
										<div class="card-header">
											<h5>
												<a class="collapsed" data-toggle="collapse" data-target="#collapse-3-3">
												  Which roasted parts of sentences fly into your mouth?<span class="plus-minus"><span class="ti ti-angle-up"></span></span>
												</a>
											</h5>
										</div>
										<div id="collapse-3-3" class="collapse" data-parent="#accordion-3">
											<div class="card-body">
												<p>Token Crypto - is unique platform; that is secure, smart and easy-to-use platform, and completely disrupting the way businesses raise capital.</p>
											</div>
										</div>
									</div>
									<div class="card">
										<div class="card-header">
											<h5>
												<a class="collapsed" data-toggle="collapse" data-target="#collapse-3-4">
												  Vokalia and Consonantia, there live?<span class="plus-minus"><span class="ti ti-angle-up"></span></span>
												</a>
											</h5>
										</div>
										<div id="collapse-3-4" class="collapse" data-parent="#accordion-3">
											<div class="card-body">
												<p>Token Crypto - is unique platform; that is secure, smart and easy-to-use platform, and completely disrupting the way businesses raise capital.</p>
											</div>
										</div>
									</div>
								</div>
							</div><!-- End tab-pane -->
							<div class="tab-pane fade" id="tab-4">
								<div class="accordion" id="accordion-4">
									<div class="card">
										<div class="card-header">
											<h5>
												<a data-toggle="collapse" data-target="#collapse-4-1">
													Who formed us in his own image?<span class="plus-minus"><span class="ti ti-angle-up"></span></span>
												</a>
											</h5>
										</div>
										<div id="collapse-4-1" class="collapse show" data-parent="#accordion-4">
											<div class="card-body">
												<p>Token Crypto - is unique platform; that is secure, smart and easy-to-use platform, and completely disrupting the way businesses raise capital.</p>
											</div>
										</div>
									</div>
									<div class="card">
										<div class="card-header">
											<h5>
												<a class="collapsed" data-toggle="collapse" data-target="#collapse-4-2">
												  While the lovely valley teems with vapour?<span class="plus-minus"><span class="ti ti-angle-up"></span></span>
												</a>
											</h5>
										</div>
										<div id="collapse-4-2" class="collapse" data-parent="#accordion-4">
											<div class="card-body">
												<p>Token Crypto - is unique platform; that is secure, smart and easy-to-use platform, and completely disrupting the way businesses raise capital.</p>
											</div>
										</div>
									</div>
									<div class="card">
										<div class="card-header">
											<h5>
												<a class="collapsed" data-toggle="collapse" data-target="#collapse-4-3">
												  Which was created for the bliss of souls like mine?<span class="plus-minus"><span class="ti ti-angle-up"></span></span>
												</a>
											</h5>
										</div>
										<div id="collapse-4-3" class="collapse" data-parent="#accordion-4">
											<div class="card-body">
												<p>Token Crypto - is unique platform; that is secure, smart and easy-to-use platform, and completely disrupting the way businesses raise capital.</p>
											</div>
										</div>
									</div>
									<div class="card">
										<div class="card-header">
											<h5>
												<a class="collapsed" data-toggle="collapse" data-target="#collapse-4-4">
												  Wonderful serenity has taken of my entire soul?<span class="plus-minus"><span class="ti ti-angle-up"></span></span>
												</a>
											</h5>
										</div>
										<div id="collapse-4-4" class="collapse" data-parent="#accordion-4">
											<div class="card-body">
												<p>Token Crypto - is unique platform; that is secure, smart and easy-to-use platform, and completely disrupting the way businesses raise capital.</p>
											</div>
										</div>
									</div>
								</div>
							</div><!-- End tab-pane -->
							<div class="tab-pane fade" id="tab-5">
								<div class="accordion" id="accordion-5">
									<div class="card">
										<div class="card-header">
											<h5>
												<a data-toggle="collapse" data-target="#collapse-5-1">
													Illustrated magazine and housed in a nice?<span class="plus-minus"><span class="ti ti-angle-up"></span></span>
												</a>
											</h5>
										</div>
										<div id="collapse-5-1" class="collapse show" data-parent="#accordion-5">
											<div class="card-body">
												<p>Token Crypto - is unique platform; that is secure, smart and easy-to-use platform, and completely disrupting the way businesses raise capital.</p>
											</div>
										</div>
									</div>
									<div class="card">
										<div class="card-header">
											<h5>
												<a class="collapsed" data-toggle="collapse" data-target="#collapse-5-2">
												  Samsa was a travelling salesman and above it there?<span class="plus-minus"><span class="ti ti-angle-up"></span></span>
												</a>
											</h5>
										</div>
										<div id="collapse-5-2" class="collapse" data-parent="#accordion-5">
											<div class="card-body">
												<p>Token Crypto - is unique platform; that is secure, smart and easy-to-use platform, and completely disrupting the way businesses raise capital.</p>
											</div>
										</div>
									</div>
									<div class="card">
										<div class="card-header">
											<h5>
												<a class="collapsed" data-toggle="collapse" data-target="#collapse-5-3">
												  Slightly domed and divided by arches?<span class="plus-minus"><span class="ti ti-angle-up"></span></span>
												</a>
											</h5>
										</div>
										<div id="collapse-5-3" class="collapse" data-parent="#accordion-5">
											<div class="card-body">
												<p>Token Crypto - is unique platform; that is secure, smart and easy-to-use platform, and completely disrupting the way businesses raise capital.</p>
											</div>
										</div>
									</div>
									<div class="card">
										<div class="card-header">
											<h5>
												<a class="collapsed" data-toggle="collapse" data-target="#collapse-5-4">
												  One morning, when Gregor Samsa?<span class="plus-minus"><span class="ti ti-angle-up"></span></span>
												</a>
											</h5>
										</div>
										<div id="collapse-5-4" class="collapse" data-parent="#accordion-5">
											<div class="card-body">
												<p>Token Crypto - is unique platform; that is secure, smart and easy-to-use platform, and completely disrupting the way businesses raise capital.</p>
											</div>
										</div>
									</div>
								</div><!-- End accordion -->
							</div><!-- End tab-pane -->
						</div><!-- End tab-content -->
					</div><!-- End tab-custom -->
				</div><!-- End col -->
			</div><!-- End row -->
		</div><!-- End container -->
	</div>
	<!-- End Section -->


	<!-- Start Section -->
	<div class="section section-pad section-bg-alt section-light" id="contact">
		<div class="container">
			<div class="row text-center">
				<div class="col">
					<div class="section-head">
						<h2 class="section-title">Contact Token Offering DASH
							<span>Contact</span>
						</h2>
						<p>Any question? Reach out to us and we’ll get back to you shortly.</p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-8 offset-lg-2"><center>
					<ul class="contact-info">
						<!-- <li><em class="fa fa-phone"></em><span>+44 0123 4567</span></li> -->
						<li><em class="fa fa-envelope"></em><span>contact@bitexchange.systems</span></li>
						<!-- <li><em class="fa fa-paper-plane"></em><span>Join us on Telegram</span></li> -->
					</ul></center>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-8 offset-lg-2">
					<form id="contact-form" class="form-message text-center" action="form/contact.php" method="post">
						<div class="form-results"></div>
						<div class="input-field">
							<input name="contact-name" type="text" class="input-line required">
							<label class="input-title">Your Name</label>
						</div>
						<div class="input-field">
							<input name="contact-email" type="email" class="input-line required email">
							<label class="input-title">Your Email</label>
						</div>
						<div class="input-field">
							<textarea name="contact-message" class="txtarea input-line required"></textarea>
							<label class="input-title">Your Message</label>
						</div>
						<input type="text" class="d-none" name="form-anti-honeypot" value="">
						<div class="input-field">
							<button type="submit" class="btn">Submit</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
	<!-- End Section -->


	<!-- Start Section -->
	<div class="section subscribe-section section-pad-md section-bg section-connect">
		<div class="container">
			<div class="row text-center">
				<div class="col-md-6 offset-md-3">
					<h4 class="section-title-md">Don't miss out, Stay updated</h4>
					<form id="subscribe-form" action="form/subscribe.php" method="post" class="subscription-form inline-form">
						<input type="text" name="youremail" class="input-round required email" placeholder="Enter your email address" >
						<input type="text" class="d-none" name="form-anti-honeypot" value="">
						<button type="submit" class="btn btn-plane">Subscribe</button>
						<div class="subscribe-results"></div>
					</form>
				</div>
			</div>
		</div>
	</div>
	<!-- End Section -->


	<!-- Start Section -->
	<div class="section footer-scetion no-pt section-pad-sm section-bg">
		<div class="container">
			<div class="row text-center">
				<div class="col-md-12">
					<ul class="social">
						<li><a href="#"><em class="fa fa-facebook"></em></a></li>
						<li><a href="#"><em class="fa fa-twitter"></em></a></li>
						<li><a href="#"><em class="fa fa-youtube-play"></em></a></li>
						<li><a href="#"><em class="fa fa-github"></em></a></li>
						<li><a href="#"><em class="fa fa-bitcoin"></em></a></li>
						<li><a href="#"><em class="fa fa-medium"></em></a></li>
					</ul>
					<span class="copyright-text">
						<!-- Copyright &copy; 2018, ICO Crypto. Template Made By <a href="http://softnio.com" target="_blank">Softnio</a> &amp; Handcrafted by iO. -->
						Copyright &copy; 2018, <a href="https://bitexchange.systems/" target="_blank"> BitExchange.systems</a>
						<!-- <span>All trademarks and copyrights belong to their respective owners.</span> -->
					</span>
				</div>
			</div>
		</div>
	</div>
	<!-- End Section -->

	<!-- Preloader !remove please if you do not want -->
	<div id="preloader">
		<div id="loader"></div>
		<div class="loader-section loader-top"></div>
   		<div class="loader-section loader-bottom"></div>
	</div>
	<!-- Preloader End -->

	<!-- JavaScript (include all script here) -->
	<script src="landing/assets/js/jquery.bundle.js?ver=122"></script>
	<script src="landing/assets/js/script.js?ver=122"></script>

</body>
</html>

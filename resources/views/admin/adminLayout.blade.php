<!doctype html>
<html lang="en">

	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<!-- Meta -->
		<meta name="description" content="Responsive Bootstrap Admin Dashboards">
		<meta name="author" content="Bootstrap Gallery" />
		<link rel="canonical" href="https://www.bootstrap.gallery/">
		<meta property="og:url" content="https://www.bootstrap.gallery">
		<meta property="og:title" content="Admin Templates - Dashboard Templates | Bootstrap Gallery">
		<meta property="og:description" content="Marketplace for Bootstrap Admin Dashboards">
		<meta property="og:type" content="Website">
		<meta property="og:site_name" content="Bootstrap Gallery">
		<link rel="shortcut icon" href="admin/images/favicon.svg">

		<!-- Title -->
		<title>Admin Dashboard</title>

		<!-- *************
			************ Common Css Files *************
		************ -->

		<!-- Animated css -->


		<!-- Bootstrap font icons css -->
		<link rel="stylesheet" href="{{asset('admin/fonts/bootstrap/bootstrap-icons.css')}}">
		<link rel="stylesheet" href="{{asset('admin/css/bootstrap.css')}}">

		<!-- Main css -->
		<link rel="stylesheet" href="{{asset('admin/css/main.min.css')}}">

        @yield("css")
		<!-- *************
			************ Vendor Css Files *************
		************ -->



	</head>

	<body>

		<!-- Loading wrapper start -->
		<div id="loading-wrapper">
			<div class="spinner">
				<div class="line1"></div>
				<div class="line2"></div>
				<div class="line3"></div>
				<div class="line4"></div>
				<div class="line5"></div>
				<div class="line6"></div>
			</div>
		</div>
		<!-- Loading wrapper end -->

		<!-- Page wrapper start -->
		<div class="page-wrapper">

			<!-- Sidebar wrapper start -->
			<nav class="sidebar-wrapper">

				<!-- Sidebar brand starts -->
				<div class="sidebar-brand">
					<a href="index.html" class="logo">
						<img src="{{asset('admin/images/logo.svg')}}" alt="Max Admin Dashboard" />
					</a>
				</div>
				<!-- Sidebar brand starts -->

				<!-- Sidebar menu starts -->
				<div class="sidebar-menu">
					<div class="sidebarMenuScroll">
						<ul>
							<li class="sidebar-dropdown">
								<a href="#">
									<i class="bi bi-house"></i>
									<span class="menu-text">Ana Sayfa</span>
								</a>
								<div class="sidebar-submenu">
									<ul>
										<li>
											<a href="{{route('slideGet')}}" class="current-page">Slide</a>
										</li>
										<li>
											<a href="{{route('favoriteGet')}}">Popüler Ürünler</a>
										</li>
                                        <li>
											<a href="{{route('collectionGet')}}">Koleksiyonlar</a>
										</li>
                                        <li>
											<a href="social.html">Referanslar</a>
										</li>
									</ul>
								</div>
							</li>
							<li class="sidebar-dropdown">
								<a href="#">
									<i class="bi bi-handbag"></i>
									<span class="menu-text">Ürün Düzenleme</span>
								</a>
								<div class="sidebar-submenu">
									<ul>
										<li>
											<a href="{{route('categoryGet')}}">Kategoriler</a>
										</li>
										<li>
											<a href="{{route('productGet')}}">Ürünler</a>
										</li>
										<li>
											<a href="{{route('countertopGet')}}">Tezgahlar</a>
										</li>
									</ul>
								</div>
							</li>
							<li>
								<a href="starter-page.html">
									<i class="bi bi-hand-index-thumb"></i>
									<span class="menu-text">Adres</span>
								</a>
							</li>
						</ul>
					</div>
				</div>
				<!-- Sidebar menu ends -->

			</nav>
			<!-- Sidebar wrapper end -->

			<!-- *************
				************ Main container start *************
			************* -->
			<div class="main-container">

				<!-- Page header starts -->
				<div class="page-header">

					<div class="toggle-sidebar" id="toggle-sidebar"><i class="bi bi-list"></i></div>

					<!-- Breadcrumb start -->
					<ol class="breadcrumb">
						<li class="breadcrumb-item breadcrumb-active" aria-current="page"> @yield('adminHeader','Dashboard')</li>
					</ol>
					<!-- Breadcrumb end -->

					<!-- Header actions ccontainer start -->
					<div class="header-actions-container">


						<!-- Header actions start -->
						<ul class="header-actions">

							<li class="dropdown">
								<a href="#" id="userSettings" class="user-settings" data-toggle="dropdown" aria-haspopup="true">
									<span class="user-name d-none d-md-block">Mehmet YAŞAR</span>
									<span class="avatar">
										<img src="{{asset('admin/images/user4.png')}}" alt="Admin Templates">
										<span class="status busy"></span>
									</span>
								</a>
								<div class="dropdown-menu dropdown-menu-end" aria-labelledby="userSettings">
									<div class="header-profile-actions">
										<a href="profile.html">Profile</a>
										<a href="account-settings.html">Settings</a>
										<a href="login.html">Logout</a>
									</div>
								</div>
							</li>
						</ul>
						<!-- Header actions end -->

					</div>
					<!-- Header actions ccontainer end -->

				</div>
				<!-- Page header ends -->

				<!-- Content wrapper scroll start -->
				<div class="content-wrapper-scroll">

					<!-- Content wrapper start -->
					<div class="content-wrapper">

						<!-- Row start -->
						<div class="row gx-3">
							<div class="col-xxl-12">
								<div class="card">
									<div class="card-body">
										<div class="card-320">
                                            @yield('adminBody')
                                        </div>
									</div>
								</div>
							</div>
						</div>
						<!-- Row end -->

					</div>
					<!-- Content wrapper end -->

				</div>
				<!-- Content wrapper scroll end -->

			</div>
			<!-- *************
				************ Main container end *************
			************* -->

		</div>
		<!-- Page wrapper end -->

		<!-- *************
			************ Required JavaScript Files *************
		************* -->
		<!-- Required jQuery first, then Bootstrap Bundle JS -->
        @yield("js")
		<script src="{{asset('admin/js/jquery.min.js')}}"></script>
		<script src="{{asset('admin/js/bootstrap.bundle.min.js')}}"></script>
		<!-- Main Js Required -->
		<script src="{{asset('admin/js/main.js')}}"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>
        <script src="{{ asset('js/script.js') }}"></script>




	</body>

</html>

<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="csrf-token" content="{{ csrf_token() }}" />

	<!-- Primary Meta Tags -->
	<title>@yield('title', config('app.name'))</title>
	<meta name="title" content="@yield('title', config('app.name'))">
	<meta name="description" content="@yield('description', 'halaman admin panel sistem informasi akademik')">

	<!-- Icon Link & Meta -->
	<meta name="msapplication-TileColor" content="#f4f4f4">
	<meta name="theme-color" content="#f4f4f4">

	<link rel="icon" type="image/png" sizes="16x16" href="{{ asset('siakad-logo.png') }}">

	<!--begin::Fonts -->
	<script src="{{ asset('assets/back/web-font.js') }}"></script>
	<script>
		WebFont.load({
			google: {
				"families": ["Poppins:300,400,500,600,700", "Roboto:300,400,500,600,700"]
			},
			active: function() {
				sessionStorage.fonts = true;
			}
		});
	</script>
	<!--end::Fonts -->

	{{-- ------------------------------
	# CSS GLOBAL & EXTERNAL PLUGIN
	------------------------------ --}}
	<link href="{{ asset('assets/back/vendors/general/perfect-scrollbar/css/perfect-scrollbar.min.css') }}" rel="stylesheet" type="text/css" />

	<link href="{{ asset('assets/back/vendors/general/animate.css/animate.min.css') }}" rel="stylesheet" type="text/css" />
	<link href="{{ asset('assets/back/vendors/general/sweetalert2/dist/sweetalert2.min.css') }}" rel="stylesheet" type="text/css" />
	<link href="{{ asset('assets/back/vendors/custom/vendors/line-awesome/css/line-awesome.css') }}" rel="stylesheet" type="text/css" />
	<link href="{{ asset('assets/back/vendors/custom/vendors/flaticon/flaticon.css') }}" rel="stylesheet" type="text/css" />
	<link href="{{ asset('assets/back/vendors/custom/vendors/flaticon2/flaticon.css') }}" rel="stylesheet" type="text/css" />
	<link href="{{ asset('assets/back/vendors/general/@fortawesome/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css" />
	@yield('plugin_css')

	{{-- ---------------------
	# STYLE & CUSTOM CSS
	--------------------- --}}
	<link href="{{ asset('assets/back/css/demo1/style.bundle.min.css') }}" rel="stylesheet" type="text/css" />
	<!--begin::Layout Skins(used by all pages) -->
	<!-- <link href="{{ asset('assets/back/css/demo1/skins/header/base/dark.min.css') }}" rel="stylesheet" type="text/css" /> -->
	<link href="{{ asset('assets/back/css/demo1/skins/header/menu/light.min.css') }}" rel="stylesheet" type="text/css" />
	<link href="{{ asset('assets/back/css/demo1/skins/brand/light.min.css') }}" rel="stylesheet" type="text/css" />
	<link href="{{ asset('assets/back/css/demo1/skins/aside/light.min.css') }}" rel="stylesheet" type="text/css" />
	<!--begin::Page Custom Styles(used by this page) -->
	<style>
		@media (max-width: 1024px){
			.kt-header-mobile--fixed .kt-wrapper {
				padding-top: 75px;
			}
		}
		@media (min-width: 1025px){
			.kt-header {
				background-color: rgb(19, 92, 178);
				background: linear-gradient(90deg, rgb(19, 92, 178) 35%, rgb(8, 73, 153) 100%);
			}
			.kt-header-menu .kt-menu__nav>.kt-menu__item.kt-menu__item--active>.kt-menu__link,
			.kt-header-menu .kt-menu__nav>.kt-menu__item.kt-menu__item--here>.kt-menu__link,
			.kt-header-menu .kt-menu__nav>.kt-menu__item:hover>.kt-menu__link,
			.kt-header-menu .kt-menu__nav>.kt-menu__item.kt-menu__item--hover:not(.kt-menu__item--here):not(.kt-menu__item--active)>.kt-menu__link,
			.kt-header-menu .kt-menu__nav>.kt-menu__item:hover:not(.kt-menu__item--here):not(.kt-menu__item--active)>.kt-menu__link {
				background-color: #f5f6fc;
			}
			.kt-header-menu .kt-menu__nav>.kt-menu__item>.kt-menu__link .kt-menu__link-text,
			.kt-header-menu .kt-menu__nav>.kt-menu__item>.kt-menu__link>.kt-menu__link-icon{
				color: #F4F4F4;
			}
			.kt-header-menu .kt-menu__nav>.kt-menu__item.kt-menu__item--active>.kt-menu__link .kt-menu__link-text,
			.kt-header-menu .kt-menu__nav>.kt-menu__item:hover>.kt-menu__link .kt-menu__link-text,
			.kt-header-menu .kt-menu__nav>.kt-menu__item.kt-menu__item--hover:not(.kt-menu__item--here):not(.kt-menu__item--active)>.kt-menu__link .kt-menu__link-text, .kt-header-menu .kt-menu__nav>.kt-menu__item:hover:not(.kt-menu__item--here):not(.kt-menu__item--active)>.kt-menu__link .kt-menu__link-text
			{
				color: rgb(19, 92, 178);
			}



			.kt-header-menu .kt-menu__nav>.kt-menu__item.kt-menu__item--active>.kt-menu__link>.kt-menu__link-icon,
			.kt-header-menu .kt-menu__nav>.kt-menu__item.kt-menu__item--here>.kt-menu__link>.kt-menu__link-icon,
			.kt-header-menu .kt-menu__nav>.kt-menu__item.kt-menu__item--hover>.kt-menu__link>.kt-menu__link-icon,
			.kt-header-menu .kt-menu__nav>.kt-menu__item:hover>.kt-menu__link>.kt-menu__link-icon{
				color: rgb(8, 73, 153);
			}

			.kt-header__topbar .kt-header__topbar-item .kt-header__topbar-wrapper button > i,
			.kt-header__topbar .kt-header__topbar-item .kt-header__topbar-wrapper .btn.dropdown-toggle:after{
				color: #FFF;
			}
		}

		.text-center {
			text-align: center;
		}

		.text-left {
			text-align: left;
		}

	    .text-right {
	        text-align: right;
	    }

	    .content-center {
	    	justify-content: center; 
	    	align-items: center; 
	    	display: flex;
	    }
	</style>
	<link rel="stylesheet" href="{{ asset('assets/back/custom/config.css') }}">
	@yield('custom_css')
</head>

<body class="@yield('class-body','kt-quick-panel--right kt-demo-panel--right kt-offcanvas-panel--right kt-header--fixed kt-header-mobile--fixed kt-subheader--enabled kt-subheader--solid kt-aside--enabled kt-aside--fixed kt-aside--minimize kt-page--loading')">

	<!-- begin:: Header Mobile -->
	<div id="kt_header_mobile" class="kt-header-mobile  kt-header-mobile--fixed " style="height:75px">
		<div class="kt-header-mobile__logo">
			<a href="{{ url('/') }}">
				<img alt="{{ config('app.name') }}" src="{{ asset('siakad-logo.png') }}" width="120px" />
			</a>
		</div>
		<div class="kt-header-mobile__toolbar">
			<div class="kt-header-mobile__toolbar-toggler kt-header-mobile__toolbar-toggler--left" id="kt_aside_mobile_toggler"><span></span></div>
			<div class="kt-header-mobile__toolbar-toggler" id="kt_header_mobile_toggler"><span></span></div>
			<div class="kt-header-mobile__toolbar-topbar-toggler" id="kt_header_mobile_topbar_toggler"><i class="flaticon-more"></i></div>
		</div>
	</div>
	<!-- end:: Header Mobile -->

	<div class="kt-grid kt-grid--hor kt-grid--root">
		<div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--ver kt-page">

			<!-- begin:: Aside -->
			<button class="kt-aside-close " id="kt_aside_close_btn"><i class="la la-close"></i></button>
			<div class="kt-aside  kt-aside--fixed  kt-grid__item kt-grid kt-grid--desktop kt-grid--hor-desktop" id="kt_aside">

				<!-- begin:: Aside -->
				<div class="kt-aside-menu-wrapper kt-grid__item kt-grid__item--fluid" id="kt_aside_menu_wrapper">
					<div id="kt_aside_menu" class="kt-aside-menu " data-ktmenu-vertical="1" data-ktmenu-scroll="1" data-ktmenu-dropdown-timeout="500">
						<ul class="kt-menu__nav ">

							@if (\Auth::user()->hasRole('academic'))
								@include('layouts.sidebar.academic')
							@endif

							@if (\Auth::user()->hasRole('admin'))
								@include('layouts.sidebar.admin')
							@endif
							
							@if (\Auth::user()->hasRole('finance'))
								@include('layouts.sidebar.finance')
							@endif
							
							@if (\Auth::user()->hasRole('lecture'))
								@include('layouts.sidebar.lecture')
							@endif
							
							@if (\Auth::user()->hasRole('pddikti'))
								@include('layouts.sidebar.pddikti')
							@endif
							
							@if (\Auth::user()->hasRole('student'))
								@include('layouts.sidebar.student')
							@endif

						</ul>
					</div>
				</div>

				<!-- end:: Aside Menu -->
			</div>

			<!-- end:: Aside -->
			<div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor kt-wrapper" id="kt_wrapper">
				<!-- begin:: Header -->
				<div id="kt_header" class="kt-header kt-grid kt-grid--ver  kt-header--fixed ">
					<!-- begin:: Aside -->
					<div class="kt-header__brand kt-grid__item  " id="kt_header_brand" style="background-color:#f8f8f8">
						<div class="kt-header__brand-logo">
							<a href="{{ url('/') }}">
								<img alt="{{ config('app.name') }}" src="{{ asset('siakad-logo.png') }}" width="100%" />
							</a>
						</div>
					</div>

					<!-- end:: Aside -->


					<!-- begin:: Title -->
					<h3 class="kt-header__title kt-grid__item" style="color: #FFF; font-weight: bold;">
						SIAKAD
					</h3>

					<!-- end:: Title -->

					<!-- begin: Header Menu -->
					<button class="kt-header-menu-wrapper-close" id="kt_header_menu_mobile_close_btn"><i class="la la-close"></i></button>
					<div class="kt-header-menu-wrapper kt-grid__item kt-grid__item--fluid" id="kt_header_menu_wrapper">
						<div id="kt_header_menu" class="kt-header-menu kt-header-menu-mobile  kt-header-menu--layout-default ">
							<ul class="kt-menu__nav ">
								
								@if (\Auth::user()->hasRole('academic'))
									@include('layouts.topbar.academic')
								@endif

								@if (\Auth::user()->hasRole('admin'))
									@include('layouts.topbar.admin')
								@endif
								
								@if (\Auth::user()->hasRole('finance'))
									@include('layouts.topbar.finance')
								@endif
								
								@if (\Auth::user()->hasRole('lecture'))
									@include('layouts.topbar.lecture')
								@endif
								
								@if (\Auth::user()->hasRole('pddikti'))
									@include('layouts.topbar.pddikti')
								@endif
								
								@if (\Auth::user()->hasRole('student'))
									@include('layouts.topbar.student')
								@endif

							</ul>
						</div>
					</div>



					<!-- begin:: Header Topbar -->
					<div class="kt-header__topbar">

						<!--begin: User Bar -->
						<div class="kt-header__topbar-item align-items-center">
							<div class="kt-header__topbar-wrapper">
								<div class="dropdown dropdown-inline kt-margin-t-10 kt-margin-b-10">
									<button type="button" class="btn btn-icon-sm dropdown-toggle text-light" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
										<i class="flaticon2-user"></i>

										@php $user = auth()->user(); @endphp

										{{ @$user->name ?? 'Guest' }}
									</button>
									<div class="dropdown-menu dropdown-menu-left" style="padding: 0;">
										<ul class="kt-nav" style="width: 200px">
											<li class="kt-nav__item">
												<a href="" class="kt-nav__link">
													<i class="kt-nav__link-icon la la-user kt-font-dark"></i>
													<span class="kt-nav__link-text kt-font-dark">Profil</span>
												</a>
											</li>

											<li class="kt-nav__item">
												<a href="{{ route('logout') }}" class="kt-nav__link">
													<i class="kt-nav__link-icon la la-sign-out kt-font-dark"></i>
													<span class="kt-nav__link-text kt-font-dark">Logout</span>
												</a>
											</li>
										</ul>
									</div>
								</div>
							</div>
						</div>
						<!--end: User Bar -->
					</div>
					<!-- end:: Header Topbar -->
				</div>
				<div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor">
					@yield('content')
				</div>
				<div class="kt-footer kt-grid__item kt-grid kt-grid--desktop kt-grid--ver-desktop" id="kt_footer">
					<div class="kt-footer__copyright">
						{{ date('Y') }}&nbsp;©&nbsp;<a href="javascript:;" class="kt-link">{{ config('app.name') }}</a>
					</div>
				</div>

			</div>
		</div>
	</div>

	{{-- ----------
	# MODAL
	---------- --}}
	@yield('modal')


	<script>
		var KTAppOptions = {
			"colors": {
				"state": {
					"brand": "#5d78ff",
					"dark": "#282a3c",
					"light": "#ffffff",
					"primary": "#2a1e6f",
					"success": "#34bfa3",
					"info": "#36a3f7",
					"warning": "#ffb822",
					"danger": "#fd3995"
				},
				"base": {
					"label": ["#c5cbe3", "#a1a8c3", "#3d4465", "#3e4466"],
					"shape": ["#f0f3ff", "#d9dffa", "#afb4d4", "#646c9a"]
				}
			}
		};

		function formatCurrency(amount) {
		    return amount.toFixed(2).replace(/\d(?=(\d{3})+\.)/g, '$&,');
		}
	</script>
	{{-- ------------------------------
	# JS GLOBAL & EXTERNAL PLUGIN
	------------------------------ --}}
	<!--begin:: Global Mandatory Vendors -->
	<script src="{{ asset('assets/back/vendors/general/jquery/dist/jquery.min.js') }}" type="text/javascript"></script>
	<script src="{{ asset('assets/back/vendors/general/popper.js/dist/umd/popper.min.js') }}" type="text/javascript"></script>
	<script src="{{ asset('assets/back/vendors/general/bootstrap/dist/js/bootstrap.min.js') }}" type="text/javascript"></script>
	<script src="{{ asset('assets/back/vendors/general/js-cookie/src/js.cookie.js') }}" type="text/javascript"></script>
	<script src="{{ asset('assets/back/vendors/general/moment/min/moment.min.js') }}" type="text/javascript"></script>
	<script src="{{ asset('assets/back/vendors/general/tooltip.js/dist/umd/tooltip.min.js') }}" type="text/javascript"></script>
	<script src="{{ asset('assets/back/vendors/general/perfect-scrollbar/dist/perfect-scrollbar.min.js') }}" type="text/javascript"></script>
	<script src="{{ asset('assets/back/vendors/general/sticky-js/dist/sticky.min.js') }}" type="text/javascript"></script>
	<script src="{{ asset('assets/back/vendors/general/wnumb/wNumb.js') }}" type="text/javascript"></script>
	<!--end:: Global Mandatory Vendors -->

	<!--begin:: Global Optional Vendors -->
	<script src="{{ asset('assets/back/vendors/general/sweetalert2/dist/sweetalert2.min.js') }}" type="text/javascript"></script>
	@yield('plugin_js')

	{{-- ---------------------
	# SCRIPT & CUSTOM JS
	--------------------- --}}
	<script src="{{ asset('assets/back/js/demo1/scripts.bundle.min.js') }}" type="text/javascript"></script>
	<script src="{{ asset('assets/back/custom/config.js') }}" type="text/javascript"></script>
	<script>
		@if(Session::has('notification'))
		swal.fire({
			title: '{{ Session::get('notification.message') }}',
			@if(Session::get('notification.longMessage'))
			text: '{{ Session::get('notification.longMessage') }}',
			@endif
			type: '{{ Session::get('notification.level', 'info') }}',
			showConfirmButton: '{{ Session::get('notification.showConfirmButton', 'true') }}',
			@if(Session::get('notification.timer'))
			timer: '{{ Session::get('notification.timer', '1800') }}'
			@endif
		});
		@endif
	</script>
	@yield('custom_js')
</body>
</html>


<li class="kt-menu__item  @if(\Request::segment(2) == '' || \Request::segment(2) == 'home') kt-menu__item--active  @endif" aria-haspopup="true">
	<a href="{{ route('admin.home') }}" class="kt-menu__link ">
		<span class="kt-menu__link-icon">
			<i class="flaticon2-dashboard"></i>
		</span>
		<span class="kt-menu__link-text">Dashboard</span>
	</a>
</li>

<li class="kt-menu__item  kt-menu__item--submenu kt-menu__item--rel" data-ktmenu-submenu-toggle="click" aria-haspopup="true">
	<a href="javascript:;" class="kt-menu__link kt-menu__toggle">
		<span class="kt-menu__link-icon">
			<i class="flaticon2-settings"></i>
		</span>
		<span class="kt-menu__link-text">Konfigurasi</span>
		<i class="kt-menu__hor-arrow la la-angle-down"></i>
		<i class="kt-menu__ver-arrow la la-angle-right"></i>
	</a>
	<div class="kt-menu__submenu kt-menu__submenu--classic kt-menu__submenu--left">
		<ul class="kt-menu__subnav">
			<li class="kt-menu__item " aria-haspopup="true">
				<a href="" class="kt-menu__link ">
					<i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">Provinsi</span>
				</a>
			</li>
			<li class="kt-menu__item " aria-haspopup="true">
				<a href="" class="kt-menu__link ">
					<i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">Kota/Kabupaten</span>
				</a>
			</li>
			<li class="kt-menu__item " aria-haspopup="true">
				<a href="" class="kt-menu__link ">
					<i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">Kecamatan</span>
				</a>
			</li>
		</ul>
	</div>
</li>
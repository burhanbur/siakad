<li class="kt-menu__item  @if(\Request::segment(2) == '' || \Request::segment(2) == 'home') kt-menu__item--active @endif" aria-haspopup="true">
	<a href="{{ route('admin.home') }}" class="kt-menu__link ">
		<i class="kt-menu__link-icon flaticon2-dashboard"></i>
		<span class="kt-menu__link-text">Dashboard</span>
	</a>
</li>

<li class="kt-menu__item  @if(\Request::segment(2) == 'users') kt-menu__item--active @endif" aria-haspopup="true">
	<a href="{{ route('admin.user.index') }}" class="kt-menu__link ">
		<i class="kt-menu__link-icon flaticon2-avatar"></i>
		<span class="kt-menu__link-text">Pengguna</span>
	</a>
</li>

<li class="kt-menu__item  @if(\Request::segment(2) == 'student') kt-menu__item--active @endif" aria-haspopup="true">
	<a href="{{ route('admin.student.index') }}" class="kt-menu__link ">
		<i class="kt-menu__link-icon flaticon2-user"></i>
		<span class="kt-menu__link-text">Mahasiswa</span>
	</a>
</li>

<li class="kt-menu__item  @if(\Request::segment(2) == 'lecture') kt-menu__item--active @endif" aria-haspopup="true">
	<a href="{{ route('admin.lecture.index') }}" class="kt-menu__link ">
		<i class="kt-menu__link-icon flaticon-rotate"></i>
		<span class="kt-menu__link-text">Dosen</span>
	</a>
</li>

<li class="kt-menu__item  @if(\Request::segment(2) == 'education') kt-menu__item--active @endif" aria-haspopup="true">
	<a href="{{ route('admin.education.index') }}" class="kt-menu__link ">
		<i class="kt-menu__link-icon flaticon2-pie-chart-2"></i>
		<span class="kt-menu__link-text">Program Pendidikan</span>
	</a>
</li>

<li class="kt-menu__item  @if(\Request::segment(2) == 'institution') kt-menu__item--active @endif" aria-haspopup="true">
	<a href="{{ route('admin.institution.index') }}" class="kt-menu__link ">
		<i class="kt-menu__link-icon flaticon2-layers"></i>
		<span class="kt-menu__link-text">Institusi</span>
	</a>
</li>

<!-- <li class="kt-menu__item @if(\Request::segment(2) == 'laporan') kt-menu__item--open kt-menu__item--here @endif kt-menu__item--submenu" aria-haspopup="true" data-ktmenu-submenu-toggle="hover">								
	<a href="javascript:;" class="kt-menu__link kt-menu__toggle">
		<i class="kt-menu__link-icon flaticon2-fax"></i>
		<span class="kt-menu__link-text">Laporan</span>
		<i class="kt-menu__ver-arrow la la-angle-right"></i>
	</a>

	<div class="kt-menu__submenu "><span class="kt-menu__arrow"></span>
		<ul class="kt-menu__subnav">
			<li class="kt-menu__item  kt-menu__item--parent" aria-haspopup="true">
				<span class="kt-menu__link">
					<span class="kt-menu__link-text">Laporan</span>
				</span>
			</li>

			<li class="kt-menu__item @if(\Request::segment(2) == 'laporan' && \Request::segment(3) == 'camaba') kt-menu__item--active @endif" aria-haspopup="true">
				<a href="" class="kt-menu__link ">
					<i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i>
					<span class="kt-menu__link-text">Calon Mahasiswa Baru</span>
				</a>
			</li>
		</ul>
	</div>
</li> -->
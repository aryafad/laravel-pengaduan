<!DOCTYPE html>
<!--
Author: Keenthemes
Product Name: Metronic - Bootstrap 5 HTML, VueJS, React, Angular & Laravel Admin Dashboard Theme
Purchase: https://1.envato.market/EA4JP
Website: http://www.keenthemes.com
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Dribbble: www.dribbble.com/keenthemes
Like: www.facebook.com/keenthemes
License: For each use you must have a valid license purchased only from above link in order to legally use the theme for your project.
-->
<html lang="en">
	<!--begin::Head-->
	<head><base href="">
		<title>Form Pengajuan</title>
		<meta charset="utf-8" />
		<meta name="description" content="The most advanced Bootstrap Admin Theme on Themeforest trusted by 94,000 beginners and professionals. Multi-demo, Dark Mode, RTL support and complete React, Angular, Vue &amp; Laravel versions. Grab your copy now and get life-time updates for free." />
		<meta name="keywords" content="Metronic, bootstrap, bootstrap 5, Angular, VueJs, React, Laravel, admin themes, web design, figma, web development, free templates, free admin themes, bootstrap theme, bootstrap template, bootstrap dashboard, bootstrap dak mode, bootstrap button, bootstrap datepicker, bootstrap timepicker, fullcalendar, datatables, flaticon" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<meta property="og:locale" content="en_US" />
		<meta property="og:type" content="article" />
		<meta property="og:title" content="Metronic - Bootstrap 5 HTML, VueJS, React, Angular &amp; Laravel Admin Dashboard Theme" />
		<meta property="og:url" content="https://keenthemes.com/metronic" />
		<meta property="og:site_name" content="Keenthemes | Metronic" />
		<link rel="canonical" href="https://preview.keenthemes.com/metronic8" />
		<link rel="shortcut icon" href="assets/media/logos/favicon.ico" />
		<!--begin::Fonts-->
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
		<!--end::Fonts-->
        @routes
        <script>
            var options = {
                closeButton: false,
                debug: false,
                newestOnTop: false,
                progressBar: false,
                positionClass: "toast-top-right",
                preventDuplicates: false,
                onclick: null,
                showDuration: "300",
                hideDuration: "1000",
                timeOut: "5000",
                extendedTimeOut: "1000",
                showEasing: "swing",
                hideEasing: "linear",
                showMethod: "fadeIn",
                hideMethod: "fadeOut",
            };
            </script>
		<!--begin::Global Stylesheets Bundle(used by all pages)-->
		<link href="{{ asset('assets/plugins/global/plugins.bundle.css')}}" rel="stylesheet" type="text/css" />
		<link href="{{ asset('assets/css/style.bundle.css')}}" rel="stylesheet" type="text/css" />
		<!--end::Global Stylesheets Bundle-->
	</head>
	<!--end::Head-->
	<!--begin::Body-->
	<body id="home" data-bs-spy="scroll" data-bs-target="#kt_landing_menu" data-bs-offset="200" class="bg-white position-relative">
		<!--begin::Main-->
		<div class="d-flex flex-column flex-root">
			<!--begin::Header Section-->
			<div class="mb-0" id="home">
				<!--begin::Wrapper-->
				<div class="bgi-no-repeat bgi-size-contain bgi-position-x-center bgi-position-y-bottom landing-dark-bg" style="background-image: url(assets/media/svg/illustrations/landing.svg)">
					<!--begin::Header-->
					<div class="landing-header" data-kt-sticky="true" data-kt-sticky-name="landing-header" data-kt-sticky-offset="{default: '200px', lg: '300px'}">
						<!--begin::Container-->
						<div class="container">
							<!--begin::Wrapper-->
							<div class="d-flex align-items-center justify-content-between">
								<!--begin::Logo-->
								<div class="d-flex align-items-center flex-equal">
									<!--begin::Mobile menu toggle-->
									<button class="btn btn-icon btn-active-color-primary me-3 d-flex d-lg-none" id="kt_landing_menu_toggle">
										<!--begin::Svg Icon | path: icons/duotune/abstract/abs015.svg-->
										<span class="svg-icon svg-icon-2hx">
											<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
												<path d="M21 7H3C2.4 7 2 6.6 2 6V4C2 3.4 2.4 3 3 3H21C21.6 3 22 3.4 22 4V6C22 6.6 21.6 7 21 7Z" fill="black" />
												<path opacity="0.3" d="M21 14H3C2.4 14 2 13.6 2 13V11C2 10.4 2.4 10 3 10H21C21.6 10 22 10.4 22 11V13C22 13.6 21.6 14 21 14ZM22 20V18C22 17.4 21.6 17 21 17H3C2.4 17 2 17.4 2 18V20C2 20.6 2.4 21 3 21H21C21.6 21 22 20.6 22 20Z" fill="black" />
											</svg>
										</span>
										<!--end::Svg Icon-->
									</button>
									<!--end::Mobile menu toggle-->
									<!--begin::Logo image-->
									<!--end::Logo image-->
								</div>
								<!--end::Logo-->
								<!--begin::Menu wrapper-->
								<div class="d-lg-block" id="kt_header_nav_wrapper">
									<div class="d-lg-block p-5 p-lg-0" data-kt-drawer="true" data-kt-drawer-name="landing-menu" data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true" data-kt-drawer-width="200px" data-kt-drawer-direction="start" data-kt-drawer-toggle="#kt_landing_menu_toggle" data-kt-swapper="true" data-kt-swapper-mode="prepend" data-kt-swapper-parent="{default: '#kt_body', lg: '#kt_header_nav_wrapper'}">
										<!--begin::Menu-->
										<div class="menu menu-column flex-nowrap menu-rounded menu-lg-row menu-title-gray-500 menu-state-title-primary nav nav-flush fs-5 fw-bold" id="kt_landing_menu">
											<!--begin::Menu item-->
											<div class="menu-item">
												<!--begin::Menu link-->
												<a class="menu-link nav-link active py-3 px-4 px-xxl-6" href="#home" data-kt-scroll-toggle="true" data-kt-drawer-dismiss="true">Home</a>
												<!--end::Menu link-->
											</div>
											<!--end::Menu item-->
											<!--begin::Menu item-->
											<div class="menu-item">
												<!--begin::Menu link-->
												<a class="menu-link nav-link py-3 px-4 px-xxl-6" href="#buat_pengaduan" data-kt-scroll-toggle="true" data-kt-drawer-dismiss="true">Form Pengaduan</a>
												<!--end::Menu link-->
											</div>
											<!--end::Menu item-->
											<!--begin::Menu item-->
											<div class="menu-item">
												<!--begin::Menu link-->
												<a class="menu-link nav-link py-3 px-4 px-xxl-6" href="#check_pengaduan" data-kt-scroll-toggle="true" data-kt-drawer-dismiss="true">Check Pengaduan</a>
												<!--end::Menu link-->
											</div>
											<!--end::Menu item-->
											<!--begin::Menu item-->
											<!--end::Menu item-->
										</div>
										<!--end::Menu-->
									</div>
								</div>
								<!--end::Menu wrapper-->
								<!--begin::Toolbar-->
								<div class="flex-equal text-end ms-1">
									<a href="{{ route('login') }}" class="btn btn-success">Sign In</a>
								</div>
								<!--end::Toolbar-->
							</div>
							<!--end::Wrapper-->
						</div>
						<!--end::Container-->
					</div>
					<!--end::Header-->
					<!--begin::Landing hero-->
					<div class="d-flex flex-column flex-center w-100 min-h-350px min-h-lg-500px px-9">
						<!--begin::Heading-->
						<div class="text-center mb-5 mb-lg-10 py-10 py-lg-20">
							<!--begin::Title-->
							<h1 class="text-white lh-base fw-bolder fs-2x fs-lg-3x mb-15">Sistem
							<span style="background: linear-gradient(to right, #12CE5D 0%, #FFD80C 100%);-webkit-background-clip: text;-webkit-text-fill-color: transparent;">
								<span id="kt_landing_hero_text">Pengaduan</span>
							</span></h1>
							<!--end::Title-->
							<!--begin::Action-->
							{{-- <a href="../../demo8/dist/index.html" class="btn btn-primary">Try Metronic</a> --}}
							<!--end::Action-->
						</div>
						<!--end::Heading-->
						<!--begin::Clients-->
						<!--end::Clients-->
					</div>
					<!--end::Landing hero-->
				</div>
				<!--end::Wrapper-->
				<!--begin::Curve bottom-->
				<div class="landing-curve landing-dark-color mb-10 mb-lg-20">
					<svg viewBox="15 12 1470 48" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path d="M0 11C3.93573 11.3356 7.85984 11.6689 11.7725 12H1488.16C1492.1 11.6689 1496.04 11.3356 1500 11V12H1488.16C913.668 60.3476 586.282 60.6117 11.7725 12H0V11Z" fill="currentColor"></path>
					</svg>
				</div>
				<!--end::Curve bottom-->
			</div>
			<!--end::Header Section-->
			<!--begin::How It Works Section-->
			<div class="mb-n10 mb-lg-n20 z-index-2">
				<!--begin::Container-->
				<div class="container">
					<!--begin::Heading-->
					<div class="text-center mb-17">
						<!--begin::Title-->
						<h3 class="fs-2hx text-dark mb-5" id="buat_pengaduan" data-kt-scroll-offset="{default: 100, lg: 150}">Ajukan Pengaduan</h3>
						<!--end::Title-->
						<!--begin::Text-->
						<div class="fs-5 text-muted fw-bold">Silahkan isi form berikut
						<br />untuk dapat melakukan pengajuan</div>
						<!--end::Text-->
					</div>
					<!--end::Heading-->
					<!--begin::Row-->
                    <form action="javascript:void(0)" id="add_form" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="row w-100 ">
                            <div class="col-lg-4 text-center">
                            </div>
                            <div class="col-lg-4 text-center">
								<label class="required form-label ">Foto KTP</label>
								<br>
                                <div id="npwpData" class="image-input image-input-empty image-input-outline mb-3" data-kt-image-input="true" style="background-image: url(assets/media/svg/files/blank-image.svg)">
                                    <!--begin::Preview existing avatar-->
                                    <div id="img-add-cust" class="image-input-wrapper w-150px h-150px"></div>
                                    <embed id="npwp-file" src="" class="fileView" frameborder="0" style="display: none" width="200" height="200"></embed>
                                    <!--end::Preview existing avatar-->
                                    <!--begin::Label-->
                                    <label class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="change" data-bs-toggle="tooltip" title="Change KTP">
                                        <i class="bi bi-pencil-fill fs-7"></i>
                                        <!--begin::Inputs-->
                                        <input type="file" name="photo_ktp" id="photo_ktp" accept=".png, .jpg, .jpeg" />
                                        <input type="hidden" name="avatar_remove" />
                                        <!--end::Inputs-->
                                    </label>
                                    <!--end::Label-->
                                    <!--begin::Cancel-->
                                    <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="cancel" data-bs-toggle="tooltip" title="Cancel KTP">
                                        <i class="bi bi-x fs-2"></i>
                                    </span>
                                    <!--end::Cancel-->
                                    <!--begin::Remove-->
                                    <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="remove" data-bs-toggle="tooltip" title="Remove KTP">
                                        <i class="bi bi-x fs-2"></i>
                                    </span>
                                    <!--end::Remove-->
                                </div>
                            </div>
                            <div class="col-lg-4 text-center">
                            </div>
                            <!--begin::Col-->
                            <!--end::Col-->
                        </div>
                        <div class="row w-100 ">
                            <div class="col-lg-4 text-center">
                            </div>
                            <div class="col-lg-4 text-center">
                                <div class="mb-10 fv-row">
                                    <!--begin::Label-->
                                    <label class="required form-label">Name</label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <input type="text" name="name" id="name" class="form-control mb-2" placeholder="Name" value="" />
                                    <!--end::Input-->
                                    <!--begin::Description-->
                                    <!--end::Description-->
                                </div>
                            </div>
                            <div class="col-lg-4 text-center">
                            </div>
                            <!--begin::Col-->
                            <!--end::Col-->
                        </div>
                        <div class="row w-100 ">
                            <div class="col-lg-4 text-center">
                            </div>
                            <div class="col-lg-4 text-center">
                                <div class="mb-10 fv-row">
                                    <!--begin::Label-->
                                    <label class="required form-label">NIK</label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <input type="text" name="nik" id="nik" class="form-control mb-2" placeholder="Nik" value="" />
                                    <!--end::Input-->
                                    <!--begin::Description-->
                                    <!--end::Description-->
                                </div>
                            </div>
                            <div class="col-lg-4 text-center">
                            </div>
                            <!--begin::Col-->
                            <!--end::Col-->
                        </div>
                        <div class="row w-100">
                            <div class="col-lg-4 text-center">
                            </div>
                            <div class="col-lg-4 text-center">
                                <div class="mb-10 fv-row">
                                    <!--begin::Label-->
                                    <label class="required form-label">Alamat</label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <input type="text" name="alamat" id="alamat" class="form-control mb-2" placeholder="Alamat" value="" />
                                    <!--end::Input-->
                                    <!--begin::Description-->
                                    <!--end::Description-->
                                </div>
                            </div>
                            <div class="col-lg-4 text-center">
                            </div>
                            <!--begin::Col-->
                            <!--end::Col-->
                        </div>
                        <div class="row w-100">
                            <div class="col-lg-4 text-center">
                            </div>
                            <div class="col-lg-4 text-center">
                                <div class="mb-10 fv-row">
                                    <!--begin::Label-->
                                    <label class="required form-label">Deskripsi Pengaduan</label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <textarea name="description" id="description" class="form-control mb-2" placeholder="Deskripsi" value=""></textarea>
                                    <!--end::Input-->
                                    <!--begin::Description-->
                                    <!--end::Description-->
                                </div>
                            </div>
                            <div class="col-lg-4 text-center">
                            </div>
                            <!--begin::Col-->
                            <!--end::Col-->
                        </div>
                        <div class="row w-100 mb-20 pb-20">
                            <div class="col-lg-4 text-center">
                            </div>
                            <div class="col-lg-4 text-center">
                                <button class="btn btn-primary" type="submit" data-kt-add="submit"> 
                                    <span class="indicator-label">Submit</span>
                                    <span class="indicator-progress">Please wait...
                                    <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span></button>
                            </div>
                            <div class="col-lg-4 text-center">
                            </div>
                            <!--begin::Col-->
                            <!--end::Col-->
                        </div>
                    </form>

					<!--end::Row-->
					<!--begin::Product slider-->
					
					<!--end::Product slider-->
				</div>
				<!--end::Container-->
			</div>
			<!--end::How It Works Section-->
			<!--begin::Statistics Section-->
			<div class="mt-sm-n10 mt-20">
				<!--begin::Curve top-->
				<div class="landing-curve landing-dark-color">
					{{-- <svg viewBox="15 -1 1470 48" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path d="M1 48C4.93573 47.6644 8.85984 47.3311 12.7725 47H1489.16C1493.1 47.3311 1497.04 47.6644 1501 48V47H1489.16C914.668 -1.34764 587.282 -1.61174 12.7725 47H1V48Z" fill="currentColor"></path>
					</svg> --}}
				</div>
				<!--end::Curve top-->
				<!--begin::Wrapper-->
				<div class="pb-15 pt-18 landing-dark-bg">
					<!--begin::Container-->
					<div class="container">
						<!--begin::Heading-->
						<div class="text-center mt-15 mb-18" id="check_pengaduan" >
							<!--begin::Title-->
							<h3 class="fs-2hx text-white fw-bolder mb-5">Cek status pengaduan anda</h3>
							<!--end::Title-->
							<!--begin::Description-->
							<div class="fs-5 text-gray-700 fw-bold">Anda dapat melakukan pengecekan
							<br />status pengajuan anda dengan mengisi NIK dibawah ini </div>
							<!--end::Description-->
						</div>
						<!--end::Heading-->
						<!--begin::Statistics-->
                        <form action="javascript:void(0)"  id="find_form" method="post">
                            @csrf
                            <div class="row w-100">
                                <div class="col-lg-4 text-center">
                                </div>
                                <div class="col-lg-4 text-center">
                                    <div class="mb-10 fv-row">
                                        <!--begin::Label-->
                                        <label class="required form-label text-white">NIK</label>
                                        <!--end::Label-->
                                        <!--begin::Input-->
                                        <input type="text" name="nik" id="nik" class="form-control mb-2" placeholder="NIK" value="" />
                                        <!--end::Input-->
                                        <!--begin::Description-->
                                        <!--end::Description-->
                                    </div>
                                </div>
                                <div class="col-lg-4 text-center">
                                </div>
                                <!--begin::Col-->
                                <!--end::Col-->
                            </div>
                            <div class="row w-100 mb-20 pb-20">
                                <div class="col-lg-4 text-center">
                                </div>
                                <div class="col-lg-4 text-center">
                                   <button class="btn btn-primary" type="submit" data-kt-check-status="submit"> 
                                    <span class="indicator-label">Submit</span>
                                    <span class="indicator-progress">Please wait...
                                    <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span></button>
                                </div>
                                <div class="col-lg-4 text-center">
                                </div>
                                <!--begin::Col-->
                                <!--end::Col-->
                            </div>
                        </form>
						<div class="d-flex flex-center">
							<!--begin::Items-->
							<div class="d-flex flex-wrap flex-center justify-content-lg-between mb-15 mx-auto w-xl-900px">
								<!--begin::Item-->
								<!--end::Item-->
							</div>
							<!--end::Items-->
						</div>
						<!--end::Statistics-->
						<!--begin::Testimonial-->

						<!--end::Author-->
					</div>
					<!--end::Container-->
				</div>
				<!--end::Wrapper-->
				<!--begin::Curve bottom-->
				<div class=" landing-dark-color">
					<svg viewBox="15 12 1470 48" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path d="M0 11C3.93573 11.3356 7.85984 11.6689 11.7725 12H1488.16C1492.1 11.6689 1496.04 11.3356 1500 11V12H1488.16C913.668 60.3476 586.282 60.6117 11.7725 12H0V11Z" fill="currentColor"></path>
					</svg>
				</div>
				<!--end::Curve bottom-->
			</div>
			<!--end::Statistics Section-->
			<!--begin::Footer Section-->
			
			<!--end::Footer Section-->
			<!--begin::Scrolltop-->
			<!--end::Scrolltop-->
		</div>

		<div class="modal fade" id="detail_modal" tabindex="-1" aria-hidden="true">
			<!--begin::Modal dialog-->
			<div class="modal-dialog modal-dialog-centered mw-650px">
				<!--begin::Modal content-->
				<div class="modal-content">
					<!--begin::Modal header-->
					<div class="modal-header" id="kt_modal_add_company_header">
						<!--begin::Modal title-->
						<h2 class="fw-bolder" id="modalHeader"></h2>
						<!--end::Modal title-->
						<!--begin::Close-->
						<div class="btn btn-icon btn-sm btn-active-icon-primary" data-bs-dismiss="modal">
							<!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
							<span class="svg-icon svg-icon-1">
								<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
									<rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="black" />
									<rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="black" />
								</svg>
							</span>
							<!--end::Svg Icon-->
						</div>
						<!--end::Close-->
					</div>
					<!--end::Modal header-->
					<!--begin::Modal body-->
					<div class="modal-body scroll-y mx-5 mx-xl-15 my-7">
						<!--begin::Form-->
						<form id="detail_modal_form" method="post" action="javascript:void(0)" class="form" enctype="multipart/form-data">
							<!--begin::Scroll-->
							@csrf
							<div class="d-flex flex-column scroll-y me-n7 pe-7" id="kt_modal_add_company_scroll" data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-max-height="auto" data-kt-scroll-dependencies="#kt_modal_add_company_header" data-kt-scroll-wrappers="#kt_modal_add_company_scroll" data-kt-scroll-offset="300px">
								<!--begin::Input group-->
								<div class="fv-row mb-7">
									<!--begin::Label-->
									<label class=" fw-bold fs-6 mb-2">Status Pengajuan</label>
									<!--end::Label-->
									<br>
									<span id="statusPengajuan" class="font-bolder text-center badge"></span>
									<!--begin::Input-->
									<!--end::Input-->
								</div>
								<div class="fv-row mb-7">
									<!--begin::Label-->
									<label class=" fw-bold fs-6 mb-2">Keterangan Pengajuan</label>
									<!--end::Label-->
									<!--begin::Input-->
									<textarea type="text" name="keterangan" disabled id="detail_keterangan" class="form-control form-control-transparent mb-3 mb-lg-0" placeholder="-"></textarea>
									<!--end::Input-->
								</div>
								<hr>
								<h4 class="mt-5 mb-5">Data</h4>
								<div class="row">
									<div class="col-lg-6">
										<div class="fv-row mb-7">
											<!--begin::Label-->
											<label class=" fw-bold fs-6 mb-2">Foto KTP</label>
											<!--end::Label-->
											<br>
											<a href="" id="fotoKTP" class="btn btn-primary text-center" target="_blank">Lihat Foto</a>
											<!--begin::Input-->
											<!--end::Input-->
										</div>
									</div>
									<div class="col-lg-6">
										<div class="fv-row mb-7">
											<!--begin::Label-->
											<label class=" fw-bold fs-6 mb-2">Nama</label>
											<!--end::Label-->
											<!--begin::Input-->
											<input type="text" name="name" disabled id="detail_name" class="form-control form-control-transparent mb-3 mb-lg-0" placeholder="-" />
											<!--end::Input-->
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-lg-6">
										<div class="fv-row mb-7">
											<!--begin::Label-->
											<label class=" fw-bold fs-6 mb-2">NIK</label>
											<!--end::Label-->
											<!--begin::Input-->
											<input type="text" name="nik" disabled id="detail_nik" class="form-control form-control-transparent mb-3 mb-lg-0" placeholder="-" />
											<!--end::Input-->
										</div>
									</div>
									<div class="col-lg-6">
										<div class="fv-row mb-7">
											<!--begin::Label-->
											<label class=" fw-bold fs-6 mb-2">Alamat</label>
											<!--end::Label-->
											<!--begin::Input-->
											<input type="text" name="alamat" disabled id="detail_alamat" class="form-control form-control-transparent mb-3 mb-lg-0" placeholder="-" />
											<!--end::Input-->
										</div>
									</div>
								</div>
								<div class="fv-row mb-7">
									<!--begin::Label-->
									<label class=" fw-bold fs-6 mb-2">Deskripsi</label>
									<!--end::Label-->
									<!--begin::Input-->
									<textarea type="text" name="deskripsi" disabled id="detail_description" class="form-control form-control-transparent mb-3 mb-lg-0" placeholder="-"></textarea>
									<!--end::Input-->
								</div>
								<!--end::Input group-->
						 
								<!--end::Input group-->
							</div>
							<!--end::Scroll-->
							<!--begin::Actions-->
							<div class="text-center pt-15">
								<button type="reset" class="btn btn-light me-3" data-bs-dismiss="modal">Close</button>
							</div>
							<!--end::Actions-->
						</form>
						<!--end::Form-->
					</div>
					<!--end::Modal body-->
				</div>
				<!--end::Modal content-->
			</div>
			<!--end::Modal dialog-->
		</div>
		<script>
			var baseUrl = "{{ url('') }}";
		</script>

		<!--end::Main-->
		<script>var hostUrl = "assets/";</script>
		<!--begin::Javascript-->
		<!--begin::Global Javascript Bundle(used by all pages)-->
		<script src="{{ asset('assets/js/scripts.bundle.js')}}"></script>
		<script src="{{ asset('assets/plugins/global/plugins.bundle.js')}}"></script>
		<!--end::Global Javascript Bundle-->
		<!--begin::Page Vendors Javascript(used by this page)-->
		<script src="{{ asset('assets/plugins/custom/fslightbox/fslightbox.bundle.js')}}"></script>
		<script src="{{ asset('assets/plugins/custom/typedjs/typedjs.bundle.js')}}"></script>
		<!--end::Page Vendors Javascript-->
		<!--begin::Page Custom Javascript(used by this page)-->
		<script src="{{ asset('assets/js/custom/landing.js')}}"></script>
		<script src="{{ asset('assets/js/custom/pages/general/pricing.js')}}"></script>
        <script src="{{ asset('js/pengaduan/add.js') }}" ></script>
        <script src="{{ asset('js/pengaduan/find.js') }}" ></script>
		<!--end::Page Custom Javascript-->
		<!--end::Javascript-->
	</body>
	<!--end::Body-->
</html>
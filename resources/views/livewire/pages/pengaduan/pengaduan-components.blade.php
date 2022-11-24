@section('title', 'Pengaduan')

@section('scriptCrud')
    <script>
        var baseUrl = "{{ url('') }}";
    </script>
    <script src="{{ asset('js/pengaduan/edit.js') }}" ></script>
    <script src="{{ asset('js/pengaduan/pengaduan-table.js') }}" ></script>
@endsection

<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <!--begin::Post-->
    <div class="post d-flex flex-column-fluid" id="kt_post">
        <!--begin::Container-->
        <div id="kt_content_container" class="container-xxl">
            <!--begin::Card-->
            <div class="card">
                <!--begin::Card header-->
                <div class="card-header border-0 pt-6">
                    <!--begin::Card title-->
                    <div class="card-title">
                        <!--begin::Search-->
                        <div class="d-flex align-items-center position-relative my-1">
                            <!--begin::Svg Icon | path: icons/duotune/general/gen021.svg-->
                            <span class="svg-icon svg-icon-1 position-absolute ms-6">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                    <rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546" height="2" rx="1" transform="rotate(45 17.0365 15.1223)" fill="black" />
                                    <path d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z" fill="black" />
                                </svg>
                            </span>
                            <!--end::Svg Icon-->
                            <input type="text" data-kt-user-table-filter="search" class="form-control form-control-solid w-250px ps-14" placeholder="Search pengaduan" />
                        </div>
                        <!--end::Search-->
                    </div>
                    <!--begin::Card title-->
                    <!--begin::Card toolbar-->
                    <div class="card-toolbar">
                        <!--begin::Toolbar-->
                        <select class="form-select form-select-solid fw-bolder" data-kt-select2="true" id="statusFilter" data-placeholder="-- Select Status --" data-allow-clear="true" data-hide-search="true">
                            <option></option>
                            <option value="1">Belum Diproses</option>
                            <option value="2">Disetujui</option>
                            <option value="3">Ditolak</option>
                        </select>
                  
                        <!--end::Group actions-->
                    </div>
                    <!--end::Card toolbar-->
                </div>
                <!--end::Card header-->
                <!--begin::Card body-->
                <div class="card-body pt-0">
                    <!--begin::Table-->
                    <table class="table align-middle table-row-dashed fs-6 gy-5" id="pengaduan_table">
                        <!--begin::Table head-->
                        <thead>
                            <!--begin::Table row-->
                            <tr class="text-center text-muted fw-bolder fs-7 text-uppercase gs-0">
                                <th class="min-w-125px">Name</th>
                                <th class="min-w-125px">NIK</th>
                                <th class="min-w-125px">Alamat</th>
                                <th class="min-w-125px">File KTP</th>
                                <th class="min-w-125px">Status</th>
                                <th class="text-end min-w-100px">Actions</th>
                            </tr>
                            <!--end::Table row-->
                        </thead>
                        <!--end::Table head-->
                        <!--begin::Table body-->
                        <tbody class="text-gray-600 text-center fw-bold">
                            <!--begin::Table row-->
                            <!--end::Table row-->
                            <!--begin::Table row-->
                        </tbody>
                        <!--end::Table body-->
                    </table>
                    <!--end::Table-->
                </div>
                <!--end::Card body-->
            </div>
            <!--end::Card-->
        </div>
        <!--end::Container-->
    </div>
    <!--end::Post-->
    <div class="modal fade" id="edit_modal" tabindex="-1" aria-hidden="true">
        <!--begin::Modal dialog-->
        <div class="modal-dialog modal-dialog-centered mw-650px">
            <!--begin::Modal content-->
            <div class="modal-content">
                <!--begin::Modal header-->
                <div class="modal-header" id="kt_modal_add_company_header">
                    <!--begin::Modal title-->
                    <h2 class="fw-bolder">Detail Pengajuan</h2>
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
                    <form id="edit_modal_form" method="post" action="javascript:void(0)" class="form" enctype="multipart/form-data">
                        <!--begin::Scroll-->
                        @csrf
                        <div class="d-flex flex-column scroll-y me-n7 pe-7" id="kt_modal_add_company_scroll" data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-max-height="auto" data-kt-scroll-dependencies="#kt_modal_add_company_header" data-kt-scroll-wrappers="#kt_modal_add_company_scroll" data-kt-scroll-offset="300px">
                            <!--begin::Input group-->
                            <div class="fv-row mb-7">
                                <!--begin::Label-->
                                <label class=" fw-bold fs-6 mb-2">Status</label>
                                <!--end::Label-->
                                <select class="form-select mb-2" id="status" name="status" data-control="select2" data-hide-search="true" data-placeholder="-- Select status --" id="status">
                                    <option></option>
                                    <option value="2" >Setujui</option>
                                    <option value="3" >Tolak</option>
                                </select>
                                <!--begin::Input-->
                                <!--end::Input-->
                            </div>
                            <div class="fv-row mb-7">
                                <!--begin::Label-->
                                <label class=" fw-bold fs-6 mb-2">Keterangan Pengajuan</label>
                                <!--end::Label-->
                                <!--begin::Input-->
                                <textarea type="text" name="keterangan" id="detail_keterangan" class="form-control mb-3 mb-lg-0" placeholder="-"></textarea>
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
                            <button type="submit" class="btn btn-primary" data-kt-pengaduan-modal-action="submit">
                                <span class="indicator-label">Submit</span>
                                <span class="indicator-progress">Please wait...
                                <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                            </button>
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
</div>
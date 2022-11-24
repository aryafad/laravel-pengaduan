"use strict";
var FindPengajuan = (function () {
    // Turbo.clearCache();
    const findForm = document.getElementById("find_form");

    return {
        init: function () {
            (() => {
                var validation = FormValidation.formValidation(findForm, {
                    fields: {
                        nik: {
                            validators: {
                                notEmpty: { message: "NIK is required" },
                            },
                        },
                    },
                    plugins: {
                        trigger: new FormValidation.plugins.Trigger(),
                        bootstrap: new FormValidation.plugins.Bootstrap5({
                            rowSelector: ".fv-row",
                            eleInvalidClass: "",
                            eleValidClass: "",
                        }),
                    },
                });
                const onSubmit = findForm.querySelector(
                    '[data-kt-check-status="submit"]'
                );

                onSubmit.addEventListener("click", (t) => {
                    onSubmit.setAttribute("data-kt-indicator", "on");
                    t.preventDefault(),
                        validation &&
                            validation.validate().then(function (t) {
                                var formData = new FormData(findForm);
                                $.ajax({
                                    type: "POST",
                                    url: route("pengaduanData.check"),
                                    data: formData,
                                    processData: false,
                                    contentType: false,
                                    success: function (response) {
                                        setTimeout(function () {
                                            onSubmit.removeAttribute(
                                                "data-kt-indicator"
                                            );

                                            $("#fotoKTP").attr(
                                                "href",
                                                baseUrl +
                                                    "/image/" +
                                                    response.data.photo_ktp
                                            );

                                            if (response.data.status == 1) {
                                                $("#statusPengajuan").addClass(
                                                    "badge-light-warning"
                                                );
                                                $("#statusPengajuan").html(
                                                    "Sedang Diproses"
                                                );
                                            }

                                            if (response.data.status == 2) {
                                                $("#statusPengajuan").addClass(
                                                    "badge-light-success"
                                                );
                                                $("#statusPengajuan").html(
                                                    "Telah Disetujui"
                                                );
                                            }

                                            if (response.data.status == 3) {
                                                $("#statusPengajuan").addClass(
                                                    "badge-light-danger"
                                                );
                                                $("#statusPengajuan").html(
                                                    "Ditolak"
                                                );
                                            }
                                            $("#modalHeader").html(
                                                "Detail Pengaduan Nomor " +
                                                    response.data.id
                                            );

                                            $("#detail_name").val(
                                                response.data.name
                                            );
                                            $("#detail_nik").val(
                                                response.data.nik
                                            );
                                            $("#detail_alamat").val(
                                                response.data.alamat
                                            );
                                            $("#detail_description").val(
                                                response.data.description
                                            );
                                            $("#detail_keterangan").val(
                                                response.data.feedback
                                            );

                                            $("#detail_modal").modal("show");
                                        }, 200);
                                    },
                                    error: function (error) {
                                        onSubmit.removeAttribute(
                                            "data-kt-indicator"
                                        );
                                        if (
                                            error.responseJSON.message != null
                                        ) {
                                            toastr.error(
                                                error.responseJSON.message,
                                                options
                                            );
                                        } else {
                                            const errors = Object.values(
                                                error.responseJSON.errors
                                            );

                                            errors.forEach((element) => {
                                                toastr.error(
                                                    element[0],
                                                    options
                                                );
                                            });
                                        }
                                    },
                                });
                            });
                });
            })();
        },
    };
})();
KTUtil.onDOMContentLoaded(function () {
    FindPengajuan.init();
});

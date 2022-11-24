"use strict";
var KTEditPengaduan = (function () {
    const modal = document.getElementById("edit_modal");
    const editForm = modal.querySelector("#edit_modal_form");
    var kode = "";
    editForm.reset();
    $("body").on("click", "#edit-data", function () {
        kode = $(this).data("id");
        // showUrl.replace(":id", kode);
        $.ajax({
            type: "GET",
            url: route("pengaduan-data.show", kode),

            success: function (response) {
                $("#fotoKTP").attr(
                    "href",
                    baseUrl + "/image/" + response.data.photo_ktp
                );

                $("#detail_name").val(response.data.name);
                $("#status").val(response.data.status).change();
                $("#detail_nik").val(response.data.nik);
                $("#detail_alamat").val(response.data.alamat);
                $("#detail_description").val(response.data.description);
                $("#detail_keterangan").val(response.data.feedback);
            },
            error: function (error) {
                toastr.error(error.responseJSON.message, options);
            },
        });
    });

    const initModal = new bootstrap.Modal(modal);
    return {
        init: function () {
            (() => {
                var validation = FormValidation.formValidation(editForm, {
                    fields: {
                        feedback: {
                            validators: {
                                notEmpty: { message: "Feedback is required" },
                            },
                        },
                        status: {
                            validators: {
                                notEmpty: {
                                    message: "Status is required",
                                },
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
                const onSubmit = modal.querySelector(
                    '[data-kt-pengaduan-modal-action="submit"]'
                );

                onSubmit.addEventListener("click", (t) => {
                    t.preventDefault(),
                        validation &&
                            validation.validate().then(function (t) {
                                var formData = new URLSearchParams(
                                    new FormData(editForm)
                                );
                                $.ajax({
                                    type: "PUT",
                                    url: route("pengaduan-data.update", kode),
                                    contentType: false,
                                    data: formData,
                                    processData: false,
                                    success: function (response) {
                                        onSubmit.setAttribute(
                                            "data-kt-indicator",
                                            "on"
                                        ),
                                            (onSubmit.disabled = !0),
                                            setTimeout(function () {
                                                onSubmit.removeAttribute(
                                                    "data-kt-indicator"
                                                ),
                                                    (onSubmit.disabled = !1),
                                                    toastr.success(
                                                        response.message,
                                                        options
                                                    );
                                                initModal.hide();
                                                editForm.reset();
                                                var oTable =
                                                    $(
                                                        "#pengaduan_table"
                                                    ).DataTable();
                                                oTable.draw(false);
                                            }, 200);
                                    },
                                    error: function (error) {
                                        const errors = Object.values(
                                            error.responseJSON.errors
                                        );

                                        errors.forEach((element) => {
                                            toastr.error(element[0], options);
                                        });
                                    },
                                });
                            });
                });
            })();
        },
    };
})();
KTUtil.onDOMContentLoaded(function () {
    KTEditPengaduan.init();
});

"use strict";
var AddPengajuan = (function () {
    // Turbo.clearCache();
    const addForm = document.getElementById("add_form");

    return {
        init: function () {
            (() => {
                var validation = FormValidation.formValidation(addForm, {
                    fields: {
                        name: {
                            validators: {
                                notEmpty: { message: "Name is required" },
                            },
                        },
                        alamat: {
                            validators: {
                                notEmpty: {
                                    message: "Alamat is required",
                                },
                            },
                        },
                        nik: {
                            validators: {
                                notEmpty: {
                                    message: "NIK is required",
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
                const onSubmit = addForm.querySelector(
                    '[data-kt-add="submit"]'
                );

                onSubmit.addEventListener("click", (t) => {
                    onSubmit.setAttribute("data-kt-indicator", "on");
                    t.preventDefault(),
                        validation &&
                            validation.validate().then(function (t) {
                                var formData = new FormData(addForm);
                                $.ajax({
                                    type: "POST",
                                    url: route("pengaduanData.store"),
                                    data: formData,
                                    processData: false,
                                    contentType: false,
                                    success: function (response) {
                                        (onSubmit.disabled = !0),
                                            setTimeout(function () {
                                                onSubmit.removeAttribute(
                                                    "data-kt-indicator"
                                                ),
                                                    (onSubmit.disabled = !1),
                                                    Swal.fire({
                                                        text: response.message,
                                                        icon: "success",
                                                        buttonsStyling: !1,
                                                        confirmButtonText:
                                                            "Ok, got it!",
                                                        customClass: {
                                                            confirmButton:
                                                                "btn btn-primary",
                                                        },
                                                    }).then(function (t) {
                                                        t.isConfirmed;
                                                        addForm.reset();
                                                    });
                                            }, 200);
                                        addForm.reset();
                                    },
                                    error: function (error) {
                                        onSubmit.removeAttribute(
                                            "data-kt-indicator"
                                        );
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
    AddPengajuan.init();
});

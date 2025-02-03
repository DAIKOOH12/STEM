$("#import-file").on("change", function () {
    var file = this.files[0];
    var fileExtension = ["xlsx", "csv", "xls"];
    if (
        $.inArray(
            $(this).val().split(".").pop().toLowerCase(),
            fileExtension
        ) == -1
    ) {
        toastr.error("File không đúng định dạng!");
        $(this).val("");
    } else {
    }
});

$("#import-btn").on("click", function () {
    if ($("#import-file").val() == "") {
        toastr.warning("Bạn chưa nhập phiếu!");
    } else {
        var file = document.getElementById('import-file').files[0];
        var category = $("#product-category option:selected").val();
        var formData = new FormData();
        formData.append("file", file);
        formData.append("category", category);
        fetch("./import-cell", {
            method: "POST",
            headers: {
                "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
            },
            body: formData,
        })
            .then((response) => response.json())
            .then((response) => {
                $("#import-file").val("");
                toastr.success("Nhập kho thành công!");
            })
            .catch((error) => {
                toastr.error("Có lỗi xảy ra!");
                console.log(error);
            });
    }
});

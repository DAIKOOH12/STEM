new DataTable("#employee-table", {
    lengthMenu: [5, 10, 25, 50, { label: "Tất cả", value: -1 }],
    language: {
        processing: "Đang xử lý...",
        aria: {
            sortAscending: ": Sắp xếp thứ tự tăng dần",
            sortDescending: ": Sắp xếp thứ tự giảm dần",
        },
        autoFill: {
            cancel: "Hủy",
            fill: "Điền tất cả ô với <i>%d</i>",
            fillHorizontal: "Điền theo hàng ngang",
            fillVertical: "Điền theo hàng dọc",
        },
        buttons: {
            collection:
                'Chọn lọc <span class="ui-button-icon-primary ui-icon ui-icon-triangle-1-s"></span>',
            colvis: "Hiển thị theo cột",
            colvisRestore: "Khôi phục hiển thị",
            copy: "Sao chép",
            copyKeys:
                "Nhấn Ctrl hoặc u2318 + C để sao chép bảng dữ liệu vào clipboard.<br /><br />Để hủy, click vào thông báo này hoặc nhấn ESC",
            copySuccess: {
                1: "Đã sao chép 1 dòng dữ liệu vào clipboard",
                _: "Đã sao chép %d dòng vào clipboard",
            },
            copyTitle: "Sao chép vào clipboard",
            pageLength: {
                "-1": "Xem tất cả các dòng",
                _: "Hiển thị %d dòng",
                1: "Hiển thị 1 dòng",
            },
            print: "In ấn",
            createState: "Tạo trạng thái",
            csv: "CSV",
            excel: "Excel",
            pdf: "PDF",
            removeAllStates: "Xóa hết trạng thái",
            removeState: "Xóa",
            renameState: "Đổi tên",
            savedStates: "Trạng thái đã lưu",
            stateRestore: "Trạng thái %d",
            updateState: "Cập nhật",
        },
        select: {
            cells: {
                1: "1 ô đang được chọn",
                _: "%d ô đang được chọn",
            },
            columns: {
                1: "1 cột đang được chọn",
                _: "%d cột đang được được chọn",
            },
            rows: {
                1: "1 dòng đang được chọn",
                _: "%d dòng đang được chọn",
            },
        },
        searchBuilder: {
            title: {
                _: "Thiết lập tìm kiếm (%d)",
                0: "Thiết lập tìm kiếm",
            },
            button: {
                0: "Thiết lập tìm kiếm",
                _: "Thiết lập tìm kiếm (%d)",
            },
            value: "Giá trị",
            clearAll: "Xóa hết",
            condition: "Điều kiện",
            conditions: {
                date: {
                    after: "Sau",
                    before: "Trước",
                    between: "Nằm giữa",
                    empty: "Rỗng",
                    equals: "Bằng với",
                    not: "Không phải",
                    notBetween: "Không nằm giữa",
                    notEmpty: "Không rỗng",
                },
                number: {
                    between: "Nằm giữa",
                    empty: "Rỗng",
                    equals: "Bằng với",
                    gt: "Lớn hơn",
                    gte: "Lớn hơn hoặc bằng",
                    lt: "Nhỏ hơn",
                    lte: "Nhỏ hơn hoặc bằng",
                    not: "Không phải",
                    notBetween: "Không nằm giữa",
                    notEmpty: "Không rỗng",
                },
                string: {
                    contains: "Chứa",
                    empty: "Rỗng",
                    endsWith: "Kết thúc bằng",
                    equals: "Bằng",
                    not: "Không phải",
                    notEmpty: "Không rỗng",
                    startsWith: "Bắt đầu với",
                    notContains: "Không chứa",
                    notEndsWith: "Không kết thúc với",
                    notStartsWith: "Không bắt đầu với",
                },
                array: {
                    equals: "Bằng",
                    empty: "Trống",
                    contains: "Chứa",
                    not: "Không",
                    notEmpty: "Không được rỗng",
                    without: "không chứa",
                },
            },
            logicAnd: "Và",
            logicOr: "Hoặc",
            add: "Thêm điều kiện",
            data: "Dữ liệu",
            deleteTitle: "Xóa quy tắc lọc",
            leftTitle: "Giảm thụt lề",
            rightTitle: "Tăng thụt lề",
        },
        searchPanes: {
            countFiltered: "{shown} ({total})",
            emptyPanes: "Không có phần tìm kiếm",
            clearMessage: "Xóa hết",
            loadMessage: "Đang load phần tìm kiếm",
            collapse: {
                0: "Phần tìm kiếm",
                _: "Phần tìm kiếm (%d)",
            },
            title: "Bộ lọc đang hoạt động - %d",
            count: "{total}",
            collapseMessage: "Thu gọn tất cả",
            showMessage: "Hiện tất cả",
        },
        datetime: {
            hours: "Giờ",
            minutes: "Phút",
            next: "Sau",
            previous: "Trước",
            seconds: "Giây",
            amPm: ["am", "pm"],
            unknown: "-",
            weekdays: [
                "Chủ nhật",
                "Thứ hai",
                "Thứ 3",
                "Thứ 4",
                "Thứ 5",
                "Thứ 6",
                "Thứ 7",
            ],
            months: [
                "Tháng Một",
                "Tháng Hai",
                "Tháng Ba",
                "Tháng Tư",
                "Tháng Năm",
                "Tháng Sáu",
                "Tháng Bảy",
                "Tháng Tám",
                "Tháng Chín",
                "Tháng Mười",
                "Tháng Mười Một",
                "Tháng Mười Hai",
            ],
        },
        emptyTable: "Không có dữ liệu",
        info: "Hiển thị _START_ tới _END_ của _TOTAL_ dòng",
        infoEmpty: "Hiển thị 0 tới 0 của 0 dòng",
        lengthMenu: "Hiển thị _MENU_ dòng",
        loadingRecords: "Đang tải...",
        paginate: {
            first: "Đầu tiên",
            last: "Cuối cùng",
            next: "Sau",
            previous: "Trước",
        },
        search: "Tìm kiếm:",
        zeroRecords: "Không tìm thấy kết quả",
        decimal: ",",
        editor: {
            close: "Đóng",
            create: {
                button: "Thêm",
                submit: "Thêm",
                title: "Thêm mục mới",
            },
            edit: {
                button: "Sửa",
                submit: "Cập nhật",
                title: "Sửa mục",
            },
            error: {
                system: 'Đã xảy ra lỗi hệ thống (&lt;a target="\\" rel="nofollow" href="\\"&gt;Thêm thông tin&lt;/a&gt;).',
            },
            multi: {
                info: "Các mục đã chọn chứa các giá trị khác nhau cho đầu vào này. Để chỉnh sửa và đặt tất cả các mục cho đầu vào này thành cùng một giá trị, hãy nhấp hoặc nhấn vào đây, nếu không chúng sẽ giữ lại các giá trị riêng lẻ của chúng.",
                noMulti:
                    "Đầu vào này có thể được chỉnh sửa riêng lẻ, nhưng không phải là một phần của một nhóm.",
                restore: "Hoàn tác thay đổi",
                title: "Nhiều giá trị",
            },
            remove: {
                button: "Xóa",
                confirm: {
                    _: "Bạn có chắc chắn muốn xóa %d hàng không?",
                    1: "Bạn có chắc chắn muốn xóa 1 hàng không?",
                },
                submit: "Xóa",
                title: "Xóa",
            },
        },
        infoFiltered: "(được lọc từ _MAX_ dữ liệu)",
        searchPlaceholder: "Nhập tìm kiếm...",
        stateRestore: {
            creationModal: {
                button: "Thêm",
                columns: {
                    search: "Tìm kiếm cột",
                    visible: "Khả năng hiển thị cột",
                },
                name: "Tên:",
                order: "Sắp xếp",
                paging: "Phân trang",
                scroller: "Cuộn vị trí",
                search: "Tìm kiếm",
                searchBuilder: "Trình tạo tìm kiếm",
                select: "Chọn",
                title: "Thêm trạng thái",
                toggleLabel: "Bao gồm:",
            },
            duplicateError: "Trạng thái có tên này đã tồn tại.",
            emptyError: "Tên không được để trống.",
            emptyStates: "Không có trạng thái đã lưu",
            removeConfirm: "Bạn có chắc chắn muốn xóa %s không?",
            removeError: "Không xóa được trạng thái.",
            removeJoiner: "và",
            removeSubmit: "Xóa",
            removeTitle: "Xóa trạng thái",
            renameButton: "Đổi tên",
            renameLabel: "Tên mới cho %s:",
            renameTitle: "Đổi tên trạng thái",
        },
        infoThousands: ".",
        thousands: ".",
    },
});
$("#change-password").on("change", function () {
    if ($("#change-password").is(":checked")) {
        var html = "";
        html += '<div class="form-group group-password">';
        html +=
            '<label for="recipient-name" class="col-form-label">Mật khẩu mới</label>';
        html +=
            '<input type="password" class="form-control" id="employee-password">';
        html += "</div>";
        $("#form-update-employee").append(html);
    } else {
        $("#form-update-employee").find(".group-password").remove();
    }
});
$(".edit-employee").on("click", function () {
    $("#exampleModal").modal("show");

    var row = $(this).parent("td");
    var id = row.siblings(".name");
    var name = row.siblings(".name");
    var address = row.siblings(".address");
    var email = row.siblings(".email");
    var phone = row.siblings(".phone");
    var role = row.siblings(".role");
    var account = row.siblings(".account");

    // console.log(role);

    $("#employee-name").val(name.text());
    $("#employee-adrress").val(address.text());
    $("#employee-email").val(email.text());
    $("#employee-phone").val(phone.text());
    $("#employee-role").val(role.attr("data-able"));
    $("#employee-account").val(account.text());

    $("#btn-save")
        .off("click")
        .on("click", function () {
            var new_name = $("#employee-name").val();
            var new_address = $("#employee-adrress").val();
            var new_email = $("#employee-email").val();
            var new_phone = $("#employee-phone").val();
            var new_role = $("#employee-role").val();
            var new_role_name = $("#employee-role option:selected").text();
            var new_password = $("#employee-password").val();
            var new_account = $("#employee-account").val();

            // console.log(new_role_name);

            var data = new FormData();
            if (
                new_password == "" ||
                new_password == "undefined" ||
                new_password == null
            ) {
                data.append("ID_employee", id.attr("data-able"));
                data.append("sHoTen", new_name);
                data.append("sDiaChi", new_address);
                data.append("sEmail", new_email);
                data.append("sSdt", new_phone);
                data.append("ID_quyen", new_role);
                data.append("sTaiKhoan", new_account);
                fetch("./updagte-employee", {
                    method: "POST",
                    headers: {
                        "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr(
                            "content"
                        ),
                    },
                    body: data,
                })
                    .then((response) => response.json())
                    .then((response) => {
                        // console.log(response);
                        name.text(new_name);
                        address.text(new_address);
                        email.text(new_email);
                        phone.text(new_phone);
                        role.attr("data-able", new_role);
                        role.text(new_role_name);
                        account.text(new_account);
                        $("#exampleModal").modal("hide");
                        toastr.success("Cập nhật thành công!");
                    });
            } else {
                var data = new FormData();
                data.append("ID_employee", id.attr("data-able"));
                data.append("sHoTen", new_name);
                data.append("sDiaChi", new_address);
                data.append("sEmail", new_email);
                data.append("sSdt", new_phone);
                data.append("ID_quyen", new_role);
                data.append("sTaiKhoan", new_account);
                data.append("sMatKhau", new_password);

                fetch("./updagte-employee", {
                    method: "POST",
                    headers: {
                        "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr(
                            "content"
                        ),
                    },
                    body: data,
                })
                    .then((response) => response.json())
                    .then((response) => {
                        // console.log(response);
                        name.text(new_name);
                        address.text(new_address);
                        email.text(new_email);
                        phone.text(new_phone);
                        role.attr("data-able", new_role);
                        role.text(new_role_name);
                        account.text(new_account);
                        $("#exampleModal").modal("hide");
                        $("#change-password").prop("checked", false);
                        $("#form-update-employee")
                            .find(".group-password")
                            .remove();
                        toastr.success("Cập nhật thành công!");
                    });
            }
        });
});
$(".del-employee").on("click", function () {
    Swal.fire({
        title: "Bạn có chắc muốn xóa nhân viên này?",
        showDenyButton: true,
        confirmButtonText: "Có",
        denyButtonText: `Không`,
    }).then((result) => {
        /* Read more about isConfirmed, isDenied below */
        if (result.isConfirmed) {
            var row = $(this).parent("td");
            var id = row.siblings(".name").attr("data-able");

            var data = new FormData();
            data.append("ID_employee", id);

            fetch("./del-employee", {
                method: "POST",
                headers: {
                    "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr(
                        "content"
                    ),
                },
                body: data,
            })
                .then((response) => response.json())
                .then((response) => {
                    row.parent("tr").remove();
                    toastr.success("Xóa nhân viên thành công!");
                })
                .catch((error) => {
                    toastr.error("Không thể xóa nhân viên này!");
                });
        }
    });
});

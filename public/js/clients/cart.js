$(document).ready(function () {
    $(".plus").on("click", function () {
        var row = $(this).parent(".arrows").siblings(".quantity");
        var quantity = row.val();
        var id = $(this).attr("data-able");
        quantity++;
        window.location.replace(`./update-cart/` + id + `/` + quantity);
    });
    $(".minus").on("click", function () {
        var row = $(this).parent(".arrows").siblings(".quantity");
        var quantity = row.val();
        var id = $(this).attr("data-able");
        quantity--;
        window.location.replace(`./update-cart/` + id + `/` + quantity);
    });
    $(".btn-del").on("click", function () {
        Swal.fire({
            title: "Bạn có chắc muốn xóa sản phẩm này?",
            showDenyButton: true,
            confirmButtonText: "Có",
            denyButtonText: `Không`,
        }).then((result) => {
            /* Read more about isConfirmed, isDenied below */
            if (result.isConfirmed) {
                var id = $(this).attr("data-able");
                window.location.replace(`./del-cart/` + id+'?amount=');
            }
        });
    });
});

$(document).ready(function () {
    var quill = new Quill("#editor", {
        theme: "snow",
        placeholder: "Nhập nội dung ở đây...",
        modules: {
            toolbar: [
                ["bold", "italic", "underline", "strike"], // Inline styles
                [{ header: [1, 2, 3, false] }], // Headers
                [{ list: "ordered" }, { list: "bullet" }], // Lists
                ["link", "image"], // Media
                ["clean"], // Clear formatting
            ],
        },
    });

    $("#blog-image").on("change", function () {
        var file = this.files[0];
        if (file) {
            const reader = new FileReader(); // Tạo FileReader
            reader.onload = function (e) {
                $("#blog-image-view").attr("src", e.target.result); // Gán ảnh vào thẻ <img>
            };
            reader.readAsDataURL(file);
        }
    });

    // Lấy nội dung từ Quill và gán vào textarea khi submit
    $("#updateblog").on("click", function (event) {
        event.preventDefault();
        var blog = quill.root.innerHTML;
        var content = document.querySelector("textarea[name=content]");
        content.value = blog;

        var get_id = new URLSearchParams(window.location.search);
        var id = get_id.get("blogID");

        var inputID = `<input type="hidden" class="form-control" value="${id}" name="blog-id" id="blog-id"/>`;

        $("#formblog").append(inputID);

        // console.log(id);
        $("#formblog").submit();
    });
});

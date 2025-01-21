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
    // Lấy nội dung từ Quill và gán vào textarea khi submit
    $("#addblog").on("click", function (event) {
        event.preventDefault();
        var blog = quill.root.innerHTML;
        var content = document.querySelector("textarea[name=content]");
        content.value = blog;

        $("#formblog").submit();
    });
});

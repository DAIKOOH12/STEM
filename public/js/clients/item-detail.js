$(document).ready(function () {
    var quantity = $("#quantity").val();

    $(".plus").on("click", function () {
        quantity++;
        $("#quantity").val(quantity);
    });
    $(".minus").on("click", function () {
        quantity--;
        quantity==0?quantity=1:quantity;
        $("#quantity").val(quantity);
    });


    $('#btn-add').on('click',function(){
        var quantity = $('#quantity').val();
        var id=$(this).attr('data-able');

        window.location.replace(`../add-cart/`+id+"/"+quantity);
        // console.log(`./add-cart/`+id+"/"+quantity);
    })
});

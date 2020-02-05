$(document).ready(function() {
	
	//update item cart
	 $(".update-cart").on('click', function (e) {
	 		e.preventDefault();
           var id = $(this).data('id');
           var href = $(this).data('href');
           var quantity = $("#product_" + id).val();

            window.location.href = href + "/" + quantity;
       });

});
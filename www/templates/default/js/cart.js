;(function ($) {
    $(function () {
        'use strict';
        let cartItems = $('.cart-count-items');
        $('.btn-to-cart').on('click', function (e) {
            e.preventDefault();
            let id = $(this).data('id');
            let btnAdd = $('#btnAdd_' + id);
            let btnRemove = $('#btnRemove_' + id);
            $.ajax({
                type: "POST",
                url: '/cart/addtocart',
                data: {id: parseInt(id)},
                dataType: 'json',
                success: function (data) {
                    if (data['success']) {
                        cartItems.html(data['countItems']);
                        btnAdd.addClass('d-none');
                        btnRemove.removeClass('d-none');
                    }
                }
            });
        });
        $('.btn-remove-from-cart').on('click', function (e) {
            e.preventDefault();
            let id = $(this).data('id');
            let btnAdd = $('#btnAdd_' + id);
            let btnRemove = $('#btnRemove_' + id);
            $.ajax({
                type: "POST",
                url: '/cart/removefromcart',
                data: {id: parseInt(id)},
                dataType: 'json',
                success: function (data) {
                    if (data['success']) {
                        if (data['countItems'] === 0) cartItems.html('');
                        else cartItems.html(data['countItems']);
                        btnRemove.addClass('d-none');
                        btnAdd.removeClass('d-none');
                    }
                }
            });
        });
        $('.product-count').on('change', function () {
            let id = $(this).attr('id');
            let sum = $('input[name=productCount_'+id+']').val() *
                $('#productPrice_'+id).data('productPrice');
            $('#productRealPrice_'+id).html(sum);
        });
    });
})(jQuery);
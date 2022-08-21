;(function ($) {
    $(function () {
        'use strict';
        $('#btnSaveOrder').on('click', function (e) {
            e.preventDefault();
            let data = {};
            $('#saveOrderForm').find('input').each(function () {
                data[this.name] = this.value;
            });
            $.ajax({
                type: "POST",
                url: '/cart/saveorder',
                data: data,
                dataType: 'json',
                success: function (data) {
                    if (data['success']) {
                        alert(data['message']);
                        location.href = '/user';
                    } else {
                        alert(data['message']);
                    }
                }
            });
        });
    });
})(jQuery);
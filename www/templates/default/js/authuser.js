;(function ($) {
    $(function () {
        'use strict';
        function getUserData(formId, actionUrl) {
            let data = {};
            $(formId).find('input').each(function () {
                data[this.name] = this.value;
            });
            $.ajax({
                type: "POST",
                url: actionUrl,
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
        }
        $('#btnUserRegister').on('click', function (e) {
            e.preventDefault();
            getUserData('#userRegisterForm', '/user/register');
        });
        $('#btnUserAuthorization').on('click', function (e) {
            e.preventDefault();
            getUserData('#userAuthorizationForm', '/user/login');
        });
        $('#btnUserChangeData').on('click', function (e) {
            e.preventDefault();
            getUserData('#userFormChangeData', '/user/update');
        });
    });
})(jQuery);
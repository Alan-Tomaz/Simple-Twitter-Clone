$(document).ready(() => {
    $('#btn_login').click(() => {

        var isEmptyField = false;

        if ($('#user-field').val() == "") {
            $('#user-field').css({
                'border-color': '#A94442'
            })
            isEmptyField = true;
        } else {
            $('#user-field').css({
                'border-color': '#CCC'
            })
        }
        if ($('#password-field').val() == "") {
            $('#password-field').css({
                'border-color': '#A94442'
            })
            isEmptyField = true;
        } else {
            $('#password-field').css({
                'border-color': '#CCC'
            })
        }

        if (isEmptyField)
            return false;
    });
});
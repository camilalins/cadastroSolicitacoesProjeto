// login.js
$(document).ready(function() {
    // Toggle para exibir/ocultar a senha
    $('#togglePassword').click(function() {
        var passwordField = $('#password');
        var passwordFieldType = passwordField.attr('type');
        if (passwordFieldType === 'password') {
            passwordField.attr('type', 'text');
            $(this).find('i').removeClass('far fa-eye').addClass('far fa-eye-slash');
        } else {
            passwordField.attr('type', 'password');
            $(this).find('i').removeClass('far fa-eye-slash').addClass('far fa-eye');
        }
    });
});

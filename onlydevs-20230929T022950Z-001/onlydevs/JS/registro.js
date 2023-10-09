const passwordInput = document.getElementById('contraseña');
    const togglePassword = document.getElementById('toggle-password');

    togglePassword.addEventListener('click', function () {
        if (passwordInput.type === 'password') {
            passwordInput.type = 'text';
            togglePassword.innerHTML = '<i class="fa fa-eye" aria-hidden="true"></i>';
        } else {
            passwordInput.type = 'password';
            togglePassword.innerHTML = '<i class="fa fa-eye-slash" aria-hidden="true"></i>';
        }
    });
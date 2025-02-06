document.addEventListener('DOMContentLoaded', function() {
    const loginForm = document.getElementById('loginForm');
    const registerForm = document.getElementById('registerForm');

    if (loginForm) {
        loginForm.addEventListener('submit', function(event) {
            const username = document.getElementById('username').value;
            const password = document.getElementById('password').value;

            if (!username || !password) {
                event.preventDefault();
                alert('Por favor, complete todos los campos.');
            }
        });
    }

    if (registerForm) {
        registerForm.addEventListener('submit', function(event) {
            const username = document.getElementById('regUsername').value;
            const password = document.getElementById('regPassword').value;
            const confirmPassword = document.getElementById('confirmPassword').value;

            if (!username || !password || !confirmPassword) {
                event.preventDefault();
                alert('Por favor, complete todos los campos.');
            } else if (password !== confirmPassword) {
                event.preventDefault();
                alert('Las contraseñas no coinciden.');
            }
        });
    }
});
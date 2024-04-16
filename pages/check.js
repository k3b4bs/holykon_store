document.getElementById('pass').addEventListener('input', validatePasswords);
document.getElementById('rpass').addEventListener('input', validatePasswords);

function validatePasswords() {
    var password = document.getElementById('pass').value;
    var passwordConfirmation = document.getElementById('rpass').value;
    var btn = document.getElementById('login_btn');
    
    if (password !== passwordConfirmation && passwordConfirmation !== '') {
        document.getElementById('pass').classList.add('error');
        document.getElementById('rpass').classList.add('error');
        btn.value = 'Пароли не совпадают';
    } else {
        document.getElementById('pass').classList.remove('error');
        document.getElementById('rpass').classList.remove('error');
        btn.value = 'Регистрация';
    }
}

document.getElementById('registrationForm').addEventListener('submit', function(event) {
    var inputs = document.querySelectorAll('input[type="text"], input[type="password"]');
    var isValid = true;

    inputs.forEach(function(input) {
        if (input.value.trim() === '') {
            input.classList.add('error');
            isValid = false;
        } else {
            input.classList.remove('error');
        }
    });

    if (!isValid) {
        event.preventDefault();
    }

    if (document.getElementById('pass').value !== document.getElementById('rpass').value) {
        event.preventDefault();
    }
});
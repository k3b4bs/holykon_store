document.getElementById('loginForm').addEventListener('submit', function(event) {
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
});
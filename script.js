// script.js
document.addEventListener('DOMContentLoaded', function() {
    const submitButton = document.getElementById('submit-button');
    const formInputs = document.querySelectorAll('#contact-form input, #contact-form textarea');

    formInputs.forEach(input => {
        input.addEventListener('input', function() {
            let allFilled = true;
            formInputs.forEach(input => {
                if (input.value === '') {
                    allFilled = false;
                }
            });
            submitButton.disabled = !allFilled;
        });
    });
});

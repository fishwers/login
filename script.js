document.querySelector('.submit-btn').addEventListener('click', () => {
    let password = document.getElementById('password').value;
    let conferma = document.getElementById('conferma-password').value;

    if (password != conferma) {
        document.getElementById('conferma-password').value = '';
        document.getElementById('password').value = '';

        alert("le password non corrispondono");
    };
});
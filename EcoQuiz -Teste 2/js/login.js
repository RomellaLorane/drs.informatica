function verificarEmail() {
    const email = document.getElementById('email').value;
    const regex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

    if (!regex.test(email)) {
        alert('Por favor, insira um e-mail válido.');
    } else {
        alert('E-mail válido!');
        window.location.href='intro.html';
    }
}
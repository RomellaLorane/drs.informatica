function verificarGeral() {
    const senha = document.getElementById('senha').value;
    const confirmarSenha = document.getElementById('c-senha').value;
    const email = document.getElementById('email').value;
    const regex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/; 

    if (senha !== confirmarSenha) {
        alert('Algum erro ocorreu. Por favor, tente novamente.');
        return false; 
    }
    if (!regex.test(email)) {
        alert('Por favor, insira um e-mail válido.');
    } else {
        alert('Cadastro realizado com sucesso.');
        window.location.href='intro.html';
        return true; 
        
    }
    }

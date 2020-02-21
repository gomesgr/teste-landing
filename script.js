
// Quando cliar em "PARTICIPE", mostrar o form novamente
document
    .querySelector('.participate')
    .addEventListener("click", function() {
        document
            .querySelector('main .form')
            .classList.toggle('hide')

        document
            .querySelector('.afterSend')
            .classList.toggle('hide')
    }); 

    // Todas as vezes que clicar no botao enviar, e estiver tudo ok, esconda o form
document.querySelector('.form button')
    .addEventListener("click", function() {
        if (document.querySelector('[name="nome"]').value == '' ||
        document.querySelector('[name="email"]').value == '' ||
        document.querySelector('[name="telefone"]').value == ''
        ) {
            document.querySelector('form span p').classList.remove('hide')
        } else {
        }
    });
document.addEventListener('DOMContentLoaded', function() {
    const cepInput = document.getElementById('cep');
    const cidadeInput = document.getElementById('cidade');

    if (!cepInput || !cidadeInput) {
        return;
    }

    cepInput.addEventListener('blur', async function () {
        const cepNumeros = this.value.replace(/\D/g, '');

        if (cepNumeros.length !==8) {
            console.warn('CEP inválido. Digite os 7 números');
            cidadeInput.value = '';
            return;
        }

        cidadeInput.value = 'Buscando...';

        try {
            const resposta = await fetch(`https://viacep.com.br/ws/${cepNumeros}/json/`)
            const dados = await resposta.json();

            if (dados.erro) {
                console.warn('CEP não encontrado!');
                cidadeInput.value = '';
                alert('CEP não encontrado! Verifique o número digitado!')
            } else {
                cidadeInput.value = dados.localidade;
            }
        } catch (erro) {
            console.error('Erro na consulta!', erro);
            cidadeInput.value = "";
            alert('Não é possível buscar o CEP! Verifique sua conexão!')
        }
    });
});
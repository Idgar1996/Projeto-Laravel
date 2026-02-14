document.addEventListener('DOMContentLoaded', function(){
    const documentoInput = document.getElementById('documento');
    const radios = document.querySelectorAll('input[name="tipo_documento"]');

    if (!documentoInput) return;

    function getTipoSelecionado() {
        const selecionado = document.querySelector('input[name="tipo_documento"]:checked')
        return selecionado ? selecionado.value : 'cpf';
    }

    function aplicarMascaraCpf(numeros) {
        numeros = numeros.substring(0, 11);

        if (numeros.length <= 3) {
            return numeros;
        } else if (numeros.length <= 6) {
            return numeros.substring(0, 3) + '.' + numeros.substring(3);
        } else if (numeros.length <= 9) {
            return numeros.substring(0, 3) + '.' +
                   numeros.substring(3, 6) + '.' +
                   numeros.substring(6);
        } else {
            return numeros.substring(0, 3) + '.' +
                   numeros.substring(3, 6) + '.' +
                   numeros.substring(6, 9) + '-' +
                   numeros.substring(9, 11);
        }
    }
    function aplicarMascaraCnpj(numeros) {
        numeros = numeros.substring(0, 14);

        if (numeros.length <= 2) {
            return numeros;
        } else if (numeros.length <= 5) {
            return numeros.substring(0, 2) + '.' +
                   numeros.substring(2);
        } else if (numeros.length <= 8) {
            return numeros.substring(0, 2) + '.' +
                   numeros.substring(2, 5) + '.' +
                   numeros.substring(5);
        } else if (numeros.length <=12 ) {
            return numeros.substring(0, 2) + '.' +
                   numeros.substring(2, 5) + '.' +
                   numeros.substring(5, 8) + '/' +
                   numeros.substring(8);
        } else {
            return numeros.substring(0, 2) + '.' +
                   numeros.substring(2, 5) + '.' +
                   numeros.substring(5, 8) + '/' +
                   numeros.substring(8, 12) + '-' +
                   numeros.substring(12, 14);
        }
    }

    documentoInput.addEventListener('input', function() {
        
        let valor = this.value;
        let numeros = valor.replace(/\D/g, '');

        if (numeros.length === 0) {
            this.value = '';
            reurn;
        }

        const tipo = getTipoSelecionado();
        let formatado = '';

        if (tipo === 'cpf') {
            formatado = aplicarMascaraCpf(numeros);
        } else {
            formatado = aplicarMascaraCnpj(numeros);
        }

        if (this.value !== formatado) {
            this.value = formatado;
        }
    });

    radios.forEach(radio => {
        radio.addEventListener('change', function() {
            documentoInput.value = '';
        });
    });
});
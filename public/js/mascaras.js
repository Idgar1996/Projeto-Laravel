// public/js/mascaras.js - VERSÃO MAIS FÁCIL
document.addEventListener('DOMContentLoaded', function() {
    const telefoneInput = document.getElementById('telefone');
    const documentoInput = document.getElementById('documento');
    const cepInput = document.getElementById('cep')
    
    if (telefoneInput) {
        telefoneInput.addEventListener('input', function() {
            // Remove tudo que não é número
            let valor = this.value;
            let numeros = valor.replace(/\D/g, '');
            
            // Se não tem números, limpa
            if (numeros.length === 0) {
                this.value = '';
                return;
            }
            
            // Limita a 11 dígitos
            if (numeros.length > 11) {
                numeros = numeros.substring(0, 11);
            }
            
            // Formata APENAS se o usuário digitou novos números
            // Não reformata se ele está apenas apagando
            let formatado = '';
            
            if (numeros.length <= 2) {
                formatado = '(' + numeros;
            } else if (numeros.length <= 7) {
                formatado = '(' + numeros.substring(0, 2) + ') ' + numeros.substring(2);
            } else {
                formatado = '(' + numeros.substring(0, 2) + ') ' + 
                           numeros.substring(2, 7) + '-' + 
                           numeros.substring(7, 11);
            }
            
            // Só atualiza se realmente mudou
            if (this.value !== formatado) {
                this.value = formatado;
            }
        });
        
        // Permite navegar com setas normalmente
        telefoneInput.addEventListener('keydown', function(evento) {
            const teclasPermitidas = ['ArrowLeft', 'ArrowRight', 'ArrowUp', 'ArrowDown', 'Home', 'End'];
            if (teclasPermitidas.includes(evento.key)) {
                return; // Permite navegação
            }
        });
    }
    if (documentoInput) {
        documentoInput.addEventListener('input', function() {
            // Remove tudo que não é número
            let valor = this.value;
            let numeros = valor.replace(/\D/g, '');
            
            // Se não tem números, limpa
            if (numeros.length === 0) {
                this.value = '';
                return;
            }
            
            // Limita a 11 dígitos
            if (numeros.length > 11) {
                numeros = numeros.substring(0, 11);
            }
            
            // Formata APENAS se o usuário digitou novos números
            // Não reformata se ele está apenas apagando
            let formatado = '';
            
            if (numeros.length <= 3) {
                formatado = numeros;
            } else if (numeros.length <= 6) {
                formatado = numeros.substring(0, 3) + '.' + numeros.substring(3);
            } else if (numeros.length <= 9) {
                formatado = numeros.substring(0, 3) + '.' +
                            numeros.substring(3, 6) + '.' +
                            numeros.substring(6);
            } else {
                formatado =numeros.substring(0, 3) + '.' + 
                           numeros.substring(3, 6) + '.' + 
                           numeros.substring(6, 9) + '-' +
                           numeros.substring(9, 11);
            }
            
            // Só atualiza se realmente mudou
            if (this.value !== formatado) {
                this.value = formatado;
            }
        });
        
        // Permite navegar com setas normalmente
        documentoInput.addEventListener('keydown', function(evento) {
            const teclasPermitidas = ['ArrowLeft', 'ArrowRight', 'ArrowUp', 'ArrowDown', 'Home', 'End'];
            if (teclasPermitidas.includes(evento.key)) {
                return; // Permite navegação
            }
        });
    }
    if (cepInput) {
        cepInput.addEventListener('input', function() {
            // Remove tudo que não é número
            let valor = this.value;
            let numeros = valor.replace(/\D/g, '');
            
            // Se não tem números, limpa
            if (numeros.length === 0) {
                this.value = '';
                return;
            }
            
            // Limita a 11 dígitos
            if (numeros.length > 8) {
                numeros = numeros.substring(0, 8);
            }
            
            // Formata APENAS se o usuário digitou novos números
            // Não reformata se ele está apenas apagando
            let formatado = '';
            
            if (numeros.length <= 5) {
                formatado = numeros;
            } else if (numeros.length <= 8) {
                formatado = numeros.substring(0, 5) + '-' + numeros.substring(5, 8);
            } else {
                formatado =numeros.substring(0, 5) + '- ' + 
                           numeros.substring(5, 8)
            }
            
            // Só atualiza se realmente mudou
            if (this.value !== formatado) {
                this.value = formatado;
            }
        });
        
        // Permite navegar com setas normalmente
        cepInput.addEventListener('keydown', function(evento) {
            const teclasPermitidas = ['ArrowLeft', 'ArrowRight', 'ArrowUp', 'ArrowDown', 'Home', 'End'];
            if (teclasPermitidas.includes(evento.key)) {
                return; // Permite navegação
            }
        });
    }
});

document.addEventListener('DOMContentLoaded', function(){
    const telefoneInput = document.getElementById('telefone')

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
})
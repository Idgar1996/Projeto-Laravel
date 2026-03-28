document.addEventListener("DOMContentLoaded", function() {
    const tipoObra = document.getElementById("tipo-obra");
    const remocao = document.getElementById("remocao");

    if (tipoObra && remocao) {
        const gerenciarEstadoRemocao = () => {
            if (tipoObra.value === "REFORMA") {
                remocao.disabled = false;
                remocao.style.opacity = "1";
                remocao.style.cursor = "pointer";
            } else {
                remocao.disabled = true;
                remocao.value = "Não";
                remocao.style.opacity = "0.5";
                remocao.style.cursor = "not-allowed";
            }
        };

        tipoObra.addEventListener("change", gerenciarEstadoRemocao);

        gerenciarEstadoRemocao();
    }
});
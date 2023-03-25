


window.addEventListener('load', function() {
    let dataHoraAtual = new Date();
    let dataHoraFormatada = dataHoraAtual.toLocaleString();
    document.getElementById("data-hora").innerHTML = dataHoraFormatada;
 });
 